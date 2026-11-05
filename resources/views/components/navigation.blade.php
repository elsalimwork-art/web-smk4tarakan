<div>
    @php
    $menus = [
    [
    'label' => 'Beranda',
    'url' => '/',
    'active' => request()->path() === '/',
    ],
    [
    'label' => 'Tentang',
    'url' => '/visi-misi',
    'active' => request()->is('visi-misi*')
    || request()->is('makna-logo*')
    || request()->is('program-keahlian*'),
    ],
    [
    'label' => 'Manajemen',
    'url' => '/manajemen',
    'active' => request()->is('manajemen*'),
    ],
    [
    'label' => 'SPMB',
    'url' => '/spmb',
    'active' => request()->is('spmb*'),
    ],
    [
    'label' => 'Berita',
    'url' => '/berita',
    'active' => request()->is('berita*'),
    ],
    [
    'label' => 'Agenda',
    'url' => '/agenda',
    'active' => request()->is('agenda*'),
    ],
    [
    'label' => 'Kontak',
    'url' => '/kontak',
    'active' => request()->is('kontak*'),
    ],
    ];
    @endphp

    <header
        x-data="{ mobileMenu: false }"
        @keydown.escape.window="mobileMenu = false"
        class="fixed inset-x-0 top-0 z-[100] w-full bg-[#2B1745] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#F3F8FF] antialiased shadow-[0_4px_12px_rgba(0,0,0,0.18)]">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <div class="mx-auto w-full max-w-[1600px] px-4 sm:px-6 lg:px-8">
            {{-- MAIN NAVIGATION --}}
            <div class="flex min-h-[76px] items-center justify-between gap-3 sm:gap-4 lg:min-h-[88px]">

                <a
                    href="{{ url('/') }}"
                    class="flex min-w-0 shrink-0 items-center gap-3 rounded-lg transition-opacity duration-200 hover:opacity-90 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FDC003] focus-visible:ring-offset-4 focus-visible:ring-offset-[#2B1745] sm:gap-4">
                    <img
                        src="{{ asset('images/logo-smkn4.png') }}"
                        alt="Logo SMK Negeri 4 Tarakan"
                        class="h-[52px] w-[48px] shrink-0 object-contain sm:h-[60px] sm:w-[56px] lg:h-[64px] lg:w-[60px]">

                    <div class="flex min-w-0 flex-col justify-center">
                        <h1 class="whitespace-nowrap text-[15px] font-extrabold leading-tight tracking-[-0.02em] text-white sm:text-lg lg:text-xl">
                            SMK NEGERI 4 TARAKAN
                        </h1>
                        <p class="mt-1.5 hidden whitespace-nowrap text-xs italic leading-relaxed text-[#E5DDEA] sm:block lg:text-sm">
                            "Unggul dalam Mutu, Tinggi dalam Prestasi,
                            Taklukkan Dunia dengan IT"
                        </p>
                    </div>
                </a>

                {{-- DESKTOP MENU --}}
                <nav class="ml-2 hidden shrink-0 items-center gap-0.5 lg:flex xl:ml-4 xl:gap-1" aria-label="Navigasi utama">
                    @foreach ($menus as $menu)
                    <a
                        href="{{ url($menu['url']) }}"
                        @class([ 'relative flex min-h-[60px] items-center justify-center whitespace-nowrap px-2.5 text-sm font-semibold transition-colors duration-200 focus:outline-none focus-visible:text-[#FDC003] focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-[#FDC003] xl:px-3 xl:text-base 2xl:px-3.5 2xl:text-lg' , 'text-[#FDC003]'=> $menu['active'],
                        'text-white hover:text-[#FDC003]' => !$menu['active'],
                        ])
                        @if ($menu['active']) aria-current="page" @endif>
                        {{ $menu['label'] }}

                        {{-- ACTIVE UNDERLINE --}}
                        @if ($menu['active'])
                        <span class="absolute bottom-[8px] left-2.5 right-2.5 h-[3px] rounded-full bg-[#FDC003] xl:left-3 xl:right-3" aria-hidden="true"></span>
                        @endif
                    </a>
                    @endforeach
                </nav>

                {{-- MOBILE HAMBURGER BUTTON --}}
                <button
                    type="button"
                    @click="mobileMenu = !mobileMenu"
                    :aria-expanded="mobileMenu.toString()"
                    aria-label="Buka atau tutup menu navigasi"
                    class="flex h-11 w-11 shrink-0 cursor-pointer items-center justify-center rounded-xl text-white transition-colors duration-200 hover:bg-white/10 active:bg-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FDC003] lg:hidden">
                    {{-- HAMBURGER ICON --}}
                    <svg
                        x-show="!mobileMenu"
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    {{-- CLOSE ICON --}}
                    <svg
                        x-show="mobileMenu"
                        x-cloak
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- MOBILE NAVIGATION DROPDOWN --}}
            <div
                x-show="mobileMenu"
                x-cloak
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="-translate-y-2 opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="translate-y-0 opacity-100"
                x-transition:leave-end="-translate-y-2 opacity-0"
                class="border-t border-white/10 pb-5 lg:hidden">
                <nav class="flex flex-col gap-1.5 pt-4" aria-label="Navigasi mobile">
                    @foreach ($menus as $menu)
                    <a
                        href="{{ url($menu['url']) }}"
                        @click="mobileMenu = false"
                        @class([ 'flex min-h-12 items-center rounded-xl border-l-[3px] px-4 text-base font-semibold transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-[#FDC003] sm:text-lg' , 'border-[#FDC003] bg-white/10 text-[#FDC003]'=> $menu['active'],
                        'border-transparent text-white hover:border-white/30 hover:bg-white/10 hover:text-[#FDC003]' => !$menu['active'],
                        ])
                        @if ($menu['active']) aria-current="page" @endif>
                        {{ $menu['label'] }}
                    </a>
                    @endforeach
                </nav>

                <p class="px-4 pt-5 text-xs italic leading-relaxed text-[#E5DDEA] sm:hidden">
                    "Unggul dalam Mutu, Tinggi dalam Prestasi,
                    Taklukkan Dunia dengan IT"
                </p>
            </div>
        </div>
    </header>

    <div aria-hidden="true" class="h-[76px] lg:h-[88px]"></div>
</div>