
@extends('layouts.base')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen ">
        <div class="flex items-center justify-center ">
            <img src="{{ asset('image/Mobile login-pana.svg') }}" alt="register-image" class="w-3/4">
        </div>
        <div class="flex items-center justify-center">


            <div class="form h-fit  bg-white border md:w-3/5 ">
                <ul class="tab-group">
                    <li class="tab active "><a href="{{ route('sign-up') }}" id="signup-link" >Sign Up</a></li>
                    <li class="tab"><a href="{{ route('log-in') }}" id="login-link">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div id="login-form">
                        <h1>Welcome Back!</h1>

                        <form action="{{ route('login') }}" method="post">
                            @csrf
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

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
       </div>

    <script>
        // $(document).ready(function() {
        //     $('#signup-link').click(function(e) {
        //         e.preventDefault();
        //         loadSignUpForm();
        //     });

        //     function loadSignUpForm() {
        //         $.get("{{ route('sign-up') }}", function(data) {
        //             $('body').html(data);
        //         });
        //     }
        // });
    </script>
@endsection
