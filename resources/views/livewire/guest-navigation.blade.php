<nav>
    <div class="top-nav flex items-center justify-between px-3 md:px-6 py-3 bg-zinc-50 border-b">
        <div class="flex items-center gap-3 text-gray-800 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-gray-200" viewBox="0 0 24 24"><path fill="currentColor" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-gray-200" viewBox="0 0 24 24"><path fill="currentColor" d="M18.205 2.25h3.308l-7.227 8.26l8.502 11.24H16.13l-5.214-6.817L4.95 21.75H1.64l7.73-8.835L1.215 2.25H8.04l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-gray-200" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
        </div>
        <div class="hidden md:flex items-center gap-3 text-xs text-gray-800">
            <a class="hover:text-gray-900" href="#">Help</a>

            @if (Route::has('login'))
                @auth
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('dashboard') }}">
                                    <span class="text-xs">{{ __('Dashboard') }}</span>
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    <span class="text-xs">{{ __('Profile') }}</span>
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        <span class="text-xs">{{ __('Log Out') }}</span>
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a class="hover:text-gray-900" href="{{ route('login') }}">Sign In</a>
                    <span>|</span>
                    @if (Route::has('register'))
                        <a class="hover:text-gray-900" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif

        </div>
        <button class="md:hidden block">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12m-8 6v-.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2v.8q0 .825-.587 1.413T18 20H6q-.825 0-1.412-.587T4 18m2 0h12v-.8q0-.275-.137-.5t-.363-.35q-1.35-.675-2.725-1.012T12 15q-1.4 0-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2zm6-8q.825 0 1.413-.587T14 8q0-.825-.587-1.412T12 6q-.825 0-1.412.588T10 8q0 .825.588 1.413T12 10m0 8"/></svg>
        </button>
    </div>

    {{--  --}}

    <div class='bg-white w-full py-3 md:px-6 px-3 border-b'>
        <div class='w-full flex justify-between mx-auto'>
            <a class='logo flex gap-3 items-center' href="/">
                <img src="/logo-b.png" alt="logo" class="h-9 md:h-12">
            </a>

            <div class='hidden md:flex items-center gap-2'>
                <div class='hidden md:flex items-center gap-2'>
                    {{-- Customize --}}
                    <div x-data="{ customizeMenu: false }" @mouseleave="customizeMenu = false">
                        <button
                            class="bg-zinc-800 rounded-xl px-3 py-2 text-white text-xs flex items-center gap-2 font-bold uppercase"
                            x-on:click="customizeMenu = ! customizeMenu"
                            @mouseover="customizeMenu = true"
                        >
                            <img src="/images/color.png" class="h-6 w-6">
                            Custom Builder
                            <i class="arrow-down"></i>
                        </button>
                        <div class="relative">
                            <div
                                class="bg-white shadow rounded-md p-3 min-w-[220px] top-0 w-full absolute z-10"
                                x-show="customizeMenu"
                                x-cloak
                                @click.away="customizeMenu = false" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <ul
                                    class="[&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]">
                                    <li><a href="{{route('customize-gloves-select-web')}}"><button class="w-full text-left">Dream Gloves</button></a></li>
                                    <li><a href="{{route('customize-batting-gloves-types')}}"><button class="w-full text-left">Dream Batting Gloves</button></a></li>
                                    <li><a href="{{route('customize-belts')}}"><button class="w-full text-left">Dream Belts</button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Baseball --}}
                    <div x-data="{ show: false, battingGloves: false, fieldingGloves: false, infieldChild: false, outfieldChild: false }" @mouseleave="show = false">
                        <button
                            class="text-zinc-800 rounded px-3 py-1 text-[13px] font-bold uppercase"
                            x-on:click="show = ! show"
                            @mouseover="show = true"
                        >Baseball</button>
                        <div class="relative">
                            <div
                                class="bg-white shadow rounded-md p-3 min-w-[220px] top-0 w-full absolute z-10"
                                x-show="show"
                                x-cloak
                                @click.away="show = false" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <ul
                                    class="[&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]">
                                    <li class="flex items-center justify-between"
                                        x-on:click="battingGloves = true"
                                        @click.away="battingGloves = false"
                                        >
                                        Batting Gloves
                                        <i class="arrow"></i>
                                    </li>
                                    <div class="bg-white shadow rounded-md max-w-[180px] w-full p-3 absolute -right-[185px] -bottom-4 [&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]"
                                        x-show="battingGloves" x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95">
                                        <li><a href="{{ route('baseball-batting-gloves-adult') }}"><button class="w-full text-left">Adult</button></a></li>
                                        <li><a href="{{ route('baseball-batting-gloves-youth') }}"><button class="w-full text-left">Youth</button></a></li>
                                    </div>

                                    <li class="flex items-center justify-between"
                                        x-on:click="fieldingGloves = ! fieldingGloves"
                                    >
                                        Fielding Gloves
                                        <i class="arrow"></i>
                                    </li>
                                    <div class="bg-white shadow rounded-md max-w-[180px] w-full p-3 absolute -right-[185px] -bottom-4 [&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]"
                                        x-show="fieldingGloves" x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95">

                                        <li class="flex items-center justify-between"
                                            x-on:click="infieldChild = true"
                                            @click.away="infieldChild = false"
                                        >
                                            Infield
                                            <i class="arrow"></i>
                                        </li>
                                            <div class="bg-white shadow rounded-md max-w-[180px] w-full p-3 absolute -right-[185px] -bottom-4 [&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]"
                                                x-show="infieldChild" x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-95">
                                                <li><a href="{{ route('baseball-fielding-gloves-infield-classic') }}"><button class="w-full text-left">Classic</button></a></li>
                                                <li><a href="{{ route('baseball-fielding-gloves-infield-premier') }}"><button class="w-full text-left">Premier</button></a></li>
                                            </div>

                                        <li class="flex items-center justify-between"
                                            x-on:click="outfieldChild = true"
                                            @click.away="outfieldChild = false"
                                        >
                                            Outfield
                                            <i class="arrow"></i>
                                        </li>
                                            <div class="bg-white shadow rounded-md max-w-[180px] w-full p-3 absolute -right-[185px] -bottom-4 [&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]"
                                                x-show="outfieldChild" x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-95">
                                                <li><a href="{{ route('baseball-fielding-gloves-outfield-classic') }}"><button class="w-full text-left">Classic</button></a></li>
                                                <li><a href="{{ route('baseball-fielding-gloves-outfield-premier') }}"><button class="w-full text-left">Premier</button></a></li>
                                            </div>
                                    </div>

                                    <li><a href="{{ route('baseball-guard') }}"><button class="w-full text-left">Guards</button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Softball --}}
                    <a href="{{ route('clearance') }}" class='text-zinc-800 rounded px-3 py-1 text-[13px] font-bold'><button class="w-full text-left uppercase">Softball</button></a>

                    {{-- Apparel --}}
                    <div x-data="{ apparelMenu: false }" @mouseleave="apparelMenu = false">
                        <button
                            class="text-zinc-800 rounded px-3 py-1 text-[13px] font-bold uppercase"
                            x-on:click="apparelMenu = ! apparelMenu"
                            @mouseover="apparelMenu = true"
                        >Apparel</button>
                        <div class="relative">
                            <div
                                class="bg-white shadow rounded-md p-3 min-w-[220px] top-0 w-full absolute z-10"
                                x-show="apparelMenu"
                                x-cloak
                                @click.away="apparelMenu = false" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <ul
                                    class="[&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]">
                                    <li><a href="{{ route('apparel-belts') }}"><button class="w-full text-left">Belts</button></a></li>
                                    <li><a href="{{ route('apparel-clothing') }}"><button class="w-full text-left">Clothing</button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('clearance') }}" class='text-zinc-800 rounded px-3 py-1 text-[13px] font-bold'><button class="w-full text-left uppercase">Clearance</button></a>
                    <a href="{{ route('accessories') }}" class='text-zinc-800 rounded px-3 py-1 text-[13px] font-bold'><button class="w-full text-left uppercase">Accessories</button></a>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-4">
                {{-- <div class="search hidden md:flex items-center rounded-xl border border-zinc-800 overflow-hidden">
                    <span class="px-2 bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7"/></svg>
                    </span>
                    <input type="text" placeholder="Search" class="bg-transparent py-2 focus:outline-none outline-none border-0">
                </div> --}}

                {{-- Wishlist --}}
                {{-- <a href="{{ route('wish-list') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24"><path fill="currentColor" d="m12 21l-1.45-1.3q-2.525-2.275-4.175-3.925T3.75 12.812Q2.775 11.5 2.388 10.4T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.3 0 2.475.55T12 4.75q.85-1 2.025-1.55t2.475-.55q2.35 0 3.925 1.575T22 8.15q0 1.15-.387 2.25t-1.363 2.412q-.975 1.313-2.625 2.963T13.45 19.7zm0-2.7q2.4-2.15 3.95-3.687t2.45-2.675q.9-1.138 1.25-2.026T20 8.15q0-1.5-1-2.5t-2.5-1q-1.175 0-2.175.662T12.95 7h-1.9q-.375-1.025-1.375-1.687T7.5 4.65q-1.5 0-2.5 1t-1 2.5q0 .875.35 1.763t1.25 2.025q.9 1.137 2.45 2.675T12 18.3m0-6.825"/></svg>
                </a> --}}
                <button class="relative" wire:click="toNext()">
                    <span class="absolute -top-2 -right-2 w-4 h-4 rounded-full bg-red-500 text-white text-[9px] font-bold flex items-center justify-center">
                        <livewire:client.cart-counter />
                    </span>
                    <x-icons.cart class="w-5 h-5 text-gray-600" />
                </button>
            </div>
            <button class="block md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2 3.75A.75.75 0 0 1 2.75 3h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75M2 8a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 8m6 4.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/></svg>
            </button>
        </div>
    </div>
</nav>
