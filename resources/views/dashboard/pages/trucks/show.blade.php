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


            {{-- ATC Information --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div>
                    <div class="w-100 bg-white shadow-lg rounded-lg p-4 mb-8 md:mb-0 dark:bg-gray-800 h-80 max-h-[50vh]">
                        <div class="w-100 h-100">
                            <iframe class="rounded-lg w-full h-full"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62442.94144125122!2d8.5622784!3d11.996364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1728562227963!5m2!1sen!2sng"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
                <div class="space-y-3 py-4 px-2">


                    <div class="pt-3">
                        <h2 class="text-xl font-semibold pb-2 text-gray-900 dark:text-gray-200">From Deport</h2>
                        <!-- Country -->
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">From:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">Nigeria 🇳🇬</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Name</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">Dangote Refinery</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Address:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">No.654 Lekki, Lagos State, Nigeria</div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold pb-2 text-gray-900 dark:text-gray-200">To Customer</h2>
                        <!-- Country -->
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">To:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">Nigeria 🇳🇬</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Name</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">HU Oil & Gas</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Address:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">No.11 Kawaji, Kano State, Nigeria</div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold pb-2 text-gray-900 dark:text-gray-200">Product</h2>
                        {{-- IDS user_id, center_id, event_id, booked_id, year --}}
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">ATC No:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">121320562024</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Program ID:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">PRO_346543676</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Type:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">AGO</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Litters:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">67,000,000</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Cost (NGN):</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">600,000</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Cost (USD):</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">61,000</div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold pb-2 text-gray-900 dark:text-gray-200">Transporter</h2>
                        <!-- Country -->
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Driver Name:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">Mus Aliyu adams</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Driver No:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">+232534654</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Date:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">23/05/2024</div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold pb-2 text-gray-900 dark:text-gray-200">Location</h2>
                        <!-- Country -->
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Current address:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">No. 74 zaria road Kaduna State</div>
                        </div>
                        <div class="font-semibold flex justify-between items-start border-b px-2">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Status:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">pending</div>
                        </div>
                    </div>










                </div>
            </div>



        </div>

    </div>
@endsection
