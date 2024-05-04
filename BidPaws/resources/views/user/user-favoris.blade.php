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
                        <div
                                    class="flex items-center justify-between mt-4 gap-20 items-center border-t border-slate-200 text-950 p-0 ">
                                    @auth
                                        <form action="{{ route('user.addToFavorites', $favorite->annonce->id) }}" method="POST">
                                            @csrf
                                            <div
                                                class="my-4 bg-slate-100 py-1 px-1 f rounded-2xl text-sm text-gray-700 flex items-center">
                                                <button type="submit" class="favorite-btn"
                                                    data-annonce-id="{{ $favorite->annonce->id }}">
                                                    @if ($favorite->annonce->isFavorite())
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22194 5.364C5.23353 4.35275 6.57301 3.73602 7.99905 3.62492C9.42509 3.51381 10.8439 3.91564 11.9999 4.758C13.2212 3.87442 14.7302 3.48272 16.227 3.66073C17.7238 3.83875 19.0988 4.57345 20.0788 5.71881C21.0587 6.86417 21.5718 8.33632 21.5161 9.84265C21.4603 11.349 20.8398 12.7792 19.7779 13.849L14.1209 19.506C13.5584 20.0684 12.7954 20.3844 11.9999 20.3844C11.2044 20.3844 10.4415 20.0684 9.87894 19.506L4.22194 13.85C3.09681 12.7248 2.46472 11.1987 2.46472 9.6075C2.46472 8.01627 3.09681 6.48921 4.22194 5.364Z" fill="#FF0000"/>
                                                    </svg> 
                                                    @else
                                                        <svg class="w-4 h-4 fill-current hover:scale-125 m-1"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15"
                                                            fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M0 5.12585C0 2.63358 1.97698 0.600098 4.4 0.600098C5.79057 0.600098 7.00127 1.36803 8 2.67253C8.99873 1.36803 10.2094 0.600098 11.6 0.600098C14.023 0.600098 16 2.63358 16 5.12585C16 6.81114 14.7649 8.39793 13.2594 10.0253C12.3953 10.9592 11.4168 11.9 10.4607 12.8192C9.75083 13.5017 9.05333 14.1723 8.42422 14.8194C8.1899 15.0603 7.8101 15.0603 7.57578 14.8194C6.94667 14.1723 6.24917 13.5017 5.5393 12.8192C4.5832 11.9 3.60467 10.9592 2.74062 10.0253C1.23506 8.39793 0 6.81114 0 5.12585ZM7.49292 4.01531C6.54647 2.47557 5.57138 1.8344 4.39995 1.8344C2.62537 1.8344 1.19995 3.30056 1.19995 5.12585C1.19995 6.11487 2.16489 7.61383 3.60933 9.17508C4.43297 10.0653 5.38179 10.9805 6.32832 11.8935C6.89549 12.4405 7.46184 12.9868 7.99995 13.5265C8.53806 12.9868 9.10441 12.4405 9.67159 11.8935C10.6181 10.9805 11.5669 10.0653 12.3906 9.17508C13.835 7.61383 14.8 6.11487 14.8 5.12585C14.8 3.30056 13.3745 1.8344 11.6 1.8344C10.4285 1.8344 9.45343 2.47557 8.50698 4.01531C8.39698 4.19407 8.20563 4.30243 7.99995 4.30243C7.79427 4.30243 7.60292 4.19407 7.49292 4.01531Z"
                                                                fill="#1e1b4b"></path>
                                                        </svg>
                                                    @endif

                                                </button>
                                            </div>
                                        </form>
                                    @endauth
                                    @guest
                                        <a href="{{ route('log-in') }}"
                                            class="my-4 bg-slate-100 py-1 px-1 f rounded-2xl text-sm text-gray-700 flex items-center">
                                            <button type="submit" class="favorite-btn"
                                                data-annonce-id="{{ $favorite->annonce->id }}">
                                                <svg class="w-4 h-4 fill-current hover:scale-125 m-1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15"
                                                    fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 5.12585C0 2.63358 1.97698 0.600098 4.4 0.600098C5.79057 0.600098 7.00127 1.36803 8 2.67253C8.99873 1.36803 10.2094 0.600098 11.6 0.600098C14.023 0.600098 16 2.63358 16 5.12585C16 6.81114 14.7649 8.39793 13.2594 10.0253C12.3953 10.9592 11.4168 11.9 10.4607 12.8192C9.75083 13.5017 9.05333 14.1723 8.42422 14.8194C8.1899 15.0603 7.8101 15.0603 7.57578 14.8194C6.94667 14.1723 6.24917 13.5017 5.5393 12.8192C4.5832 11.9 3.60467 10.9592 2.74062 10.0253C1.23506 8.39793 0 6.81114 0 5.12585ZM7.49292 4.01531C6.54647 2.47557 5.57138 1.8344 4.39995 1.8344C2.62537 1.8344 1.19995 3.30056 1.19995 5.12585C1.19995 6.11487 2.16489 7.61383 3.60933 9.17508C4.43297 10.0653 5.38179 10.9805 6.32832 11.8935C6.89549 12.4405 7.46184 12.9868 7.99995 13.5265C8.53806 12.9868 9.10441 12.4405 9.67159 11.8935C10.6181 10.9805 11.5669 10.0653 12.3906 9.17508C13.835 7.61383 14.8 6.11487 14.8 5.12585C14.8 3.30056 13.3745 1.8344 11.6 1.8344C10.4285 1.8344 9.45343 2.47557 8.50698 4.01531C8.39698 4.19407 8.20563 4.30243 7.99995 4.30243C7.79427 4.30243 7.60292 4.19407 7.49292 4.01531Z"
                                                        fill="#1e1b4b"></path>
                                                </svg>
                                            </button>
                                        </a>
                                        </form>
                                    @endguest
                                </div>
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