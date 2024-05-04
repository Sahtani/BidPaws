@extends('layouts.admin')

@section('content')
    <div class=" mx-20 px-4 py-8 sm:px-8 sm:ml-64 bg-white w-full h-16 flex ">
        <div class="text-xl text-[#1e1b4b] font-bold">
            {{ $user->name }}
        </div>

    </div>
    <div class=" mx-20 mt-20 px-4 py-8 sm:px-8 sm:ml-64">
        <div class="bg-white w-full mb-10 rounded rounded-lg">
            <div class="flex items-center justify-between">

                <div class="flex mx-4 py-10">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                        <path fill="#1e1b4b"
                            d="M11.9999 11.7769C14.2681 11.7769 16.107 9.54344 16.107 6.78839C16.107 4.03328 15.5032 1.7998 11.9999 1.7998C8.49643 1.7998 7.8927 4.03328 7.8927 6.78839C7.89276 9.54344 9.73164 11.7769 11.9999 11.7769Z">
                        </path>
                        <path fill="#1e1b4b"
                            d="M19.7486 19.192C19.6726 14.3925 19.0458 13.0249 14.2492 12.1592C14.2492 12.1592 13.5739 13.0195 12.0002 13.0195C10.4264 13.0195 9.75123 12.1592 9.75123 12.1592C5.00695 13.0154 4.34189 14.3627 4.25448 19.036C4.24737 19.4176 4.2441 19.4376 4.2428 19.3933C4.24305 19.4763 4.24342 19.6298 4.24342 19.8976C4.24342 19.8976 5.38541 22.1997 12.0002 22.1997C18.615 22.1997 19.7571 19.8976 19.7571 19.8976C19.7571 19.7256 19.7573 19.6059 19.7574 19.5246C19.7561 19.552 19.7534 19.4989 19.7486 19.192Z">
                        </path>
                        <path fill="#1e1b4b" opacity="0.8"
                            d="M17.6996 10.8864C19.5419 10.8864 21.0353 9.07247 21.0353 6.83485C21.0353 4.59717 20.545 2.7832 17.6996 2.7832C17.221 2.7832 16.8092 2.8347 16.4549 2.93083C17.1121 4.14237 17.2021 5.61392 17.2021 6.78855C17.2021 8.11854 16.8416 9.38831 16.1777 10.4397C16.634 10.7247 17.1511 10.8864 17.6996 10.8864Z">
                        </path>
                        <path fill="#1e1b4b" opacity="0.8"
                            d="M23.9929 16.9091C23.9311 13.0111 23.422 11.9004 19.5263 11.1973C19.5263 11.1973 18.9779 11.8961 17.6997 11.8961C17.6469 11.8961 17.5956 11.8945 17.5452 11.8922C18.3573 12.2583 19.0961 12.7682 19.6402 13.5142C20.5807 14.8039 20.797 16.5365 20.8416 19.0818C23.4626 18.5639 23.9997 17.4823 23.9997 17.4823C23.9997 17.3414 23.9997 17.2447 24 17.1786C23.9989 17.2019 23.9968 17.1602 23.9929 16.9091Z">
                        </path>
                        <path fill="#1e1b4b" opacity="0.8"
                            d="M6.30007 10.8864C6.8486 10.8864 7.36559 10.7246 7.82213 10.4397C7.15819 9.38831 6.79766 8.11854 6.79766 6.78855C6.79766 5.61386 6.88773 4.14231 7.54481 2.93083C7.19058 2.8347 6.7788 2.7832 6.30007 2.7832C3.45471 2.7832 2.96448 4.59717 2.96448 6.83485C2.96448 9.07241 4.45791 10.8864 6.30007 10.8864Z">
                        </path>
                        <path fill="#1e1b4b" opacity="0.8"
                            d="M6.4547 11.8922C6.40438 11.8945 6.35313 11.8961 6.30015 11.8961C5.02197 11.8961 4.47357 11.1973 4.47357 11.1973C0.57795 11.9004 0.0688051 13.011 0.00710924 16.9091C0.00309098 17.1602 0.00105093 17.2019 0 17.1785C0.000123639 17.2446 0.000247278 17.3413 0.000247278 17.4823C0.000247278 17.4823 0.537459 18.5638 3.15823 19.0817C3.20305 16.5365 3.41917 14.8039 4.35988 13.5141C4.90389 12.7682 5.64258 12.2583 6.4547 11.8922Z">
                        </path>
                    </svg>
                    <h6 class="ml-2 text-[#1e1ab4b] font-bold ">Users</h6>
                </div>
                <div>
                    <div class="flex items-center">
                        <span class="text-sm font-bold text-[#1e1b4b]">{{ $totalUsers }} Users</span>
                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 inline-block align-text-bottom">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.125 9.41526C9.19093 9.41526 10.847 7.73779 10.847 5.64513C10.847 3.55247 9.19093 1.875 7.125 1.875C5.05908 1.875 3.40303 3.55247 3.40303 5.64513C3.40303 7.73779 5.05908 9.41526 7.125 9.41526ZM7.125 11.2614C4.09067 11.2614 1.5 11.7466 1.5 13.6848C1.5 15.6224 4.0749 16.125 7.125 16.125C10.1586 16.125 12.75 15.6399 12.75 13.7016C12.75 11.7633 10.1751 11.2614 7.125 11.2614ZM14.9235 7.1909H15.8258C16.1972 7.1909 16.5 7.49798 16.5 7.87461C16.5 8.25124 16.1972 8.55832 15.8258 8.55832H14.9235V9.44129C14.9235 9.81792 14.6214 10.125 14.2492 10.125C13.8778 10.125 13.575 9.81792 13.575 9.44129V8.55832H12.6742C12.3021 8.55832 12 8.25124 12 7.87461C12 7.49798 12.3021 7.1909 12.6742 7.1909H13.575V6.30871C13.575 5.93208 13.8778 5.625 14.2492 5.625C14.6214 5.625 14.9235 5.93208 14.9235 6.30871V7.1909Z">
                            </path>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
        <div class="overflow-y-hidden rounded-lg border">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="bg-slate-200  border text-left text-xs font-semibold uppercase tracking-widest text-gray-700">
                            <th class="px-5 py-3 ">Full Name</th>
                            <th class="px-5 py-3">User Role</th>
                            <th class="px-5 py-3">Created at</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-500">
                        <tr>
                            @foreach ($users as $user)
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <div class="h-10 w-10 flex-shrink-0 ">
                                                <img src="{{ asset('storage/usersImages/'.$user->image) }}" class="rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $user->role }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $user->created_at->format('M d, Y') }}</p>

                                </td>
                                <td class="border-b border-gray-200 bg-white px- py-5 text-sm">
                                    @if ($user->access === 1)
                                    <span
                                    class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Inactive</span>
                                    @else
                                    <span
                                            class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Active</span>
                                    @endif

                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <form method="POST" action="{{ route('admin.toggleAccess', $user->id) }}">
                                        @method('PATCH')
                                        @csrf
                                        @if ($user->access === 1)
                                        <button
                                        type="submit"class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Enable
                                        Access</button>
                                        @else
                                        <button type="submit"
                                        class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Disable
                                        Access</button>
                                           
                                        @endif
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
