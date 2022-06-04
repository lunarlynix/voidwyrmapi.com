<x-app-layout>
      <section>
         <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased text-gray-800">
            <div class="fixed top-0 left-0 w-64 bg-gray-900 h-full shadow-lg pt-20" style="background-color: #000000;">
               @if(Auth::user()->profile_banner == null)
               <div class="h-28 w-full" style="background-color:#29313c;"></div>
               @else
               <div class="h-28 w-full bg-gray-700" style="background:url({{Auth::user()->profile_banner}});background-size: cover;background-position: center;"></div>
               @endif
               <div class="flex justify-center">
                  <div class="h-24 w-24 md rounded-full relative avatar min-w-max -top-16">
                     <div class="h-24 w-24 md rounded-full relative border-4 border-black" style="background:url({{Auth::user()->profile_picture}});background-size: cover;background-position: center;" alt=""></div>
                     <h2 class="text-2xl text-gray-100 text-center font-semibold">{{Auth::user()->name}}</h2>
                  </div>
               </div>
               <div class="overflow-y-auto overflow-x-hidden flex-grow" style="margin-top: -25px;">
                  <ul class="flex flex-col py-6 space-y-1">
                     <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                           <div class="flex font-semibold text-sm text-gray-300 my-4 font-sans uppercase">Dashboard</div>
                        </div>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                           <i class="fas fa-home"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                            <i class="fas fa-server"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">My Servers</span>
                           <span class="px-2 py-0.5 ml-auto text-xs font-semibold tracking-wide text-blue-100 bg-blue-600 rounded-full">New</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                            <i class="fas fa-paint-brush"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Game Customization</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                            <i class="fas fa-award"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Voidwyrm Partnership</span>
                        </a>
                     </li>
                     <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                           <div class="flex font-semibold text-sm text-gray-300 my-4 font-sans uppercase">Voidwyrm Workshop</div>
                        </div>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                           <i class="fas fa-cogs"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">My Cogs</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                           <span class="inline-flex justify-center items-center ml-4">
                           <i class="fas fa-download"></i>
                           </span>
                           <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Downloaded Cogs</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="pl-64">

               <div class="p-5">
                  <div class="relative p-4 sm:p-6 rounded-sm overflow-hidden mb-8 text-gray-400" style="background-color:#29313c;">
                     <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
                        <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <defs>
                              <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                              <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                              <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                              <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                 <stop stop-color="#A5B4FC" offset="0%"></stop>
                                 <stop stop-color="#818CF8" offset="100%"></stop>
                              </linearGradient>
                              <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                 <stop stop-color="#4338CA" offset="0%"></stop>
                                 <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                              </linearGradient>
                           </defs>
                           <g fill="none" fill-rule="evenodd">
                              <g transform="rotate(64 36.592 105.604)">
                                 <mask id="welcome-d" fill="#fff">
                                    <use xlink:href="#welcome-a"></use>
                                 </mask>
                                 <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                 <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                              </g>
                              <g transform="rotate(-51 91.324 -105.372)">
                                 <mask id="welcome-f" fill="#fff">
                                    <use xlink:href="#welcome-e"></use>
                                 </mask>
                                 <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                 <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                              </g>
                              <g transform="rotate(44 61.546 392.623)">
                                 <mask id="welcome-h" fill="#fff">
                                    <use xlink:href="#welcome-g"></use>
                                 </mask>
                                 <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                 <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                              </g>
                           </g>
                        </svg>
                     </div>
                     <div class="relative">
                        <h1 class="text-2xl md:text-3xl text-gray-100 font-bold mb-1">Good <span id="time">afternoon</span>, {{Auth::user()->name}}. 👋</h1>
                        <p>Welcome to your Voidwyrm API dashboard, here you can do pretty much anything you want!</p>
                     </div>
                     
                  </div>
               </div>

               <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
    
    <!-- Social Traffic -->
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-word dark:bg-gray-800 w-full shadow-lg rounded bg-gray-900">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-100 dark:text-gray-50">Your Dinos</h3>
          </div>
          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
          <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">View All</a>
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-4 bg-gray-800 dark:bg-gray-600 text-gray-300 dark:text-gray-100 align-middle border border-solid border-gray-700 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Dino Name</th>
                <th class="px-4 bg-gray-800 dark:bg-gray-600 text-gray-300 dark:text-gray-100 align-middle border border-solid border-gray-700 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Level</th>
                <th class="px-4 bg-gray-800 dark:bg-gray-600 text-gray-300 dark:text-gray-100 align-middle border border-solid border-gray-700 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Food</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-gray-100 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Rexy Rex</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Level 502</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">70%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                        <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-100 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Voidwyrm</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Level 2</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">10%</span>
                    <div class="relative w-full">
                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                        <div style="width: 10%" class="shadow-none flex flex-col text-center whitespace-nowrap text-gray-100 justify-center bg-red-600"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- ./Social Traffic -->

    <!-- Recent Activities -->
    <div class="relative flex flex-col min-w-0 break-words bg-gray-900 dark:bg-gray-800 w-full shadow-lg rounded">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-100 dark:text-gray-50">Recent Activities</h3>
          </div>
          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
          <a href="/register" class="w-full bg-gradient-to-r from-red-800 to-red-700  text-white rounded shadow-md px-4 py-1">View All</a>
          </div>
        </div>
        <div class="block w-full">
          <div class="px-4 bg-gray-800 dark:bg-gray-600 text-gray-100 dark:text-gray-100 align-middle border border-solid border-gray-700 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Today
          </div>
          <ul class="my-1">
            <li class="flex px-4">
              <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36"><path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path></svg>
              </div>
              <div class="flex-grow flex items-center  dark:border-gray-400 text-sm text-gray-400 dark:text-gray-100 py-2">
                <div class="flex-grow flex justify-between items-center">
                  <div class="self-center">
                    <a class="font-medium text-gray-100 hover:text-gray-300 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Voidwyrm</a> mentioned you on Bloody ARK - The Center.
                  </div>
                  <div class="flex-shrink-0 ml-2">
                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                      View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="flex px-4">
              <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
              </div>
              <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-400 dark:text-gray-50 py-2">
                <div class="flex-grow flex justify-between items-center">
                  <div class="self-center">
                    The player, <a class="font-medium text-gray-100 dark:text-gray-50 hover:text-gray-300" href="#0" style="outline: none;">CoolDodo</a> was removed from the tribe.
                  </div>
                  <div class="flex-shrink-0 ml-2">
                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                      View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="px-4 bg-gray-800 dark:bg-gray-600 text-gray-100 dark:text-gray-100 align-middle border border-solid border-gray-700 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Yesterday
          </div>
          <ul class="my-1">
          <li class="flex px-4">
              <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
              </div>
              <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-400 dark:text-gray-50 py-2">
                <div class="flex-grow flex justify-between items-center">
                  <div class="self-center">
                    The player, <a class="font-medium text-gray-100 dark:text-gray-50 hover:text-gray-300" href="#0" style="outline: none;">Browne</a> was removed from the tribe.
                  </div>
                  <div class="flex-shrink-0 ml-2">
                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                      View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ./Recent Activities -->
  </div>


            </div>
         </div>
      </section>
      <script>
          
        var today = new Date();
        var curHr = today.getHours();

        if (curHr < 12) {
            document.getElementById("time").innerHTML = "morning";
        } else if (curHr >= 12 && curHr < 16) {
            document.getElementById("time").innerHTML = "afternoon";
        } else {
            document.getElementById("time").innerHTML = "evening";
        }
      </script>
</x-app-layout>