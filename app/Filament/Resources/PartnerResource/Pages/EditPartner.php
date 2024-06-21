<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use App\Filament\Resources\PartnerResource;
use Filament\Pages\Actions;
use App\Models\partner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Model;
use Illuminate\Support\Facades\Factories\HasFactory;
use Filament\Resources\Pages\EditRecord;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(partner $record){
                    if($record->thumbnail)
                        Storage::disk('public')->delete($record->thumbnail);
                }
            ),
        ];
    }
}
