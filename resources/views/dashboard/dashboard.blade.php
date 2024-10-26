@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">

            {{-- Information --}}
            <div class="bg-white shadow-lg rounded-lg flex items-center gap-2 p-4 w-full">
                <div>
                    <div class="h-10 w-10 rounded-full bg-cyan-600"></div>
                </div>
                <div class=" p-4 mb-4 md:mb-0">
                    <h2 class="text-xl font-bold mb-2">Amtech Oil & Gas</h2>
                    <p class="text-gray-700">manager@amtechoilandgas.com</p>
                    <p class="text-gray-500">No. 54 Rimi, Gwarzo Road, Kano State</p>
                </div>
            </div>


            {{-- On going deliverings --}}
            <div class="container w-full my-4 min-h-screen">
                <div class="flex flex-col md:flex-row gap-2 h-full">
                    <!-- Section A (70%) -->
                    <div class="h-full md:w-7/12 bg-white shadow-lg rounded-lg p-4 mb-8 md:mb-0">
                        <div class="w-full h-full">
                            <iframe
                                class="rounded-lg w-full h-full"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62442.94144125122!2d8.5622784!3d11.996364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1728562227963!5m2!1sen!2sng"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        {{-- <div class="bg-yellow-300 w-full h-full"></div> --}}
                    </div>

                    <!-- Section B (30%) -->
                    <div class="md:w-5/12 bg-white shadow-lg rounded-lg p-4">
                        <h2 class="text-xl font-bold mb-2">Search</h2>
                        <!-- Search Input -->
                        <div class="mb-4">
                            <input type="text" placeholder="Search..."
                                class="w-full p-2 border border-gray-300 rounded-lg" />
                        </div>
                        <!-- Scrollable Area -->
                        <div class="h-[85%] overflow-y-auto border border-gray-300 rounded-lg p-2">
                            <p class="mb-2">Information 1</p>

                            <!-- Location Details -->
                            <div class="p-3 mb-2 bg-blue-300 rounded-lg shadow-sm">
                                <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                <p><strong>To:</strong> Enugu, Nigeria</p>
                                <p><strong>Driver:</strong> Abdul (Transporter T LTD)</p>

                                <div class="flex space-x-2 mt-2">
                                    <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600"><i
                                            class="fa fa-mobile"></i></button>
                                    <button class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600"><i
                                            class="fa fa-book"></i></button>
                                </div>
                            </div>

                            <!-- Delivery 1 -->
                            <div class="bg-gray-300 border border-gray-200 rounded-lg p-4 shadow-sm mb-2">
                                <div class="flex items-center mb-2">
                                    <img src="truck-icon.png" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017002346</h3>
                                <p class="text-gray-600 text-sm">Product: AGO</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Enugu, Nigeria</p>
                                    <p><strong>Driver:</strong> Abdul (Transporter T LTD)</p>

                                    <div class="flex space-x-2 mt-2">
                                        <button class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600"><i
                                                class="fa fa-mobile"></i></button>
                                        <button class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600"><i
                                                class="fa fa-book"></i></button>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-2">Information 2</p>
                            <p class="mb-2">Information 3</p>
                            <p class="mb-2">Information 4</p>
                            <p class="mb-2">Information 5</p>
                            <p class="mb-2">Information 6</p>
                            <p class="mb-2">Information 7</p>
                            <p class="mb-2">Information 8</p>
                            <p class="mb-2">Information 9</p>
                            <p class="mb-2">Information 10</p>
                            <p class="mb-2">Information 11</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            {{-- Dashboard --}}
            <div class="p-6 mb-6 bg-white rounded-lg shadow-lg ">
                {{-- Cards --}}
                @include('dashboard.statistics.card-widget')
                {{-- Graphs --}}
                @include('dashboard.statistics.graphs')
                {{-- Tables --}}
                @include('dashboard.statistics.tables')
            </div>
            <!-- End of Statistics -->


            {{-- Charts Container --}}
            <div class="grid grid-cols-12 gap-6 my-5">

                {{-- @if (Auth::user()->role == 'admin') --}}
                {{-- Bar Chart --}}
                {{-- @include('dashboard.statistics.line-bar') --}}
                {{-- End of Bar Chart --}}
                {{-- @else --}}
                {{-- Latest lost assets --}}
                {{-- @include('dashboard.lost-assets.patials.latest-lost-assets') --}}
                {{-- End of Latest lost assets --}}
                {{-- @endif --}}


                <!-- Pie Chart -->
                {{-- @include('dashboard.statistics.pie-chart') --}}
                <!-- End of Pie Chart -->

            </div>
            {{-- End of Charts Container --}}

            {{-- Start Table --}}
            <div class="p-6 my-5">
                {{-- @include('dashboard.lost-assets.patials.table') --}}
            </div>
            {{-- End Table --}}


        </div>
    </div>
@endsection
