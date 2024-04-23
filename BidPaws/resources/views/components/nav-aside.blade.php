<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />


    <meta name="viewport" content="width=device-width, initial-scale=1">



    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    Saira: ["Saira Condensed", "sans-serif"],
                },
                extend: {
                    colors: {
                        text: "#0F0F0F ",
                        maron: "#2d2522",
                        moinmaron: " #5a4d44",
                        moinbeige: "#ac947c",
                        baigebeige: "#e3dbc8",
                        yellow: "#f4ea79",
                        mr: "#583E26",
                        mrbg: "#A78B71",
                        gr: " #9C4A1A",
                        or: "#EC9704",
                        yell: "#E58E00",
                        morebeige: "# F2F2EF ",
                        beige: "#DED3A6",
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
    </style>
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

<body class="bg-white">
    <nav class="fixed  top-0 z-50 w-full   dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                
                    <div class="flex flex-row gap-1 items-center justify-center md:ml-16">
                        <div class="toggle-menu flex items-center justify-center">
                            <a href="#">
                                <img src="{{ asset('image/go.png') }}" width="70" height="100" c alt="Flowbite Logo" />
                            </a>
                        </div>
                    </div>
                    

                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class=" bg-white fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto mt-10 ">
            <ul class="space-y-2 font-medium">
                <li class="min-w-max">
                    <a href="#" class="bg group flex items-center space-x-4 rounded-lg px-4 py-3 text-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 24" class="fill-or"
                           ">
                            <path
                                d="M12.74 2.32a1 1 0 0 0-1.48 0l-9 10A1 1 0 0 0 3 14h2v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-7h2a1 1 0 0 0 1-1 1 1 0 0 0-.26-.68z">
                            </path>
                        </svg>
                        <span class="group-hover:text-gray-700 hover:text-mr text-xl font-serif">Home</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="{{ route('admin.categories') }}"
                        class="bg group flex items-center space-x-4 rounded-lg px-4 py-3 text-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-or"">
                            <path
                                d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z">
                            </path>
                        </svg>
                        <span class="group-hover:text-gray-700 hover:text-mr text-xl font-serif">Categories</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="{{ route('admin.annonces') }}" class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-or"">
                            <path
                                d="M21 5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5zM5 19V5h14l.002 14H5z">
                            </path>
                            <path
                                d="M7 7h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6z">
                            </path>
                        </svg>
                        <span class="hover:text-mr text-xl font-serif">Annoces</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="{{ route('admin.users') }}" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-or"">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>
                        <span class="hover:text-mr text-xl font-serif">Users</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-or" viewBox="0 0 20 20" >
                            <path class="text-gray-600 group-hover:text-cyan-600"
                                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                            <path class="fill-mr text-gray-300 group-hover:text-cyan-300"
                                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                        </svg>
                        <span class="hover:text-mr text-xl font-serif">Statistic</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"
                        class="fill-or">
                            <path
                                d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                        </svg>
                        <span class="hover:text-mr text-xl font-serif">log out</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
