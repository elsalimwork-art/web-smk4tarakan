<div>
    @php
        // Display helper for empty values.
        $displayValue = static function ($value) {
            $value = trim((string) ($value ?? ''));
            return $value === '' || $value === '-' ? 'Belum dicantumkan' : $value;
        };

        $isTeachingStaff =
            trim((string) ($employee['guru_mapel'] ?? '')) !== '' &&
            trim((string) ($employee['guru_mapel'] ?? '')) !== '-';
        $isPrincipal = strtoupper(trim((string) ($employee['jabatan'] ?? ''))) === 'KEPALA SEKOLAH';
        $isEducator = $isTeachingStaff || $isPrincipal;
        $employeeType = $isEducator ? 'Tenaga Pendidik' : 'Staf Tata Usaha';

        $employeePosition = trim((string) ($employee['jabatan'] ?? ''));
        $employeeRole = !in_array($employeePosition, ['', '-'], true)
            ? $employeePosition
            : ($isEducator
                ? 'Guru Mata Pelajaran'
                : 'Staf Tata Usaha');

        $employmentStatus = strtoupper(trim((string) ($employee['status'] ?? '')));
        $employeeNip = trim((string) ($employee['nip'] ?? ''));
        $employeeGol = trim((string) ($employee['gol'] ?? ''));
        $employeePangkat = trim((string) ($employee['pangkat'] ?? ''));
        $employeeEducation = trim((string) ($employee['pendidikan'] ?? ''));

        $identifierLabel = match ($employmentStatus) {
            'PNS' => 'NIP',
            'PPPK' => 'NI PPPK',
            default => '',
        };

        $hasEmployeeNip = !in_array($employeeNip, ['', '-'], true);
        $hasEmployeeGol = !in_array($employeeGol, ['', '-'], true);
        $hasEmployeePangkat = !in_array($employeePangkat, ['', '-'], true);
        $hasEmployeeEducation = !in_array($employeeEducation, ['', '-'], true);

        // Shared sections: displayed for both teaching staff and administration staff.
        $sections = [
            [
                'title' => 'Identitas dan Pendidikan',
                'description' => 'Informasi pribadi dan latar belakang pendidikan pegawai.',
                'items' => [
                    ['Jenis Kelamin', $employee['jk'] ?? '-'],
                    ['Agama', $employee['agama'] ?? '-'],
                    ['Pendidikan Terakhir', $employee['pendidikan'] ?? '-'],
                ],
            ],
            [
                'title' => 'Informasi Kepegawaian',
                'description' => 'Status, identitas kepegawaian, dan riwayat penugasan.',
                'items' => [
                    ['NIP / NI PPPK', $employee['nip'] ?? '-'],
                    ['Status Kepegawaian', $employee['status'] ?? '-'],
                    ['Golongan', $employee['gol'] ?? '-'],
                    ['Pangkat', $employee['pangkat'] ?? '-'],
                    ['Jabatan', $employee['jabatan'] ?? '-'],
                    ['TMT ASN / GTT / PTT', $employee['tmt'] ?? '-'],
                ],
            ],
        ];

        // Teaching-specific sections: hidden automatically on Staf Tata Usaha profiles.
        if ($isEducator) {
            $sections[] = [
                'title' => 'Tugas dan Pembelajaran',
                'description' => 'Rincian tugas mengajar, wali kelas, dan kegiatan pendampingan.',
                'items' => [
                    ['Guru Mata Pelajaran', $employee['guru_mapel'] ?? '-'],
                    ['Total JP KBM', ($employee['jp'] ?? '-') !== '-' ? $employee['jp'] . ' JP' : '-'],
                    ['Wali Kelas', $employee['wali'] ?? '-'],
                    ['Ekstrakurikuler', $employee['ekskul'] ?? '-'],
                ],
            ];

            $sections[] = [
                'title' => 'Sertifikasi dan Pengembangan Profesi',
                'description' => 'Informasi sertifikasi pendidik dan kelulusan PPG.',
                'items' => [
                    ['Status Sertifikasi', $employee['sertifikasi'] ?? '-'],
                    ['Mata Pelajaran Sertifikat Pendidik', $employee['mapel_sertifikat'] ?? '-'],
                    ['Tahun Lulus PPG', $employee['ppg'] ?? '-'],
                ],
            ];
        }
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

        {{-- KONTEN UTAMA DETAIL PEGAWAI --}}
        <main class="relative z-10 mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 sm:py-8 lg:px-8 lg:py-10">


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
                <svg class="pointer-events-none absolute right-[4%] top-1/2 hidden h-[82%] max-h-[290px] w-[140px] -translate-y-1/2 text-[#FDC003]/20 sm:block sm:w-[160px] lg:right-[7%] lg:w-[180px]"
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

                <div class="relative z-10 w-full px-5 py-8 sm:px-7 sm:py-10 lg:px-9 lg:py-12 xl:px-10 xl:py-14">
                    <div class="max-w-[1050px] sm:pr-28 lg:pr-36">
                        <h1
                            class="mt-2 text-[clamp(2.25rem,5vw,4.25rem)] font-black leading-[1.08] tracking-tight text-white">
                            Profil Pegawai</h1>
                        <p
                            class="mt-4 max-w-[900px] text-lg leading-[1.75] text-white/90 sm:mt-5 sm:text-xl lg:text-[22px]">
                            Informasi lengkap tenaga pendidik dan staf tata usaha SMK Negeri 4 Tarakan.
                        </p>
                    </div>
                </div>
            </section>

            {{-- EMPLOYEE PROFILE SUMMARY --}}
            <section
                class="mt-6 overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm sm:mt-8 sm:rounded-3xl">
                <div class="grid grid-cols-1 md:grid-cols-[260px_minmax(0,1fr)] lg:grid-cols-[320px_minmax(0,1fr)]">
                    <div
                        class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0] md:aspect-auto md:min-h-[360px]">
                        <img src="{{ asset('images/pegawai/' . str_pad($employee['id'], 2, '0', STR_PAD_LEFT) . '.jpg') }}"
                            alt="Foto {{ $employee['nama'] }}" loading="lazy"
                            class="h-full w-full object-cover object-top"
                            onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden'); this.nextElementSibling.classList.add('flex');">
                        <div
                            class="hidden h-full min-h-[270px] w-full flex-col items-center justify-center gap-3 bg-gradient-to-br from-[#F7F3FC] to-[#EDE3F8] text-[#49108B] md:min-h-[360px]">
                            <div
                                class="flex h-24 w-24 items-center justify-center rounded-full border-2 border-[#CDB8E8] bg-white/85 sm:h-28 sm:w-28">
                                <svg class="h-12 w-12 sm:h-14 sm:w-14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.35" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="8" r="3.5" />
                                    <path d="M5 20c.5-3.7 3-5.8 7-5.8s6.5 2.1 7 5.8" />
                                </svg>
                            </div>
                            <span class="text-base font-extrabold tracking-[0.04em]">FOTO BELUM TERSEDIA</span>
                        </div>
                    </div>

                    <div class="flex min-w-0 flex-col justify-center p-5 sm:p-7 lg:p-8">
                        <h2
                            class="break-words text-2xl font-extrabold leading-[1.25] tracking-[-0.02em] text-[#20132F] sm:text-[26px]">
                            {{ $employee['nama'] }}
                        </h2>

                        {{-- EMPLOYEE IDENTIFICATION NUMBER --}}
                        @if ($identifierLabel !== '' && $hasEmployeeNip)
                            <div class="mt-2 min-w-0">
                                <p class="text-xs font-extrabold uppercase tracking-[0.1em] text-slate-500 sm:text-sm">
                                    {{ $identifierLabel }}</p>
                                <p class="mt-1 break-all text-base font-bold leading-7 text-[#352647] sm:text-lg">
                                    {{ $employeeNip }}</p>
                            </div>
                        @endif

                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span
                                class="inline-flex max-w-full items-center rounded-full border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-1.5 text-sm font-extrabold text-[#49108B] sm:text-base">
                                {{ $employeeType }}
                            </span>
                            @if (!in_array($employmentStatus, ['', '-'], true))
                                <span
                                    class="inline-flex max-w-full items-center rounded-full border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-1.5 text-sm font-extrabold text-[#49108B] sm:text-base">
                                    {{ $employmentStatus }}
                                </span>
                            @endif
                        </div>

                        <p class="mt-4 text-lg font-bold leading-7 text-[#6B2DB3] sm:text-xl">
                            {{ $employeeRole }}
                        </p>

                        @if ($hasEmployeeGol || $hasEmployeePangkat || $hasEmployeeEducation)
                            <div class="mt-5 flex flex-wrap gap-2.5 border-t-2 border-[#D8CDE4] pt-5">
                                @if ($hasEmployeeGol || $hasEmployeePangkat)
                                    <span
                                        class="inline-flex min-w-0 max-w-full flex-wrap items-baseline gap-x-1.5 rounded-lg border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-2.5 text-base font-bold leading-6 text-[#49108B] sm:text-lg">
                                        @if ($hasEmployeeGol)
                                            <span>{{ $employeeGol }}</span>
                                        @endif
                                        @if ($hasEmployeeGol && $hasEmployeePangkat)
                                            <span class="text-[#A58ABC]">/</span>
                                        @endif
                                        @if ($hasEmployeePangkat)
                                            <span class="min-w-0 break-words">{{ $employeePangkat }}</span>
                                        @endif
                                    </span>
                                @endif
                                @if ($hasEmployeeEducation)
                                    <span
                                        class="inline-flex min-w-0 max-w-full rounded-lg border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-2.5 text-base font-semibold leading-6 text-[#49108B] sm:text-lg">
                                        <span class="min-w-0 break-words">{{ $employeeEducation }}</span>
                                    </span>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <section class="mt-7 grid grid-cols-1 gap-5 sm:mt-8 lg:grid-cols-2 lg:gap-6">
                @foreach ($sections as $section)
                    <article class="min-w-0 overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm">
                        <div class="w-full bg-gradient-to-r from-[#49108B] to-[#7E30E1] px-5 py-4 sm:px-6 sm:py-5">
                            <h3 class="text-xl font-black tracking-tight text-white sm:text-2xl">
                                {{ $section['title'] }}
                            </h3>
                            <p class="mt-1.5 text-base leading-7 text-white/90 sm:text-lg">
                                {{ $section['description'] }}
                            </p>
                        </div>

                        <dl
                            class="grid grid-cols-1 gap-x-5 gap-y-5 px-5 py-5 sm:grid-cols-2 sm:gap-y-6 sm:px-6 sm:py-6">
                            @foreach ($section['items'] as $item)
                                <div
                                    class="min-w-0 {{ str_contains($item[0], 'Mata Pelajaran') || $item[0] === 'Ekstrakurikuler' || $item[0] === 'Pendidikan Terakhir' ? 'sm:col-span-2' : '' }}">
                                    <dt
                                        class="text-xs font-extrabold uppercase tracking-[0.1em] text-slate-500 sm:text-sm">
                                        {{ $item[0] }}
                                    </dt>
                                    <dd
                                        class="mt-1.5 break-words text-base font-semibold leading-7 text-[#352647] sm:text-lg">
                                        {{ $displayValue($item[1]) }}
                                    </dd>
                                </div>
                            @endforeach
                        </dl>
                    </article>
                @endforeach
            </section>

            <div class="mt-7 flex justify-start sm:mt-9">
                <a href="{{ url('/manajemen') }}"
                    class="inline-flex min-h-14 cursor-pointer items-center justify-center gap-2.5 rounded-xl bg-[#49108B] px-6 py-3.5 text-base font-extrabold text-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:shadow-[0_8px_20px_rgba(73,16,139,0.18)] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/30 sm:text-lg">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Kembali ke Daftar Pegawai
                </a>
            </div>
        </main>
    </div>
</div>
