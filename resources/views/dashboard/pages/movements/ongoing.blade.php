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

            {{-- Statistica widge --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">

                <div class="grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <div
                        class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Today's
                                Money</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                $53k</h4>
                        </div>
                        <div class="dark:border-gray-500 border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+55%</strong>&nbsp;than last week
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Today's
                                Users</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                2,300</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+3%</strong>&nbsp;than last month
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                New Clients
                            </p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                3,462</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Sales</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                $103,430</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                            </p>
                        </div>
                    </div>
                </div>

            </div>



            {{-- On going deliverings --}}
            <div class="h-auto my-6 md:min-h-screen mb-12">
                <!-- Header Section -->
                <div class="flex justify-between items-center mb-4 px-4">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">Movements</h2>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        All Movements
                    </button>
                </div>
                <div class="flex flex-col md:flex-row gap-2 w-full">

                    <!-- Section A (70%) -->
                    <div class="lg:w-7/12 bg-white shadow-lg rounded-lg p-4 mb-8 md:mb-0">
                        <div class="w-full h-full">
                            <iframe class="rounded-lg w-full h-full"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62442.94144125122!2d8.5622784!3d11.996364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1728562227963!5m2!1sen!2sng"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Section B (30%) -->
                    <div class="lg:w-5/12 bg-white shadow-lg rounded-lg p-4">
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
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017002346</h3>
                                <p class="text-gray-600 text-sm">Product: AGO</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Enugu, Nigeria</p>

                                </div>

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

                            <!-- Delivery 2 -->
                            <div class="bg-blue-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017002346</h3>
                                <p class="text-gray-600 text-sm">Product: AGO</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Enugu, Nigeria</p>

                                </div>

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
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017002346</h3>
                                <p class="text-gray-600 text-sm">Product: AGO</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Enugu, Nigeria</p>

                                </div>

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
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('images/tmmms-logo.svg') }}" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017002346</h3>
                                <p class="text-gray-600 text-sm">Product: AGO</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Enugu, Nigeria</p>

                                </div>

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
            {{-- End of On going deliverings --}}







        </div>
    </div>
@endsection
