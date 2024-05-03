@extends('layouts.base')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen ">
        <div class="hidden md:flex items-center justify-center">
            <img src="{{ asset('image/Mobile login-pana.svg') }}" alt="register-image" class="w-3/4">
        </div>
        <div class="flex items-center justify-center">


            <div class="form h-fit  bg-white border md:w-3/5 ">

                <ul class="tab-group">
                    <li class="tab active bg-yell "><a href="{{ route('sign-up') }}" id="signup-link">Sign Up</a></li>
                    <li class="tab"><a href="{{ route('log-in') }}" id="login-link">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div id="signup-form">
                        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="flex items-center border-2   mb-4">
                                <input type="file" name="image"
                                    class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black " />

                            </div>
                            <x-input-error :messages="$errors->get('image')" class="my-2" />
                            <div class="flex items-center border-2 py-2 px-3  mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="name"
                                    id="name" value="{{ old('name') }}" placeholder="Full name">
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="my-2" />
                            <div class="flex items-center border-2 py-2 px-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="username"
                                    value="{{ old('username') }}" id="username" placeholder="Username">
                            </div>
                            <x-input-error :messages="$errors->get('username')" class="my-2" />
                            <div class="flex items-center border-2 py-2 px-3  mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="text" name="email"
                                    value="{{ old('email') }}" id="email" placeholder="Email Address">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="my-2" />
                            <div class="flex items-center border-2 py-2 px-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="password" name="password"
                                    value="{{ old('password') }}" id="password" placeholder="">
                            </div>
                            <div class="flex items-center border-2 py-2 px-3 mt-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                                fill="currentColor"">
                                    <path
                                        d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z">
                                    </path>
                                </svg>
                                <input class="pl-2 outline-none border-none w-full" type="tel" id="phone_number" name="phone_number"
                                    value="{{ old('phone_number') }}" placeholder="0623456789">
                            </div>
                            <x-input-error :messages="$errors->get('number_phone')" class="my-2" />
                            <button type="submit" class="block w-full bg-950 mt-4 py-2 rounded-full  text-white font-semibold mb-2">Sign
                                Up</button>

                        </form>
                    </div>
                @endsection
