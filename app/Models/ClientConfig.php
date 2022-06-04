<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'User',
        'VoidwyrmChatHUD',
        'VoidwyrmNotificationHUD',
        'VoidwyrmShopHUD',
        'VoidwyrmToolbarHUD',
        'HasDonatedPet',
        'PetName',
        'PetDataEnum',
        'VoidChatCustomization_Position',
        'VoidChatCustomization_TextRGBColor',
        'VoidChatCustomization_TextScale',
        'VoidToolbarCustomization_EnableWorldTime',
        'VoidToolbarCustomization_EnableIRLTime',
        'VoidToolbarCustomization_EnableLevel',
        'VoidToolbarCustomization_EnableTribeName',
        'VoidToolbarCustomization_EnableTPS',
        'VoidToolbarCustomization_EnableFPS',
        'VoidToolbarCustomization_EnablePING',
        'VoidToolbarCustomization_EnableTemperature',
        'VoidToolbarCustomization_EnableTribeMemberCount',
        'VoidToolbarCustomization_EnableDirection',
        'VoidToolbarCustomization_EnableAlerts',
        'VoidToolbarCustomization_EnableWeather',
        'VoidToolbarCustomization_EnableTribeData',
        'VoidToolbarCustomization_EnableAdminData',
    ];
}
