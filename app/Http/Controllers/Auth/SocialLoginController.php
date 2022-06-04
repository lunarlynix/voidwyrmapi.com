<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Socialite;
use Auth;

class SocialLoginController extends Controller
{
    public function redirectToGoogleProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToDiscordProvider()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function redirectToSteamProvider()
    {
        return Socialite::driver('steam')->redirect();
    }

    public function setupLinking() 
    {

    }

    public function callbackSteam() 
    {        
        try {
            $user = Socialite::driver('steam')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        $existingLinkedUser = User::where(['steam_id' => $user->id])->first();

        if($existingLinkedUser){
            auth()->login($existingLinkedUser, true);
        } else {
            /*if($existingUser) {
                    $existingUser->steam_id = $user->id;
                    $existingUser->save();
                    auth()->login($existingUser, true);
            } else {
                $voiduser = User::create([
                    'name' => $user->nickname,
                    'email' => $user->email,
                    'profile_name' => $user->nickname,
                    'discord_id' => null,
                    'steam_id' => $user->id,
                    'google_id' => null,
                    'birth_date' => null,
                    'profile_picture' => $user->avatar,
                    'profile_banner' => null,
                    'profile_bio' => null,
                    'password' => null,
                ]);
                auth()->login($voiduser, true);
            }*/
        }
        return redirect()->to('/dashboard');
    }

    public function callbackDiscord() 
    {        
        try {
            $user = Socialite::driver('discord')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        $existingLinkedUser = User::where(['discord_id' => $user->id])->first();

        if($existingLinkedUser){
            auth()->login($existingLinkedUser, true);
        } else {
            return "Voidwyrm API Error : Unknown Function CreateUser();";
        }
        return redirect()->to('/dashboard');
        /*$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'profile_name' => $request->profile_name,
            'discord_id' => null,
            'steam_id' => null,
            'google_id' => null,
            'birth_date' => null,
            'profile_picture' => $request->profile_picture,
            'profile_banner' => $request->profile_banner,
            'profile_bio' => null,
            'password' => Hash::make($request->password),
        ]);

        return $user->id;*/
    }
}