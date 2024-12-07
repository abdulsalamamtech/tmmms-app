@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- Information --}}
            <div
                class="bg-white shadow-lg rounded-lg flex items-center gap-2 p-4 w-full dark:bg-slate-800 dark:text-gray-100">
                <div class="md:p-2">
                    <i class="fa fa-truck bg-[#0828b9] p-2 rounded-full md:text-2xl text-white"></i>
                </div>
                <div class="sm:p-2 mb-4 md:mb-0">
                    <h2 class="md:text-xl font-bold mb-2">Amtech Oil & Gas</h2>
                    <p class="text-gray-700 dark:text-slate-400 mb-1">manager@amtechoilandgas.com</p>
                    <p class="text-gray-500 dark:text-gray-300">No. 54 Rimi, Gwarzo Road, Kano State</p>
                </div>
            </div>


            {{-- On going programs --}}
            <div class="h-auto my-6 md:min-h-screen mb-12">
                <div class="flex flex-col md:flex-row gap-2 w-full">

                    <!-- Section A (70%) -->
                    <div class="lg:w-7/12 bg-white shadow-lg rounded-lg p-4 mb-8 md:mb-0 dark:bg-gray-800">
                        <div class="w-full h-full">
                            <iframe class="rounded-lg w-full h-full"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62442.94144125122!2d8.5622784!3d11.996364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1728562227963!5m2!1sen!2sng"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Section B (30%) -->
                    <div class="lg:w-5/12 bg-white shadow-lg rounded-lg p-4 dark:bg-gray-800">
                        <h2 class="text-xl font-bold mb-2">Search</h2>
                        <!-- Search Input -->
                        <div class="mb-4">
                            <input type="text" placeholder="Search..."
                                class="w-full p-2 border border-gray-300 rounded-lg" />
                        </div>
                        <!-- Scrollable Area -->
                        <div class="h-screen md:min-h-100 overflow-y-auto border border-gray-300 rounded-lg p-2">

                            <!-- Delivery 1 -->
                            <div class="bg-blue-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <a href="{{ route('programs.show') }}" class="border p-6 block">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                        <span class="text-sm text-gray-500">Waybill number</span>
                                    </div>
                                    <h3 class="font-bold text-lg">EV-2017002346</h3>
                                    <p class="text-gray-600 text-sm">Product: AGO</p>
                                    <!-- Location Details -->
                                    <div class="mt-4 p-2">
                                        <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                        <p><strong>To:</strong> Enugu, Nigeria</p>

                                    </div>
                                </a>

                                <!-- Driver Info -->
                                <h2 class="mt-4 font-bold text-xl">Driver</h2>
                                <div class="flex items-center space-x-4 ">
                                    <!-- Avatar Placeholder -->
                                    <div
                                        class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-white text-lg font-semibold">
                                        <img src="{{ asset('images/tmmms-logo-white.png') }}" alt="Truck"
                                            class="w-8 rounded-full m-1">
                                    </div>

                                    <!-- Driver Details -->
                                    <div class="px-4">
                                        <h5 class="font-semibold text-gray-800">Abdul Aliyu</h5>
                                        <p class="text-sm text-gray-500">SK Transp LTD</p>
                                    </div>

                                    <!-- Contact Icons -->
                                    <div class="ml-auto flex space-x-2">
                                        <button
                                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600">
                                            <!-- Phone Icon -->
                                            📞
                                        </button>
                                        <button
                                            class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center hover:bg-gray-400">
                                            <!-- Chat Icon -->
                                            💬
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery 2 -->
                            <div class="bg-blue-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <a href="{{ route('programs.show') }}" class="border p-6 block">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                        <span class="text-sm text-gray-500">Waybill number</span>
                                    </div>
                                    <h3 class="font-bold text-lg">EV-2017002346</h3>
                                    <p class="text-gray-600 text-sm">Product: AGO</p>
                                    <!-- Location Details -->
                                    <div class="mt-4 p-2">
                                        <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                        <p><strong>To:</strong> Enugu, Nigeria</p>

                                    </div>
                                </a>

                                <!-- Driver Info -->
                                <h2 class="mt-4 font-bold text-xl">Driver</h2>
                                <div class="flex items-center space-x-4 ">
                                    <!-- Avatar Placeholder -->
                                    <div
                                        class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-white text-lg font-semibold">
                                        <img src="{{ asset('images/tmmms-logo-white.png') }}" alt="Truck"
                                            class="w-8 rounded-full m-1">
                                    </div>

                                    <!-- Driver Details -->
                                    <div class="px-4">
                                        <h5 class="font-semibold text-gray-800">Abdul</h5>
                                        <p class="text-sm text-gray-500">"Transporter 1" LTD</p>
                                    </div>

                                    <!-- Contact Icons -->
                                    <div class="ml-auto flex space-x-2">
                                        <button
                                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600">
                                            <!-- Phone Icon -->
                                            📞
                                        </button>
                                        <button
                                            class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center hover:bg-gray-400">
                                            <!-- Chat Icon -->
                                            💬
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery 3 -->
                            <div class="bg-blue-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <a href="{{ route('programs.show') }}" class="border p-6 block">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                        <span class="text-sm text-gray-500">Waybill number</span>
                                    </div>
                                    <h3 class="font-bold text-lg">EV-2017002346</h3>
                                    <p class="text-gray-600 text-sm">Product: AGO</p>
                                    <!-- Location Details -->
                                    <div class="mt-4 p-2">
                                        <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                        <p><strong>To:</strong> Enugu, Nigeria</p>

                                    </div>
                                </a>

                                <!-- Driver Info -->
                                <h2 class="mt-4 font-bold text-xl">Driver</h2>
                                <div class="flex items-center space-x-4 ">
                                    <!-- Avatar Placeholder -->
                                    <div
                                        class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-white text-lg font-semibold">
                                        <img src="{{ asset('images/tmmms-logo-white.png') }}" alt="Truck"
                                            class="w-8 rounded-full m-1">
                                    </div>

                                    <!-- Driver Details -->
                                    <div class="px-4">
                                        <h5 class="font-semibold text-gray-800">Abdul</h5>
                                        <p class="text-sm text-gray-500">"Transporter 1" LTD</p>
                                    </div>

                                    <!-- Contact Icons -->
                                    <div class="ml-auto flex space-x-2">
                                        <button
                                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600">
                                            <!-- Phone Icon -->
                                            📞
                                        </button>
                                        <button
                                            class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center hover:bg-gray-400">
                                            <!-- Chat Icon -->
                                            💬
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery 3 -->
                            <div class="bg-blue-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <a href="{{ route('programs.show') }}" class="border p-6 block">
                                    <div class="flex items-center mb-2">
                                        <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                        <span class="text-sm text-gray-500">Waybill number</span>
                                    </div>
                                    <h3 class="font-bold text-lg">EV-2017002346</h3>
                                    <p class="text-gray-600 text-sm">Product: AGO</p>
                                    <!-- Location Details -->
                                    <div class="mt-4 p-2">
                                        <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                        <p><strong>To:</strong> Enugu, Nigeria</p>

                                    </div>
                                </a>

                                <!-- Driver Info -->
                                <h2 class="mt-4 font-bold text-xl">Driver</h2>
                                <div class="flex items-center space-x-4 ">
                                    <!-- Avatar Placeholder -->
                                    <div
                                        class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-white text-lg font-semibold">
                                        <img src="{{ asset('images/tmmms-logo-white.png') }}" alt="Truck"
                                            class="w-8 rounded-full m-1">
                                    </div>

                                    <!-- Driver Details -->
                                    <div class="px-4">
                                        <h5 class="font-semibold text-gray-800">Abdul</h5>
                                        <p class="text-sm text-gray-500">"Transporter 1" LTD</p>
                                    </div>

                                    <!-- Contact Icons -->
                                    <div class="ml-auto flex space-x-2">
                                        <button
                                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600">
                                            <!-- Phone Icon -->
                                            📞
                                        </button>
                                        <button
                                            class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center hover:bg-gray-400">
                                            <!-- Chat Icon -->
                                            💬
                                        </button>
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
