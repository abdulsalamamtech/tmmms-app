@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">

            <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-lg w-100 my-3">
                <div class="p-4 bg-indigo-600 bg-opacity-75 rounded-full">
                    <i class="fa fa-truck w-100 h-100 text-gray-100"></i>
                </div>

                <div class="mx-5">
                    <h4 class="text-2xl font-semibold text-gray-700">Amtech Oil & Gas</h4>
                    <h5 class="text-xl text-gray-600">amtech.oil.and.gas@tmmm.com</h5>
                    <div class="text-gray-500">No. 56 Dakata Kawaji, Nas LGA, kano State.</div>
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





            <div class="max-h-screen flex flex-col lg:flex-row bg-gray-800">

                <!-- Left: Main meeting section -->
                <div class="flex-grow relative flex items-center justify-center bg-gray-900">
                    <div class="w-full h-full p-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62442.94144125122!2d8.5622784!3d11.996364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1728562227963!5m2!1sen!2sng"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right: Side panel -->
                {{-- <div class="w-full lg:w-64 lg:h-full h-64"> --}}
                <div class="w-full lg:w-64 h-100 overflow-y-hidden">


                    <div class="p-2 w-full">
                        <h2 class="text-lg text-gray-100 font-semibold mb-2">Search For Ongoing Delivery</h2>
                        <form class="flex w-100 justify-center">
                            <input type="text" name="" id="" class="w-80">
                            <button type="submit" class="w-20 p-4 bg-blue-800 text-gray-100"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="bg-red-700 max-h-full">
                        <div class="space-y-4 p-4 h-full overflow-y-scroll">

                            <!-- Delivery 1 -->
                            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
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
                                        <button
                                            class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600"><i class="fa fa-mobile"></i></button>
                                        <button
                                            class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600"><i class="fa fa-book"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery 2 (Repeat for additional deliveries) -->
                            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <img src="truck-icon.png" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017003323</h3>
                                <p class="text-gray-600 text-sm">Product: PMS</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Suleja, Nigeria</p>
                                    <p><strong>Driver:</strong> Abdul (Transporter T LTD)</p>

                                    <div class="flex space-x-2 mt-2">
                                        <button
                                            class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600">Call</button>
                                        <button
                                            class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600">Message</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery 2 (Repeat for additional deliveries) -->
                            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <img src="truck-icon.png" alt="Truck" class="h-8 mr-2">
                                    <span class="text-sm text-gray-500">Waybill number</span>
                                </div>
                                <h3 class="font-bold text-lg">EV-2017003323</h3>
                                <p class="text-gray-600 text-sm">Product: PMS</p>

                                <!-- Location Details -->
                                <div class="mt-4">
                                    <p><strong>From:</strong> Dangote Depot, Lekki, Lagos Nigeria</p>
                                    <p><strong>To:</strong> Suleja, Nigeria</p>
                                    <p><strong>Driver:</strong> Abdul (Transporter T LTD)</p>

                                    <div class="flex space-x-2 mt-2">
                                        <button
                                            class="p-2 rounded-full bg-blue-500 text-white hover:bg-blue-600">Call</button>
                                        <button
                                            class="p-2 rounded-full bg-green-500 text-white hover:bg-green-600">Message</button>
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
