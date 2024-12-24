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




            {{-- Tables --}}
            <div class="my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">


                <div class="relative p-8 overflow-x-auto shadow-md sm:rounded-lg">
                    <!-- Header Section -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">Programs</h2>

                        <a href="#">
                            <button class="px-3 md:px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-700"
                                data-modal-target="addUserModal" data-modal-show="addUserModal">
                                <i class='fa fa-tint'></i>
                                <span class="pl-2">View Purchase</span>
                            </button>
                        </a>

                    </div>



                    {{-- Filter Search and Export --}}
                    <div class="flex justify-between items-end gap-4 space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900 px-4">
                        {{-- Filter --}}
                        <div>
                            <div>

                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    <span class="sr-only">Action button</span>
                                    Filter
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Active</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inactive</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Search --}}
                        <div class="md:flex-2">
                            <form class="w-full max-w-md mx-auto">
                                <label for="default-search" class="mb-1 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                </div>
                            </form>
                        </div>

                        {{-- Download and Print --}}
                        <div class="flex items-center justify-center gap-3">
                            <div class="text-right mt-3">
                                {{-- <a href="#">
                                    <button type="button"
                                        class="inline-flex items-center px-2.5 py-1.5 text-sm font-medium text-gray-100 bg-green-500 border border-gray-300 focus:outline-none hover:bg-green-400 focus:ring-4 focus:ring-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        <i class="fa fa-print"></i>
                                        <span class="pl-2">Print</span>
                                    </button>
                                </a> --}}
                                <a href="#" class="">
                                    <button type="button"
                                        class="inline-flex items-center px-2.5 py-1.5 text-sm font-medium text-gray-100 bg-green-500 border border-gray-300 focus:outline-none hover:bg-green-400 focus:ring-4 focus:ring-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        <i class="fa fa-download"></i>
                                        <span class="pl-2">Export</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    
                    
                    </div>


                    {{-- Table Content --}}
                    <div class="overflow-x-scroll py-2">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ATC No.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Customer
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lifted Litters
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Amount Cost (NGN)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Amount Cost (USD)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Truck
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Driver
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- User table record 1 -->
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        ATC-23543600
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Neil Sims Center</div>
                                            <div class="font-normal text-gray-500">+2349091920011</div>
                                            <div class="font-normal text-gray-500">N0.35 Dakata Kawaji, Nassarawa Kano
                                            </div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        23,543,600
                                    </td>
                                    <td class="px-6 py-4">
                                        900,000
                                    </td>
                                    <td class="px-6 py-4">
                                        8,100
                                    </td>
                                    <td class="ps-3">
                                        <div class="text-base font-semibold">SinoTruck</div>
                                        <div class="font-normal text-gray-500">KAN1920011</div>
                                    </td>
                                    <td class="ps-3">
                                        <div class="text-base font-semibold">Sani Umar</div>
                                        <div class="font-normal text-gray-500">+23454655437</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div> Processing
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">

                                        <button id="dropdownMenuIconButton1" data-dropdown-toggle="dropdownDots1"
                                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                            type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 4 15">
                                                <path
                                                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown menu -->
                                        <div id="dropdownDots1"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownMenuIconButton1">
                                                <li>
                                                    <a href="{{ route('programs.show') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                                </li>
                                                <li
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    <!-- Modal toggle -->
                                                    <div href="#" type="button" data-modal-target="editUserModal1"
                                                        data-modal-show="editUserModal1"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        Edit
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Deactivate</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit user modal 1 -->
                                <div id="editUserModal1" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full bg-white dark:bg-gray-700">

                                        <!-- Modal content -->
                                        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Add program
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="addUserModal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6 dark:text-white">

                                                {{-- Basic Information --}}
                                                <div class="w-100 text-center">Basic Information</div>
                                                <div class="grid grid-cols-6 gap-6">


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="first-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Litter to lift <span class="text-red-500">*</span>
                                                        </label>
                                                        <input type="number" name="first-name" id="first-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="July Starter program" required="">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="amount-cost"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Amount Cost</label>
                                                        <input type="number" name="last-name" id="last-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="150000" value="343576" required="" disabled>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Truck Owner
                                                            <span class="text-red-500">*</span>
                                                        </label>
                                                        <select type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="workshop" required="" value="">
                                                            <option value="1">Company</option>
                                                            <option value="2">Transporter</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="slots"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Trucks
                                                            <span class="text-red-500">*</span>
                                                        </label>
                                                        <select type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="truck and plate number" required=""
                                                            value="">
                                                            <option value="1">SinoTruck 23542365355</option>
                                                            <option value="2">BenTruck 323654745</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-12">
                                                        <label for="first-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Customer's Address <span class="text-red-500">*</span>
                                                        </label>
                                                        <input type="text" name="first-name" id="first-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Bonnie program center" required="">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            State <span class="text-red-500">*</span>
                                                        </label>
                                                        <select type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="workshop" required="" value="">
                                                            <option value="1">FCT</option>
                                                            <option value="2">Kaduna</option>
                                                            <option value="2">Zamfara</option>
                                                            <option value="2">Kano</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="slots"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            LGA/City
                                                            <span class="text-red-500">*</span>
                                                        </label>
                                                        <select type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="truck and plate number" required=""
                                                            value="">
                                                            <option value="1">Fagge</option>
                                                            <option value="2">Gwarzo</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                {{-- Booking Information --}}
                                                <div class="w-100 text-center">Drivers Information</div>


                                                {{-- First Driver --}}
                                                <div class="flex gap-6">
                                                    <div class="col-span-6 sm:col-span-3 w-100 md:w-6/12">
                                                        <label for="amount-cost"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Driver's Name (1st)</label>
                                                        <input type="text" name="last-name" id="last-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Mr. Issac James" required=""
                                                            value="Mal. Adamu Idris" disabled>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3 w-100 md:w-6/12">
                                                        <label for="slots"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Driver's Number (1st)
                                                        </label>
                                                        <input type="tel" name="phone-number" id="phone-number"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="+23542623568" required="" value="+2143426647"
                                                            disabled>
                                                    </div>
                                                </div>

                                                {{-- Second driver --}}
                                                <div class="flex gap-6">
                                                    <div class="col-span-6 sm:col-span-3 w-100 md:w-6/12">
                                                        <label for="amount-cost"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Driver's Name (2nd)</label>
                                                        <input type="text" name="last-name" id="last-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Mr. Issac James" required=""
                                                            value="Muhammad Bello" disabled>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3 w-100 md:w-6/12">
                                                        <label for="slots"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Driver's Number (2nd)
                                                        </label>
                                                        <input type="tel" name="phone-number" id="phone-number"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="+23542623568" required="" value="+2134653675"
                                                            disabled>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>





                            </tbody>
                        </table>
                    </div>

                    {{-- Paginate --}}
                    <div class="text-center pt-4">
                        <div>Page: <span>5 of</span> 10</div>
                    </div>
                </div>

            </div>
            {{-- End of Table --}}

        </div>

    </div>
@endsection
