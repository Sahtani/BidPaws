<div id="announcementGrid" class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-6">
    @foreach ($annonces as $annonce)
        <div class=" w-full border border-white rounded-lg bg-white md:mr-2 sm:px-4 shadow-xl">
            <div class="p-2">
                @foreach ($annonce->images as $key => $image)
                    @if ($key == 0)
                        <a href = "{{ route('show', $annonce->id) }}" class="swiper-slide relative">
                            <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}"
                                alt="Image" class="rounded h-60 w-96">
                            <div class="flex items-center justify-center">
                                <div
                                    class="absolute top-30 left-26 bottom-4 rounded w-fit right-2 text-center bg-teal-600 text-white px-2">

                                    {{ $annonce->category->name }}
                                </div>
                            </div>

                        </a>
                    @break
                @endif
            @endforeach
            <div class="flex flex-col mt-2 ml-8">
                <h3 class="font-semibold text-950">{{ ucfirst($annonce->title) }}
                </h3>
                <h6></h6>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-1">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5" stroke="#1fffe5">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                    stroke="#1fffe5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                    stroke="#1fffe5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <span class="text-950"> {{ $annonce->location }}</span>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                viewBox="0 0 12 12" fill="none"
                                class="w-3 h-3 fill-current text-gray-700">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 0C2.6934 0 0 2.6934 0 6C0 9.3066 2.6934 12 6 12C9.3066 12 12 9.3066 12 6C12 2.6934 9.3066 0 6 0ZM6 1.2C8.65807 1.2 10.8 3.34193 10.8 6C10.8 8.65807 8.65807 10.8 6 10.8C3.34193 10.8 1.2 8.65807 1.2 6C1.2 3.34193 3.34193 1.2 6 1.2ZM5.4 2.4V6.24844L7.97578 8.82422L8.82422 7.97578L6.6 5.75156V2.4H5.4Z"
                                    fill="#374B5C"></path>
                            </svg>
                        </div>
                        <div class="text-gray-700 font-semibold">
                            {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-between mt-4 gap-20 items-center border-t border-slate-200 text-950 p-0 ">
                @auth
                    <form action="{{ route('user.addToFavorites', $annonce->id) }}" method="POST">
                        @csrf
                        <div
                            class="my-4 bg-slate-100 py-1 px-1 f rounded-2xl text-sm text-gray-700 flex items-center">
                            <button type="submit" class="favorite-btn"
                                data-annonce-id="{{ $annonce->id }}">
                                @if ($annonce->isFavorite())
                                    <svg class="w-4 h-4 fill-yell hover:scale-125 m-1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 5.12585C0 2.63358 1.97698 0.600098 4.4 0.600098C5.79057 0.600098 7.00127 1.36803 8 2.67253C8.99873 1.36803 10.2094 0.600098 11.6 0.600098C14.023 0.600098 16 2.63358 16 5.12585C16 6.81114 14.7649 8.39793 13.2594 10.0253C12.3953 10.9592 11.4168 11.9 10.4607 12.8192C9.75083 13.5017 9.05333 14.1723 8.42422 14.8194C8.1899 15.0603 7.8101 15.0603 7.57578 14.8194C6.94667 14.1723 6.24917 13.5017 5.5393 12.8192C4.5832 11.9 3.60467 10.9592 2.74062 10.0253C1.23506 8.39793 0 6.81114 0 5.12585ZM7.49292 4.01531C6.54647 2.47557 5.57138 1.8344 4.39995 1.8344C2.62537 1.8344 1.19995 3.30056 1.19995 5.12585C1.19995 6.11487 2.16489 7.61383 3.60933 9.17508C4.43297 10.0653 5.38179 10.9805 6.32832 11.8935C6.89549 12.4405 7.46184 12.9868 7.99995 13.5265C8.53806 12.9868 9.10441 12.4405 9.67159 11.8935C10.6181 10.9805 11.5669 10.0653 12.3906 9.17508C13.835 7.61383 14.8 6.11487 14.8 5.12585C14.8 3.30056 13.3745 1.8344 11.6 1.8344C10.4285 1.8344 9.45343 2.47557 8.50698 4.01531C8.39698 4.19407 8.20563 4.30243 7.99995 4.30243C7.79427 4.30243 7.60292 4.19407 7.49292 4.01531Z"
                                            fill="#FF0000"></path>
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
                            data-annonce-id="{{ $annonce->id }}">
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
                <div class="text-blue-900  font-bold mr-4 ">{{ $annonce->views }} Views</div>
            </div>
            @auth
                @if ($annonce->isAppliedByUser())
                    <button type="button"
                        class=" w-full flex items-center justify-center gap-2 px-7 py-2 bg-950 text-white font-bold rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:bg-yell-600">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z">
                            </path>
                        </svg>
                        <span>Applied</span>
                    </button>
                @elseif($annonce->user_id === auth()->id())
                    <button type="button"
                        class=" w-full flex items-center justify-center gap-2 px-7 py-2 bg-yell text-white font-bold rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                        <span>Your annonce</span>
                    </button>
                @else
                    <form id="adoptionForm" action="{{ route('user.requests.store', $annonce->id) }}"
                        method="POST"
                        class="flex items-center justify-center gap-2 px-7 py-2 bg-yell text-white font-bold rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:bg-yell-600">
                        @csrf

                        <input type="hidden" name="annonce_id" value="{{ $annonce->id }}">

                        <button id="applyButton" type="submit" class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;">
                                <path
                                    d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z">
                                </path>
                                <path
                                    d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z">
                                </path>
                            </svg>
                            <span>Apply to Adopt</span>
                        </button>
                    </form>
                @endif
            @endauth
            @guest
                <a href="{{ route('log-in') }}"
                    class="flex items-center justify-center gap-2 px-7 py-2 bg-yell text-white  font-bold rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:bg-yell-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: rgb(254, 254, 254);transform: ;msFilter:;">
                        <path
                            d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z">
                        </path>
                        <path
                            d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z">
                        </path>
                    </svg>
                    <span> Apply to Adopt </span>
                </a>
            @endguest
        </div>
    </div>
    </a>
@endforeach
</div>