<?php

namespace App\Filament\Resources\InquiryResource\Pages;

use App\Filament\Resources\InquiryResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;
use Filament\Notifications\Notification;

class ViewInquiry extends ViewRecord
{
    protected static string $resource = InquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('sendEmail')
                ->label('Send Email')
                ->icon('heroicon-o-envelope')
                ->color('success')
                ->url(fn ($record) => "mailto:{$record->email}?subject=RE: Your Inquiry&body=Dear {$record->first_name},")
                ->openUrlInNewTab(),

            Actions\Action::make('markProcessed')
                ->label('Mark as Processed')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->processed = true;
                    $this->record->save();

                    Notification::make()
                        ->title('Inquiry marked as processed')
                        ->success()
                        ->send();

                    $this->redirect($this->getResource()::getUrl('view', ['record' => $this->record]));
                })
                ->visible(fn () => !$this->record->processed),

            Actions\Action::make('reopen')
                ->label('Reopen Inquiry')
                ->icon('heroicon-o-arrow-path')
                ->color('danger')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->processed = false;
                    $this->record->save();

                    Notification::make()
                        ->title('Inquiry reopened')
                        ->warning()
                        ->send();

                    $this->redirect($this->getResource()::getUrl('view', ['record' => $this->record]));
                })
                ->visible(fn () => $this->record->processed),

            Actions\EditAction::make()
                ->color('warning'),
        ];
    }
}