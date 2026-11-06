<div>
    @php
        // Load the shared employee data source.
        $pegawai = require resource_path('data/pegawai.php');

        // Classify employees by the subject-teacher field.
        $isTeachingStaff = static function ($person) {
            $subject = trim((string) ($person['guru_mapel'] ?? ''));
            $isPrincipal = strtoupper(trim((string) ($person['jabatan'] ?? ''))) === 'KEPALA SEKOLAH';

            return ($subject !== '' && $subject !== '-') || $isPrincipal;
        };

        $tenagaDidik = array_values(array_filter($pegawai, $isTeachingStaff));
        $staffTataUsaha = array_values(
            array_filter($pegawai, static function ($person) use ($isTeachingStaff) {
                return !$isTeachingStaff($person);
            }),
        );

        // Display helper for empty values.
        $displayValue = static function ($value) {
            $value = trim((string) ($value ?? ''));
            return $value === '' || $value === '-' ? 'Belum dicantumkan' : $value;
        };
    @endphp


    <div
        class="relative isolate min-h-screen w-full overflow-x-hidden bg-[#F7F3FC] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">

        {{-- BACKGROUND MOTIF DAYAK EMAS --}}
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 z-0 opacity-[0.07]"
            style="
            background-image: url('{{ asset('images/banner-motif-dayak-emas-transparan.png') }}');
            background-repeat: repeat-y;
            background-position: center top;
            background-size: 100% auto;
        ">
        </div>

        {{-- KONTEN UTAMA MANAJEMEN --}}
        <main class="relative z-10 mx-auto w-full max-w-[1600px] px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-10">


            {{-- PAGE TITLE BANNER --}}
            <section
                class="relative isolate overflow-hidden rounded-[24px] border border-white/15 bg-gradient-to-br from-[#2B1745] via-[#49108B] to-[#7E30E1] text-white shadow-[0_14px_36px_rgba(73,16,139,0.22)]">

                {{-- DECORATIVE GOLD CIRCLES --}}
                <svg class="pointer-events-none absolute -left-20 -top-24 h-[260px] w-[260px] text-[#FDC003]/25 sm:-left-16 sm:-top-28 sm:h-[320px] sm:w-[320px]"
                    viewBox="0 0 320 320" fill="none" aria-hidden="true">
                    <circle cx="90" cy="105" r="92" stroke="currentColor" stroke-width="3" />
                    <circle cx="90" cy="105" r="125" stroke="currentColor" stroke-width="3" />
                    <circle cx="90" cy="105" r="158" stroke="currentColor" stroke-width="3" />
                    <circle cx="26" cy="105" r="13" fill="currentColor" />
                </svg>

                {{-- DECORATIVE REGIONAL ORNAMENT --}}
                <svg class="pointer-events-none absolute right-[4%] top-1/2 hidden h-[82%] max-h-[310px] w-[150px] -translate-y-1/2 text-[#FDC003]/25 sm:block sm:w-[170px] lg:right-[7%] lg:w-[190px]"
                    viewBox="0 0 200 310" fill="none" aria-hidden="true">
                    <path d="M100 7 169 83v144l-69 76-69-76V83L100 7Z" stroke="currentColor" stroke-width="4" />
                    <path d="M100 26 151 89v132l-51 56-51-56V89l51-63Z" stroke="currentColor" stroke-width="2.5" />
                    <path
                        d="M100 63c-22-26-49-18-39 4 5 11 17 13 22 24-18-9-35-2-31 13 3 11 18 14 27 4 8-9 9-24 21-34 12 10 13 25 21 34 9 10 24 7 27-4 4-15-13-22-31-13 5-11 17-13 22-24 10-22-17-30-39-4Z"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M100 112c-15-17-31-9-23 7 5 10 18 13 23 26 5-13 18-16 23-26 8-16-8-24-23-7Z"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M100 163c-20-19-42-12-35 7 4 12 22 15 35 31 13-16 31-19 35-31 7-19-15-26-35-7Z"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M74 47c-13 8-19 18-20 31m72-31c13 8 19 18 20 31M74 263c-13-8-19-18-20-31m72 31c13-8 19-18 20-31"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    <path d="M100 87v137M68 137c11 7 20 11 32 11s21-4 32-11" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>

                {{-- BANNER CONTENT --}}
                <div class="relative z-10 w-full px-5 py-8 sm:px-7 sm:py-10 lg:px-9 lg:py-12 xl:px-10 xl:py-14">
                    <div class="max-w-[1050px] sm:pr-28 lg:pr-36">
                        <h1
                            class="max-w-[950px] text-[clamp(2.25rem,5vw,4.25rem)] font-black leading-[1.08] tracking-tight text-white">
                            Manajemen
                        </h1>
                        <p
                            class="mt-4 max-w-[900px] text-lg leading-[1.75] text-white/90 sm:mt-5 sm:text-xl lg:text-[22px]">
                            Mengenal tenaga pendidik dan staf tata usaha SMKN 4 Tarakan yang berperan dalam mendukung
                            pendidikan, pelayanan, dan pengembangan kompetensi murid.
                        </p>

                        <div class="mt-6 sm:mt-7">
                            <div
                                class="inline-flex min-h-11 items-center gap-2.5 rounded-full border border-white/25 bg-white/10 px-4 py-2.5 text-base font-extrabold leading-6 tracking-[0.02em] text-white shadow-sm backdrop-blur-sm sm:min-h-12 sm:px-5 sm:text-lg">
                                <svg class="h-4 w-4 shrink-0 text-[#FDC003] sm:h-[18px] sm:w-[18px]" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="8" r="3.5" />
                                    <path d="M5 20c.5-3.7 3-5.8 7-5.8s6.5 2.1 7 5.8" />
                                </svg>
                                {{ count($pegawai) }} Pegawai Sekolah
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- EMPLOYEE TABS --}}
            <section x-data="{ activeTab: 'pendidik' }" class="mt-7 sm:mt-9 lg:mt-10">
                <div
                    class="mx-auto mb-7 grid w-full max-w-[700px] grid-cols-2 gap-2 rounded-2xl border border-[#E7E0EF] bg-white p-1.5 shadow-sm sm:mb-8">
                    <button type="button" @click="activeTab = 'pendidik'" :aria-pressed="activeTab === 'pendidik'"
                        :class="activeTab === 'pendidik' ? 'border-[#49108B] bg-[#49108B] text-white shadow-md' :
                            'border-transparent bg-white text-[#49108B] hover:border-[#CDB8E8] hover:bg-[#F7F3FC]'"
                        class="inline-flex min-h-[48px] cursor-pointer items-center justify-center gap-2 rounded-xl border px-2.5 py-2 text-center text-sm font-extrabold tracking-[0.03em] transition duration-200 sm:min-h-[54px] sm:px-3 sm:text-base lg:text-lg">
                        <span class="uppercase">Tenaga Pendidik</span>
                        <span class="rounded-full bg-white/20 px-2.5 py-1 text-sm font-extrabold sm:text-base">
                            {{ count($tenagaDidik) }}
                        </span>
                    </button>

                    <button type="button" @click="activeTab = 'tu'" :aria-pressed="activeTab === 'tu'"
                        :class="activeTab === 'tu' ? 'border-[#49108B] bg-[#49108B] text-white shadow-md' :
                            'border-transparent bg-white text-[#49108B] hover:border-[#CDB8E8] hover:bg-[#F7F3FC]'"
                        class="inline-flex min-h-[48px] cursor-pointer items-center justify-center gap-2 rounded-xl border px-2.5 py-2 text-center text-sm font-extrabold tracking-[0.03em] transition duration-200 sm:min-h-[54px] sm:px-3 sm:text-base lg:text-lg">
                        <span class="uppercase">Staf Tata Usaha</span>
                        <span
                            class="rounded-full bg-[#EDE3F8] px-2.5 py-1 text-sm font-extrabold text-[#49108B] sm:text-base">
                            {{ count($staffTataUsaha) }}
                        </span>
                    </button>
                </div>

                {{-- TEACHING STAFF --}}
                <div x-show="activeTab === 'pendidik'" x-transition.opacity>
                    <div class="mb-6 flex flex-col gap-2 sm:mb-7 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <h2 class="text-3xl font-black tracking-tight text-[#20132F] sm:text-4xl">TENAGA PENDIDIK
                            </h2>
                            <p class="mt-2 text-lg leading-8 text-slate-600 sm:text-xl">Tenaga pendidik dan guru mata
                                pelajaran</p>
                        </div>
                        <p class="text-base font-extrabold uppercase tracking-[0.08em] text-[#49108B] sm:text-lg">
                            {{ count($tenagaDidik) }} PEGAWAI</p>
                    </div>

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:gap-7">
                        @foreach ($tenagaDidik as $person)
                            <a href="{{ route('employee-detail', $person['id']) }}"
                                class="group flex min-w-0 cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm outline-none transition duration-300 hover:-translate-y-1 hover:border-[#B99AD9] hover:shadow-[0_14px_32px_rgba(73,16,139,0.14)] focus-visible:ring-4 focus-visible:ring-[#7E30E1]/30">

                                <div
                                    class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0]">
                                    <img src="{{ asset('images/pegawai/' . str_pad($person['id'], 2, '0', STR_PAD_LEFT) . '.jpg') }}"
                                        alt="Foto {{ $person['nama'] }}" loading="lazy"
                                        class="h-full w-full object-cover object-top transition duration-500 group-hover:scale-[1.035]"
                                        onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden'); this.nextElementSibling.classList.add('flex');">
                                    <div
                                        class="hidden h-full w-full flex-col items-center justify-center gap-3 bg-gradient-to-br from-[#F7F3FC] to-[#EDE3F8] text-[#49108B]">
                                        <div
                                            class="flex h-24 w-24 items-center justify-center rounded-full border-2 border-[#CDB8E8] bg-white/85 sm:h-28 sm:w-28">
                                            <svg class="h-12 w-12 sm:h-14 sm:w-14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" aria-hidden="true">
                                                <circle cx="12" cy="8" r="3.5" />
                                                <path d="M5 20c.5-3.7 3-5.8 7-5.8s6.5 2.1 7 5.8" />
                                            </svg>
                                        </div>
                                        <span class="text-base font-extrabold tracking-[0.04em]">FOTO BELUM
                                            TERSEDIA</span>
                                    </div>
                                </div>

                                <div class="flex flex-1 flex-col p-5 sm:p-7">
                                    <div class="min-w-0">
                                        <h3
                                            class="break-words text-2xl font-extrabold leading-[1.25] tracking-[-0.02em] text-[#20132F] transition-colors duration-200 group-hover:text-[#49108B] sm:text-[26px]">
                                            {{ $person['nama'] }}</h3>

                                        @php
                                            $employmentStatus = strtoupper(trim((string) ($person['status'] ?? '')));
                                            $employeeNip = trim((string) ($person['nip'] ?? ''));
                                            $employeeGol = trim((string) ($person['gol'] ?? ''));
                                            $employeePangkat = trim((string) ($person['pangkat'] ?? ''));

                                            $identifierLabel = '';
                                            if ($employmentStatus === 'PNS') {
                                                $identifierLabel = 'NIP';
                                            } elseif ($employmentStatus === 'PPPK') {
                                                $identifierLabel = 'NI PPPK';
                                            }

                                            $hasEmployeeIdentifier =
                                                $identifierLabel !== '' && !in_array($employeeNip, ['', '-'], true);
                                            $hasEmploymentStatus = !in_array($employmentStatus, ['', '-'], true);
                                            $hasEmployeeGol = !in_array($employeeGol, ['', '-'], true);
                                            $hasEmployeePangkat = !in_array($employeePangkat, ['', '-'], true);
                                        @endphp

                                        {{-- Show the official number directly below the employee name. --}}
                                        @if ($hasEmployeeIdentifier)
                                            <p class="mt-1.5 flex min-w-0 flex-wrap items-baseline gap-x-2 gap-y-0.5">
                                                <span
                                                    class="shrink-0 text-xs font-extrabold uppercase tracking-[0.1em] text-[#806D91] sm:text-sm">{{ $identifierLabel }}</span>
                                                <span
                                                    class="min-w-0 break-all text-base font-bold leading-7 text-[#6B2DB3] sm:text-lg">{{ $employeeNip }}</span>
                                            </p>
                                        @endif

                                        {{-- Status and grade are displayed only when their values exist. --}}
                                        @if ($hasEmploymentStatus || $hasEmployeeGol || $hasEmployeePangkat)
                                            <div class="mt-2.5 flex min-w-0 flex-wrap items-center gap-2">
                                                @if ($hasEmploymentStatus)
                                                    <span
                                                        class="inline-flex max-w-full items-center rounded-full border border-[#E7DDF1] bg-[#F8F5FB] px-3.5 py-1.5 text-sm font-extrabold text-[#6B2DB3] sm:text-base">
                                                        {{ $employmentStatus }}
                                                    </span>
                                                @endif

                                                @if ($hasEmployeeGol || $hasEmployeePangkat)
                                                    <span
                                                        class="inline-flex min-w-0 max-w-full flex-wrap items-baseline gap-x-1.5 rounded-lg border border-[#E7DDF1] bg-[#F8F5FB] px-3 py-2 text-base leading-6 text-[#6B2DB3] sm:text-lg">
                                                        @if ($hasEmployeeGol)
                                                            <span class="font-bold">{{ $employeeGol }}</span>
                                                        @endif
                                                        @if ($hasEmployeeGol && $hasEmployeePangkat)
                                                            <span class="text-[#A58ABC]">/</span>
                                                        @endif
                                                        @if ($hasEmployeePangkat)
                                                            <span
                                                                class="min-w-0 break-words font-semibold">{{ $employeePangkat }}</span>
                                                        @endif
                                                    </span>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-4 min-w-0">
                                        <p
                                            class="text-xs font-extrabold uppercase tracking-[0.1em] text-slate-500 sm:text-sm">
                                            JABATAN / PERAN</p>
                                        <p class="mt-1.5 text-lg font-bold leading-7 text-[#6B2DB3] sm:text-xl">
                                            {{ $person['jabatan'] !== '-' ? $person['jabatan'] : 'Guru Mata Pelajaran' }}
                                        </p>
                                    </div>

                                    <div class="mt-4 flex flex-wrap gap-2.5">
                                        @if ($person['wali'] !== '-')
                                            <span
                                                class="inline-flex max-w-full rounded-lg border border-[#F0DFA8] bg-[#FFF8E7] px-3.5 py-2.5 text-base font-semibold leading-6 text-[#755800] sm:text-lg">
                                                Wali Kelas {{ $person['wali'] }}
                                            </span>
                                        @endif
                                        @if ((trim((string) $person['guru_mapel']) !== '' && $person['guru_mapel'] !== '-') || $person['jp'] !== '-')
                                            <span
                                                class="inline-flex max-w-full flex-wrap items-center gap-x-2 rounded-lg border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-2.5 text-base font-bold leading-6 text-[#49108B] sm:text-lg">
                                                @if (trim((string) $person['guru_mapel']) !== '' && $person['guru_mapel'] !== '-')
                                                    <span>{{ $person['guru_mapel'] }}</span>
                                                @endif
                                                @if (trim((string) $person['guru_mapel']) !== '' && $person['guru_mapel'] !== '-' && $person['jp'] !== '-')
                                                    <span class="font-semibold text-[#A58ABC]"
                                                        aria-hidden="true">|</span>
                                                @endif
                                                @if ($person['jp'] !== '-')
                                                    <span class="whitespace-nowrap">{{ $person['jp'] }} JP</span>
                                                @endif
                                            </span>
                                        @endif
                                        @if (trim((string) ($person['ekskul'] ?? '')) !== '' && trim((string) $person['ekskul']) !== '-')
                                            <span
                                                class="inline-flex min-w-0 max-w-full flex-wrap items-baseline rounded-lg border border-[#D9DFF7] bg-[#EEF2FF] px-3.5 py-2.5 text-base font-semibold leading-6 text-[#433B78] sm:text-lg">
                                                <span class="min-w-0 break-words">{{ $person['ekskul'] }}</span>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mt-auto pt-8 sm:pt-9">
                                        <div class="border-t-2 border-[#D8CDE4]"></div>
                                        <div class="flex items-center justify-between gap-3 pt-5 sm:pt-6">
                                            <span
                                                class="text-base font-extrabold uppercase tracking-[0.06em] text-[#49108B] transition-colors duration-200 group-hover:text-[#7E30E1] sm:text-lg">LIHAT
                                                PROFIL LENGKAP</span>
                                            <span
                                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#DCCAF0] bg-[#EDE3F8] text-[#49108B] transition duration-200 group-hover:translate-x-1 group-hover:border-[#49108B] group-hover:bg-[#49108B] group-hover:text-white"
                                                aria-hidden="true">
                                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="m13 6 6 6-6 6" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- ADMINISTRATION STAFF --}}
                <div x-show="activeTab === 'tu'" x-transition.opacity x-cloak style="display: none;">
                    <div class="mb-6 flex flex-col gap-2 sm:mb-7 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <h2 class="text-3xl font-black tracking-tight text-[#20132F] sm:text-4xl">STAF TATA USAHA
                            </h2>
                            <p class="mt-2 text-lg leading-8 text-slate-600 sm:text-xl">Tenaga administrasi dan layanan
                                operasional sekolah</p>
                        </div>
                        <p class="text-base font-extrabold uppercase tracking-[0.08em] text-[#49108B] sm:text-lg">
                            {{ count($staffTataUsaha) }} PEGAWAI</p>
                    </div>

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:gap-7">
                        @foreach ($staffTataUsaha as $person)
                            <a href="{{ route('employee-detail', $person['id']) }}"
                                class="group flex min-w-0 cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm outline-none transition duration-300 hover:-translate-y-1 hover:border-[#B99AD9] hover:shadow-[0_14px_32px_rgba(73,16,139,0.14)] focus-visible:ring-4 focus-visible:ring-[#7E30E1]/30">

                                <div
                                    class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0]">
                                    <img src="{{ asset('images/pegawai/' . str_pad($person['id'], 2, '0', STR_PAD_LEFT) . '.jpg') }}"
                                        alt="Foto {{ $person['nama'] }}" loading="lazy"
                                        class="h-full w-full object-cover object-top transition duration-500 group-hover:scale-[1.035]"
                                        onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden'); this.nextElementSibling.classList.add('flex');">
                                    <div
                                        class="hidden h-full w-full flex-col items-center justify-center gap-3 bg-gradient-to-br from-[#F7F3FC] to-[#EDE3F8] text-[#49108B]">
                                        <div
                                            class="flex h-24 w-24 items-center justify-center rounded-full border-2 border-[#CDB8E8] bg-white/85 sm:h-28 sm:w-28">
                                            <svg class="h-12 w-12 sm:h-14 sm:w-14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" aria-hidden="true">
                                                <circle cx="12" cy="8" r="3.5" />
                                                <path d="M5 20c.5-3.7 3-5.8 7-5.8s6.5 2.1 7 5.8" />
                                            </svg>
                                        </div>
                                        <span class="text-base font-extrabold tracking-[0.04em]">FOTO BELUM
                                            TERSEDIA</span>
                                    </div>
                                </div>

                                <div class="flex flex-1 flex-col p-5 sm:p-7">
                                    <div class="min-w-0">
                                        <h3
                                            class="break-words text-2xl font-extrabold leading-[1.25] tracking-[-0.02em] text-[#20132F] transition-colors duration-200 group-hover:text-[#49108B] sm:text-[26px]">
                                            {{ $person['nama'] }}</h3>

                                        @php
                                            $employmentStatus = strtoupper(trim((string) ($person['status'] ?? '')));
                                            $employeeNip = trim((string) ($person['nip'] ?? ''));
                                            $employeeGol = trim((string) ($person['gol'] ?? ''));
                                            $employeePangkat = trim((string) ($person['pangkat'] ?? ''));

                                            $identifierLabel = '';
                                            if ($employmentStatus === 'PNS') {
                                                $identifierLabel = 'NIP';
                                            } elseif ($employmentStatus === 'PPPK') {
                                                $identifierLabel = 'NI PPPK';
                                            }

                                            $hasEmployeeIdentifier =
                                                $identifierLabel !== '' && !in_array($employeeNip, ['', '-'], true);
                                            $hasEmploymentStatus = !in_array($employmentStatus, ['', '-'], true);
                                            $hasEmployeeGol = !in_array($employeeGol, ['', '-'], true);
                                            $hasEmployeePangkat = !in_array($employeePangkat, ['', '-'], true);
                                        @endphp

                                        {{-- Show the official number directly below the employee name. --}}
                                        @if ($hasEmployeeIdentifier)
                                            <p class="mt-1.5 flex min-w-0 flex-wrap items-baseline gap-x-2 gap-y-0.5">
                                                <span
                                                    class="shrink-0 text-xs font-extrabold uppercase tracking-[0.1em] text-[#806D91] sm:text-sm">{{ $identifierLabel }}</span>
                                                <span
                                                    class="min-w-0 break-all text-base font-bold leading-7 text-[#6B2DB3] sm:text-lg">{{ $employeeNip }}</span>
                                            </p>
                                        @endif

                                        {{-- Status and grade are displayed only when their values exist. --}}
                                        @if ($hasEmploymentStatus || $hasEmployeeGol || $hasEmployeePangkat)
                                            <div class="mt-2.5 flex min-w-0 flex-wrap items-center gap-2">
                                                @if ($hasEmploymentStatus)
                                                    <span
                                                        class="inline-flex max-w-full items-center rounded-full border border-[#E7DDF1] bg-[#F8F5FB] px-3.5 py-1.5 text-sm font-extrabold text-[#6B2DB3] sm:text-base">
                                                        {{ $employmentStatus }}
                                                    </span>
                                                @endif

                                                @if ($hasEmployeeGol || $hasEmployeePangkat)
                                                    <span
                                                        class="inline-flex min-w-0 max-w-full flex-wrap items-baseline gap-x-1.5 rounded-lg border border-[#E7DDF1] bg-[#F8F5FB] px-3 py-2 text-base leading-6 text-[#6B2DB3] sm:text-lg">
                                                        @if ($hasEmployeeGol)
                                                            <span class="font-bold">{{ $employeeGol }}</span>
                                                        @endif
                                                        @if ($hasEmployeeGol && $hasEmployeePangkat)
                                                            <span class="text-[#A58ABC]">/</span>
                                                        @endif
                                                        @if ($hasEmployeePangkat)
                                                            <span
                                                                class="min-w-0 break-words font-semibold">{{ $employeePangkat }}</span>
                                                        @endif
                                                    </span>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-4 min-w-0">
                                        <p
                                            class="text-xs font-extrabold uppercase tracking-[0.1em] text-slate-500 sm:text-sm">
                                            JABATAN / PERAN</p>
                                        <p class="mt-1.5 text-lg font-bold leading-7 text-[#6B2DB3] sm:text-xl">
                                            {{ $displayValue($person['jabatan']) }}
                                        </p>
                                    </div>

                                    <div class="mt-4 grid grid-cols-1 gap-3">
                                        <div
                                            class="min-w-0 rounded-xl border border-[#E7DDF1] bg-[#F8F4FC] p-4 sm:p-5">
                                            <p
                                                class="text-xs font-extrabold uppercase tracking-[0.1em] text-[#6F5287] sm:text-sm">
                                                PENDIDIKAN TERAKHIR</p>
                                            <p class="mt-2 text-lg font-semibold leading-7 text-[#352647] sm:text-xl">
                                                {{ $displayValue($person['pendidikan']) }}</p>
                                        </div>
                                        @if ($person['tmt'] !== '-')
                                            <div
                                                class="min-w-0 rounded-xl border border-[#F0E4BD] bg-[#FFFBF0] p-4 sm:p-5">
                                                <p
                                                    class="text-xs font-extrabold uppercase tracking-[0.1em] text-[#80651A] sm:text-sm">
                                                    MULAI BERTUGAS</p>
                                                <p
                                                    class="mt-2 text-lg font-semibold leading-7 text-[#352647] sm:text-xl">
                                                    {{ $displayValue($person['tmt']) }}</p>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-auto pt-8 sm:pt-9">
                                        <div class="border-t-2 border-[#D8CDE4]"></div>
                                        <div class="flex items-center justify-between gap-3 pt-5 sm:pt-6">
                                            <span
                                                class="text-base font-extrabold uppercase tracking-[0.06em] text-[#49108B] transition-colors duration-200 group-hover:text-[#7E30E1] sm:text-lg">LIHAT
                                                PROFIL LENGKAP</span>
                                            <span
                                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#DCCAF0] bg-[#EDE3F8] text-[#49108B] transition duration-200 group-hover:translate-x-1 group-hover:border-[#49108B] group-hover:bg-[#49108B] group-hover:text-white"
                                                aria-hidden="true">
                                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="m13 6 6 6-6 6" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
