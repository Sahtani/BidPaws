@extends('layouts.nav')

@section('content')
<div class="">


    <section class="container  mx-auto px-4 sm:px-6 lg:px-8  relative">
        <div class="  grid grid_cols-1 md:grid-cols-2 md:gap-20 ">
            <h1
                class="font-bold pt-20 pl-4 md:pl-8 text-4xl text-950  transform group-hover:translate-x-6 duration-300 uppercase leading-snug">
                YOUR BEST
                <br>FRIEND DESERVES<br> THE BEST
            </h1>
            <div class="w-full max-w-xs mt-20 mx-auto">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Find an announcement!
                        </label>
                        <div class="relative mb-4">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-search text-gray-500"></i>
                            </div>
                            <input class="block w-full pl-12 pr-3 py-2 text-gray-700 rounded border focus:outline-none focus:shadow-outline" type="text" placeholder="What do you seek?">
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="relative flex-1 ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-dog text-gray-500"></i>
                                </div>
                                <input class="block w-full pl-12 pr-3 py-2 text-gray-700 rounded border focus:outline-none focus:shadow-outline" type="text" placeholder="All categories">
                                <svg class="w-2 h-5 text-gray-500 absolute right-0 top-0 mt-4 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 5">
                                    <path fill="#2A3946" d="M3.5 2.56768L5.87477 0.192917C6.13207 -0.0643854 6.54972 -0.0643854 6.80702 0.192917C7.06433 0.45022 7.06433 0.86787 6.80702 1.12517L3.9394 3.99279C3.6964 4.2358 3.30298 4.2358 3.0606 3.99279L0.192977 1.12517C-0.0643257 0.86787 -0.0643257 0.45022 0.192977 0.192917C0.45028 -0.0643854 0.86793 -0.0643854 1.12523 0.192917L3.5 2.56768Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <div class="relative flex-1 ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-map-pin text-gray-500"></i>
                                </div>
                                <input class="block w-full pl-12    px-6 py-4 text-gray-700 rounded border focus:outline-none focus:shadow-outline" type="text" placeholder="All of Morocco">
                                <svg class="w-2 h-5 text-gray-500 absolute right-0 top-0 mt-4 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 5">
                                    <path fill="#2A3946" d="M3.5 2.56768L5.87477 0.192917C6.13207 -0.0643854 6.54972 -0.0643854 6.80702 0.192917C7.06433 0.45022 7.06433 0.86787 6.80702 1.12517L3.9394 3.99279C3.6964 4.2358 3.30298 4.2358 3.0606 3.99279L0.192977 1.12517C-0.0643257 0.86787 -0.0643257 0.45022 0.192977 0.192917C0.45028 -0.0643854 0.86793 -0.0643854 1.12523 0.192917L3.5 2.56768Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <button class="w-full flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-indigo-900 border border-transparent rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span>Chercher</span>
                                <svg class="w-8 h-8 ml-3 -mr-1 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 4.418 3.582 8 8 8v-4zm16-5.291a7.962 7.962 0 01-2 5.291V20c4.418 0 8-3.582 8-8h-4zM12 4.708V9.3a7.962 7.962 0 012-5.292H12z"></path>
                                </svg>
                            </button>
                        </div>
                      
                    </div>
                </form>
            </div>
            
        </div>
       
    </section>
</div>
@endsection
