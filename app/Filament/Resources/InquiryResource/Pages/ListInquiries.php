<?php

namespace App\Filament\Resources\InquiryResource\Pages;

use App\Filament\Resources\InquiryResource;
use App\Filament\Widgets\InquiryStats;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use App\Models\Inquiry;

class ListInquiries extends ListRecords
{
    protected static string $resource = InquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Inquiry'),

            Actions\Action::make('exportAll')
                ->label('Export All')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(function () {
                    return response()->streamDownload(function () {
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

                        // Data rows - process in chunks to avoid memory issues
                        Inquiry::chunk(100, function ($inquiries) use ($csv) {
                            foreach ($inquiries as $inquiry) {
                                fputcsv($csv, [
                                    $inquiry->id,
                                    $inquiry->created_at->format('Y-m-d H:i:s'),
                                    $inquiry->first_name,
                                    $inquiry->last_name,
                                    $inquiry->email,
                                    $inquiry->phone,
                                    $inquiry->country,
                                    $inquiry->target_office,
                                    $inquiry->message,
                                    $inquiry->processed ? 'Processed' : 'Pending'
                                ]);
                            }
                        });

                        fclose($csv);
                    }, 'all-inquiries-export-' . now()->format('Y-m-d') . '.csv');
                }),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
          InquiryStats::class,
        ];
    }
}