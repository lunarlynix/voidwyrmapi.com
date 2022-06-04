<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Voidwyrm API</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Styles -->
      <link rel="stylesheet" href="/css/app.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-MMGY4CKS92"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-MMGY4CKS92');
      </script>

   </head>
<body>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://pbs.twimg.com/media/E0AsojmVgAIKg-_?format=jpg&amp;name=4096x4096);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Unleash your beast</h1>
                <p class="text-3xl my-4">Find new ways to add functionality to ARK with Voidwyrm API.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://pbs.twimg.com/media/E0AsojmVgAIKg-_?format=jpg&amp;name=4096x4096);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <div class="my-6 flex justify-center">
                <img src="https://voidwyrmapi.com/assets/VoidwyrmIco.png" style="height:100px">
</div>
                <div class="py-6 space-x-2">
                    <a href="/oauth/discord"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-discord"></i></span></a>
                    <a href="/oauth/google"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-google"></i></span></a>
                    <a href="/oauth/steam"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-steam"></i></span></a>
                </div>
                <p class="text-gray-100">
                    or use your email account
                </p>
                <x-auth-validation-errors class="my-2" :errors="$errors" />
                <form  method="POST" action="{{ route('login') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" autocomplete="off" name="email" id="email" placeholder="Email" class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input  autocomplete="off" class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="#">Forgot your password?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button class="uppercase block w-full p-4 text-lg rounded-md bg-gradient-to-r from-red-800 to-red-700  text-white focus:outline-none">sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <style>
      input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px black inset !important;
        -webkit-text-fill-color: #fff !important;
      }
    </style>
</body>

