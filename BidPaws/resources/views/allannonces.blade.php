@extends('layouts.base')

@section('content')
    <div class="flex flex-col items-center justify-center w-full">
        <div class="flex items-center justify-center bg-white  border border-white mt-10 w-9/12  rounded-lg ">
            <div class="grid grid-cols-4 gap-6 px-6 py-6 w-full shadow-xl">
                <div class="card">
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-indigo-900">Species</h3>

                        <select
                            class="px-4 py-3 ml-3 mt-4 w-full block appearance-none w-full bg-slate-100 border-none   px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none ">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                    </div>
                </div>
                <div class="card">
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-indigo-900">Species</h3>

                        <select
                            class="px-4 py-3 ml-3 mt-4 w-full block appearance-none w-full bg-slate-100 border-none   px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none ">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                    </div>
                </div>
                <div class="card">
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-indigo-900">Species</h3>

                        <select
                            class="px-4 py-3 ml-3 mt-4 w-full block appearance-none w-full bg-slate-100 border-none  px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none ">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-indigo-900">Species</h3>

                        <button
                            class="px-4 py-3 ml-3 mt-4 w-full block text-white appearance-none w-full bg-yellow-500 border-none   px-4 py-2 pr-8 rounded-full leading-tight focus:outline-none ">
                            Search
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4 border border-none  mt-10 w-9/12  rounded-lg ">
            <div class="px-6 py-6 w-full border border-white rounded-lg bg-white shadow-xl ">
                <div class="flex flex-col">
                    <h3 class="font-semibold text-indigo-900">Sex</h3>

                    <select
                        class="px-3 py-3 ml-1 mt-4 w-full block appearance-none w-full bg-slate-100 border-none col-start-1 col-end-1   rounded-full leading-tight focus:outline-none ">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>

                </div>
            </div>
            <div class="col-start-2 col-end-5 ">
                <div class="grid grid-cols-3 gap-4  ">
                    @foreach ($annonces as $annonce)
                        <div class="px-2 w-full border border-white rounded-lg bg-white mr-2 shadow-xl">
                            <div class="p-2">
                                @foreach ($annonce->images as $key => $image)
                                @if ($key == 0)
                                    <div class="swiper-slide relative">
                                        <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}" alt="Image" class="rounded">
                                        <div class="flex items-center justify-center">
                                            <div class="absolute top-30 left-26 bottom-4 rounded w-fit right-2 text-center bg-teal-600 text-white px-2">
                                                
                                                {{ $annonce->category->name }}
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
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                            stroke="#1fffe5">
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
                                        <span class=" w-1/6 text-950"> {{ $annonce->location }}</span>

                                    </div>


                                    <div class="flex items-center" >
                                        <div class="flex-shrink-0 mr-1" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none"
                                                class="w-3 h-3 fill-current text-gray-700" >
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 0C2.6934 0 0 2.6934 0 6C0 9.3066 2.6934 12 6 12C9.3066 12 12 9.3066 12 6C12 2.6934 9.3066 0 6 0ZM6 1.2C8.65807 1.2 10.8 3.34193 10.8 6C10.8 8.65807 8.65807 10.8 6 10.8C3.34193 10.8 1.2 8.65807 1.2 6C1.2 3.34193 3.34193 1.2 6 1.2ZM5.4 2.4V6.24844L7.97578 8.82422L8.82422 7.97578L6.6 5.75156V2.4H5.4Z"
                                                    fill="#374B5C"></path>
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 font-semibold" >
                                            {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
<div class="relative">
    <div class="flex items-center">
        <div class="text-sm font-medium text-gray-500 mr-2">Species</div>
        <div class="relative">
            <select
                class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option hidden disabled></option>
                <option selected value="Dog" class="text-gray-900">Dog</option>
                <option value="Cat" class="text-gray-900">Cat</option>
                <option value="Rabbit" class="text-gray-900">Rabbit</option>
                <option value="Equine" class="text-gray-900">Equine</option>
                <option value="Other" class="text-gray-900">Other</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
    <div class="flex items-center mt-4">
        <div class="text-sm font-medium text-gray-500 mr-2">Breed</div>
        <div class="relative">
            <select
                class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <!-- Breed options -->
            </select>
            <!-- Dropdown icon -->
        </div>
    </div>
    <div class="flex items-center mt-4">
        <div class="text-sm font-medium text-gray-500 mr-2">Color</div>
        <div class="relative">
            <select
                class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <!-- Color options -->
            </select>
            <!-- Dropdown icon -->
        </div>
    </div>
    <div class="flex mt-6">
        <button type="button"
            class="inline-flex justify-center w-1/3 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 mr-4">Reset</button>
        <button type="button"
            class="inline-flex justify-center w-1/3 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-4">Search</button>
        <button type="button"
            class="inline-flex justify-center w-1/3 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">More
            Filters</button>
    </div>
    {{ $annonces->links() }}
</div>
@endsection
