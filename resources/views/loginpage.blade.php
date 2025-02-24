<x-layouts.base>
    <nav class="z-50 border-gray-200 px-2 sm:px-20 py-2.5 bg-white bg-opacity-5 absolute w-full">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="/img/logo-white.svg" alt="Logo" class="h-14">
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto absolute md:relative top-16 md:top-0 left-0" id="navbar-default">
             
              <ul class="flex flex-col p-4 mt-4  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent bg-[#06131ce6]">
                
                <li class="flex"><a href="{{ route('index')}}" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:p-0" aria-current="page">Home</a></li>
               
                @if(auth()->user())
                  <li class=" text-white ">
                    <a href="{{ route('login')}}" class=" flex text-sm rounded-full focus:outline-none items-center justify-center text-center" id="user-menu-button">
                      <div class="relative">
                        <div class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 items-center justify-center flex">
                         <div class="text-white ">
                              {{substr(auth()->user()->name, 0, 1)}}
                            </div>
                        </div>
                        <span title="online" class="flex justify-center absolute -bottom-0.5 right-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                      <span class="block ml-1 self-center text-white ">
                        {{auth()->user()->name}}
                      </span>
                    </a>
                  </li>
                @else
                  <li><a href="{{ route('startups')}}" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:p-0" aria-current="page">Login</a></li>
                @endif
              </ul>
            
            </div>
        </div>
      </nav>
  <section class="bg-white dark:bg-gray-900 min-h-screen items-center flex justify-center">
    <div class="container px-6 py-24 mx-auto lg:py-32">
    <div class="lg:flex items-center justify-center my-auto">
      <div class="lg:w-1/2 items-center justify-center">
          {{-- <img class="w-auto h-16 " src="/img/logo.svg" alt=""> --}}

          <h1 class="mt-4 text-gray-600 dark:text-gray-300 md:text-lg">Welcome back</h1>
          
          <h1 class="mt-4 text-2xl font-medium text-gray-800 capitalize lg:text-3xl dark:text-white">
              login to your account
          </h1>
      </div>

      <div class="mt-8 lg:w-1/2 lg:mt-0">
        <div class=" pb-6 items-center justify-center text-center lg:max-w-lg">
            <div class="relative flex py-5 items-center ">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-white text-xl uppercase font-semibold">Startups</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <a href="{{ route('login.startup')}}" class=" text-center bg-blue-900 text-white  px-8 py-3  font-semibold text-xl cursor-pointer">Login with KSUM Unique ID</a>
            
        </div>
        <div class=" pt-10">
            <h1 class=" text-white text-justify italic">If you don't have a KSUM unique ID, Kindly obtain it before proceeding with your application. You will receive your KSUM unique ID within a day. <span class=" text-blue-600 not-italic text-lg font-semibold"><a href="https://startups.startupmission.in/register" target="_blank">Get your UniqueId</a></span></h1>
        </div>
        </div>
      </div>

        
    </div>
  </section>
</x-layouts.base>