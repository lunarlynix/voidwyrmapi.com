<?php

/* Copyright (C) VoidwyrmAPI - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Bloody ARK Team <support@voidwyrmapi.com>, June 2021
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('profile_name')->unique()->nullable();
            $table->string('discord_id')->unique()->nullable();
            $table->string('steam_id')->unique()->nullable();
            $table->string('google_id')->unique()->nullable();
            $table->string('birth_date')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('profile_banner')->nullable();
            $table->string('profile_bio')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_terminated')->default(false);
            $table->string('termination_reason')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
