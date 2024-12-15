

    {{-- For custom colors on the sidebar --}}
    @php
        $brand = [
            'bg' => '#5508b9',
            'bg-dark' => '#550899',

            'bg-accent' => '#0828b9',
            'bg-color' => '#0828ad'
        ];
    @endphp




    {{-- Refinery routes --}}

    {{-- Check if auth user is refinery --}}
    {{-- @if ((request()->is('refinery/*') || request()->is('refineries/*')) 
        || auth()->user()->role == 'refinery'
    ) --}}
    @if (request()->is('refinery') || request()->is('refinery/*') || request()->is('refineries/*'))
        @include('dashboard.partials.sidebars.refineries');
    
    {{-- Marketers routes --}}
    @elseif (request()->is('marketer')  || request()->is('marketer/*') || request()->is('marketers/*'))
        @include('dashboard.partials.sidebars.marketers');
    
    {{-- Transporters routes --}}
    @elseif (request()->is('transporter') || request()->is('transporter/*') || request()->is('transporters/*'))
        @include('dashboard.partials.sidebars.transporters');
    @else
        @include('dashboard.partials.sidebars.index');
    @endif