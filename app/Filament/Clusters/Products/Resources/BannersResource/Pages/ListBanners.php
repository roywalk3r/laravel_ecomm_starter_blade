<?php

namespace App\Filament\Clusters\Products\Resources\BannersResource\Pages;

use App\Filament\Clusters\Products\Resources\BannersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBanners extends ListRecords
{
    protected static string $resource = BannersResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}