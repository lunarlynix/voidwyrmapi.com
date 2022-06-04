<x-app-layout>
    <section>
       <div class="flex flex-wrap overflow-hidden xl:-mx- p-5">
          <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-1/5">
             @if(!Auth::guest())
             <div class="card  bg-gray-800 text-gray-50   transition-shadow shadow-xl hover:shadow-xl rounded-md" style="background-color:#000;">
             <div>
                      @if(Auth::user()->profile_banner == null)
                      <div class="h-28 w-full rounded-md" style="background-color:#29313c;"></div>
                      @else
                      <div class="h-28 w-full rounded-md bg-gray-700" style="background:url({{Auth::user()->profile_banner}});background-size: cover;background-position: center;"></div>
                      @endif
                      <div class="flex justify-center">
                         <div class="h-24 w-24 md rounded-full relative avatar min-w-max -top-16">
                            <div class="h-24 w-24 md rounded-full relative border-4 border-black" style="background:url({{Auth::user()->profile_picture}});background-size: cover;background-position: center;" alt=""></div>
                            <h2 class="text-2xl text-gray-100 text-center font-semibold">{{Auth::user()->name}}</h2>
                         </div>
                      </div>
                   </div>
             </div>
             @endif

             <h3 class="text-gray-100 text-xl font-medium mt-5">Getting Started</h3>
             <div class="card  bg-gray-800 text-gray-50   transition-shadow shadow-xl hover:shadow-xl rounded-md mt-2 p-5" style="background-color:#000;">
             <ul>
                        <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                               <i class="fas fa-wrench text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">How to Install</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Write your first Cogs</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                               <i class="fas fa-shield-alt text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">How to be trusted</span>
                            </a>
                         </li>
                      </ul>
             <!--<ul>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Trusted Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">UI Modifications</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Discord Intergration</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Game Balancement</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Others</a></li>


                      </ul>-->
             </div>
             <h3 class="text-gray-100 text-xl font-medium mt-5">Voidwyrm Core</h3>
             <div class="card  bg-gray-800 text-gray-50   transition-shadow shadow-xl hover:shadow-xl rounded-md mt-2 p-5" style="background-color:#000;">
             <ul>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Main Class</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Core Events</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Custom Events</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Overrides</span>
                            </a>
                         </li>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Configs</span>
                            </a>
                         </li>
                      </ul>
             <!--<ul>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Trusted Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">UI Modifications</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Discord Intergration</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Game Balancement</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Others</a></li>


                      </ul>-->
             </div>
             <h3 class="text-gray-100 text-xl font-medium mt-5">Voidwyrm Intergration</h3>
             <div class="card  bg-gray-800 text-gray-50   transition-shadow shadow-xl hover:shadow-xl rounded-md mt-2 p-5" style="background-color:#000;">
             <ul>
                         <li class="">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                               <span class="ml-3 text-gray-400">Api Endpoints</span>
                            </a>
                         </li>
                         
                      </ul>
             <!--<ul>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Trusted Cogs</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">UI Modifications</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Discord Intergration</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Game Balancement</a></li>
                          <li class="my-3"><a href="#" class="mx-1 font-bold text-gray-00 hover:text-gray-300">Others</a></li>


                      </ul>-->
             </div>
          </div>
          <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-4/5">
             <div class="container mx-auto px-6 text-gray-100">
                {!! $doc_data !!}
          </div>
       </div>
    </section>
</x-app-layout>