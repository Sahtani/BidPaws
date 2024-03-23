<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/DogCats.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />

    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        {{-- css --}}
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
        *{
            font-family: 'Avenir-Light';
        }
        .shadow-b {
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Horizontal offset, vertical offset, blur radius, color */
}
.container {
    background-image: url('{{ asset('image/bg2.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%; /* Largeur de l'image */
    height: 100vh; /* Hauteur de l'image */
}


.container h1 {
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

.tab-content > div:last-child {
    display: none;
}

label.active {
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
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100 font-[sans-serif]">    

    <nav class=" bg-white border-gray-200 text-950  rounded uppercase shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 shadow-b-2xl">
            <div>
                <a href="#">
                    <img src="{{ asset('image/DogCats.jpg') }}" class="h-200 w-1/3" alt="Flowbite Logo" />  </a> 
            </div>
            <!-- search  -->
            <div class="flex md:order-1">
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
               
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    @guest
                    <div  class="md:flex items-center gap-20">

                    <div class="md:flex">

                    <li>
                        
                        <a href="#" type="button"
                            class="font-semibold  hover:bg-rose hover:text-white font-serif focus:outline-none  text-sm px-6 py-2.5 text-center">Home</a>

                    </li>    
                    <li>
                        <a href="#" type="button"
                            class="font-semibold   font-serif focus:outline-none  text-sm px-6 py-2.5 text-center">About</a>

                    </li> 
                        <li>
                            <a href="#" type="button"
                                class=" font-semibold  hover:bg-rose hover:text-white font-serif focus:outline-none  text-sm px-6 py-2.5 text-center">Contact</a>
    
                        </li> 
                    </div>
                        <div class="">

                        
                       
                    <li  class="block relative " x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1" @click.prevent="showChildren=!showChildren">
                            <div class="block">
                                <div class="inline relative">
                                    <button type="button" class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                                        <div class="pl-1">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;">
                                                <g fill="none" fill-rule="nonzero">
                                                    <path d="m2 16h28"></path>
                                                    <path d="m2 24h28"></path>
                                                    <path d="m2 8h28"></path>
                                                </g>
                                            </svg>
                                        </div>
                    
                                        <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                                                <path d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </a>
                        <div class=" bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset text-950 font-semibold">
                                    <li>
                                        <a href="{{ route('auth.sign-up') }}" class="px-4 py-2 flex md:w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Login / Register</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
                    @endguest
                  
                   
                  
                   @guest
                   <li>
                    @if (Route::has('register'))
                   <a href="{{ route('register') }}" type="button"
                       class="text-white md:bg-red-800 font-serif focus:outline-none  font-bold rounded-lg text-sm px-5 py-2 text-center">Sign
                       Up</a> @endif
               </li>
               <li>
                   <a href="#"
        type="button"
        class="text-white font-bold  font-serif  focus:outline-none   rounded-lg text-sm px-6 py-2 text-center">
    Log
    In</a>

    </li>
@endguest

@auth
    {{-- <li>
        <form method="POST" action="{{ route('logout') }}"
            class="text-white md:bg-red-800 font-serif focus:outline-none  font-bold rounded-lg text-sm px-5 text-center">
            @csrf

            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </li> --}}

@endauth

</ul>
</div>
</div>
</nav>
<section >
    @yield('content')
</section>
<script>
  
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });
  
</script>
</body>
<html
