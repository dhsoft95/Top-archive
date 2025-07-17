<?php

namespace App\Filament\Resources\InquiryResource\Pages;

use App\Filament\Resources\InquiryResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;
use Filament\Notifications\Notification;

class EditInquiry extends EditRecord
{
    protected static string $resource = InquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->modalHeading('Delete Inquiry')
                ->modalDescription('Are you sure you want to delete this inquiry? This action cannot be undone.'),

            Actions\Action::make('viewRecord')
                ->label('View Details')
                ->url(fn () => $this->getResource()::getUrl('view', ['record' => $this->record]))
                ->color('info')
                ->icon('heroicon-o-eye'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->record]);
    }

    protected function afterSave(): void
    {
        Notification::make()
            ->title('Inquiry updated successfully')
            ->success()
            ->send();
    }
}