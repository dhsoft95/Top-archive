<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Collection;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;


    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?int $navigationSort = 2;
    protected static ?string $recordTitleAttribute = 'name';
    protected static int $globalSearchResultsLimit = 20;

    public static function getNavigationBadge(): ?string
    {
        return (string) static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'success';
    }

        public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Information')
                    ->description('Manage the category basic information')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    })
                                    ->placeholder('Enter category name'),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->placeholder('URL-friendly slug')
                                    ->helperText('Auto-generated from name'),

                                Forms\Components\ColorPicker::make('color')
                                    ->hex()
                                    ->default('#94A3B8')
                                    ->helperText('Choose a display color'),

                                Forms\Components\Toggle::make('is_visible')
                                    ->label('Visibility')
                                    ->default(true)
                                    ->helperText('Control category visibility'),
                            ]),

                        Forms\Components\MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->maxLength(1000)
                            ->helperText('Brief description of the category')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                                'redo',
                                'undo',
                            ]),
                    ]),

                Section::make('Media')
                    ->description('Category media and visual elements')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->image()
                            ->directory('categories')
                            ->imageEditor()
                            ->columnSpanFull()
                            ->helperText('Recommended size: 600x400px'),
                    ])
                    ->collapsed(),

                Section::make('SEO')
                    ->description('Search engine optimization settings')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(60)
                            ->helperText('Optimal length: 50-60 characters'),

                        Forms\Components\Textarea::make('meta_description')
                            ->maxLength(160)
                            ->rows(2)
                            ->helperText('Optimal length: 150-160 characters'),

                        Forms\Components\TagsInput::make('meta_keywords')
                            ->helperText('Add keywords separated by comma'),
                    ])
                    ->collapsed(),
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ColorColumn::make('color')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->circular()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('name')
                    ->weight(FontWeight::Bold)
                    ->icon('heroicon-o-folder')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Model $record): string =>
                    Str::limit(strip_tags($record->description ?? ''), 50)
                    )
                    ->copyable()
                    ->copyMessage('Category name copied')
                    ->copyMessageDuration(1500),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->color('gray'),

                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean()
                    ->sortable()
                    ->toggleable()
                    ->label('Visible'),

                Tables\Columns\TextColumn::make('posts_count')
                    ->counts('posts')
                    ->sortable()
                    ->label('Posts')
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->since(),
            ])
            ->defaultSort('name', 'asc')
            ->filters([
//                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make('visibility')
                    ->options([
                        '1' => 'Visible',
                        '0' => 'Hidden',
                    ])
                    ->attribute('is_visible'),

                Tables\Filters\Filter::make('empty')
                    ->label('Empty Categories')
                    ->query(fn (Builder $query): Builder => $query->whereDoesntHave('posts')),

                Tables\Filters\Filter::make('popular')
                    ->label('Popular Categories')
                    ->query(fn (Builder $query): Builder => $query
                        ->withCount('posts')
                        ->having('posts_count', '>=', 10)
                    ),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->requiresConfirmation(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('updateVisibility')
                        ->label('Update Visibility')
                        ->icon('heroicon-o-eye')
                        ->requiresConfirmation()
                        ->form([
                            Forms\Components\Toggle::make('is_visible')
                                ->label('Visible')
                                ->default(true),
                        ])
                        ->action(function (Collection $records, array $data): void {
                            $records->each->update(['is_visible' => $data['is_visible']]);
                        }),
                ]),
            ])
            ->emptyStateIcon('heroicon-o-folder')
            ->emptyStateHeading('No categories yet')
            ->emptyStateDescription('Create your first category to organize your content.')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Create category')
                    ->icon('heroicon-o-plus'),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCategories::route('/'),
        ];
    }
}
