<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/DogCats.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" />

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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100 font-[sans-serif]">
    {{-- @user --}}
    <x-nav />
    {{-- @enduser --}}
  
    @admin
       <x-nav-aside/> 
    @endadmin
    <section>
        @yield('content')
    </section>


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
        var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    </script>
    @user
    <x-footer />
    @enduser
   
    <script src="{{ asset('js/carousel.js') }}"></script>

</body>

<html
