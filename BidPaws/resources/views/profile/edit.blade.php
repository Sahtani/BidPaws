@extends('layouts.base')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
{{-- @dump('public/usersImages/'.$user->image) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl flex  flex-row gap-10">
                    <img src="{{ asset('storage/usersImages/' . $user->image) }}" width="110" class="rounded-full h-32 border-2 border-secondary" alt="User Image">
                
                <div class="profile-informations text-center md:text-left">
                    <h2 className="text-2xl">{{$user->name }}</h2>
                    <p>{{$user->username }}</p>
                    <span>{{$user->email }}</span>
                </div>
            </div>
            </div>
           
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection