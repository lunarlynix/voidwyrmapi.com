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

               <h3 class="text-gray-100 text-xl font-medium mt-5">Workshop Categories</h3>
               <div class="card  bg-gray-800 text-gray-50   transition-shadow shadow-xl hover:shadow-xl rounded-md mt-2 p-5" style="background-color:#000;">
               <ul>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <i class="fas fa-cog text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Cogs</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                 <i class="fas fa-shield-alt text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Trusted Cogs</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <i class="fas fa-paint-brush text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">UI Modifications</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                    <i class="fab fa-discord text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Discord Intergration</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-balance-scale text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Game Balancement</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                 <i class="fas fa-wrench text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Game Modifications</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                              <i class="fas fa-ellipsis-h text-gray-600 h-4 w-4 text-center"></i>
                                 <span class="ml-3 text-gray-400">Others</span>
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
               <div class="container mx-auto px-6">
                  <h3 class="text-gray-100 text-2xl font-medium text-center">Workshop Items</h3>
                  <h3 class="mt-3 text-sm text-gray-300 text-center">Explore community made cogs to extend the features of voidwyrm!</h3>
                  <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                     
                     <!-- Cog -->
                     <div class="bg-gray-800 rounded-md shadow-lg" style="background-color:#18181B;">
                        <div class="p-5">
                           <center>
                              <img class="rounded-lg" src="https://steamuserimages-a.akamaihd.net/ugc/1693877386908738603/52EC76132D8ED549861703D2F186A76FB8AC1908/?imw=268&imh=268&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" class="h-28 w-28">
                           </center>
                           <h1 class="text-gray-50 text-lg font-semibold mt-2 truncate">CoolCog is a very cool cog! seriously!</h1>
                           <p class="text-gray-400 text-sm"><i class="fas fa-download"></i> 0 Downloads</p>
                           <p class="text-gray-400 text-sm"><i class="fas fa-clock"></i> Updated 7 days ago</p>
                           <p class="text-gray-400 text-sm mb-5"><i class="fas fa-shield-alt text-green-400"></i> Trusted Cog</p>
                           <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">Download</a>
                        </div>
                     </div>

                     <!-- Cog -->
                     <div class="bg-gray-800 rounded-lg shadow-lg" style="background-color:#18181B;">
                        <div class="p-5">
                           <center>
                              <img class="rounded-lg" src="https://steamuserimages-a.akamaihd.net/ugc/1693877386908738603/52EC76132D8ED549861703D2F186A76FB8AC1908/?imw=268&imh=268&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" class="h-28 w-28">
                           </center>
                           <h1 class="text-gray-50 text-lg font-semibold mt-2  truncate">BloodyARK Testing</h1>
                           <p class="text-gray-400 text-sm"><i class="fas fa-download"></i> 0 Downloads</p>
                           <p class="text-gray-400 text-sm"><i class="fas fa-clock"></i> Updated 7 days ago</p>
                           <p class="text-gray-400 text-sm mb-5"><i class="fas fa-shield-alt text-green-400"></i> Trusted Cog</p>
                           <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">Download</a>
                        </div>
                     </div>

                      <!-- Cog -->
                      <div class="bg-gray-800 rounded-lg shadow-lg" style="background-color:#18181B;">
                        <div class="p-5">
                           <center>
                              <img class="rounded-lg" src="https://steamuserimages-a.akamaihd.net/ugc/1290794114982480344/A15AFE49B9A13967F5952016DEEEF6B44B6DBE40/?imw=268&imh=268&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" class="h-28 w-28">
                           </center>
                           <h1 class="text-gray-50 text-lg font-semibold mt-2  truncate">LootHunter Test</h1>
                           <p class="text-gray-400 text-sm"><i class="fas fa-download"></i> 0 Downloads</p>
                           <p class="text-gray-400 text-sm"><i class="fas fa-clock"></i> Updated 7 days ago</p>
                           <p class="text-gray-400 text-sm mb-5"><i class="fas fa-shield-alt text-green-400"></i> Trusted Cog</p>
                           <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">Download</a>
                        </div>
                     </div>

                      <!-- Cog -->
                      <div class="bg-gray-800 rounded-lg shadow-lg" style="background-color:#18181B;">
                        <div class="p-5">
                           <center>
                              <img class="rounded-lg" src="https://steamuserimages-a.akamaihd.net/ugc/1747940860546743623/9E2D4C238D8EE58E33AF0941D3EF51A40D140DD9/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" class="h-28 w-28">
                           </center>
                           <h1 class="text-gray-50 text-lg font-semibold mt-2  truncate">Voidwyrm Beta Cog</h1>
                           <p class="text-gray-400 text-sm"><i class="fas fa-download"></i> 0 Downloads</p>
                           <p class="text-gray-400 text-sm"><i class="fas fa-clock"></i> Updated 7 days ago</p>
                           <p class="text-gray-400 text-sm mb-5 opacity-0"><i class="fas fa-shield-alt text-green-400"></i> Trusted Cog</p>
                           <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">Download</a>
                        
                        </div>
                     </div>

                    
                     
                    
                  </div>
                  <!--<div class="flex">
                     <div class="flex rounded-md mt-8">
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                     </div>
                  </div>-->
               </div>
            </div>
         </div>
      </section>
</x-app-layout>