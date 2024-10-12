

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

            <ul class="space-y-2 font-medium">
                <li class="">
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                {{-- @if(Auth::user()->role == 'admin')
                <li class="">
                    <a href="{{ route('users.index') }}"
                        class="{{ request()->routeIs('users.index')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class="fa fa-user"></i>
                        </div>
                        <span class="ms-3">Users</span>
                    </a>
                </li>
                @endif --}}

                <li class="">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('app.lost-assets')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-th-large'></i>
                        </div>
                        <span class="flex-1 ms-3 whitespace-nowrap">Lost Assets</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ms-3 dark:bg-blue-900 dark:text-blue-300">
                            {{-- @if(Auth::user()->role == 'admin')
                                {{ Number::abbreviate($lost_assets->count() ?? 0)}}
                            @else
                                {{ Number::abbreviate(Auth::user()->lostAssets->count() ?? 0)}}
                            @endif --}}
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('app.lost-assets.create')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-pencil-square-o'></i>
                        </div>
                        <span class="flex-1 ms-3 whitespace-nowrap">Add Lost Assets</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('app.profile')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-user'></i>
                        </div>

                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-green-800 bg-green-100 rounded-full ms-3 dark:bg-blue-900 dark:text-blue-300">
                            {{-- {{ Number::abbreviate(Auth()->user()->expenses->count()) ?? '0'}} --}}
                            !
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('dashboard.profile.edit')? 'bg-[#7eb908]' :''; }}
                        flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <div
                            lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-pencil-square-o'></i>
                        </div>
                        <span class="flex-1 ms-3 whitespace-nowrap">Setting</span>
                    </a>
                </li>
                <li>
                    <form method="post" action="{{ route('logout') }}" class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        @csrf
                        <button type="submit"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group">
                            <div
                                lass="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                                <i class='fa fa-sign-out'></i>
                            </div>
                            <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>


