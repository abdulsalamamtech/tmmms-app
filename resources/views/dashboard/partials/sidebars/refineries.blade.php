<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

        {{-- Load lost assets --}}
        {{-- @php
        if(request()->user()->role == 'admin'){
            $lostAssets = App\Models\LostAsset::all();
        }else{
            $lostAssets = request()->user()->lostAssets;
        }
        $lostAssets->load(['user', 'images']);
        $lost_assets = $lostAssets;
    @endphp --}}

        {{-- Start of Sidebar Menu --}}
        <ul class="space-y-2 font-medium mt-2">

            <li class="">
                <a href="{{ route('dashboard.refinery') }}"
                    class="{{ request()->routeIs('dashboard.refinery') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-pie-chart'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard (R+)</span>
                </a>
            </li>

  
            <li class="" title="ATC: Authority To Collect">
                <a href="{{ route('products.index') }}"
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
                <a href="{{ route('purchase.index') }}"
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
                <a href="{{ route('programs.index') }}"
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
                <a href="{{ route('waybill-and-ticket.index') }}"
                    class="{{ request()->routeIs('waybill-and-ticket.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
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
                <a href="{{ route('marketers.index') }}"
                    class="{{ request()->routeIs('marketers.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-simplybuilt"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Marketers</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('transporters.index') }}"
                    class="{{ request()->routeIs('transporters.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-compress"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Transporters</span>
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
                <a href="{{ route('pending.transactions') }}"
                    class="{{ request()->routeIs('pending.transactions.*') ? 'text-white bg-[' . $brand['bg-color'] . ']' : '' }}
                flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-money"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Pending Payments</span>
                </a>
            </li>


            <hr>



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
