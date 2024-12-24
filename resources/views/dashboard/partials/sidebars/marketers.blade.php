<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

        {{-- Start of Sidebar Menu --}}
        <ul class="space-y-2 font-medium mt-2">

            <li class="">
                <a href="{{ route('dashboard.marketers') }}"
                    class="{{ request()->routeIs('dashboard.marketers') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-pie-chart'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard (M+)</span>
                </a>
            </li>

            <li class="" title="View products">
                <a href="{{ route('products.marketers') }}"
                    class="{{ request()->routeIs('products*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-tint'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>

            <li class="" title="ATC: Authority To Collect">
                <a href="{{ route('purchase.marketers') }}"
                    class="{{ request()->routeIs('purchase*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-tint'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Purchase (ATC)</span>
                </a>
            </li>


            <li class="">
                <a href="{{ route('programs.marketers') }}"
                    class="{{ request()->routeIs('programs.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-th-large'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Programs</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ms-3 dark:bg-blue-900 dark:text-blue-300">
                        39
                        {{-- @if (Auth::user()->role == 'admin')
                        {{ Number::abbreviate($lost_assets->count() ?? 0)}}
                    @else
                        {{ Number::abbreviate(Auth::user()->lostAssets->count() ?? 0)}}
                    @endif --}}
                    </span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('customer-assign-program') }}"
                    class="{{ request()->routeIs('customer-assign-program.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        {{-- <i class="fa fa-wpforms"></i> --}}
                        <i class="fa fa-truck"></i>

                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Approved Programs</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('movements.index') }}"
                    class="{{ request()->routeIs('movements.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-gg-circle"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Movements</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-green-800 bg-green-100 rounded-full ms-3 dark:bg-blue-900 dark:text-blue-300">
                        {{-- {{ Number::abbreviate(Auth()->user()->expenses->count()) ?? '0'}} --}}
                        31
                    </span>
                </a>
            </li>



            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        {{-- <i class="fa fa-wpforms"></i> --}}
                        <i class="fa fa-address-card"></i>

                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Waybill & Tickets</span>
                </a>
            </li>

            <hr>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-users"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-simplybuilt"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Companies</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-compress"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Transporters</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-address-card"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Drivers</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-truck"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Trucks</span>
                </a>
            </li>

            <hr>

            <li class="">
                <a href="{{ route('transactions.index') }}"
                    class="{{ request()->routeIs('transactions.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-exchange"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Transactions</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-money"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Payments</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.index*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-bank"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Fund wallet</span>
                </a>
            </li>


            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-credit-card-alt"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Withdraw funds</span>
                </a>
            </li>

            <hr>
            <li>
                <details class="group ">

                    <summary
                        class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }} 
                     p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700
                     flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                        <span class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>

                            <span>
                                Recent Documents
                            </span>
                        </span>
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                    </summary>

                    <article class="px-4 pb-4">
                        <ul class="flex flex-col gap-1 pl-2">
                            <li class="mt-1 p-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-200"><a
                                    href="">Document type ACC1</a></li>
                            <li class="mt-1 p-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-200"><a
                                    href="">Document type ACC2</a></li>
                            <li class="mt-1 p-2 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-200"><a
                                    href="">Document type ACC3</a></li>
                        </ul>
                    </article>

                </details>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-comments"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Messages</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-red-800 bg-red-100 rounded-full ms-3 dark:bg-red-900 dark:text-red-300">
                        {{-- {{ Number::abbreviate(Auth()->user()->expenses->count()) ?? '0'}} --}}
                        3
                    </span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Customer Support</span>
                </a>
            </li>



            <hr>

            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-user"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('fallback') }}"
                    class="{{ request()->routeIs('fallback.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-gear"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                </a>
            </li>

            <li>
                <form method="post" action="{{ route('logout') }}"
                    class="hover:bg-blue-700 dark:hover:bg-gray-700 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white w-full">
                    @csrf
                    <button type="submit" class="w-100 py-2 flex items-center rounded-lg group">
                        <div
                            class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-sign-out'></i>
                        </div>
                        <span class="flex-1 pl-5 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
        <!-- End of Sidebar Menu -->
    </div>
</aside>
