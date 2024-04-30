<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/c.webp') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    {{-- pusher link --}}
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    {{-- js --}}
    <script src="{{ asset('js/pop-up.js') }}"></script>
    <script src="{{ asset('js/image.js') }}"></script>
    <script src="{{ asset('js/apply.js') }}"></script>
    <script src="{{ asset('js/search-home.js') }}"></script>

    {{-- css --}}
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" />
    {{-- include app.js and app.css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    Saira: ["Saira Condensed", "sans-serif"],
                },
                extend: {
                    colors: {
                        950: "#1e1b4b ",
                        yell: "#E58E00",
                        grun: "#b30000",
                        rose: "#ffbfbf",
                        roseb: "#ff8080",
                        bleucc: "#000066",
                        white: "#ffffff",
                        verblanc: "#E7EAEF",

                    },
                },
            },
        };
    </script>

    </style>
    <style>
        .containe {
            background-image: url('{{ asset('image/bg2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-200 font-[sans-serif]">

    <x-nav />
    <section>
        @yield('content')
    </section>


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>

    <x-footer />
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script>
        window.User = {
            id: '{{ optional(auth()->user())->id }}',
        }
    </script>

</body>

<html
