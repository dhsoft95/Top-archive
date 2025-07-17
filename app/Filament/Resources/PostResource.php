<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Notifications\Collection;

use Filament\Forms\Components\{Group, Tabs, Section};
use Filament\Forms\Form;
use Filament\Infolists\Components\{Grid, ImageEntry, Section as InfolistSection, TextEntry};
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

use Filament\Infolists\Components\Section as InfoSection;
use Filament\Infolists\Components\Grid as InfoGrid;
use Filament\Infolists\Components\Group as InfoGroup;
use Filament\Infolists\Components\Split as InfoSplit;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?int $navigationSort = 1;
    protected static ?string $recordTitleAttribute = 'title';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Post')
                    ->tabs([
                        static::getContentTab(),
                        static::getMediaTab(),
                        static::getSeoTab(),
                    ])
                    ->columnSpan(['lg' => 2]),

                Group::make([
                    static::getPublishingSection(),
                    static::getSettingsSection(),
                ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    protected static function getContentTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('Content'))
            ->icon('heroicon-o-document-text')
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) =>
                            $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            )
                            ->maxLength(255)
                            ->placeholder(__('Enter post title')),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->placeholder(__('Enter URL slug'))
                            ->helperText(__('This will be automatically generated from title')),

                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'strike',
                                'link', 'blockquote', 'codeBlock', 'attachFiles',
                                'h2', 'h3', 'orderedList', 'unorderedList',
                                'redo', 'undo',
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('posts/attachments'),

                        Forms\Components\MarkdownEditor::make('excerpt')
                            ->maxLength(160)
                            ->helperText(__('Brief summary for SEO (max 160 characters)'))
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
            ]);
    }

    protected static function getMediaTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('Media'))
            ->icon('heroicon-o-photo')
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                            ->directory('posts/featured')
                            ->columnSpanFull()
                            ->helperText(__('Recommended size: 1200x630px (16:9)'))
                            ->imagePreviewHeight('250')
                            ->maxSize(5120),

                        Forms\Components\FileUpload::make('gallery')
                            ->multiple()
                            ->reorderable()
                            ->directory('posts/gallery')
                            ->image()
                            ->maxFiles(5)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    protected static function getSeoTab(): Tabs\Tab
    {
        return Tabs\Tab::make(__('SEO'))
            ->icon('heroicon-o-magnifying-glass')
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(60)
                            ->helperText(__('Optimal length: 50-60 characters')),

                        Forms\Components\Textarea::make('meta_description')
                            ->maxLength(160)
                            ->helperText(__('Optimal length: 150-160 characters')),

                        Forms\Components\TagsInput::make('meta_keywords')
                            ->helperText(__('Add keywords separated by comma')),
                    ])
                    ->columns(2),
            ]);
    }

    protected static function getPublishingSection(): Section
    {
        return Section::make(__('Publishing'))
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        'draft' => __('Draft'),
                        'reviewing' => __('Reviewing'),
                        'scheduled' => __('Scheduled'),
                        'published' => __('Published'),
                        'archived' => __('Archived'),
                    ])
                    ->default('draft')
                    ->required()
                    ->native(false)
                    ->live(),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label(__('Publish Date'))
                    ->default(now())
                    ->visible(fn (Forms\Get $get) => in_array($get('status'), ['scheduled', 'published']))
                    ->helperText(__('Schedule when this post should be published')),

                Forms\Components\Toggle::make('is_featured')
                    ->label(__('Featured Post')),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')->required(),
                        Forms\Components\TextInput::make('slug')->required(),
                    ])
                    ->searchable(),

                Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name')
                    ->required()
                    ->searchable()
                    ->default(auth()->id()),

                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')->required(),
                        Forms\Components\TextInput::make('slug')->required(),
                    ]),

                // Added Country Selection
                Forms\Components\Select::make('country')
                    ->label(__('Country'))
                    ->options(Post::getCountriesList())
                    ->placeholder(__('Select origin country (optional)'))
                    ->helperText(__('Select the country this post originally comes from'))
                    ->searchable()
                    ->native(false),
            ]);
    }

    protected static function getSettingsSection(): Section
    {
        return Section::make(__('Settings'))
            ->schema([
                Forms\Components\Toggle::make('comments_enabled')
                    ->label(__('Enable Comments')),

                Forms\Components\Toggle::make('pin_to_top')
                    ->label(__('Pin to Top')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->toggleable()
                    ->circular(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->weight(FontWeight::Bold)
                    ->description(fn (Post $record) => Str::limit($record->excerpt, 50)),

                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('author.name')
                    ->sortable()
                    ->searchable(),

                // Added Country Column
                Tables\Columns\TextColumn::make('country')
                    ->label(__('Country'))
                    ->formatStateUsing(fn ($state, Post $record) =>
                    $state ? ($record->country_flag . ' ' . $record->country_name) : ''
                    )
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'danger' => 'draft',
                        'warning' => 'reviewing',
                        'info' => 'scheduled',
                        'success' => 'published',
                        'gray' => 'archived',
                    ]),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('views_count')
                    ->counts('views')
                    ->sortable()
                    ->toggleable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                static::getStatusFilter(),
                static::getCategoryFilter(),
                static::getCountryFilter(), // Added Country Filter
                static::getPublishedDateFilter(),
                static::getFeaturedFilter(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title(__('Post deleted'))
                            ->body(__('The post has been deleted successfully.'))
                    ),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    static::getBulkStatusUpdateAction(),
                    static::getBulkCountryUpdateAction(), // Added Country Bulk Action
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    protected static function getStatusFilter(): Tables\Filters\SelectFilter
    {
        return Tables\Filters\SelectFilter::make('status')
            ->options([
                'draft' => __('Draft'),
                'reviewing' => __('Reviewing'),
                'scheduled' => __('Scheduled'),
                'published' => __('Published'),
                'archived' => __('Archived'),
            ]);
    }

    protected static function getCategoryFilter(): Tables\Filters\SelectFilter
    {
        return Tables\Filters\SelectFilter::make('category')
            ->relationship('category', 'name');
    }

    // Added Country Filter
    protected static function getCountryFilter(): Tables\Filters\SelectFilter
    {
        return Tables\Filters\SelectFilter::make('country')
            ->label(__('Country'))
            ->options(function () {
                $countries = Post::getCountriesList();
                $result = [];
                foreach ($countries as $code => $name) {
                    $result[$code] = $name;
                }
                return $result;
            })
            ->placeholder(__('All Countries'));
    }

    protected static function getPublishedDateFilter(): Tables\Filters\Filter
    {
        return Tables\Filters\Filter::make('published_at')
            ->form([
                Forms\Components\DatePicker::make('published_from'),
                Forms\Components\DatePicker::make('published_until'),
            ])
            ->query(function (Builder $query, array $data): Builder {
                return $query
                    ->when(
                        $data['published_from'],
                        fn (Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                    )
                    ->when(
                        $data['published_until'],
                        fn (Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                    );
            });
    }

    protected static function getFeaturedFilter(): Tables\Filters\Filter
    {
        return Tables\Filters\Filter::make('is_featured')
            ->toggle()
            ->label(__('Featured Posts'));
    }

    protected static function getBulkStatusUpdateAction(): Tables\Actions\BulkAction
    {
        return Tables\Actions\BulkAction::make('updateStatus')
            ->label(__('Update Status'))
            ->icon('heroicon-o-check-circle')
            ->requiresConfirmation()
            ->form([
                Forms\Components\Select::make('status')
                    ->options([
                        'draft' => __('Draft'),
                        'reviewing' => __('Reviewing'),
                        'published' => __('Published'),
                        'archived' => __('Archived'),
                    ])
                    ->required(),
            ])
            ->action(function (Collection $records, array $data): void {
                $records->each(fn ($record) => $record->update(['status' => $data['status']]));
            });
    }

    // Added Country Bulk Action
    protected static function getBulkCountryUpdateAction(): Tables\Actions\BulkAction
    {
        return Tables\Actions\BulkAction::make('updateCountry')
            ->label(__('Update Country'))
            ->icon('heroicon-o-globe-alt')
            ->requiresConfirmation()
            ->form([
                Forms\Components\Select::make('country')
                    ->label(__('Country'))
                    ->options(Post::getCountriesList())
                    ->placeholder(__('Select Country'))
                    ->required(),
            ])
            ->action(function (Collection $records, array $data): void {
                $records->each(fn ($record) => $record->update(['country' => $data['country']]));

                Notification::make()
                    ->success()
                    ->title(__('Country Updated'))
                    ->body(__('Country has been updated for selected posts.'))
                    ->send();
            });
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfoGrid::make(['default' => 1, 'lg' => 3])
                    ->schema([
                        InfoSection::make()
                            ->schema([
                                InfoSplit::make([
                                    InfoGrid::make(2)
                                        ->schema([
                                            InfoGroup::make([
                                                TextEntry::make('title')
                                                    ->weight(FontWeight::Bold)
                                                    ->size(TextEntry\TextEntrySize::Large)
                                                    ->columnSpanFull(),

                                                TextEntry::make('status')
                                                    ->badge()
                                                    ->color(fn (string $state): string => match ($state) {
                                                        'draft' => 'danger',
                                                        'reviewing' => 'warning',
                                                        'scheduled' => 'info',
                                                        'published' => 'success',
                                                        'archived' => 'gray',
                                                    }),

                                                TextEntry::make('published_at')
                                                    ->label('Published')
                                                    ->dateTime()
                                                    ->icon('heroicon-o-calendar'),

                                                // Added Country Info
                                                TextEntry::make('country')
                                                    ->label('Country')
                                                    ->formatStateUsing(fn ($state, $record) =>
                                                    $state ? ($record->country_flag . ' ' . $record->country_name) : 'Not specified'
                                                    )
                                                    ->icon('heroicon-o-globe-alt')
                                                    ->badge()
                                                    ->color('primary')
                                                    ->visible(fn ($record) => $record->country !== null),
                                            ])->columnSpan(1),

                                            InfoGroup::make([
                                                ImageEntry::make('featured_image')
                                                    ->height(120)
                                                    ->visible(fn ($record) => $record->featured_image !== null),
                                            ])->columnSpan(1),
                                        ]),
                                ])
                                    ->from('md'),

                                InfoGrid::make(2)
                                    ->schema([
                                        TextEntry::make('slug')
                                            ->label('URL')
                                            ->icon('heroicon-o-link')
                                            ->url(fn ($record) => url("/posts/{$record->slug}"))
                                            ->openUrlInNewTab()
                                            ->iconColor('primary')
                                            ->copyable()
                                            ->copyMessage('URL copied')
                                            ->copyMessageDuration(1500),

                                        TextEntry::make('category.name')
                                            ->label('Category')
                                            ->icon('heroicon-o-folder')
                                            ->badge(),

                                        TextEntry::make('author.name')
                                            ->label('Author')
                                            ->icon('heroicon-o-user')
                                            ->badge(),

                                        TextEntry::make('tags.name')
                                            ->label('Tags')
                                            ->icon('heroicon-o-tag')
                                            ->badge()
                                            ->separator(', '),
                                    ]),

                                InfoSection::make('Content')
                                    ->description('Post content with formatting preserved')
                                    ->schema([
                                        TextEntry::make('content')
                                            ->markdown()
                                            ->prose()
                                            ->extraAttributes([
                                                'class' => 'prose-sm prose-headings:font-bold prose-a:text-primary-600',
                                            ]),
                                    ])
                                    ->collapsible(),
                            ])
                            ->columnSpan(2),

                        InfoGrid::make()
                            ->schema([
                                // Added Country Statistics Section
                                InfoSection::make('Country Information')
                                    ->description('Origin and regional data')
                                    ->icon('heroicon-o-globe-alt')
                                    ->schema([
                                        TextEntry::make('country')
                                            ->label('Origin Country')
                                            ->formatStateUsing(fn ($state, $record) =>
                                            $state ? ($record->country_flag . ' ' . $record->country_name) : 'Not specified'
                                            )
                                            ->badge()
                                            ->color('primary'),

                                        TextEntry::make('country_posts_count')
                                            ->label('Posts from Same Country')
                                            ->state(function ($record) {
                                                if (!$record->country) return 'N/A';
                                                return Post::where('country', $record->country)
                                                        ->published()
                                                        ->count() . ' posts';
                                            })
                                            ->icon('heroicon-o-document-duplicate')
                                            ->color('info'),
                                    ])
                                    ->visible(fn ($record) => $record->country !== null)
                                    ->collapsible(),

                                InfoSection::make('Statistics')
                                    ->description('Engagement metrics')
                                    ->icon('heroicon-o-chart-bar')
                                    ->schema([
                                        InfoGrid::make(2)
                                            ->schema([
                                                TextEntry::make('views_count')
                                                    ->label('Total Views')
                                                    ->state(fn ($record) => number_format($record->views()->count()))
                                                    ->icon('heroicon-o-eye')
                                                    ->color('success'),

                                                TextEntry::make('unique_views')
                                                    ->label('Unique Views')
                                                    ->state(fn ($record) => number_format($record->views()
                                                        ->distinct('ip_address')
                                                        ->count('ip_address')))
                                                    ->icon('heroicon-o-user-group')
                                                    ->color('info'),

                                                TextEntry::make('engagement_rate')
                                                    ->label('Engagement')
                                                    ->state(fn ($record) =>
                                                        number_format(
                                                            ($record->views()->count() > 0)
                                                                ? ($record->comments()->count() / $record->views()->count()) * 100
                                                                : 0,
                                                            1
                                                        ) . '%'
                                                    )
                                                    ->icon('heroicon-o-heart')
                                                    ->color('warning'),

                                                TextEntry::make('read_time')
                                                    ->label('Read Time')
                                                    ->state(fn ($record) =>
                                                        number_format(ceil(str_word_count(strip_tags($record->content)) / 200)) . ' min'
                                                    )
                                                    ->icon('heroicon-o-clock')
                                                    ->color('gray'),
                                            ]),
                                    ]),

                                InfoSection::make('SEO Information')
                                    ->description('Search engine optimization details')
                                    ->icon('heroicon-o-magnifying-glass')
                                    ->schema([
                                        TextEntry::make('meta_title')
                                            ->label('Meta Title')
                                            ->default('N/A'),

                                        TextEntry::make('meta_description')
                                            ->label('Meta Description')
                                            ->default('N/A')
                                            ->limit(100)
                                            ->tooltip(fn ($state) => $state),

                                        TextEntry::make('meta_keywords')
                                            ->label('Keywords')
                                            ->badge(),
                                    ])
                                    ->collapsible(),

                                InfoSection::make('Settings')
                                    ->description('Post configuration')
                                    ->icon('heroicon-o-cog-6-tooth')
                                    ->schema([
                                        TextEntry::make('is_featured')
                                            ->label('Featured Post')
                                            ->icon('heroicon-o-star')
                                            ->badge()
                                            ->color(fn ($state) => $state ? 'success' : 'gray'),

                                        TextEntry::make('comments_enabled')
                                            ->label('Comments')
                                            ->icon('heroicon-o-chat-bubble-left')
                                            ->badge()
                                            ->color(fn ($state) => $state ? 'success' : 'danger'),

                                        TextEntry::make('pin_to_top')
                                            ->label('Pinned')
                                            ->icon('heroicon-o-bookmark')
                                            ->badge()
                                            ->color(fn ($state) => $state ? 'success' : 'gray'),
                                    ])
                                    ->collapsible(),

                                InfoSection::make('Timeline')
                                    ->description('Post history')
                                    ->icon('heroicon-o-clock')
                                    ->schema([
                                        TextEntry::make('created_at')
                                            ->label('Created')
                                            ->dateTime()
                                            ->icon('heroicon-o-plus-circle'),

                                        TextEntry::make('updated_at')
                                            ->label('Last Updated')
                                            ->since()
                                            ->color('warning')
                                            ->icon('heroicon-o-arrow-path'),

                                        TextEntry::make('deleted_at')
                                            ->label('Deleted')
                                            ->dateTime()
                                            ->color('danger')
                                            ->icon('heroicon-o-trash')
                                            ->visible(fn ($state) => $state !== null),
                                    ])
                                    ->collapsible(),
                            ])
                            ->columnSpan(1),
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePosts::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}