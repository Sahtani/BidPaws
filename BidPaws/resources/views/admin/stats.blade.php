@extends('layouts.admin')

@section('content')
    <div class=" mx-20 px-4 py-8 sm:px-8 sm:ml-64 bg-white w-full h-16 flex ">
        <div class="text-xl text-[#1e1b4b] font-bold">
            {{ $stats['user']->name }}
        </div>

    </div>

    <main class="p-4 sm:ml-64">
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                <div class="px-4 py-6 shadow-lg shadow-blue-100 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-blue-50 p-4 text-blue-300"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="mt-4 font-medium">Events</p>
                    <p class="mt-2 text-xl font-medium">
                        1
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </p>

                </div>
                <div class="px-4 py-6 shadow-lg shadow-blue-100 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-rose-50 p-4 text-rose-300"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="mt-4 font-medium">Users</p>
                    <p class="mt-2 text-xl font-medium">
                        2
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </p>
                </div>
                <div class="px-4 py-6 shadow-lg shadow-blue-100 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-50 p-4 text-green-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="mt-4 font-medium">Reservation</p>
                    <p class="mt-2 text-xl font-medium">
                        4
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </p>
                </div>
                <div class="px-4 py-6 shadow-lg shadow-blue-100 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-50 p-4 text-green-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="mt-4 font-medium">Reservation</p>
                    <p class="mt-2 text-xl font-medium">
                        4
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </p>
                </div>
            </div>
            </div>
        <!-- Card Item End -->
        </div>

        <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
            <!-- ====== Chart One Start -->
            <include src="./partials/chart-01.html" />
            <!-- ====== Chart One End -->

            <!-- ====== Chart Two Start -->
            <include src="./partials/chart-02.html" />
            <!-- ====== Chart Two End -->

            <!-- ====== Chart Three Start -->
            <include src="./partials/chart-03.html" />
            <!-- ====== Chart Three End -->

            <!-- ====== Map One Start -->
            <include src="./partials/map-01.html" />
            <!-- ====== Map One End -->

            <!-- ====== Table One Start -->
            <div class="col-span-12 xl:col-span-8">
                <include src="./partials/table-01.html" />
            </div>
            <!-- ====== Table One End -->

            <!-- ====== Chat Card Start -->
            <!-- ====== Chat Card End -->
        </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    </body>

    </html>
@endsection
