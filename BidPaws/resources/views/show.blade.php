@extends('layouts.base')
@section('content')


<a href="{{ route('home') }}">
    <div class="bg-white flex items-center m-6 w-fit  rounded rounded-full border border-yell">
        <h1 class="w-fit px-6 py-2 text-yell font-bold">Back to home !</h1>
    </div>
</a>

    <div class="w-full my-20  border flex flex-col gap-6 ">
        <div class="flex items-center justify-center ">
            <div class="w-4/5 grid md:grid-cols-3 grid-cols-1  gap-10">
                <div class="col-start-1 col-end-3 bg-white rounded-lg shadow-2xl">
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/annonceImages/' . $annonce->images[0]->image_path) }}" alt="Image"
                            class="rounded p-6" id="main-image">
                        <div class="flex items-center justify-center">
                            <div class="grid grid-cols-3 left-26 bottom-4">
                                @foreach ($annonce->images as $index => $image)
                                    <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}" alt="Image"
                                        class="rounded-xl py-2 pl-6 clickable-image" style="width: 80%;"
                                        data-index="{{ $index }}" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-2xl w-full">
                    <div class="flex items-center justify-center mt-6 ">
                        <a href="#" class="flex-shrink-0 rounded-full overflow-hidden">
                            <div class=" bg-gray-100 inset-0 flex items-center justify-center text-gray-400">
                                <svg class="w-16 h-16 p-2" viewBox="0 0 132 148" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 141.5C6 120.789 32.8629 104 66 104C99.1371 104 126 120.789 126 141.5M103.5 44.0001C103.5 64.7108 86.7107 81.5002 66 81.5002C45.2893 81.5002 28.5 64.7108 28.5 44.0001C28.5 23.2894 45.2893 6.5 66 6.5C86.7107 6.5 103.5 23.2894 103.5 44.0001Z"
                                        stroke="#D5E3EE" stroke-width="12" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </div>
                        </a>
                        <div class="ml-4 flex flex-col gap-1 ">
                            <a href="#" class=" capitalize font-bold text-lg text-950">
                                {{ $annonce->user->name }}
                            </a>
                            <a href="#" class="text-blue-600">
                                Voir toutes les annonces
                            </a>
                        </div>
                    </div>
                    <div class="w-full bg-gray-100 mt-4">
                        <div class="flex flex-col justify-center pl-8">


                            <a href="tel:0661930688"
                                class="flex flex-row items-center ml-6 gap-1 text-950 font-bold py-2 px-4 rounded">
                                <svg class="w-4 h-5 mr-2 text-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 24">
                                    <path fill="#1e1b4b"
                                        d="M2.625 0C1.18562 0 0 1.18562 0 2.625V20.7083C0 22.1477 1.18562 23.3333 2.625 23.3333H11.375C12.8144 23.3333 14 22.1477 14 20.7083V2.625C14 1.18562 12.8144 0 11.375 0H2.625ZM2.625 1.75H11.375C11.8688 1.75 12.25 2.13121 12.25 2.625V20.7083C12.25 21.2021 11.8688 21.5833 11.375 21.5833H2.625C2.13121 21.5833 1.75 21.2021 1.75 20.7083V2.625C1.75 2.13121 2.13121 1.75 2.625 1.75ZM7 3.5C6.76794 3.5 6.54538 3.59219 6.38128 3.75628C6.21719 3.92038 6.125 4.14294 6.125 4.375C6.125 4.60706 6.21719 4.82962 6.38128 4.99372C6.54538 5.15781 6.76794 5.25 7 5.25C7.23206 5.25 7.45462 5.15781 7.61872 4.99372C7.78281 4.82962 7.875 4.60706 7.875 4.375C7.875 4.14294 7.78281 3.92038 7.61872 3.75628C7.45462 3.59219 7.23206 3.5 7 3.5ZM5.54167 18.0833C5.42572 18.0817 5.3106 18.1031 5.203 18.1464C5.09541 18.1896 4.99748 18.2538 4.9149 18.3352C4.83233 18.4166 4.76676 18.5136 4.722 18.6206C4.67725 18.7276 4.6542 18.8424 4.6542 18.9583C4.6542 19.0743 4.67725 19.1891 4.722 19.2961C4.76676 19.403 4.83233 19.5001 4.9149 19.5815C4.99748 19.6629 5.09541 19.7271 5.203 19.7703C5.3106 19.8136 5.42572 19.835 5.54167 19.8333H8.45833C8.57428 19.835 8.6894 19.8136 8.797 19.7703C8.90459 19.7271 9.00252 19.6629 9.0851 19.5815C9.16767 19.5001 9.23324 19.403 9.278 19.2961C9.32275 19.1891 9.3458 19.0743 9.3458 18.9583C9.3458 18.8424 9.32275 18.7276 9.278 18.6206C9.23324 18.5136 9.16767 18.4166 9.0851 18.3352C9.00252 18.2538 8.90459 18.1896 8.797 18.1464C8.6894 18.1031 8.57428 18.0817 8.45833 18.0833H5.54167Z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                {{ $annonce->user->number_phone }}
                            </a>
                            <a href="#" class="flex flex-row ml-6 gap-1 text-950 font-bold py-2 px-4 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ">
                                <path fill="#1e1b4b"
                                    d=" M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897
                                    2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386
                                    5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                    </path>
                                </svg>
                                {{ $annonce->user->email }}
                            </a>
                        </div>
                    </div>
                    @php
                        $message = urlencode('I am interested in ' . $annonce->title);
                    @endphp
                    <div class="mt-6">
                        <div class="flex justify-center">
                            <a href="https://wa.me/+212{{ $annonce->user->number_phone }}?text={{ $message }}""
                                target="_blank"
                                class="flex items-center px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:bg-green-600">
                                <img src="data:image/png;base64,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"
                                    alt="whatsapp" class="w-6 h-6 mr-2">
                                Chat via WhatsApp
                            </a>

                        </div>

                        <div class="mt-6 flex justify-center">
                            <a href=""
                                class="flex items-center gap-2 px-7 py-2 bg-yell text-[#000231]  font-bold rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:bg-yell-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgb(0, 2, 49);transform: ;msFilter:;">
                                    <path
                                        d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z">
                                    </path>
                                    <path
                                        d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z">
                                    </path>
                                </svg>
                                <span> Apply to Adopt </span>
                            </a>
                        </div>

                    </div>
                    <div class="flex items-center justify-center space-x-4 mt-6 gap-4 pb-4 ">
                        <a href="#" class="text-primary hover:text-primary-dark" title="Add to favorites">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                fill="none" class="w-6 h-6">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 5.65768C0 2.54234 2.47122 0.000488281 5.5 0.000488281C7.23822 0.000488281 8.75159 0.960404 10 2.59102C11.2484 0.960404 12.7618 0.000488281 14.5 0.000488281C17.5288 0.000488281 20 2.54234 20 5.65768C20 7.76429 18.4562 9.74777 16.5742 11.7819C15.4942 12.9494 14.271 14.1254 13.0759 15.2744C12.1885 16.1275 11.3167 16.9658 10.5303 17.7746C10.2374 18.0758 9.76262 18.0758 9.46973 17.7746C8.68334 16.9658 7.81146 16.1275 6.92412 15.2744C5.729 14.1254 4.50584 12.9494 3.42578 11.7819C1.54382 9.74777 0 7.76429 0 5.65768ZM9.36621 4.2696C8.18315 2.34493 6.96429 1.54346 5.5 1.54346C3.28178 1.54346 1.5 3.37616 1.5 5.65778C1.5 6.89405 2.70618 8.76774 4.51172 10.7193C5.54128 11.8321 6.72729 12.9761 7.91045 14.1173C8.61942 14.8011 9.32736 15.484 10 16.1585C10.6726 15.484 11.3806 14.8011 12.0895 14.1173C13.2727 12.9761 14.4587 11.8321 15.4883 10.7193C17.2938 8.76774 18.5 6.89405 18.5 5.65778C18.5 3.37616 16.7182 1.54346 14.5 1.54346C13.0357 1.54346 11.8168 2.34493 10.6338 4.2696C10.4963 4.49305 10.2571 4.62849 10 4.62849C9.7429 4.62849 9.50371 4.49305 9.36621 4.2696Z"
                                    fill="#2A3946"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-full m-auto flex items-center  ">
            <div class="lg:w-3/5  lg:ml-16 p-6 lg:p-0">
                <div class="bg-white  lg:ml-20 mt-4 mr-8 rounded-lg mb-10 shadow-2xl">
                    <div class="flex  ietms-center justify-between p-6 pl-6">
                        <div class="flex flex-row gap-1">
                            <i class="far fa-user pt-1"></i>

                            <span class="ml-2 text-950 font-bold capitalize">{{ $annonce->user->role }}</span>
                        </div>
                        <div class="flex items-center  gap-4">
                            <div class="flex items-center ">
                                <svg class="w-10 h-4 fill-current text-gray-700 " xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 12 12">
                                    <path
                                        d="M6 0C2.6934 0 0 2.6934 0 6C0 9.3066 2.6934 12 6 12C9.3066 12 12 9.3066 12 6C12 2.6934 9.3066 0 6 0ZM6 1.2C8.65807 1.2 10.8 3.34193 10.8 6C10.8 8.65807 8.65807 10.8 6 10.8C3.34193 10.8 1.2 8.65807 1.2 6C1.2 3.34193 3.34193 1.2 6 1.2ZM5.4 2.4V6.24844L7.97578 8.82422L8.82422 7.97578L6.6 5.75156V2.4H5.4Z" />
                                </svg>
                                <span class=" text-950 font-bold">
                                    {{ \Carbon\Carbon::parse($annonce->created_at)->diffInHours() }} </span>
                            </div>
                            <div class="flex items-center ">
                                <svg class="w-10 h-4 fill-current text-gray-700 " xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 12 9">
                                    <path
                                        d="M6 0C1.63636 0 0 4.36364 0 4.36364C0 4.36364 1.63636 8.72727 6 8.72727C10.3636 8.72727 12 4.36364 12 4.36364C12 4.36364 10.3636 0 6 0ZM6 1.09091C8.87782 1.09091 10.3334 3.41841 10.8047 4.36151C10.3329 5.29805 8.86636 7.63636 6 7.63636C3.12218 7.63636 1.66659 5.30886 1.19531 4.36577C1.66768 3.42922 3.13364 1.09091 6 1.09091ZM6 2.18182C4.79509 2.18182 3.81818 3.15873 3.81818 4.36364C3.81818 5.56854 4.79509 6.54545 6 6.54545C7.20491 6.54545 8.18182 5.56854 8.18182 4.36364C8.18182 3.15873 7.20491 2.18182 6 2.18182ZM6 3.27273C6.60273 3.27273 7.09091 3.76091 7.09091 4.36364C7.09091 4.96636 6.60273 5.45455 6 5.45455C5.39727 5.45455 4.90909 4.96636 4.90909 4.36364C4.90909 3.76091 5.39727 3.27273 6 3.27273Z" />
                                </svg>
                                <span class="text-950 font-bold capitalize">{{ $annonce->views }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pl-6 pb-4">
                        <h1 class="text-4xl text-950 font-bold">{{ $annonce->title }}</h1>
                        <div
                            class="rounded w-fit right-2 capitalize text-center bg-yellow-50 border border-yell text-yell font-bold mt-3 px-3">
                            {{ $annonce->category->name }}

                        </div>
                        <div class="mt-2">
                            <div class="flex items-center justify-evenly">
                                <div class="flex items-center py-2">
                                    <div class="mr-2">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                    <div>
                                        <span class="font-semibold text-950 text-xl">City:</span>
                                        <span class="text-950 font-semibold text-xl">{{ $annonce->location }}</span>
                                    </div>
                                </div>
                                <div class="text-yell font-bold text-xl">
                                    {{ $annonce->price }} Dhs
                                </div>
                            </div>
                        </div>
                        <div class="py-4 ml-2">
                            <h3 class="font-bold text-950 p-4  ">Description</h3>
                            <div class="mt-2 pr-4">
                                {!! $annonce->description !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>


    </div>
@endsection
