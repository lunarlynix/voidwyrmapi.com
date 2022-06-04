<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_configs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('User')->unique();
            $table->boolean('VoidwyrmChatHUD')->default(true);
            $table->boolean('VoidwyrmNotificationHUD')->default(true);
            $table->boolean('VoidwyrmShopHUD')->default(true);
            $table->boolean('VoidwyrmToolbarHUD')->default(true);
            $table->boolean('HasDonatedPet')->default(false);
            $table->string('PetName')->nullable();
            $table->string('PetDataEnum')->nullable();
            $table->string('VoidChatCustomization_Position')->default("BottomLeft");
            $table->string('VoidChatCustomization_TextRGBColor')->default("255,255,255");
            $table->string('VoidChatCustomization_TextScale')->default("1.0");
            $table->string('VoidNotificationCustomization_Position')->default("TopLeft");
            $table->string('VoidNotificationCustomization_TextRGBColor')->default("255,255,255");
            $table->string('VoidNotificationCustomization_TextScale')->default("1.0");
            $table->boolean('VoidNotificationCustomization_DisableSound')->default(false);
            $table->boolean('VoidShopCustomization_DisableSound')->default(false);
            $table->string('VoidToolbarCustomization_Position')->default("Top");
            $table->string('VoidToolbarCustomization_TextRGBColor')->default("255,255,255");
            $table->string('VoidToolbarCustomization_TextScale')->default("1.0");
            $table->boolean('VoidToolbarCustomization_EnableWorldTime')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableIRLTime')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableLevel')->default(true);
            $table->boolean('VoidToolbarCustomization_EnableTribeName')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableTPS')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableFPS')->default(true);
            $table->boolean('VoidToolbarCustomization_EnablePING')->default(true);
            $table->boolean('VoidToolbarCustomization_EnableTemperature')->default(true);
            $table->boolean('VoidToolbarCustomization_EnableTribeMemberCount')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableDirection')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableAlerts')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableWeather')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableTribeData')->default(false);
            $table->boolean('VoidToolbarCustomization_EnableAdminData')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_configs');
    }
}
