@extends('layouts.base')
@section('content')
<div class="favorites-container container px-4 md:px-8 mx-auto w-9/12">
    <div class="heading my-5">
        <h1 class="text-2xl font-bold text-950">Your Favorites</h1>
    </div>
    <div class="favorites-wrapper grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
         @foreach ($favorites as $favorite )
        <div class="animal-card w-full">
            <div class="animal-card-wrapper relative flex flex-col gap-2">
                <a href="#" class="animal-announcer absolute top-2 left-2 flex items-start justify-center gap-1 bg-black/50 backdrop-blur-md text-white p-1 rounded-full cursor-pointer">
                    <div class="user-image">
                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="white"/>
                            <path d="M20.5417 10.875C20.5417 9.2063 19.865 7.69589 18.7727 6.60355C17.6791 5.51001 16.1687 4.83334 14.5 4.83334C12.8313 4.83334 11.3209 5.51001 10.2273 6.60355C9.135 7.69589 8.45833 9.2063 8.45833 10.875C8.45833 12.5437 9.135 14.0541 10.2273 15.1465C11.3209 16.24 12.8313 16.9167 14.5 16.9167C16.1687 16.9167 17.6791 16.24 18.7727 15.1465C19.3344 14.5861 19.7798 13.9203 20.0834 13.1873C20.387 12.4542 20.5427 11.6684 20.5417 10.875ZM7.25 22.9583C7.25 24.1667 9.96875 25.375 14.5 25.375C18.7509 25.375 21.75 24.1667 21.75 22.9583C21.75 20.5417 18.9056 18.125 14.5 18.125C9.96875 18.125 7.25 20.5417 7.25 22.9583Z" fill="#777777"/>
                        </svg>                                    
                    </div>
                    <p class="text-xs font-medium pr-1 capitalize">{{ $favorite->user->name }}</p>
                </a>
                 @foreach ($favorite->annonce->images as $key => $image)
                 @if ($key == 0)
                     <a href="{{ route('show', $favorite->annonce->id) }}">
                         <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}"
                             alt="Image" class="h-64 rounded-md w-full">
                     </a>
                 @endif
             @endforeach
                <div class="animal-details flex items-start justify-between">
                    <div class="animal-name flex flex-col items-start gap-1">
                        <h2 class="text-lg font-semibold capitalize">{{ $favorite->annonce->title }}</h2>
                        <p class="animal-category text-sm font-medium text-gray-600 capitalize">{{ $favorite->annonce->category ? $favorite->annonce->category->name : 'original' }}</p>
                    </div>
                    <div class="animal-price flex flex-col items-end gap-1">
                        <button class="favorite-button cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22194 5.364C5.23353 4.35275 6.57301 3.73602 7.99905 3.62492C9.42509 3.51381 10.8439 3.91564 11.9999 4.758C13.2212 3.87442 14.7302 3.48272 16.227 3.66073C17.7238 3.83875 19.0988 4.57345 20.0788 5.71881C21.0587 6.86417 21.5718 8.33632 21.5161 9.84265C21.4603 11.349 20.8398 12.7792 19.7779 13.849L14.1209 19.506C13.5584 20.0684 12.7954 20.3844 11.9999 20.3844C11.2044 20.3844 10.4415 20.0684 9.87894 19.506L4.22194 13.85C3.09681 12.7248 2.46472 11.1987 2.46472 9.6075C2.46472 8.01627 3.09681 6.48921 4.22194 5.364Z" fill="#FF0000"/>
                            </svg>                                        
                        </button>
                        <div class="price">
                            <p class="text-sm font-medium">DH {{ $favorite->annonce->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection