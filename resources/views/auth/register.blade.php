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
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-MMGY4CKS92"></script>
      <script>
        window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-MMGY4CKS92');
      </script>
        <style>
        [x-cloak] { display: none; }
        </style>
   </head>
<body>
    <section class="min-h-screen flex items-stretch text-white" x-data="app()">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://pbs.twimg.com/media/E0AsojmVgAIKg-_?format=jpg&amp;name=4096x4096);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10" x-show="step === 1">
                <h1 class="text-5xl font-bold text-left tracking-wide">Let's get started</h1>
                <p class="text-3xl my-4">Start by typing your email address and name.</p>
            </div>

            <div class="w-full px-24 z-10" x-show.transition.in="step === 2">
                <h1 class="text-5xl font-bold text-left tracking-wide">Secure your account</h1>
                <p class="text-3xl my-4">Create a strong password that you will remember.</p>
            </div>

            <div class="w-full px-24 z-10" x-show.transition.in="step === 3">
                <h1 class="text-5xl font-bold text-left tracking-wide">Customize your profile</h1>
                <p class="text-3xl my-4">Change your profile picture, banner and username.</p>
            </div>

            <div class="w-full px-24 z-10" x-show.transition.in="step > 3">
                <h1 class="text-5xl font-bold text-left tracking-wide">Thank you</h1>
                <p class="text-3xl my-4">Thanks for registering at Voidwyrm API, have fun!</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://pbs.twimg.com/media/E0AsojmVgAIKg-_?format=jpg&amp;name=4096x4096);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
            <div x-show="step === 1">
                <div class="my-6 flex justify-center">
                <img src="https://voidwyrmapi.com/assets/VoidwyrmIco.png" style="height:100px">
</div>
                <div class="py-6 space-x-2">
                    <a href="/oauth/discord"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-discord"></i></span></a>
                    <a href="/oauth/google"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-google"></i></span></a>
                    <a href="/oauth/steam"><span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white"><i class="fab fa-steam"></i></span></a>
                </div>
                <p class="text-gray-100">
                    or register using an email account
                </p>
</div>
                <x-auth-validation-errors class="my-2" :errors="$errors" />
                <form onkeydown="return event.key != 'Enter';" method="POST" action="{{ route('register') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf

                    <div class="md:hidden visible">
                        <div class="w-full px-12 z-10" x-show.transition.in="step === 2">
                            <h1 class="text-5xl font-bold tracking-wide">Secure your account</h1>
                            <p class="text-3xl my-4">Create a strong password that you will remember.</p>
                        </div>

                        <div class="w-full px-12 z-10" x-show.transition.in="step === 3">
                            <h1 class="text-5xl font-bold tracking-wide">Customize your profile</h1>
                            <p class="text-3xl my-4">Change your profile picture, banner and username.</p>
                        </div>
                    </div>

                    <div x-show.transition.in="step === 1">
                        <div class="pb-2 pt-4">
                            <input @keydown.enter="step++" type="text" autocomplete="off" name="name" id="name" placeholder="Name" class="block w-full p-4 text-lg rounded-sm bg-black">
                        </div>
                        <div class="pb-2 pt-4">
                            <input @keydown.enter="step++" type="email" autocomplete="off" name="email" id="email" placeholder="Email" class="block w-full p-4 text-lg rounded-sm bg-black">
                        </div>
                    </div>

                    <div x-show.transition.in="step === 2">
                        <div class="pb-2 pt-4">
                            <input @keydown.enter="step++" type="password" autocomplete="off" name="password" id="password" placeholder="Password" class="block w-full p-4 text-lg rounded-sm bg-black">
                        </div>
                        <div class="pb-2 pt-4">
                            <input @keydown.enter="step++" type="password" autocomplete="off" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="block w-full p-4 text-lg rounded-sm bg-black">
                        </div>
                    </div>

                    <div x-show.transition.in="step === 3">
                        <!-- Profile Banner -->
                        <button class="rounded-xl h-28 w-full shadow-lg" type="button" @click="$refs.profilebanner.click()">
                            <div class="rounded-xl h-28 w-full bg-gray-800" x-bind:style="'background-image: url(' + previewUrlBanner + ');background-size: cover;background-position: center;'" style="background-size: cover;background-position: center;"></div>
                        </button>
                        <input x-ref="profilebanner" type="file" name="profile_banner" id="profile_banner" class="hidden" @change="updatePreviewBanner()">
                        
                        <!-- Profile Picture -->
                        <div class="flex justify-center">
                            <div class="h-24 w-24 md rounded-full relative avatar min-w-max  -top-16 shadow-lg">
                                <button class="h-24 w-24 md rounded-full relative" type="button" @click="$refs.profilepicture.click()" style="background-color:#161616;">
                                    <div class="h-24 w-24 md rounded-full relative border-4 border-black" x-bind:style="'background-image: url(' + previewUrlAvatar + ');background-size: cover;background-position: center;border-color:#161616;'"></div>
                                </button>
                            </div>
                        </div>
                        <input x-ref="profilepicture" type="file" name="profile_picture" id="profile_picture" class="hidden" @change="updatePreviewPicture()">
                        

                        <div class="pb-2" style="margin-top:-25px;">
                            <input @keydown.enter="step++" type="text" autocomplete="off" name="profile_name" id="profile_name" placeholder="Display Name" class="block w-full p-4 text-lg rounded-sm bg-black">
                        </div>
                    </div>


                    <div x-show.transition.in="step > 3">
                        <button type="submit" class="uppercase block w-full p-4 text-lg rounded-md bg-gradient-to-r from-red-800 to-red-700  text-white focus:outline-none">Let's Go</button>
                    </div>

                    
                    <div>


                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100" x-show="step === 1">
                        <a href="/login">Already have an account?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4" x-show="step < 4">
                        <button @click="step++" type="button" class="uppercase block w-full p-4 text-lg rounded-md bg-gradient-to-r from-red-800 to-red-700  text-white focus:outline-none">Next</button>
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
    <script>
		function app() {

			return {
                previewUrlBanner: "",
                previewUrlAvatar: "https://voidwyrmapi.com/assets/default-prof.jpg",
				step: 1, 
                updatePreviewBanner() {
                    var reader,
                    files = document.getElementById("profile_banner").files;
                    reader = new FileReader();
                    reader.onload = e => {
                        this.previewUrlBanner = e.target.result;
                    };

                    reader.readAsDataURL(files[0]);
                    console.log(files[0]);
                },
                updatePreviewPicture() {
                    var reader,
                    files = document.getElementById("profile_picture").files;
                    reader = new FileReader();
                    reader.onload = e => {
                        this.previewUrlAvatar = e.target.result;
                    };

                    reader.readAsDataURL(files[0]);
                    console.log(files[0]);
                }
			}
		}
	</script>
</body>

