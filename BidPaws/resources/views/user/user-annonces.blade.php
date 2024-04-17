@extends('layouts.base')

@section('content')
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none"
                                                class="w-3 h-3 fill-current text-gray-700" bis_skin_checked="1">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 0C2.6934 0 0 2.6934 0 6C0 9.3066 2.6934 12 6 12C9.3066 12 12 9.3066 12 6C12 2.6934 9.3066 0 6 0ZM6 1.2C8.65807 1.2 10.8 3.34193 10.8 6C10.8 8.65807 8.65807 10.8 6 10.8C3.34193 10.8 1.2 8.65807 1.2 6C1.2 3.34193 3.34193 1.2 6 1.2ZM5.4 2.4V6.24844L7.97578 8.82422L8.82422 7.97578L6.6 5.75156V2.4H5.4Z"
                                                    fill="#374B5C"></path>
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 font-semibold" bis_skin_checked="1">
                                            {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans() }}</div>
                                    </div>


                                </div>

                                <div class=" mt-4 gap-4  border-t border-slate-100 text-950 ">

                                    <div
                                        class="flex items-center justify-between my-4  py-1 px-1 f rounded-2xl text-sm text-gray-700 flex items-center">

                                        <div class="text-gray-700 mr-4 bg-slate-100" bis_skin_checked="1">4 Vues</div>
                                        <a href="{{ route('user.edit',$annonce->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(16, 109, 22, 1);transform: ;msFilter:;">
                                            <path
                                                d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                            </path>
                                            <path
                                                d="M7 14.987v1.999h1.999l5.529-5.522-1.998-1.998zm8.47-4.465-1.998-2L14.995 7l2 1.999z">
                                            </path>
                                        </svg>
                                        </a>
                                       
                                    </div>


                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
