@extends('layouts.base')
@section('content')
    <div class="w-full my-20  border flex flex-col gap-6 ">
        <div class="flex items-center justify-center ">
            <div class="w-4/5 grid grid-cols-3 gap-10">
                <div class="col-start-1 col-end-3 bg-white rounded-lg ">
                    @foreach ($annonce->images as $key => $image)
                        @if ($key == 0)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}" alt="Image"
                                    class="rounded p-6">
                                <div class="flex items-center justify-center">
                                    <div class=" grid grid-cols-3  left-26 bottom-4 ">
                                        @foreach ($annonce->images as $image)
                                            <img src="{{ asset('storage/annonceImages/' . $image->image_path) }}"
                                                alt="Image" class="rounded-xl py-2 pl-6 " style="width: 80%;" />
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                        @break
                    @endif
                @endforeach
            </div>


            <div class=" bg-white rounded-lg">
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
                    <div class="ml-4 flex flex-col gap-1">
                        <a href="#" class="font-bold text-lg text-950">
                            {{ $annonce->user->name }}
                        </a>
                        <div class="text-gray-500">
                            Membre depuis: 3 mois
                        </div>
                        <a href="#" class="text-blue-600">
                            Voir toutes les annonces
                        </a>
                    </div>
                </div>
                <div class="w-full bg-gray-100 mt-2">
                    <a href="tel:0661930688" class="flex flex-row ml-6 gap-1 text-950 font-bold py-2 px-4 rounded">
                        <svg class="w-4 h-5 mr-2 text-950" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 24">
                            <path fill="#1e1b4b"
                                d="M2.625 0C1.18562 0 0 1.18562 0 2.625V20.7083C0 22.1477 1.18562 23.3333 2.625 23.3333H11.375C12.8144 23.3333 14 22.1477 14 20.7083V2.625C14 1.18562 12.8144 0 11.375 0H2.625ZM2.625 1.75H11.375C11.8688 1.75 12.25 2.13121 12.25 2.625V20.7083C12.25 21.2021 11.8688 21.5833 11.375 21.5833H2.625C2.13121 21.5833 1.75 21.2021 1.75 20.7083V2.625C1.75 2.13121 2.13121 1.75 2.625 1.75ZM7 3.5C6.76794 3.5 6.54538 3.59219 6.38128 3.75628C6.21719 3.92038 6.125 4.14294 6.125 4.375C6.125 4.60706 6.21719 4.82962 6.38128 4.99372C6.54538 5.15781 6.76794 5.25 7 5.25C7.23206 5.25 7.45462 5.15781 7.61872 4.99372C7.78281 4.82962 7.875 4.60706 7.875 4.375C7.875 4.14294 7.78281 3.92038 7.61872 3.75628C7.45462 3.59219 7.23206 3.5 7 3.5ZM5.54167 18.0833C5.42572 18.0817 5.3106 18.1031 5.203 18.1464C5.09541 18.1896 4.99748 18.2538 4.9149 18.3352C4.83233 18.4166 4.76676 18.5136 4.722 18.6206C4.67725 18.7276 4.6542 18.8424 4.6542 18.9583C4.6542 19.0743 4.67725 19.1891 4.722 19.2961C4.76676 19.403 4.83233 19.5001 4.9149 19.5815C4.99748 19.6629 5.09541 19.7271 5.203 19.7703C5.3106 19.8136 5.42572 19.835 5.54167 19.8333H8.45833C8.57428 19.835 8.6894 19.8136 8.797 19.7703C8.90459 19.7271 9.00252 19.6629 9.0851 19.5815C9.16767 19.5001 9.23324 19.403 9.278 19.2961C9.32275 19.1891 9.3458 19.0743 9.3458 18.9583C9.3458 18.8424 9.32275 18.7276 9.278 18.6206C9.23324 18.5136 9.16767 18.4166 9.0851 18.3352C9.00252 18.2538 8.90459 18.1896 8.797 18.1464C8.6894 18.1031 8.57428 18.0817 8.45833 18.0833H5.54167Z"
                                fill="#FFFFFF"></path>
                        </svg>
                        {{ $annonce->user->number_phone }}
                    </a>
                    <a href="#" class="flex flex-row ml-6 gap-1 text-950 font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            ">
                            <path fill="#1e1b4b"
                                d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                            </path>
                        </svg>
                        {{ $annonce->user->email }}
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="w-full m-auto flex items-center  ">
        <div class="w-3/5 ml-16">
            <div class="bg-white  ml-20 mt-4 mr-8 rounded-lg mb-10">
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
                        class="rounded w-fit right-2 text-center bg-yellow-50 border border-yell text-yell font-bold mt-3 px-3">
                        {{ $annonce->category->name }}

                    </div>
                    <div class="mt-2">
                        <div class="flex items-center py-2">
                            <div class="mr-2">
                                <i class="fas fa-map-pin"></i>
                            </div>
                            <div>
                                <span class="font-semibold text-950">City:</span>
                                <span class="text-950 font-semibold">{{ $annonce->location }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <h3 class="font-semibold">Description</h3>
                        <div class="mt-2">
                            {{ $annonce->description }}.
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
