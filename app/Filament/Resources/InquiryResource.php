<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Filament\Widgets\InquiryStats;
use App\Models\Inquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Support\Enums\FontWeight;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Client Communications';

    protected static ?string $recordTitleAttribute = 'full_name';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Customer Inquiries';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('processed', false)->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::where('processed', false)->count() > 5 ? 'danger' : 'warning';
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['first_name', 'last_name', 'email', 'phone', 'message', 'country'];
    }

    public static function getGlobalSearchResultTitle(Inquiry|\Illuminate\Database\Eloquent\Model $record): string
    {
        return $record->first_name . ' ' . $record->last_name;
    }

    public static function getGlobalSearchResultDetails(Inquiry|\Illuminate\Database\Eloquent\Model $record): array
    {
        return [
            'Email' => $record->email,
            'Country' => $record->country,
            'Office' => static::formatOfficeName($record->target_office),
        ];
    }

    private static function formatOfficeName(string $email): string
    {
        return match ($email) {
            'info.tz@top-archive.com' => 'Tanzania Office',
            'info@top-archive.com' => 'Ghana Office',
            'info.ng@top-archive.com' => 'Nigeria Office',
            default => $email,
        };
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Client Information')
                    ->description('Personal details of the inquiry sender')
                    ->icon('heroicon-o-user')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('first_name')
                                    ->required()
                                    ->maxLength(100)
                                    ->placeholder('First Name')
                                    ->columnSpan(1),

                                Forms\Components\TextInput::make('last_name')
                                    ->required()
                                    ->maxLength(100)
                                    ->placeholder('Last Name')
                                    ->columnSpan(1),
                            ])->columns(2),

                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Email Address')
                                    ->suffixIcon('heroicon-o-envelope')
                                    ->columnSpan(1),

                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->required()
                                    ->maxLength(20)
                                    ->placeholder('Phone Number')
                                    ->suffixIcon('heroicon-o-phone')
                                    ->columnSpan(1),
                            ])->columns(2),
                    ]),

                Forms\Components\Section::make('Inquiry Details')
                    ->description('Request information and routing')
                    ->icon('heroicon-o-document-text')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\Select::make('country')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->placeholder('Select Country')
                                    ->options([
                                        'Tanzania' => 'Tanzania',
                                        'Ghana' => 'Ghana',
                                        'Nigeria' => 'Nigeria',
                                        'Kenya' => 'Kenya',
                                        'Uganda' => 'Uganda',
                                        'Rwanda' => 'Rwanda',
                                        'Burundi' => 'Burundi',
                                        'Mozambique' => 'Mozambique',
                                        'Zambia' => 'Zambia',
                                        'Malawi' => 'Malawi',
                                        'DRC' => 'DRC',
                                        'Togo' => 'Togo',
                                        'Burkina Faso' => 'Burkina Faso',
                                        'Ivory Coast' => 'Ivory Coast',
                                        'Benin' => 'Benin',
                                        'Cameroon' => 'Cameroon',
                                        'Chad' => 'Chad',
                                        'Niger' => 'Niger',
                                        'South Africa' => 'South Africa',
                                        'Egypt' => 'Egypt',
                                        'Ethiopia' => 'Ethiopia',
                                        'Morocco' => 'Morocco',
                                        'Algeria' => 'Algeria',
                                        'Tunisia' => 'Tunisia',
                                        'Senegal' => 'Senegal',
                                        'Mali' => 'Mali',
                                        'Angola' => 'Angola',
                                        'Zimbabwe' => 'Zimbabwe',
                                        'Botswana' => 'Botswana',
                                        'Namibia' => 'Namibia',
                                        'Libya' => 'Libya',
                                        'Sudan' => 'Sudan',
                                        'South Sudan' => 'South Sudan',
                                        'Somalia' => 'Somalia',
                                        'Eritrea' => 'Eritrea',
                                        'Djibouti' => 'Djibouti',
                                        'Gabon' => 'Gabon',
                                        'Congo' => 'Congo',
                                        'Equatorial Guinea' => 'Equatorial Guinea',
                                        'Guinea' => 'Guinea',
                                        'Guinea-Bissau' => 'Guinea-Bissau',
                                        'Liberia' => 'Liberia',
                                        'Sierra Leone' => 'Sierra Leone',
                                        'Gambia' => 'Gambia',
                                        'Mauritania' => 'Mauritania',
                                        'Western Sahara' => 'Western Sahara',
                                        'Lesotho' => 'Lesotho',
                                        'Eswatini' => 'Eswatini',
                                        'Comoros' => 'Comoros',
                                        'Mauritius' => 'Mauritius',
                                        'Seychelles' => 'Seychelles',
                                        'Cape Verde' => 'Cape Verde',
                                        'São Tomé and Príncipe' => 'São Tomé and Príncipe',
                                        'Other' => 'Other'
                                    ])
                                    ->columnSpan(1),

                                Forms\Components\Select::make('target_office')
                                    ->required()
                                    ->label('Routed To')
                                    ->options([
                                        'info.tz@top-archive.com' => 'Tanzania Office',
                                        'info@top-archive.com' => 'Ghana Office',
                                        'info.ng@top-archive.com' => 'Nigeria Office',
                                    ])
                                    ->hint('Office handling this inquiry')
                                    ->columnSpan(1),
                            ])->columns(2),

                        Forms\Components\RichEditor::make('message')
                            ->required()
                            ->placeholder('Client message')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'codeBlock',
                            ])
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Processing Status')
                    ->description('Track inquiry handling status')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\Toggle::make('processed')
                                    ->label('Mark as Processed')
                                    ->helperText('Toggle when this inquiry has been handled')
                                    ->default(false)
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->inline(false)
                                    ->columnSpan(1),

                                Forms\Components\Placeholder::make('created_at')
                                    ->label('Submitted On')
                                    ->content(function (?Inquiry $record): string {
                                        return $record?->created_at?->diffForHumans() ?? 'N/A';
                                    })
                                    ->columnSpan(1),
                            ])->columns(2),

                        Forms\Components\Textarea::make('processing_notes')
                            ->placeholder('Add notes about handling this inquiry...')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->label('Submitted')
                    ->searchable()
                    ->description(fn (Inquiry $record): string => $record->created_at->diffForHumans())
                    ->color('gray'),

                Tables\Columns\ImageColumn::make('avatar')
                    ->label('')
                    ->state(function (Inquiry $record): string {
                        $name = $record->first_name . ' ' . $record->last_name;
                        return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=FFFFFF&background=6366F1';
                    })
                    ->circular()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Bold)
                    ->description(fn (Inquiry $record): string => $record->last_name),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->icon('heroicon-o-envelope')
                    ->color('primary')
                    ->description(fn (Inquiry $record): string => $record->phone),

                Tables\Columns\TextColumn::make('country')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->badge(),

                Tables\Columns\TextColumn::make('target_office')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'info.tz@top-archive.com' => 'Tanzania Office',
                        'info@top-archive.com' => 'Ghana Office',
                        'info.ng@top-archive.com' => 'Nigeria Office',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'info.tz@top-archive.com' => 'success',
                        'info@top-archive.com' => 'warning',
                        'info.ng@top-archive.com' => 'danger',
                        default => 'gray',
                    })
                    ->toggleable(),

                Tables\Columns\IconColumn::make('processed')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->trueColor('success')
                    ->falseColor('warning')
                    ->sortable()
                    ->toggleable()
                    ->label('Status'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('processed')
                    ->label('Processing Status')
                    ->placeholder('All inquiries')
                    ->trueLabel('Processed inquiries')
                    ->falseLabel('Pending inquiries')
                    ->queries(
                        true: fn (Builder $query) => $query->where('processed', true),
                        false: fn (Builder $query) => $query->where('processed', false)->orWhereNull('processed'),
                        blank: fn (Builder $query) => $query,
                    )
                    ->indicator('Processing Status'),

                Tables\Filters\SelectFilter::make('country')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->options([
                        'Tanzania' => 'Tanzania',
                        'Ghana' => 'Ghana',
                        'Nigeria' => 'Nigeria',
                        'Kenya' => 'Kenya',
                        'Uganda' => 'Uganda',
                        'Rwanda' => 'Rwanda',
                        'South Africa' => 'South Africa',
                        'Egypt' => 'Egypt',
                        // Add top countries here
                    ])
                    ->indicator('Country'),

                Tables\Filters\SelectFilter::make('target_office')
                    ->label('Office')
                    ->options([
                        'info.tz@top-archive.com' => 'Tanzania Office',
                        'info@top-archive.com' => 'Ghana Office',
                        'info.ng@top-archive.com' => 'Nigeria Office',
                    ])
                    ->indicator('Office'),

                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('From')
                            ->placeholder('Start date')
                            ->closeOnDateSelection(),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('To')
                            ->placeholder('End date')
                            ->closeOnDateSelection(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['created_from'] ?? null) {
                            $indicators['created_from'] = 'Created from ' . \Carbon\Carbon::parse($data['created_from'])->toFormattedDateString();
                        }

                        if ($data['created_until'] ?? null) {
                            $indicators['created_until'] = 'Created until ' . \Carbon\Carbon::parse($data['created_until'])->toFormattedDateString();
                        }

                        return $indicators;
                    }),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->label('View Details')
                        ->icon('heroicon-o-eye')
                        ->color('info'),

                    Tables\Actions\EditAction::make()
                        ->label('Edit Inquiry')
                        ->icon('heroicon-o-pencil')
                        ->color('warning'),

                    Tables\Actions\Action::make('markProcessed')
                        ->label('Mark as Processed')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->requiresConfirmation()
                        ->modalIcon('heroicon-o-check-badge')
                        ->modalDescription('Are you sure you want to mark this inquiry as processed?')
                        ->modalSubmitActionLabel('Yes, Mark as Processed')
                        ->action(function (Inquiry $record) {
                            $record->processed = true;
                            $record->save();
                        })
                        ->visible(fn (Inquiry $record) => !$record->processed),

                    Tables\Actions\Action::make('reopen')
                        ->label('Reopen Inquiry')
                        ->icon('heroicon-o-arrow-path')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(function (Inquiry $record) {
                            $record->processed = false;
                            $record->save();
                        })
                        ->visible(fn (Inquiry $record) => $record->processed),
                ])
                    ->icon('heroicon-o-ellipsis-vertical')
                    ->tooltip('Actions'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->modalHeading('Delete Selected Inquiries')
                        ->modalDescription('Are you sure you want to delete these inquiries? This action cannot be undone.'),

                    Tables\Actions\BulkAction::make('markAsProcessed')
                        ->label('Mark as Processed')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->requiresConfirmation()
                        ->modalHeading('Mark Inquiries as Processed')
                        ->modalDescription('Are you sure you want to mark these inquiries as processed?')
                        ->modalSubmitActionLabel('Yes, Mark All')
                        ->action(function (Collection $records) {
                            $records->each(function ($record) {
                                $record->processed = true;
                                $record->save();
                            });
                        }),

                    Tables\Actions\BulkAction::make('exportToCsv')
                        ->label('Export to CSV')
                        ->icon('heroicon-o-arrow-down-tray')
                        ->color('gray')
                        ->action(function (Collection $records) {
                            // Implement CSV export here
                            return response()->streamDownload(function () use ($records) {
                                $csv = fopen('php://output', 'w+');

                                // Header row
                                fputcsv($csv, [
                                    'ID',
                                    'Date',
                                    'First Name',
                                    'Last Name',
                                    'Email',
                                    'Phone',
                                    'Country',
                                    'Target Office',
                                    'Message',
                                    'Status'
                                ]);

                                // Data rows
                                foreach ($records as $record) {
                                    fputcsv($csv, [
                                        $record->id,
                                        $record->created_at->format('Y-m-d H:i:s'),
                                        $record->first_name,
                                        $record->last_name,
                                        $record->email,
                                        $record->phone,
                                        $record->country,
                                        $record->target_office,
                                        $record->message,
                                        $record->processed ? 'Processed' : 'Pending'
                                    ]);
                                }

                                fclose($csv);
                            }, 'inquiries-export-' . now()->format('Y-m-d') . '.csv');
                        }),
                ]),
            ])
            ->emptyStateIcon('heroicon-o-chat-bubble-left-right')
            ->emptyStateHeading('No inquiries yet')
            ->emptyStateDescription('When clients submit inquiries, they will appear here.')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Create Inquiry')
                    ->url(route('filament.admin.resources.inquiries.create'))
                    ->icon('heroicon-o-plus')
                    ->button(),
            ])
            ->striped()
            ->defaultSort('created_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Client Information')
                    ->icon('heroicon-o-user')
                    ->columns(2)
                    ->schema([
                        Infolists\Components\TextEntry::make('first_name')
                            ->label('First Name'),

                        Infolists\Components\TextEntry::make('last_name')
                            ->label('Last Name'),

                        Infolists\Components\TextEntry::make('email')
                            ->icon('heroicon-o-envelope')
                            ->iconColor('primary')
                            ->copyable()
                            ->url(fn (Inquiry $record): string => "mailto:{$record->email}"),

                        Infolists\Components\TextEntry::make('phone')
                            ->icon('heroicon-o-phone')
                            ->iconColor('primary')
                            ->copyable(),

                        Infolists\Components\TextEntry::make('country')
                            ->badge()
                            ->color('info'),

                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Submitted')
                            ->date('F j, Y \a\t g:i a')
                            ->icon('heroicon-o-calendar'),
                    ]),

                Infolists\Components\Section::make('Inquiry Details')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        Infolists\Components\TextEntry::make('target_office')
                            ->label('Routed To Office')
                            ->formatStateUsing(fn (string $state): string => match ($state) {
                                'info.tz@top-archive.com' => 'Tanzania Office',
                                'info@top-archive.com' => 'Ghana Office',
                                'info.ng@top-archive.com' => 'Nigeria Office',
                                default => $state,
                            })
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'info.tz@top-archive.com' => 'success',
                                'info@top-archive.com' => 'warning',
                                'info.ng@top-archive.com' => 'danger',
                                default => 'gray',
                            }),

                        Infolists\Components\TextEntry::make('message')
                            ->prose()
                            ->markdown()
                            ->columnSpanFull(),
                    ]),

                Infolists\Components\Section::make('Processing Status')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->schema([
                        Infolists\Components\IconEntry::make('processed')
                            ->label('Status')
                            ->boolean()
                            ->icon('heroicon-o-check-circle')
                            ->color('success')
                            ->state(fn (Inquiry $record): bool => (bool) $record->processed)
                            ->columnSpanFull(),

                        Infolists\Components\TextEntry::make('status_label')
                            ->label('')
                            ->state(fn (Inquiry $record): string => $record->processed ? 'Processed' : 'Pending')
                            ->badge()
                            ->color(fn (Inquiry $record): string => $record->processed ? 'success' : 'warning')
                            ->size('lg'),

                        Infolists\Components\TextEntry::make('processing_notes')
                            ->placeholder('No processing notes available')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
           InquiryStats::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInquiries::route('/'),
            'create' => Pages\CreateInquiry::route('/create'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
            'view' => Pages\ViewInquiry::route('/{record}'),
        ];
    }
}