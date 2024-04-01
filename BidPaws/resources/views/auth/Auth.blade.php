@extends('layouts.nav')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen ">
        <div class="flex items-center justify-center ">
            <img src="{{ asset('image/Mobile login-pana.svg') }}" alt="register-image" class="w-3/4">
        </div>
        <div class="flex items-center justify-center">


            <div class="form h-fit  bg-white border md:w-3/5 ">

                <ul class="tab-group">
                    <li class="tab active "><a href="#signup" >Sign Up</a></li>
                    <li class="tab"><a href="#login" id="login-link">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div id="signup-form">
                        <form action="{{ route('auth.regsiter') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="flex items-center border-2   mb-4">
                                <input type="file" name="image"
                                    class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black " />

                            </div>

                            <div class="flex items-center border-2 py-2 px-3  mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="name"
                                    id="" placeholder="Full name">
                            </div>

                            <div class="flex items-center border-2 py-2 px-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="username"
                                    id="" placeholder="Username">
                            </div>
                            <div class="flex items-center border-2 py-2 px-3  mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="email"
                                    id="email" placeholder="Email Address">
                            </div>

                            <div class="flex items-center border-2 py-2 px-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="password" name="password"
                                    id="password" placeholder="Password">
                            </div>

                            <button type="submit" class="block w-full bg-950 mt-4 py-2  text-white font-semibold mb-2">Sign
                                Up</button>

                        </form>
                    </div>

                    <div id="login">
                        <h1>Welcome Back!</h1>

                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="flex items-center border-2 py-2 px-3  mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="email"
                                    id="" placeholder="Email Address">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <div class="flex items-center border-2 py-2 px-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="password" name="password"
                                    id="" placeholder="Password">
                                   
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <p class="forgot"><a href="#">Forgot Password?</a></p>
                            <div>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me</label>
                            </div>
                            <button type="submit"
                                class="block w-full bg-950 mt-4 py-2  text-white font-semibold mb-2">Log
                                In</button>
                            <div class=" grid space-y-4">
                                <button
                                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                    hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                    <div class="relative flex items-center space-x-4 justify-center">
                                        <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg"
                                            class="absolute left-0 w-5" alt="google logo">
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                            with Google</span>
                                    </div>
                                </button>
                                <button
                                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
       hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                    <div class="relative flex items-center space-x-4 justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="absolute left-0 w-5 text-gray-700" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                            with Github</span>
                                    </div>
                                </button>
                                <button
                                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                           hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                    <div class="relative flex items-center space-x-4 justify-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg"
                                            class="absolute left-0 w-5" alt="Facebook logo">
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                            with Facebook</span>
                                    </div>
                                </button>
                            </div>
                    </div>

                </div><!-- tab-content -->

            </div> <!-- /form -->
        </div>
    </div>
@endsection
