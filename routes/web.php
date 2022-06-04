<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs/v2.0', function () {
    $data = '<p><img src="https://voidwyrmapi.com/assets/VoidwyrmIco.png" class="h-20" alt="Voidwyrm"></p>
    <h1 id="voidwyrm-api" class="text-2xl mt-2">Voidwyrm API</h1>
    <div class="flex mt-3"><img class="pr-2" src="https://img.shields.io/badge/Core-v2.0-blue?style=for-the-badge" alt="Voidwyrm">
    <img class="px-2" src="https://img.shields.io/badge/Voidwyrm-v2.0-blue?style=for-the-badge" alt="Voidwyrm">
    <img class="px-2" src="https://img.shields.io/badge/Hooked%20Events-∞-cyan?style=for-the-badge" alt="Voidwyrm">
    <img class="px-2" src="https://img.shields.io/badge/Build-Pre%20Release-cyan?style=for-the-badge" alt="Voidwyrm"></div>
    <br>
    <p>Voidwyrm Core is a REST API handler for the mod Voidwyrm for ARK: Survival Evolved. It works simillar to ARK Server API but differs due to it not requiring executables to be run inside the Server iteself and can be hosted remotely. Voidwyrm Core Includes plugins and libraries which makes it easy to develop for, called Cogs! This project uses C# as a base but can be expanded to many more prorgamming languages due to its structure and complexity.</p>
    <h1 id="cogs"  class="text-2xl my-2">Cogs</h1>
    <p>Cogs are plugins used by Voidwyrm API to Bind to Certain events in game and cast them to a new function within your Cog! Cogs are still experimental and should not be used on production servers! </p>
    <p>Example : </p>
    <pre class="bg-gray-800 rounded-md p-3"><code>cogs/
        <span class="hljs-variable">$CogName1</span>/
            <span class="hljs-variable">$CogName1</span><span class="hljs-selector-class">.dll</span>
            (additional files)
        <span class="hljs-variable">$CogName2</span>/
            <span class="hljs-variable">$CognName2</span>.dll
    </code></pre><h1 id="cogmodding" class="text-2xl my-2">CogModding</h1>
    <p>Not available right now.</p>
    <h1 id="suchspeed" class="text-2xl my-2">SuchSpeed</h1>
    <p>Not available right now.</p>
    <h1 id="limitations" class="text-2xl my-2">Limitations</h1>
    <p>Voidwyrm Core is using HTTP2 Request Handlers which are Asynced which makes them faster than a normal request but this is not meant to be a replacement for ARK Server API but rather a alternative to which is safer, faster, more dynamic and customizable and easy to understand with our wiki page, forums and documentation!</p>
    <h1 id="about" class="text-2xl my-2">About</h1>
    <p>This project was created in collaboration with <strong>Bloody ARK</strong>, big thanks to Sly and the rest of the team!
    <img src="https://preview.redd.it/k1lgntbte8b31.png?width=400&amp;format=png&amp;auto=webp&amp;s=c35c9e644d5be30ba2747dc40b4b540727f95868" alt="BloodyARK"></p>
    ';
    return view('docs.index')->with(['doc_data' => $data]);
});

Route::get('/workshop', function () {
    return view('workshop.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/oauth/google', [SocialLoginController::class, 'redirectToGoogleProvider']);
Route::get('/oauth/discord', [SocialLoginController::class, 'redirectToDiscordProvider']);
Route::get('/auth/discord', [SocialLoginController::class, 'callbackDiscord']);
Route::get('/oauth/steam', [SocialLoginController::class, 'redirectToSteamProvider']);
Route::get('/auth/steam', [SocialLoginController::class, 'callbackSteam']);

require __DIR__.'/auth.php';
