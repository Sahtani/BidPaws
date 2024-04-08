<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/DogCats.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

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
    <style>
        @layer components {
            .sidebar {
                transition: all .4s ease-in-out;
            }
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.363);
        }

        @font-face {
            font-family: 'Avenir-Light';
            src: url('/fonts/Avenir Light.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        * {
            font-family: 'Avenir-Light';
        }

        .shadow-b {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            /* Horizontal offset, vertical offset, blur radius, color */
        }

        .containe {
            background-image: url('{{ asset('image/bg2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            /* Largeur de l'image */
            height: 100vh;
            /* Hauteur de l'image */
        }

        nav ul li a {
            text-decoration: none;
            position: relative;
        }

        .circle {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: red;
            /* Couleur du cercle */
            display: none;
        }

        a:hover+.circle {
            display: block;
            bottom: -10px;
            /* Ajustez cette valeur selon votre préférence */
            left: 50%;
            /* Positionnez le cercle au milieu du lien */
            transform: translateX(-50%);
            /* Centrer le cercle horizontalement */
        }

        .containe h1 {
            position: relative;
            z-index: 1;
        }

        /* CSS reset */
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        .form {
            background: rgba(19, 35, 47, 0.9);
            padding: 40px;
            max-width: 600px;
            border-radius: 4px;
            box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        }

        .tab-group {
            list-style: none;
            padding: 0;
            margin: 0 0 40px 0;
        }

        .tab-group:after {
            content: "";
            display: table;
            clear: both;
        }

        .tab-group li a {
            display: block;
            text-decoration: none;
            padding: 15px;
            background: rgba(160, 179, 176, 0.25);
            color: #a0b3b0;
            font-size: 20px;
            float: left;
            width: 50%;
            text-align: center;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .tab-group li a:hover {
            background: #151a4a;
            color: #ffffff;
        }

        .tab-group .active a {
            background: #151a4a;
            color: #ffffff;
        }

        x label.active {
            transform: translateY(50px);
            left: 2px;
            font-size: 14px;
        }


        .field-wrap {
            position: relative;
            margin-bottom: 40px;
        }



        .button {
            border: 0;
            outline: none;
            border-radius: 0;
            padding: 15px 0;
            font-size: 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            background: #151a4a;
            color: #ffffff72;
            transition: all 0.5s ease;
        }

        .button:hover,
        .button-block {
            display: block;
            width: 100%;
        }

        .forgot {
            margin-top: -20px;
            text-align: right;
        }
    </style>
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100 font-[sans-serif]">
    @user
    <x-nav />
    @enduser
  
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
   

</body>

<html
