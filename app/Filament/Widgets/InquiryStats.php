<?php

namespace App\Filament\Widgets;

use App\Models\Inquiry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class InquiryStats extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $totalInquiries = Inquiry::count();
        $pendingInquiries = Inquiry::where('processed', false)->count();
        $processedInquiries = Inquiry::where('processed', true)->count();
        $todayInquiries = Inquiry::whereDate('created_at', Carbon::today())->count();

        // Get counts by office
        $tanzaniaOfficeCount = Inquiry::where('target_office', 'info.tz@top-archive.com')->count();
        $ghanaOfficeCount = Inquiry::where('target_office', 'info@top-archive.com')->count();
        $nigeriaOfficeCount = Inquiry::where('target_office', 'info.ng@top-archive.com')->count();

        return [
            Stat::make('Total Inquiries', $totalInquiries)
                ->description('All time inquiries')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('gray'),

            Stat::make('Pending Inquiries', $pendingInquiries)
                ->description('Need attention')
                ->descriptionIcon('heroicon-o-clock')
                ->color($pendingInquiries > 10 ? 'danger' : ($pendingInquiries > 5 ? 'warning' : 'info'))
                ->chart([
                    $pendingInquiries,
                    $processedInquiries,
                ]),

            Stat::make('Today\'s Inquiries', $todayInquiries)
                ->description('Received today')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('success'),

            Stat::make('Tanzania Office', $tanzaniaOfficeCount)
                ->description($tanzaniaOfficeCount ? number_format(($tanzaniaOfficeCount / $totalInquiries) * 100, 1) . '%' : '0%')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->color('success'),

            Stat::make('Ghana Office', $ghanaOfficeCount)
                ->description($ghanaOfficeCount ? number_format(($ghanaOfficeCount / $totalInquiries) * 100, 1) . '%' : '0%')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->color('warning'),

            Stat::make('Nigeria Office', $nigeriaOfficeCount)
                ->description($nigeriaOfficeCount ? number_format(($nigeriaOfficeCount / $totalInquiries) * 100, 1) . '%' : '0%')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->color('danger'),
        ];
    }
}