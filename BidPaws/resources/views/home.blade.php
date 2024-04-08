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
                                <input
                                    class="block w-full pl-12 pr-3 py-2 text-gray-700 rounded border focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="What do you seek?">
                            </div>
                            <div class="flex items-center mb-4">
                                <div class="relative flex-1 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i class="fas fa-dog text-gray-500"></i>
                                    </div>
                                    <input
                                        class="block w-full pl-12 pr-3 py-2 text-gray-700 rounded border focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="All categories">
                                    <svg class="w-2 h-5 text-gray-500 absolute right-0 top-0 mt-4 mr-2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 5">
                                        <path fill="#2A3946"
                                            d="M3.5 2.56768L5.87477 0.192917C6.13207 -0.0643854 6.54972 -0.0643854 6.80702 0.192917C7.06433 0.45022 7.06433 0.86787 6.80702 1.12517L3.9394 3.99279C3.6964 4.2358 3.30298 4.2358 3.0606 3.99279L0.192977 1.12517C-0.0643257 0.86787 -0.0643257 0.45022 0.192977 0.192917C0.45028 -0.0643854 0.86793 -0.0643854 1.12523 0.192917L3.5 2.56768Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center mb-4 ">
                                <div class="relative flex-1 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i class="fas fa-map-pin text-gray-500"></i>
                                    </div>
                                    <input
                                        class="block w-full pl-12    px-6 py-4 text-gray-700 rounded border focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="All of Morocco">
                                    <svg class="w-2 h-5 text-gray-500 absolute right-0 top-0 mt-4 mr-2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 5">
                                        <path fill="#2A3946"
                                            d="M3.5 2.56768L5.87477 0.192917C6.13207 -0.0643854 6.54972 -0.0643854 6.80702 0.192917C7.06433 0.45022 7.06433 0.86787 6.80702 1.12517L3.9394 3.99279C3.6964 4.2358 3.30298 4.2358 3.0606 3.99279L0.192977 1.12517C-0.0643257 0.86787 -0.0643257 0.45022 0.192977 0.192917C0.45028 -0.0643854 0.86793 -0.0643854 1.12523 0.192917L3.5 2.56768Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="w-full flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-indigo-900 border border-transparent rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span>Chercher</span>
                                    <svg class="w-8 h-8 ml-3 -mr-1 animate-spin" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 4.418 3.582 8 8 8v-4zm16-5.291a7.962 7.962 0 01-2 5.291V20c4.418 0 8-3.582 8-8h-4zM12 4.708V9.3a7.962 7.962 0 012-5.292H12z">
                                        </path>
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
                    <div class="grid grid-cols-3  gap-10 mt-20">
                        @foreach ($annonces as $annonce)
                            <div class="bg-white w-full shadow rounded-lg overflow-hidden">
                                <div class="swiper-container relative">
                                    <div class="swiper-wrapper">
                                        @foreach ($annonce->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}"
                                                    alt="Image">
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Add Navigation Buttons -->
                                    <button
                                        class="swiper-button-prev absolute top-1/2 left-0 transform -translate-y-1/2  text-gray-700 w-20 h-10 flex items-center justify-center rounded-full cursor-pointer">

                                    </button>
                                    <button
                                        class="swiper-button-next absolute top-1/2 right-0 transform -translate-y-1/2  text-gray-700 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer">

                                    </button>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="pt-4 pl-4">
                                    <h3 class=" font-bold text-lg">
                                            {{ $annonce->title }} </a>
                                    </h3>
                                    <h3 class=" font-bold text-lg pb-2  text-yell">
                                            {{ $annonce->price }} </a>
                                            {{-- border-b border-slate-300 text-950 --}}
                                    </h3> 
                                    <div class="flex flex-col gap-2">
                                        <span class="  bg-blue-100 px-2 w-1/6 text-950"> {{ $annonce->location }}</span>
                                        <div class="flex items-center" bis_skin_checked="1">
                                            <div class="flex-shrink-0 mr-1" bis_skin_checked="1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    class="w-3 h-3 fill-current text-gray-700" bis_skin_checked="1">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 0C2.6934 0 0 2.6934 0 6C0 9.3066 2.6934 12 6 12C9.3066 12 12 9.3066 12 6C12 2.6934 9.3066 0 6 0ZM6 1.2C8.65807 1.2 10.8 3.34193 10.8 6C10.8 8.65807 8.65807 10.8 6 10.8C3.34193 10.8 1.2 8.65807 1.2 6C1.2 3.34193 3.34193 1.2 6 1.2ZM5.4 2.4V6.24844L7.97578 8.82422L8.82422 7.97578L6.6 5.75156V2.4H5.4Z"
                                                        fill="#374B5C"></path>
                                                </svg>
                                            </div>
                                            <div class="text-gray-700 font-semibold" bis_skin_checked="1"> {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans() }}</div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="flex items-center justify-between mt-4 gap-20 items-center border-t border-slate-100 text-950 ">
                                        <div class="my-4 bg-slate-100 py-1 px-1 f rounded-2xl text-sm text-gray-700 flex items-center">
                                           
                                                <svg class="w-4 h-4  fill-current text-gray-700 m-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.12585C0 2.63358 1.97698 0.600098 4.4 0.600098C5.79057 0.600098 7.00127 1.36803 8 2.67253C8.99873 1.36803 10.2094 0.600098 11.6 0.600098C14.023 0.600098 16 2.63358 16 5.12585C16 6.81114 14.7649 8.39793 13.2594 10.0253C12.3953 10.9592 11.4168 11.9 10.4607 12.8192C9.75083 13.5017 9.05333 14.1723 8.42422 14.8194C8.1899 15.0603 7.8101 15.0603 7.57578 14.8194C6.94667 14.1723 6.24917 13.5017 5.5393 12.8192C4.5832 11.9 3.60467 10.9592 2.74062 10.0253C1.23506 8.39793 0 6.81114 0 5.12585ZM7.49292 4.01531C6.54647 2.47557 5.57138 1.8344 4.39995 1.8344C2.62537 1.8344 1.19995 3.30056 1.19995 5.12585C1.19995 6.11487 2.16489 7.61383 3.60933 9.17508C4.43297 10.0653 5.38179 10.9805 6.32832 11.8935C6.89549 12.4405 7.46184 12.9868 7.99995 13.5265C8.53806 12.9868 9.10441 12.4405 9.67159 11.8935C10.6181 10.9805 11.5669 10.0653 12.3906 9.17508C13.835 7.61383 14.8 6.11487 14.8 5.12585C14.8 3.30056 13.3745 1.8344 11.6 1.8344C10.4285 1.8344 9.45343 2.47557 8.50698 4.01531C8.39698 4.19407 8.20563 4.30243 7.99995 4.30243C7.79427 4.30243 7.60292 4.19407 7.49292 4.01531Z" fill="#283948"></path>
                                                </svg>
                                        </div>
                                        <div class="text-gray-700 mr-4" bis_skin_checked="1">4 Vues</div>
                                    </div>
                                   

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
