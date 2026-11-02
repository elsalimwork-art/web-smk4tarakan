
<div class="min-h-screen w-full bg-white text-[#1D1230]"
     style="font-family:'Inter Variable','Inter',sans-serif;">

    <main class="mx-auto w-full max-w-[1194px] px-5 pb-8 pt-8
                 sm:px-7 sm:pt-9
                 lg:px-0 lg:pt-[34px]">


        {{-- =====================================================
             JUDUL HALAMAN
        ====================================================== --}}
        <section class="text-center">

            {{-- BADGE --}}
            <span class="inline-flex items-center rounded-full
                         bg-[#F0E7FF] px-[13px] py-[5px]
                         text-[10px] font-extrabold
                         tracking-[0.08em] text-[#49108B]">

                HUBUNGI KAMI

            </span>


            {{-- JUDUL UTAMA --}}
            <h1 class="mt-[11px] text-[27px] font-extrabold
                       leading-tight tracking-[-1.2px]
                       text-[#1D1230]
                       sm:text-[32px]
                       lg:text-[36px]">

                Lokasi &amp; Kontak Resmi

            </h1>


            {{-- DESKRIPSI --}}
            <p class="mx-auto mt-[7px] max-w-[750px]
                      text-[12px] leading-[1.7]
                      text-[#64748B]
                      sm:text-sm lg:text-[15px]">

                Silakan hubungi kami untuk informasi kurikulum,
                pendaftaran, atau kunjungan sekolah.

            </p>

        </section>



        {{-- =====================================================
             GRID UTAMA
             KIRI: INFORMASI KONTAK
             KANAN: PANEL PETA
        ====================================================== --}}
        <section class="mt-8 grid grid-cols-1 items-stretch
                        gap-5 sm:mt-10
                        lg:mt-[54px]
                        lg:grid-cols-[0.7fr_1fr]
                        lg:gap-[30px]">


            {{-- =================================================
                 KOLOM KIRI: INFORMASI KONTAK
            ================================================== --}}
            <div class="flex flex-col gap-[15px]">


                {{-- =============================================
                     KARTU 1: ALAMAT KAMPUS
                ============================================== --}}
                <article
                    class="flex min-h-[115px] items-start gap-4
                           rounded-[12px] border border-[#E5EAF2]
                           bg-[#F7F9FC] p-[15px]
                           transition duration-200
                           hover:border-[#D8C3F2]
                           hover:shadow-[0_4px_12px_rgba(73,16,139,0.06)]
                           sm:min-h-[128px] sm:gap-[16px] sm:p-[19px]">


                    {{-- ICON ALAMAT --}}
                    <div class="flex h-[40px] w-[40px] shrink-0
                                items-center justify-center
                                rounded-[10px] bg-[#210C3B]
                                text-[#FFB900]
                                sm:h-[48px] sm:w-[48px]">

                        <svg
                            class="h-[23px] w-[23px] sm:h-[27px] sm:w-[27px]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M12 2.5a7 7 0 0 0-7 7c0 5.1 7 12 7 12s7-6.9 7-12a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"/>

                        </svg>

                    </div>


                    {{-- INFORMASI ALAMAT --}}
                    <div class="min-w-0 flex-1">

                        <h2 class="text-[12px] font-bold
                                   leading-[1.5] text-[#211532]
                                   sm:text-[13px] sm:font-bold">

                            Alamat Kampus

                        </h2>

                        <p class="mt-[5px] text-[11px]
                                  leading-[1.55] text-[#64748B]
                                  sm:text-[12px] sm:leading-[1.6]">

                            Jl. Kusuma Bangsa, RT.01 No.41,
                            Kelurahan Gunung Lingkas, Kecamatan
                            Tarakan Timur, Kota Tarakan,
                            Kalimantan Utara 77113

                        </p>

                    </div>

                </article>



                {{-- =============================================
                     KARTU 2: TELEPON / WHATSAPP
                ============================================== --}}
                <article
                    class="flex min-h-[100px] items-start gap-4
                           rounded-[12px] border border-[#E5EAF2]
                           bg-[#F7F9FC] p-[15px]
                           transition duration-200
                           hover:border-[#D8C3F2]
                           hover:shadow-[0_4px_12px_rgba(73,16,139,0.06)]
                           sm:min-h-[106px] sm:gap-[16px] sm:p-[19px]">


                    {{-- ICON TELEPON --}}
                    <div class="flex h-[40px] w-[40px] shrink-0
                                items-center justify-center
                                rounded-[10px] bg-[#210C3B]
                                text-[#FFB900]
                                sm:h-[48px] sm:w-[48px]">

                        <svg
                            class="h-[22px] w-[22px] sm:h-[25px] sm:w-[25px]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M6.6 2.8 3.8 3a1.8 1.8 0 0 0-1.6 2c1 8.7 8.1 15.8 16.8 16.8a1.8 1.8 0 0 0 2-1.6l.2-2.8a1.8 1.8 0 0 0-1.2-1.8l-3.5-1.2a1.8 1.8 0 0 0-1.9.5l-1.2 1.5a14.5 14.5 0 0 1-5.6-5.6l1.5-1.2a1.8 1.8 0 0 0 .5-1.9L8.4 4a1.8 1.8 0 0 0-1.8-1.2Z"/>

                        </svg>

                    </div>


                    {{-- INFORMASI TELEPON --}}
                    <div class="min-w-0 flex-1">

                        <h2 class="text-[12px] font-bold
                                   leading-[1.5] text-[#211532]
                                   sm:text-[13px]">

                            Telepon / WhatsApp

                        </h2>

                        <p class="mt-[5px] flex flex-wrap items-center
                                  gap-x-1 text-[11px] leading-[1.6]
                                  text-[#64748B] sm:text-[12px]">

                            <a href="tel:+625512031234"
                               class="transition hover:text-[#7E30E1]">

                                (0551) 2031234

                            </a>

                            <span>•</span>

                            <a href="https://wa.me/6281255447788"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="transition hover:text-[#7E30E1]">

                                +62 812-5544-7788

                            </a>

                        </p>


                        {{-- JAM LAYANAN --}}
                        <p class="mt-[3px] text-[9px]
                                  font-medium text-[#07966F]
                                  sm:text-[10px]">

                            Senin - Jumat: 07.30 - 16.00 WITA

                        </p>

                    </div>

                </article>



                {{-- =============================================
                     KARTU 3: EMAIL
                ============================================== --}}
                <article
                    class="flex min-h-[102px] items-start gap-4
                           rounded-[12px] border border-[#E5EAF2]
                           bg-[#F7F9FC] p-[15px]
                           transition duration-200
                           hover:border-[#D8C3F2]
                           hover:shadow-[0_4px_12px_rgba(73,16,139,0.06)]
                           sm:min-h-[108px] sm:gap-[16px] sm:p-[19px]">


                    {{-- ICON EMAIL --}}
                    <div class="flex h-[40px] w-[40px] shrink-0
                                items-center justify-center
                                rounded-[10px] bg-[#210C3B]
                                text-[#FFB900]
                                sm:h-[48px] sm:w-[48px]">

                        <svg
                            class="h-[22px] w-[22px] sm:h-[25px] sm:w-[25px]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm9 8L4.5 7h15L12 13Z"/>

                            <path d="m3 8 9 7 9-7v10H3Z" opacity=".55"/>

                        </svg>

                    </div>


                    {{-- INFORMASI EMAIL --}}
                    <div class="min-w-0 flex-1">

                        <h2 class="text-[12px] font-bold
                                   leading-[1.5] text-[#211532]
                                   sm:text-[13px]">

                            Surat Elektronik (Email)

                        </h2>

                        <div class="mt-[5px] space-y-[3px]">

                            <a href="mailto:info@smkn4tarakan.sch.id"
                               class="block break-all text-[11px]
                                      leading-[1.5] text-[#64748B]
                                      transition hover:text-[#7E30E1]
                                      sm:text-[12px]">

                                info@smkn4tarakan.sch.id

                            </a>

                            <a href="mailto:smkn4tarakan.kaltara@gmail.com"
                               class="block break-all text-[11px]
                                      leading-[1.5] text-[#64748B]
                                      transition hover:text-[#7E30E1]
                                      sm:text-[12px]">

                                smkn4tarakan.kaltara@gmail.com

                            </a>

                        </div>

                    </div>

                </article>



                {{-- =============================================
                     KARTU 4: JAM OPERASIONAL
                ============================================== --}}
                <article
                    class="flex min-h-[102px] items-start gap-4
                           rounded-[12px] border border-[#E5EAF2]
                           bg-[#F7F9FC] p-[15px]
                           transition duration-200
                           hover:border-[#D8C3F2]
                           hover:shadow-[0_4px_12px_rgba(73,16,139,0.06)]
                           sm:min-h-[108px] sm:gap-[16px] sm:p-[19px]">


                    {{-- ICON JAM --}}
                    <div class="flex h-[40px] w-[40px] shrink-0
                                items-center justify-center
                                rounded-[10px] bg-[#210C3B]
                                text-[#FFB900]
                                sm:h-[48px] sm:w-[48px]">

                        <svg
                            class="h-[22px] w-[22px] sm:h-[25px] sm:w-[25px]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm1 5v4.6l3.2 1.9-1 1.7-4.2-2.6V7h2Z"/>

                        </svg>

                    </div>


                    {{-- INFORMASI JAM --}}
                    <div class="min-w-0 flex-1">

                        <h2 class="text-[12px] font-bold
                                   leading-[1.5] text-[#211532]
                                   sm:text-[13px]">

                            Jam Operasional Pelayanan

                        </h2>

                        <div class="mt-[5px] space-y-[3px]">

                            <p class="text-[11px] leading-[1.6]
                                      text-[#64748B] sm:text-[12px]">

                                Senin - Kamis : 07.15 - 15.30 WITA

                            </p>

                            <p class="text-[11px] leading-[1.6]
                                      text-[#64748B] sm:text-[12px]">

                                Jumat : 07.15 - 11.30 WITA

                            </p>

                        </div>

                    </div>

                </article>

            </div>



            {{-- =================================================
                 KOLOM KANAN: PANEL LOKASI
            ================================================== --}}
            <div
                class="relative flex min-h-[380px]
                       items-center justify-center overflow-hidden
                       rounded-[12px] border border-[#E3E5E8]
                       bg-[#E6E4E1] p-5
                       sm:min-h-[430px]
                       lg:min-h-[497px] lg:p-8">


                {{-- =================================================
                     KARTU INFORMASI LOKASI
                ================================================== --}}
                <div
                    class="w-full max-w-[376px]
                           rounded-[13px] border border-[#D8DEE8]
                           bg-white px-[18px] pb-[18px] pt-[16px]
                           text-center
                           shadow-[0_10px_22px_rgba(20,20,30,0.12)]
                           sm:px-5 sm:pb-5 sm:pt-4">


                    {{-- PIN MERAH --}}
                    <div
                        class="mx-auto flex h-[43px] w-[43px]
                               items-center justify-center
                               rounded-full bg-[#F4434B]
                               text-white
                               shadow-[0_3px_7px_rgba(244,67,75,0.2)]
                               sm:h-[48px] sm:w-[48px]">

                        <svg
                            class="h-[22px] w-[22px] sm:h-[25px] sm:w-[25px]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M12 2a8 8 0 0 0-8 8c0 5.8 8 13 8 13s8-7.2 8-13a8 8 0 0 0-8-8Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>

                        </svg>

                    </div>


                    {{-- NAMA SEKOLAH --}}
                    <h2 class="mt-[11px] text-[13px]
                               font-extrabold tracking-[-0.2px]
                               text-[#211532] sm:text-[14px]">

                        SMK Negeri 4 Tarakan

                    </h2>


                    {{-- ALAMAT PETA --}}
                    <p class="mx-auto mt-[5px] max-w-[330px]
                              text-[10px] leading-[1.55]
                              text-[#64748B] sm:text-[11px]">

                        Jl. Kusuma Bangsa, RT.01 No.41,
                        Kota Tarakan, Kalimantan Utara

                    </p>


                    {{-- PEMBATAS --}}
                    <div class="my-[12px] border-t border-[#E9EDF3]"></div>


                    {{-- TOMBOL GOOGLE MAPS --}}
                    <a
                        href="https://www.google.com/maps/dir/?api=1&amp;destination=SMK%20Negeri%204%20Tarakan%2C%20Jl.%20Kusuma%20Bangsa%2C%20Tarakan"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-h-[34px]
                               items-center justify-center gap-[7px]
                               rounded-[7px] bg-[#210C3B]
                               px-[13px] py-[8px]
                               text-[10px] font-bold text-white
                               transition duration-200
                               hover:-translate-y-0.5 hover:bg-[#49108B]
                               sm:text-[11px]">


                        {{-- ICON PETUNJUK --}}
                        <svg
                            class="h-[13px] w-[13px] shrink-0 text-[#FFB900]"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="m12 2 3 7 7 3-7 3-3 7-3-7-7-3 7-3 3-7Z"/>

                        </svg>

                        Buka Rute Google Maps

                    </a>

                </div>

            </div>

        </section>

    </main>

</div>
