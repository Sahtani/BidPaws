@extends('layouts.base')

@section('content')
<div class="">


    <section class="containe  mx-auto px-4 sm:px-6 lg:px-8  relative">
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
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
        <div class="min-h-28 ">
          <div class="max-w-screen-lg mx-auto py-4">
            <h2 class="font-bold text-center text-6xl text-950 hover:text-yell ">
              Our Blog Post
            </h2>
            <p class="text-center mt-4 font-medium text-slate-500">OUR NEWS FEED</p>
            <div class="flex gap-6 mt-20">
              @foreach ( $annonces as $annonce )
              <div class="bg-white w-1/3 shadow rounded-lg overflow-hidden">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach($annonces as $annonce)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset($annonce->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $annonce->title }}">
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                

                {{-- <img src="https://loremflickr.com/320/240?random=1" class="object-cover h-52 w-full" alt=""> --}}
                <div class="p-6">
                  <span class="block text-slate-400 font-semibold text-sm">{{ $annonce->created_at }}</span>
                  <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                    <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">
                        {{ $annonce->title }} </a></h3>
                  <div class="flex mt-4 gap-4 items-center">
                    <span class="flex gap-1 items-center text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      35
                    </span>
                    <span class="flex gap-1 items-center text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-400 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>
      
                      20
                    </span>
                    <span class="flex gap-1 items-center text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-lime-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                      </svg>
      
      
                      15
                    </span>
                  </div>
                </div>
              </div> 
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
