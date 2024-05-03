@extends('layouts.base')

@section('content')
    <div class="relative min-h-screen flex-col justify-center overflow-hidden bg-slate-100 ">
        <div class="min-h-28  ">
            
            <div class="max-w-screen-lg mx-auto py-6 md:mt-6">
                <div class="flex items-center justify-start">
                    <a href="{{ route('user.create') }}">
                        <button type="submit"
                            class="flex items-center justify-center gap-2 bg-yellow-500 text-white font-bold py-3 px-4 rounded">
                            <span>Add announcement</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <path
                                    d="M5.00488 11.525V7.075H0.854883V5.125H5.00488V0.65H7.00488V5.125H11.1549V7.075H7.00488V11.525H5.00488Z"
                                    fill="#FDFDFE"></path>
                            </svg>
                        </button>
                    </a>
                </div>
                @if ($annonces->isEmpty())
                    <p class="text-xl text-950 font-bold">No annonces found.</p>
                @else
               
                      
                    <div class="md:grid md:grid-cols-3  sm:flex sm:items-center sm:justify-center  gap-4 mt-6">
                        @foreach ($annonces as $annonce)
                           
                                <div class="px-2 w-full border border-white rounded-lg bg-white mr-2 shadow-xl">
                                    <a href="{{ route('show', $annonce->id) }}">
                                    <div class="p-2">
                                        @foreach ($annonce->images as $key => $image)
                                            @if ($key == 0)
                                                <div class="relative">
                                                    <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}"
                                                        alt="Image" class="rounded h-60 w-96">
                                                    <div class="flex items-center justify-center">
                                                        <div
                                                            class="absolute md:top-30 flex justify-end right-4  md:left-26 bottom-4 rounded w-fit right-2 text-center bg-teal-600 text-white px-2">

                                                            {{ $annonce->category ? $annonce->category->name : 'original' }}
                                                        </div>
                                                    </div>

                                                </div>
                                            @break
                                        @endif
                                    @endforeach
                                    <div class="flex flex-col mt-2 ml-8">
                                        <h3 class="font-semibold text-950">{{ ucfirst($annonce->title) }}
                                        </h3>
                                        <h6></h6>
                                        <div class="flex flex-col gap-2">
                                            <div class="flex items-center gap-1">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" stroke="#1fffe5">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="12" viewBox="0 0 12 12" fill="none"
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
                                </a>
                                    <div
                                        class="flex items-center justify-between mt-4 gap-6 border-t border-slate-200 text-950 p-0 ">
                                        <div class="text-blue-900  font-bold mr-4 ">{{ $annonce->views }} Views</div>
                                        <div class="flex gap-4">
                                            <form action="{{ route('user.delete', $annonce->id) }}" method="POST"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24"
                                                        style="fill: rgb(240, 13, 13);transform: ;msFilter:;">
                                                        <path
                                                            d="M8.586 18 12 21.414 15.414 18H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.586zM5 4h14v12h-4.414L12 18.586 9.414 16H5V4z">
                                                        </path>
                                                        <path
                                                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <a href="{{ route('user.edit', $annonce->id) }}" class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(36, 196, 36, 1);transform: ;msFilter:;">
                                                    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                                                    <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                                                </svg>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    @endforeach
                </div>
            @endif
        </div>
    </div>

</div>
@endsection
