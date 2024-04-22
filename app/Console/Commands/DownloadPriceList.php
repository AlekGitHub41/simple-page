<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class DownloadPriceList extends Command
{
    protected $signature = 'price-list:download';
    protected $description = 'Download price list from stavtrack.ru';

    public function handle()
    {
        $now = Carbon::now();

        if (($now->dayOfWeek === Carbon::TUESDAY && $now->format('H:i') === '12:00') || ($now->dayOfWeek === Carbon::THURSDAY && $now->format('H:i') === '12:00')) {
            $url = 'https://www.stavtrack.ru/files/price.pdf';
            $contents = file_get_contents($url);

            $filePath = public_path('files/price-stavtrack.pdf');
            $directory = dirname($filePath);

            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            file_put_contents($filePath, $contents);

            $this->info('Price list downloaded successfully.');
        } else {
            $this->error("Price list downloaded only Tuesday and Thursday.");
        }
    }
}
