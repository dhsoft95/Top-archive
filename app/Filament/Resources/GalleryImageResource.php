<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryImageResource\Pages;
use App\Models\GalleryImage;
use App\Models\ImgCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\Enums\FontWeight;
use Illuminate\Support\Str;

class GalleryImageResource extends Resource
{
    protected static ?string $model = GalleryImage::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationLabel = 'Gallery';
    protected static ?string $activeNavigationIconColor = 'primary';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Gallery Image')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Content')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpan(2),

                                        Forms\Components\FileUpload::make('image_path')
                                            ->image()
                                            ->required()
                                            ->directory('gallery-images')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->columnSpan(2),

                                        Forms\Components\Textarea::make('description')
                                            ->rows(3)
                                            ->maxLength(500)
                                            ->columnSpan(2),
                                    ])
                                    ->columns(2),
                            ]),

                        Forms\Components\Tabs\Tab::make('Categories')
                            ->icon('heroicon-o-tag')
                            ->schema([
                                Forms\Components\Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn ($state, Forms\Set $set) =>
                                            $set('slug', Str::slug($state))),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->unique(ImgCategory::class, 'slug', ignoreRecord: true),

                                        Forms\Components\Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true),
                                    ])
                                    ->createOptionAction(fn ($action) => $action
                                        ->icon('heroicon-m-plus')
                                        ->tooltip('Create New Category'))
                            ]),

                        Forms\Components\Tabs\Tab::make('Settings')
                            ->icon('heroicon-o-cog')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\Toggle::make('is_active')
                                            ->label('Visible in Gallery')
                                            ->default(true)
                                            ->required()
                                            ->onIcon('heroicon-s-eye')
                                            ->offIcon('heroicon-s-eye-slash')
                                            ->onColor('success')
                                            ->offColor('danger'),

                                        Forms\Components\TextInput::make('order')
                                            ->numeric()
                                            ->default(0)
                                            ->required()
                                            ->step(1)
                                            ->suffix('Position'),
                                    ])
                                    ->columns(2),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->square()
                    ->size(70),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium)
                    ->description(fn (GalleryImage $record): ?string =>
                    $record->description ? Str::limit($record->description, 40) : null),

                Tables\Columns\TextColumn::make('categories.name')
                    ->badge()
                    ->color('primary')
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Visible')
                    ->onIcon('heroicon-s-eye')
                    ->offIcon('heroicon-s-eye-slash')
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
            ])
            ->defaultSort('order')
            ->reorderable('order')
            ->filters([
                Tables\Filters\TrashedFilter::make(),

                Tables\Filters\SelectFilter::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->preload(),

                Tables\Filters\Filter::make('is_active')
                    ->label('Visibility')
                    ->form([
                        Forms\Components\Select::make('visibility')
                            ->options([
                                '1' => 'Visible only',
                                '0' => 'Hidden only',
                            ])
                            ->placeholder('All Images'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            isset($data['visibility']),
                            fn (Builder $query): Builder => $query->where('is_active', $data['visibility']),
                        );
                    }),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\Action::make('duplicate')
                        ->label('Duplicate')
                        ->icon('heroicon-o-document-duplicate')
                        ->color('info')
                        ->action(function (GalleryImage $record): void {
                            $duplicate = $record->replicate(['categories']);
                            $duplicate->title = $record->title . ' (Copy)';
                            $duplicate->order = GalleryImage::max('order') + 1;
                            $duplicate->save();

                            // Copy categories
                            $duplicate->categories()->attach($record->categories->pluck('id'));
                        }),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),

                    Tables\Actions\BulkAction::make('toggleVisibility')
                        ->label('Toggle Visibility')
                        ->icon('heroicon-o-eye')
                        ->color('warning')
                        ->action(function ($records): void {
                            foreach ($records as $record) {
                                $record->update(['is_active' => !$record->is_active]);
                            }
                        }),

                    Tables\Actions\BulkAction::make('assignCategories')
                        ->label('Assign Categories')
                        ->icon('heroicon-o-tag')
                        ->form([
                            Forms\Components\Select::make('categories')
                                ->label('Select Categories')
                                ->multiple()
                                ->relationship('categories', 'name')
                                ->preload()
                                ->required(),
                            Forms\Components\Toggle::make('sync')
                                ->label('Replace existing?')
                                ->default(false),
                        ])
                        ->action(function ($records, array $data): void {
                            foreach ($records as $record) {
                                if ($data['sync']) {
                                    $record->categories()->sync($data['categories']);
                                } else {
                                    $record->categories()->syncWithoutDetaching($data['categories']);
                                }
                            }
                        }),
                ]),
            ])
            ->emptyStateIcon('heroicon-o-photo')
            ->emptyStateHeading('No Images Yet')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Add Image')
                    ->url(route('filament.admin.resources.gallery-images.create'))
                    ->icon('heroicon-o-plus')
                    ->button(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleryImages::route('/'),
            'create' => Pages\CreateGalleryImage::route('/create'),
            'edit' => Pages\EditGalleryImage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}