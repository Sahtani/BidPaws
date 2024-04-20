@extends('layouts.base')
@section('content')
    <div class="flex items-center mt-10 ml-10 bg-gray-200 w-fit px-2 py-1">
        <a href="{{ route('home') }}" title="home" class="text-950  font-semibold mr-2">
            Home
        </a>
        <span>
            <svg class="w-5 h-4 fill-yell text-teal-600" viewBox="0 0 5 7" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.56744 3.5L0.192673 1.12523C-0.0646296 0.86793 -0.0646296 0.45028 0.192673 0.192977C0.449976 -0.0643258 0.867626 -0.0643258 1.12493 0.192977L3.99255 3.0606C4.23556 3.3036 4.23556 3.69702 3.99255 3.9394L1.12493 6.80702C0.867626 7.06433 0.449976 7.06433 0.192673 6.80702C-0.0646296 6.54972 -0.0646296 6.13207 0.192673 5.87477L2.56744 3.5Z"
                  />
            </svg>
        </span>
        <span class="text-blue-900 font-semibold">
            Abouts us
        </span>
    </div>

    <section class=" relative z-0">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center">
            <h1 class="max-w-2xl mx-auto font-manrope font-bold text-5xl  text-950 mb-5 md:text-5xl md:leading-normal">
                Who are we?
            </h1>
        </div>
    </section>

    <section class="py-6 lg:py-6 relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                <div class="img-box">
                    <img src="{{ asset('image/adopt.jpg') }}" alt="About Us " class="max-lg:mx-auto">
                </div>
                <div class="lg:pl-[100px] flex items-center">
                    <div class="data w-full">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-950 mb-9 max-lg:text-center relative">
                            What is BidPaws for </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                            Do you own a pet or want to adopt one in Morocco? Wooland.ma is the perfect place for you!
                            Our online directory is completely free and allows you to connect people and businesses who wish
                            to sell their animals to other users. We also offer the possibility to publish
                            an ad for animals looking for a foster family "adoption".
                        </p>
                        <div class="flex items-center mt-4 gap-2 ">
                            <a href="https://wooland.ma/annonces/" class="bg-gradient-to-r from-yell to-950 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                                <span class="mr-1">Explorer les annonces</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current mt-2 ml-2" viewBox="0 0 20 20">
                                    <path d="M7.13805 10.4713C7.00772 10.6017 6.83738 10.6667 6.66671 10.6667C6.49605 10.6667 6.32571 10.6017 6.19538 10.4713C5.93504 10.211 5.93504 9.78898 6.19538 9.52865L9.72407 5.99996H0.666672C0.298669 5.99996 0 5.70129 0 5.33329C0 4.96528 0.298669 4.66662 0.666672 4.66662H9.72407L6.19538 1.13792C5.93504 0.877589 5.93504 0.455586 6.19538 0.195251C6.45571 -0.0650838 6.87771 -0.0650838 7.13805 0.195251L11.8047 4.86195C12.0651 5.12229 12.0651 5.54429 11.8047 5.80462L7.13805 10.4713Z" fill="#FDFDFE"></path>
                                </svg>
                            </a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class=" py-14 lg:py-24 bg-gray-50">
        <div class="flex items-center justify-center ">
            <div class="flex flex-col gap-6">
                <div class="flex items-center justify-center">
                    <h5 class=" w-fit bg-gray-200 text-sm px-2 py-1">Why BidPaws?</h5>
                </div>
                <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-950 mb-9 max-lg:text-center relative">
                    What is BidPaws for </h2>

            </div>

        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mx-10">
            <div class="bg-white p-4 rounded shadow-md ">
                <div class="text-3xl font-semibold flex items-center justify-center">
                    <span class="mr-1 text-yell font-semibold">27</span>
                    <span class="text-sm text-950 font-semibold">k</span>
                </div>
                <div class="text-center text-950 capitalize font-semibold">
                    recherches quotidiennes
                </div>
            </div>

            <div class="bg-white p-4 rounded shadow-md">
                <div class="text-3xl font-semibold flex items-center justify-center">
                    <span class="mr-1 text-yell font-semibold">20</span>
                    <span class="text-sm text-950 font-semibold">k</span>
                </div>
                <div class="text-center text-950 capitalize font-semibold">
                    transactions par jour
                </div>
            </div>

            <div class="bg-white p-4 rounded shadow-md">
                <div class="text-3xl font-semibold flex items-center justify-center">
                    <span class="mr-1 text-yell font-semibold">50</span>
                    <span class="text-sm text-950 font-semibold">k</span>
                </div>
                <div class="text-center text-950 capitalize font-semibold">
                    recommendations journalières
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="py-14 lg:py-24 relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">
                <div class="lg:pr-24 flex items-center">
                    <div class="data w-full">
                        <img src="" alt="About Us" class="block lg:hidden mb-9 mx-auto">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-950 mb-9 max-lg:text-center">Our
                            objectives?</h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                            Our goal is to make our site as user-friendly as possible for our users. We do not sell our
                            users' data and are always open to ideas for improvement. We want to bring all animal lovers
                            together on our platform.
                        </p>
                        <div class="flex items-center mt-4 gap-2 ">
                            <a href="https://wooland.ma/annonces/" class="bg-gradient-to-r from-yell to-950 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                                <span class="mr-1">Explorer les annonces</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current mt-2 ml-2" viewBox="0 0 20 20">
                                    <path d="M7.13805 10.4713C7.00772 10.6017 6.83738 10.6667 6.66671 10.6667C6.49605 10.6667 6.32571 10.6017 6.19538 10.4713C5.93504 10.211 5.93504 9.78898 6.19538 9.52865L9.72407 5.99996H0.666672C0.298669 5.99996 0 5.70129 0 5.33329C0 4.96528 0.298669 4.66662 0.666672 4.66662H9.72407L6.19538 1.13792C5.93504 0.877589 5.93504 0.455586 6.19538 0.195251C6.45571 -0.0650838 6.87771 -0.0650838 7.13805 0.195251L11.8047 4.86195C12.0651 5.12229 12.0651 5.54429 11.8047 5.80462L7.13805 10.4713Z" fill="#FDFDFE"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="img-box ">
                    <img src="{{ asset('image/pet.jpg') }}" alt="About Us "
                        class="hidden lg:block border border-yell rounded  shadow ">
                </div>
            </div>
        </div>
    </section>


    <section class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope text-4xl text-center text-gray-900 font-bold mb-14">Our results in numbers</h2>
            <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            240%
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Company growth</h4>
                            <p class="text-xs text-gray-500 leading-5">Company's remarkable growth journey as we
                                continually innovate and drive towards new heights of success.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            175+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Company growth</h4>
                            <p class="text-xs text-gray-500 leading-5">Our very talented team members are the powerhouse
                                of pagedone and pillars of our success. </p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            625+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-gray-900 font-semibold mb-2">Projects Completed</h4>
                            <p class="text-xs text-gray-500 leading-5">We have accomplished more than 625 projects
                                worldwide and we are still counting many more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="flex flex-col items-center justify-center">
        <p class="mb-4">Create your rescue profile now</p>
        <div class="mb-4">
            <input placeholder="Charity or Shelter Name" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500" value="">
        </div>
        <div class="mb-4">
            <input placeholder="Contact Name" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500" value="">
        </div>
        <div class="mb-4">
            <input placeholder="Contact Email" class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500" value="">
        </div>
        <button class="disabled:opacity-50 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" disabled>Create my page</button>
        <div class="mt-8">
            <h2>Contact Us</h2>
            <p>If you're an animal rescue and are wondering how PAW Rescue Manager can help you, get in touch with us via email, or contact Tristan on +44 7969814864</p>
            <a href="mailto:tristan@petadoptionwebsite.com">
                <div class="mt-4 mb-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded cursor-pointer focus:outline-none focus:shadow-outline">Email Us</div>
            </a>
            <a href="https://wa.me/447969814864" target="_blank" rel="noreferrer">
                <div class="mt-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded cursor-pointer focus:outline-none focus:shadow-outline">WhatsApp</div>
            </a>
        </div>
    </div>
    
@endsection
