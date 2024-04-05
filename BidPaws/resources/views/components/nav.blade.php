<div>

    <nav class=" bg-white border-gray-200 text-950  rounded shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 shadow-b-2xl">
            <div>
                <a href="#">
                    <img src="{{ asset('image/DogCats.jpg') }}" class="h-200 w-1/3" alt="Flowbite Logo" /> </a>
            </div>
            <!-- search  -->
            <div class="flex md:order-1">
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">

                    <div class="md:flex items-center gap-20  ">
                        <div class="md:flex">
                            <div class="circle"></div>
                            <li>
                                <a href="#" type="button"
                                    class=" uppercase font-semibold hover:text-yell focus:outline-none  text-sm px-6 py-2.5 text-center">Home</a>

                            </li>
                            <li>
                                <a href="#" type="button"
                                    class="uppercase font-semibold  hover:text-yell focus:outline-none  text-sm px-6 py-2.5 text-center">About</a>

                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}" type="button"
                                    class="uppercase  font-semibold hover:text-yell  focus:outline-none  text-sm px-6 py-2.5 text-center">Contact
                                    us</a>

                            </li>
                            @auth
                                <li>
                                    {{--                                   
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path fill="#1e1b4b"
                                            d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z">
                                        </path>
                                    </svg> --}}
                                </li>
                                <div class="">
                                    <li class="block relative " x-data="{ showChildren: false }" @click.away="showChildren=false">
                                        <a href="#"
                                            class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1"
                                            @click.prevent="showChildren=!showChildren">
                                            <div class="block">
                                                <div class="inline relative">
                                                    <button type="button"
                                                        class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                                                        <div class="pl-1">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true" role="presentation" focusable="false"
                                                                style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;">
                                                                <g fill="none" fill-rule="nonzero">
                                                                    <path d="m2 16h28"></path>
                                                                    <path d="m2 24h28"></path>
                                                                    <path d="m2 8h28"></path>
                                                                </g>
                                                            </svg>
                                                        </div>

                                                        <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true" role="presentation" focusable="false"
                                                                style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                                                                <path
                                                                    d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=" bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                                            x-show="showChildren"
                                            x-transition:enter="transition ease duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-2"
                                            x-transition:enter-end="opacity-100 translate-y-0"
                                            x-transition:leave="transition ease duration-300 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0"
                                            x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                            <span
                                                class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                                            <div class="bg-white rounded w-full relative z-10 py-1">
                                                <ul class="list-reset text-950 font-semibold">
                                                    <li>
                                                        <a href="{{ route('user.create') }}"
                                                            class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                            <span class="flex-1">Add announcement </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('user.my-listings') }}"
                                                            class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                            <span class="flex-1">my listings</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('sign-up') }}"
                                                            class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                            <span class="flex-1">favourites</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('profile.edit') }}"
                                                            class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                            <span class="flex-1">profile</span> </a>
                                                    </li>



                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="flex items-center justify-end">
                                    <div class="ml-3">
                                        <a href="https://wooland.ma/panel/creer/"
                                            class="inline-flex items-center gap-2 px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-yell hover:bg-primary-2 focus:outline-none focus:border-primary-3 focus:shadow-outline-primary active:bg-primary-3 transition ease-in-out duration-150">
                                            <span>Logout</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3"
                                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="white"
                                                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            @endauth
                        </div>
                        @guest
                        <div class="">
                            <li class="block relative " x-data="{ showChildren: false }" @click.away="showChildren=false">
                                <a href="#"
                                    class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1"
                                    @click.prevent="showChildren=!showChildren">
                                    <div class="block">
                                        <div class="inline relative">
                                            <button type="button"
                                                class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                                                <div class="pl-1">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true" role="presentation" focusable="false"
                                                        style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;">
                                                        <g fill="none" fill-rule="nonzero">
                                                            <path d="m2 16h28"></path>
                                                            <path d="m2 24h28"></path>
                                                            <path d="m2 8h28"></path>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true" role="presentation" focusable="false"
                                                        style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                                                        <path
                                                            d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                                <div class=" bg-white shadow-md uppearcase rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                                    x-show="showChildren" x-transition:enter="transition ease duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease duration-300 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                    <span
                                        class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                                    <div class="bg-white rounded w-full relative z-10 py-1">
                                        <ul class="list-reset text-950 font-semibold">
                                            <li>
                                                <a href="{{ route('log-in') }}"
                                                    class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                    <span class="flex-1">Login</span> </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('sign-up') }}"
                                                    class="hover:text-yell px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                    <span class="flex-1">Register</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </div>  
                        @endguest
                       

                    </div>



                </ul>
            </div>
        </div>
    </nav>
</div>
