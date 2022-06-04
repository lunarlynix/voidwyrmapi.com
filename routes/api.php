<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\ClientConfig;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->get('/islinked', function (Request $request) {
    $steamid = $request->query('steamid');

    if(strpos(strval($steamid), "Dragon") === false) {
        
    } else {
        $steamid = "76561198340411691";
    }

    $user = User::where('steam_id', $steamid)->first();
    if($user) {
        return '{"Source":"VoidwyrmHub","DataProps":1}';
    } else {
        return '{"Source":"VoidwyrmHub","DataProps":0}';
    }
});

Route::middleware('api')->get('/network-status', function (Request $request) {
    $clientConfig = new stdClass();
    $clientConfig->Type = "Outage";
    $clientConfig->Reason = "A connection could not be established to the server.";
    $clientConfig->Servers = new stdClass();
    $clientConfig->Servers->WebHost = "Outage";
    $clientConfig->Servers->DB_CA = "Outage";
    $clientConfig->Servers->DB_US = "Outage";
    $clientConfig->Servers->DB_EU = "Outage";
    $clientConfig->Servers->CDN_CA = "Outage";
    $clientConfig->Servers->CDN_US = "Outage";
    $clientConfig->Servers->CDN_EU = "Outage";
    return json_encode($clientConfig);
});

Route::middleware('api')->get('/configs/clientconfig', function (Request $request) {
    $steamid = strval($request->query('steamid'));

    if(strpos(strval($steamid), "Dragon") === false) {

    } else {
        $steamid = "76561198340411691";
    }

    $user = User::where('steam_id', $steamid)->first();
    if($user) {
        
        $clientData = ClientConfig::where('User', $user->id)->first();
        

        $clientConfig = new stdClass();
        $clientConfig->Source = "VoidwyrmHub";
        $clientConfig->Type = "ClientConfig";
        $clientConfig->Permission = "ReadOnly";
        $clientConfig->DataProps = new stdClass();
        $clientConfig->DataProps->VoidwyrmChatHUD = true;
        $clientConfig->DataProps->VoidwyrmNotificationHUD = true;
        $clientConfig->DataProps->VoidwyrmShopHUD = true;
        $clientConfig->DataProps->VoidwyrmToolbarHUD = true;
        $clientConfig->DataProps->HasDonatedPet = $clientData->HasDonatedPet;
        $clientConfig->DataProps->PetName = $clientData->PetName;
        $clientConfig->DataProps->PetDataEnum = $clientData->PetNameEnum;

        $clientConfig->DataProps->VoidChatCustomization = new stdClass();
        $clientConfig->DataProps->VoidNotificationCustomization = new stdClass();
        $clientConfig->DataProps->VoidShopCustomization = new stdClass();
        $clientConfig->DataProps->VoidToolbarCustomization = new stdClass();

        $clientConfig->DataProps->VoidChatCustomization->Position =  $clientData->VoidChatCustomization_Position;
        $clientConfig->DataProps->VoidChatCustomization->TextRGBColor =  $clientData->VoidChatCustomization_TextRGBColor;
        $clientConfig->DataProps->VoidChatCustomization->TextScale =  $clientData->VoidChatCustomization_TextScale;

        $clientConfig->DataProps->VoidNotificationCustomization->Position = $clientData->VoidNotificationCustomization_Position;
        $clientConfig->DataProps->VoidNotificationCustomization->TextRGBColor = $clientData->VoidNotificationCustomization_TextRGBColor;
        $clientConfig->DataProps->VoidNotificationCustomization->TextScale = $clientData->VoidNotificationCustomization_TextScale;
        $clientConfig->DataProps->VoidNotificationCustomization->DisableSound = $clientData->VoidNotificationCustomization_DisableSound;

        $clientConfig->DataProps->VoidShopCustomization->DisableSound = $clientData->VoidShopCustomization_DisableSound;

        $clientConfig->DataProps->VoidToolbarCustomization->Position = $clientData->VoidToolbarCustomization_Position;
        $clientConfig->DataProps->VoidToolbarCustomization->TextRGBColor = $clientData->VoidToolbarCustomization_TextRGBColor;
        $clientConfig->DataProps->VoidToolbarCustomization->TextScale = $clientData->VoidToolbarCustomization_TextScale;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableWorldTime = $clientData->VoidToolbarCustomization_EnableWorldTime;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableIRLTime = $clientData->VoidToolbarCustomization_EnableIRLTime;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableLevel = $clientData->VoidToolbarCustomization_EnableLevel;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableTribeName = $clientData->VoidToolbarCustomization_EnableTribeName;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableTPS = $clientData->VoidToolbarCustomization_EnableTPS;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableFPS = $clientData->VoidToolbarCustomization_EnableTPS;
        $clientConfig->DataProps->VoidToolbarCustomization->EnablePING = $clientData->VoidToolbarCustomization_EnablePING;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableTemperature = $clientData->VoidToolbarCustomization_EnableTemperature;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableTribeMemberCount = $clientData->VoidToolbarCustomization_EnableTribeMemberCount;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableDirection = $clientData->VoidToolbarCustomization_EnableDirection;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableAlerts = $clientData->VoidToolbarCustomization_EnableAlerts;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableWeather = $clientData->VoidToolbarCustomization_EnableWeather;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableTribeData = $clientData->VoidToolbarCustomization_EnableTribeData;
        $clientConfig->DataProps->VoidToolbarCustomization->EnableAdminData = $clientData->VoidToolbarCustomization_EnableAdminData;
        return json_encode($clientConfig);
    }
});
