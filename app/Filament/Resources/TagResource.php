<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagResource\Pages;
use App\Filament\Resources\TagResource\RelationManagers;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Collection;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?int $navigationSort = 3;
    protected static ?string $recordTitleAttribute = 'name';
    protected static bool $shouldRegisterNavigation = true;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 10 ? 'warning' : 'success';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tag Details')
                    ->description('Manage tag information')
                    ->icon('heroicon-o-tag')
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
                                    ->placeholder('Enter tag name'),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->placeholder('URL-friendly slug')
                                    ->helperText('Auto-generated from name'),

                                Forms\Components\ColorPicker::make('color')
                                    ->hex()
                                    ->default('#94A3B8')
                                    ->helperText('Choose a color for the tag'),

                                Forms\Components\Toggle::make('is_visible')
                                    ->label('Visibility')
                                    ->default(true)
                                    ->helperText('Control tag visibility'),

                                Forms\Components\Textarea::make('description')
                                    ->rows(3)
                                    ->columnSpanFull()
                                    ->maxLength(500)
                                    ->helperText('Brief description of the tag (optional)'),
                            ]),
                    ]),

                Section::make('SEO Information')
                    ->description('Search engine optimization settings')
                    ->icon('heroicon-o-magnifying-glass')
                    ->collapsed()
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(60)
                            ->helperText('Optimal length: 50-60 characters'),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(2)
                            ->maxLength(160)
                            ->helperText('Optimal length: 150-160 characters'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ColorColumn::make('color')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('name')
                    ->weight(FontWeight::Bold)
                    ->icon('heroicon-o-tag')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Model $record): string => $record->description ?? '')
                    ->copyable()
                    ->copyMessage('Tag name copied')
                    ->copyMessageDuration(1500),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->color('gray'),

                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean()
                    ->label('Visible')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('posts_count')
                    ->counts('posts')
                    ->label('Posts')
                    ->sortable()
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

                SelectFilter::make('visibility')
                    ->options([
                        '1' => 'Visible',
                        '0' => 'Hidden',
                    ])
                    ->attribute('is_visible'),

                Tables\Filters\Filter::make('unused')
                    ->label('Unused Tags')
                    ->query(fn (Builder $query): Builder => $query->whereDoesntHave('posts')),

                Tables\Filters\Filter::make('popular')
                    ->label('Popular Tags')
                    ->query(fn (Builder $query): Builder => $query
                        ->withCount('posts')
                        ->having('posts_count', '>=', 5)
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
            ->emptyStateIcon('heroicon-o-tag')
            ->emptyStateHeading('No tags yet')
            ->emptyStateDescription('Create your first tag to organize your content.')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Create tag')
                    ->icon('heroicon-o-plus'),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTags::route('/'),
        ];
    }
}
