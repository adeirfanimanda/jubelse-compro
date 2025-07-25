@extends('layouts.app')

@section('content')
<x-navbar />

<section class="hero max-w-6xl md:px-8 px-4 mx-auto py-8 xl:px-0">
    <div class="flex flex-col gap-y-10 md:flex-row md:justify-between items-center">
        <div class="gap-y-10 flex flex-col md:basis-2/4 lg:basis-3/6">
            <div class="flex py-2 flex-row small-badge items-center bg-white rounded-full gap-x-2 px-3 w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path
                        d="M12.5 22.5C18.0228 22.5 22.5 18.0228 22.5 12.5C22.5 6.97715 18.0228 2.5 12.5 2.5C6.97715 2.5 2.5 6.97715 2.5 12.5C2.5 18.0228 6.97715 22.5 12.5 22.5Z"
                        stroke="#080C2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.50001 3.5H9.50001C7.55001 9.34 7.55001 15.66 9.50001 21.5H8.50001" stroke="#080C2E"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.5 3.5C17.45 9.34 17.45 15.66 15.5 21.5" stroke="#080C2E" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.5 16.5V15.5C9.34 17.45 15.66 17.45 21.5 15.5V16.5" stroke="#080C2E" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.5 9.50001C9.34 7.55001 15.66 7.55001 21.5 9.50001" stroke="#080C2E" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="lg:text-base text-sm font-semibold text-indigo-950">
                    Digunakan oleh lebih dari 1.000 unit properti
                </p>
            </div>
            <div>
                <h1
                    class="lg:text-[44px] text-[40px] text-indigo-950 font-['Clash_Display'] font-bold leading-none mb-3">
                    Your partner in<br>
                    Property Development & Management IT
                </h1>
                <p class="text-base leading-loose text-gray-500">
                    We provide a variety of servers to grow your users<br class="lg:block hidden">
                    acquisition much user-friendly and boosting up sales.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row gap-x-5 gap-y-5 items-center">
                <a href="#"
                    class="w-full text-center lg:w-fit transition-all ease-in-out duration-500 hover:text-white hover:bg-indigo-950 bg-[#FFD15A] px-10 py-4 rounded-full text-indigo-950 text-lg font-semibold">
                    Coba Gratis
                </a>
                <a href="#" class="font-semibold text-[#15A7BB] flex gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path
                            d="M20.5 12.2V13.9C20.5 17.05 18.7 18.4 16 18.4H7C4.3 18.4 2.5 17.05 2.5 13.9V8.5C2.5 5.35 4.3 4 7 4H9.7C9.57 4.38 9.5 4.8 9.5 5.25V9.15002C9.5 10.12 9.82 10.94 10.39 11.51C10.96 12.08 11.78 12.4 12.75 12.4V13.79C12.75 14.3 13.33 14.61 13.76 14.33L16.65 12.4H19.25C19.7 12.4 20.12 12.33 20.5 12.2Z"
                            stroke="#15A7BB" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M22.5 5.25V9.15002C22.5 10.64 21.74 11.76 20.5 12.2C20.12 12.33 19.7 12.4 19.25 12.4H16.65L13.76 14.33C13.33 14.61 12.75 14.3 12.75 13.79V12.4C11.78 12.4 10.96 12.08 10.39 11.51C9.82 10.94 9.5 10.12 9.5 9.15002V5.25C9.5 4.8 9.57 4.38 9.7 4C10.14 2.76 11.26 2 12.75 2H19.25C21.2 2 22.5 3.3 22.5 5.25Z"
                            stroke="#15A7BB" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.9 22H15.1" stroke="#15A7BB" stroke-width="2" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.5 18.3999V21.9999" stroke="#15A7BB" stroke-width="2" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.9955 7.25H19.0045" stroke="#15A7BB" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M16.1957 7.25H16.2047" stroke="#15A7BB" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M13.3954 7.25H13.4044" stroke="#15A7BB" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Jadwalkan Diskusi
                </a>
            </div>
        </div>
        <div class="flex items-center flex-col">
            <img src="{{ asset('assets/img/landing/illustration-hero.png') }}" class="h-[397px] md:basis-2/4 lg:h-[550px]" alt="">
        </div>
    </div>
</section>

<section class="brands max-w-6xl mx-auto py-10">
    <div class="flex flex-col gap-y-10 md:px-8 md:gap-y-0 items-center md:flex-row gap-x-10 justify-center">
        <img src="{{ asset('assets/img/landing/logo.png') }}" alt="Landing Logo" class="h-12 w-auto" />
        <img src="{{ asset('assets/img/landing/residance.png') }}" alt="Landing Logo" class="h-12 w-auto" />
        <img src="{{ asset('assets/img/landing/marketplace.png') }}" alt="Landing Logo" class="h-12 w-auto" />
        <img src="{{ asset('assets/img/landing/koperasi.png') }}" alt="Landing Logo" class="h-12 w-auto" />
    </div>
</section>

<!-- About Us Section -->
<section id="about-us" class="about-us py-16">
    <div class="max-w-6xl mx-auto px-4 md:px-8 xl:px-0">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-['Clash_Display'] font-bold text-indigo-950 mb-6">
                Tentang Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-6xl mx-auto leading-relaxed text-justify">
                PT. Jubelse Land Indonesia adalah sebuah perusahaan yang bergerak di bidang pembuatan Aplikasi & Properti (Developer dan Property Management) yang memiliki tenaga kerja profesional di bidangnya, dengan produk yang telah dibuat yaitu Aplikasi Manajemen Properti, Orumah Residence (cluster perumahan yang berlokasi di Jatiuwung, Cibodas - Kota Tangerang), dan Orumah Management yang menawarkan multi solusi serta peningkatan manfaat bagi pengguna di pasar yang mulai dan akan semakin terbiasa menggunakan teknologi dalam kehidupan sehari-hari.
            </p>
        </div>

        <!-- Sejarah Perusahaan -->
        <!-- <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="space-y-6">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#15A7BB] to-[#080C2E] rounded-full flex items-center justify-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-['Clash_Display'] font-bold text-indigo-950">Sejarah Perusahaan</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="w-8 h-8 bg-[#15A7BB] rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                        <div>
                            <h4 class="font-semibold text-lg text-indigo-950 mb-2">2018 - Awal Mula</h4>
                            <p class="text-gray-600 leading-relaxed">Dimulai dari pengalaman langsung dalam mengelola properti yang kompleks, tim kami menyadari perlunya solusi digital yang terintegrasi.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-8 h-8 bg-[#15A7BB] rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                        <div>
                            <h4 class="font-semibold text-lg text-indigo-950 mb-2">2020 - Peluncuran Platform</h4>
                            <p class="text-gray-600 leading-relaxed">Meluncurkan platform O-Rumah dengan fitur manajemen properti yang komprehensif, mulai dari pencatatan hingga pelaporan keuangan.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-8 h-8 bg-[#15A7BB] rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                        <div>
                            <h4 class="font-semibold text-lg text-indigo-950 mb-2">2023 - Ekspansi Nasional</h4>
                            <p class="text-gray-600 leading-relaxed">Berhasil melayani lebih dari 120.000 unit properti di seluruh Indonesia dengan tingkat kepuasan pengguna yang tinggi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-[#15A7BB] to-[#080C2E] rounded-3xl p-8 text-white">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 2L4 9L16 16L28 9L16 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 23L16 30L28 23" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 16L16 23L28 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">120.000+</h4>
                                <p class="text-white/80">Unit Properti Terkelola</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 4C9.373 4 4 9.373 4 16C4 22.627 9.373 28 16 28C22.627 28 28 22.627 28 16C28 9.373 22.627 4 16 4Z" stroke="white" stroke-width="2"/>
                                    <path d="M16 12V16L20 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">5+ Tahun</h4>
                                <p class="text-white/80">Pengalaman Industri</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 2L20.5 11.5L32 12.5L24 20L26 31.5L16 26L6 31.5L8 20L0 12.5L11.5 11.5L16 2Z" stroke="white" stroke-width="2"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">98%</h4>
                                <p class="text-white/80">Kepuasan Klien</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Visi & Misi -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:bg-gradient-to-br hover:from-[#FFD15A] hover:to-[#FFA500] group">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#FFD15A] to-[#FFA500] rounded-full flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="11" fill="none" />
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300" />
                            <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300" />
                            <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-['Clash_Display'] font-bold text-indigo-950 group-hover:text-white transition-all duration-300">Visi</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg group-hover:text-white/90 transition-all duration-300">
                    Mengisi peluang market yang luas
                </p>
                <!-- <div class="mt-6 space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Digitalisasi industri properti</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Efisiensi operasional maksimal</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Transparansi pengelolaan</span>
                    </div>
                </div> -->
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:bg-gradient-to-br hover:from-[#15A7BB] hover:to-[#080C2E] group">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#15A7BB] to-[#080C2E] rounded-full flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12L11 14L15 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300" />
                            <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="white" stroke-width="2" class="transition-all duration-300" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-['Clash_Display'] font-bold text-indigo-950 group-hover:text-white transition-all duration-300">Misi</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg group-hover:text-white/90 transition-all duration-300">
                    Menawarkan multi solusi dan peningkatan manfaat pengguna
                </p>
                <!-- <div class="mt-6 space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Inovasi teknologi berkelanjutan</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Layanan pelanggan 24/7</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-[#15A7BB] rounded-full group-hover:bg-white transition-all duration-300"></div>
                        <span class="text-gray-700 group-hover:text-white/90 transition-all duration-300">Keamanan data tingkat tinggi</span>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- CTA Section -->
        <!-- <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-[#15A7BB] to-[#080C2E] rounded-3xl p-8 text-white">
                <h3 class="text-2xl md:text-3xl font-['Clash_Display'] font-bold mb-4">
                    Bergabunglah dengan Revolusi Manajemen Properti
                </h3>
                <p class="text-white/90 mb-8 max-w-2xl mx-auto">
                    Mulai transformasi pengelolaan properti Anda hari ini dan rasakan perbedaan yang signifikan dalam efisiensi dan profitabilitas.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-indigo-950 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300">
                        Mulai Sekarang
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-indigo-950 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</section>

<section id="our-team" class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our team</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
        </div>
        <!-- Baris 1: Director & Founder -->
        <div class="grid gap-8 mb-12 md:grid-cols-2 max-w-3xl mx-auto">
            <div class="text-center text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border-2 border-[#FFD15A]">
                <img class="mx-auto mb-4 w-40 h-40 rounded-full border-4 border-[#FFD15A] object-cover" src="{{ asset('assets/images/photo/robiansyah.png') }}" alt="Director Avatar">
                <h3 class="mb-1 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Robiansyah</h3>
                <p class="text-lg font-semibold text-[#FFD15A] mb-2">Director</p>
                <p class="font-light text-gray-500 dark:text-gray-400 mb-4">Berpengalaman dalam manajemen gedung bertingkat, lelang properti, serta menjabat sebagai Direktur Pengembangan Kontraktor Perumahan.</p>
                <!-- <ul class="flex justify-center mt-2 space-x-4">
                    <li><a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg></a></li>
                </ul> -->
            </div>
            <div class="text-center text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border-2 border-[#15A7BB]">
                <img class="mx-auto mb-4 w-40 h-40 rounded-full border-4 border-[#15A7BB] object-cover" src="{{ asset('assets/images/photo/sumadi.png') }}" alt="Founder Avatar">
                <h3 class="mb-1 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Sumadi</h3>
                <p class="text-lg font-semibold text-[#15A7BB] mb-2">Commissioner</p>
                <p class="font-light text-gray-500 dark:text-gray-400 mb-4">Berpengalaman dalam penyewaan properti, pengembangan sistem, serta manajemen keuangan.</p>
                <!-- <ul class="flex justify-center mt-2 space-x-4">
                    <li><a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg></a></li>
                </ul> -->
            </div>
        </div>
        <!-- Baris 2: 4 Card Team -->
        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Is Haryani</a>
                </h3>
                <p>Finance</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt="Helene Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Sofyan Iskandar</a>
                </h3>
                <p>HRD & GA</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Fendly Darwis</a>
                </h3>
                <p>Tehnik</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Barzan Saban</a>
                </h3>
                <p>Marketing</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Hamzah Fansuri</a>
                </h3>
                <p>Project Manager</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/thomas-lean.png" alt="Leslie Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">David Ervardy</a>
                </h3>
                <p>Web Developer</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Cahyo</a>
                </h3>
                <p>Mobile Developer</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/neil-sims.png" alt="Neil Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Ade Irfan</a>
                </h3>
                <p>Web Developer</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="product" class="max-w-6xl mx-auto py-12 md:px-8 px-4 xl:px-0">
    <div class="flex flex-col md:flex-row gap-y-10 justify-start gap-x-10 lg:gap-x-24">
        <div class="flex items-center flex-col">
            <img src="{{ asset('assets/img/landing/illustration-features.png') }}" class="h-[360px] lg:h-[550px]" alt="">
        </div>
        <div class="flex flex-col text-left gap-y-2 basis-2/4">
            <div>
                <h3
                    class="leading-tight md:leading-lg text-[34px] lg:text-4xl text-indigo-950 font-['Clash_Display'] font-bold mb-5">
                    Produk
                </h3>
                <!-- <p class=" text-base leading-lg text-gray-500">
                    Manage semua unit properti Anda dengan sistem yang<br class="hidden lg:block">
                    terintegrasi, efisien, dan siap meningkatkan produktivitas.
                </p> -->
            </div>
            <div class="flex flex-col gap-y-4">
                <div class="flex bg-white rounded-2xl p-5 items-center gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                        <path
                            d="M17.6925 42.1667H29.1925C38.7758 42.1667 42.6092 38.3334 42.6092 28.75V17.25C42.6092 7.66671 38.7758 3.83337 29.1925 3.83337H17.6925C8.10917 3.83337 4.27583 7.66671 4.27583 17.25V28.75C4.27583 38.3334 8.10917 42.1667 17.6925 42.1667Z"
                            stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.27583 24.3417L15.7758 24.3034C17.2133 24.3034 18.8233 25.3959 19.36 26.7375L21.545 32.2575C22.0433 33.5034 22.8292 33.5034 23.3275 32.2575L27.7167 21.1217C28.1383 20.0484 28.9242 20.01 29.4608 21.0259L31.4542 24.8017C32.0483 25.9325 33.5817 26.8525 34.8467 26.8525H42.6283"
                            stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-xl">
                            Aplikasi
                        </h3>
                        <p class="text-base text-gray-500">
                            Pembuatan Aplikasi Developer, Estate Management & Sekolah
                        </p>
                    </div>
                </div>
                <div class="flex bg-white rounded-2xl p-5 items-center gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                        <path
                            d="M18.9 38.3333H28.1C35.7667 38.3333 38.8333 35.2666 38.8333 27.6V18.4C38.8333 10.7333 35.7667 7.66663 28.1 7.66663H18.9C11.2333 7.66663 8.16666 10.7333 8.16666 18.4V27.6C8.16666 35.2666 11.2333 38.3333 18.9 38.3333Z"
                            stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M20.625 32.5833H26.375C31.1667 32.5833 33.0833 30.6666 33.0833 25.875V20.125C33.0833 15.3333 31.1667 13.4166 26.375 13.4166H20.625C15.8333 13.4166 13.9167 15.3333 13.9167 20.125V25.875C13.9167 30.6666 15.8333 32.5833 20.625 32.5833Z"
                            stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.8525 7.66671V3.83337" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M23.5 7.66671V3.83337" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M31.1667 7.66671V3.83337" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M38.8333 15.3334H42.6667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M38.8333 23H42.6667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M38.8333 30.6666H42.6667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M31.1667 38.3334V42.1667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M23.5192 38.3334V42.1667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M15.8525 38.3334V42.1667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M4.33334 15.3334H8.16667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M4.33334 23H8.16667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M4.33334 30.6666H8.16667" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M23.5 18.5917L21.6983 21.735C21.2958 22.425 21.6217 22.9999 22.4267 22.9999H24.5733C25.3783 22.9999 25.7042 23.5749 25.3017 24.2649L23.5 27.4082"
                            stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-xl">
                            Marketplace
                        </h3>
                        <p class="text-base text-gray-500">
                            Portal Iklan Properti, Food dan Merchant (Barang dan Jasa)
                        </p>
                    </div>
                </div>
                <div class="flex bg-white rounded-2xl p-5 items-center gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                        <path d="M11.1183 21.3132C2.14827 21.9457 2.14827 34.9982 11.1183 35.6307H14.7984"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M11.2142 21.3133C5.06172 4.19744 31.0133 -2.64505 33.9841 15.3333C42.2833 16.3875 45.6375 27.4466 39.3509 32.9475C37.4342 34.6916 34.9617 35.6499 32.3742 35.6308H32.2016"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M33.0833 31.6825C33.0833 33.1008 32.7766 34.4424 32.2016 35.6308C32.0483 35.9758 31.8759 36.3016 31.6842 36.6083C30.0359 39.3875 26.9883 41.2658 23.5 41.2658C20.0117 41.2658 16.9641 39.3875 15.3158 36.6083C15.1241 36.3016 14.9517 35.9758 14.7984 35.6308C14.2234 34.4424 13.9167 33.1008 13.9167 31.6825C13.9167 26.3925 18.21 22.0991 23.5 22.0991C28.79 22.0991 33.0833 26.3925 33.0833 31.6825Z"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20.51 31.6825L22.4075 33.58L26.49 29.8042" stroke="#15A7BB" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-xl">
                            Developer Properti
                        </h3>
                        <p class="text-base text-gray-500">
                            Pengembang Perumahan
                        </p>
                    </div>
                </div>
                <div class="flex bg-white rounded-2xl p-5 items-center gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                        <path d="M11.1183 21.3132C2.14827 21.9457 2.14827 34.9982 11.1183 35.6307H14.7984"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M11.2142 21.3133C5.06172 4.19744 31.0133 -2.64505 33.9841 15.3333C42.2833 16.3875 45.6375 27.4466 39.3509 32.9475C37.4342 34.6916 34.9617 35.6499 32.3742 35.6308H32.2016"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M33.0833 31.6825C33.0833 33.1008 32.7766 34.4424 32.2016 35.6308C32.0483 35.9758 31.8759 36.3016 31.6842 36.6083C30.0359 39.3875 26.9883 41.2658 23.5 41.2658C20.0117 41.2658 16.9641 39.3875 15.3158 36.6083C15.1241 36.3016 14.9517 35.9758 14.7984 35.6308C14.2234 34.4424 13.9167 33.1008 13.9167 31.6825C13.9167 26.3925 18.21 22.0991 23.5 22.0991C28.79 22.0991 33.0833 26.3925 33.0833 31.6825Z"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20.51 31.6825L22.4075 33.58L26.49 29.8042" stroke="#15A7BB" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-xl">
                            Estate Management
                        </h3>
                        <p class="text-base text-gray-500">
                            Pengelolaan Perumahan, Apartemen dan lainnya
                        </p>
                    </div>
                </div>
                <div class="flex bg-white rounded-2xl p-5 items-center gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                        <path d="M11.1183 21.3132C2.14827 21.9457 2.14827 34.9982 11.1183 35.6307H14.7984"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M11.2142 21.3133C5.06172 4.19744 31.0133 -2.64505 33.9841 15.3333C42.2833 16.3875 45.6375 27.4466 39.3509 32.9475C37.4342 34.6916 34.9617 35.6499 32.3742 35.6308H32.2016"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M33.0833 31.6825C33.0833 33.1008 32.7766 34.4424 32.2016 35.6308C32.0483 35.9758 31.8759 36.3016 31.6842 36.6083C30.0359 39.3875 26.9883 41.2658 23.5 41.2658C20.0117 41.2658 16.9641 39.3875 15.3158 36.6083C15.1241 36.3016 14.9517 35.9758 14.7984 35.6308C14.2234 34.4424 13.9167 33.1008 13.9167 31.6825C13.9167 26.3925 18.21 22.0991 23.5 22.0991C28.79 22.0991 33.0833 26.3925 33.0833 31.6825Z"
                            stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20.51 31.6825L22.4075 33.58L26.49 29.8042" stroke="#15A7BB" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-xl">
                            Jual Beli Properti
                        </h3>
                        <p class="text-base text-gray-500">
                            Agent property untuk jual beli Rumah Primary, Secondary, Rumah Cassie & Lelang
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="project" class=" w-full flex flex-col py-[100px] bg-[url('../assets/images/background/background1.png')] bg-cover bg-center bg-no-repeat">
    <div class="flex flex-col gap-[10px] mb-[50px]">
        <h2 class="font-extrabold text-[50px] leading-[70px] text-center text-white">Great Projects</h2>
        <p class="text-lg text-center text-white">Working with awesome team from around the world</p>
    </div>
    <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">
        <div class="group/slider slider flex flex-nowrap w-max items-center">
            <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/budayabasa/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Web Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/myholidays/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">My Holidays <br>Booking Ticket Holidays</p>
                            <p class="text-lg text-[#BABABC]">Full Stack Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/thumbnails/thumbnail3.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
            <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/budayabasa/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/myholidays/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">My Holidays <br>Booking Ticket Holidays</p>
                            <p class="text-lg text-[#BABABC]">Full Stack Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/thumbnails/thumbnail3.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Website Integrations</p>
                            <p class="text-lg text-[#BABABC]">Website Development</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects w-full flex flex-col overflow-hidden">
        <div class="group/slider slider flex flex-nowrap w-max items-center">
            <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/attendance/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">Attendance Mobile App <br>Mobile Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/metafora/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">ERP Landing Page <br>Web Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/pikub/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Web Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
            <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/attendance/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">Attendance Mobile App <br>Mobile Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/metafora/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Web Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
                <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                    <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                        <img src="../assets/images/projects/pikub/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                        <div class="text-center z-10">
                            <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">AI Finance SaaS <br>Web Design</p>
                            <p class="text-lg text-[#BABABC]">UI/UX Design</p>
                        </div>
                        <a href="details.html" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                        <img src="../assets/images/Ellipse.svg" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="feature" class="benefits max-w-6xl mx-auto py-12 md:px-8 px-4 xl:px-0">
    <h3 class="text-[28px] md:text-4xl text-indigo-950 font-['Clash_Display'] text-center font-bold mb-10">
        Mengapa O-Rumah?
    </h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-7 gap-y-8">
        <div class="item-card bg-white rounded-2xl p-7 gap-y-7 flex flex-col group hover:bg-[#080C2E] transition-all duration-500 relative">
            <div class="absolute right-10 w-fit opacity-0 group-hover:opacity-100 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="221" viewBox="0 0 178 221" fill="none">
                    <g filter="url(#filter0_f_1_371)">
                        <ellipse cx="97.65" cy="102.527" rx="32.0478" ry="76.7916"
                            transform="rotate(30 97.65 102.527)" fill="#424560" />
                    </g>
                    <defs>
                        <filter id="filter0_f_1_371" x="0.27005" y="-15.8951" width="194.76" height="236.845"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="25" result="effect1_foregroundBlur_1_371" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="z-10 gap-y-7 flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                    <path d="M32.0292 27.6V16.2917C32.0292 15.2375 31.1667 14.375 30.1125 14.375H24.5541"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M27.4292 11.5L23.9792 14.375L27.4292 17.25" stroke="#15A7BB" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M14.9708 19.55V27.6" stroke="#15A7BB" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M15.2584 18.975C17.3225 18.975 18.9959 17.3017 18.9959 15.2375C18.9959 13.1734 17.3225 11.5 15.2584 11.5C13.1942 11.5 11.5208 13.1734 11.5208 15.2375C11.5208 17.3017 13.1942 18.975 15.2584 18.975Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M14.9708 34.5C16.8762 34.5 18.4208 32.9554 18.4208 31.05C18.4208 29.1446 16.8762 27.6 14.9708 27.6C13.0654 27.6 11.5208 29.1446 11.5208 31.05C11.5208 32.9554 13.0654 34.5 14.9708 34.5Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M32.0292 34.5C33.9346 34.5 35.4792 32.9554 35.4792 31.05C35.4792 29.1446 33.9346 27.6 32.0292 27.6C30.1238 27.6 28.5792 29.1446 28.5792 31.05C28.5792 32.9554 30.1238 34.5 32.0292 34.5Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M17.75 42.1666H29.25C38.8333 42.1666 42.6667 38.3333 42.6667 28.75V17.25C42.6667 7.66665 38.8333 3.83331 29.25 3.83331H17.75C8.16668 3.83331 4.33334 7.66665 4.33334 17.25V28.75C4.33334 38.3333 8.16668 42.1666 17.75 42.1666Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                </svg>
                <div>
                    <h3 class="font-semibold text-xl mb-2 group-hover:text-white transition-all duration-500">
                        Integrated System
                    </h3>
                    <p class="text-base leading-lg text-gray-500 group-hover:text-gray-300 transition-all duration-500">
                        Kelola semua unit properti dalam satu platform
                    </p>
                </div>
                <a href="#" class="text-[#15A7BB] font-semibold group-hover:text-white transition-all duration-500">
                    Learn More
                </a>
            </div>
        </div>
        <div class="item-card bg-white rounded-2xl p-7 gap-y-7 flex flex-col group hover:bg-[#080C2E] transition-all duration-500 relative">
            <div class="absolute right-10 w-fit opacity-0 group-hover:opacity-100 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="221" viewBox="0 0 178 221" fill="none">
                    <g filter="url(#filter0_f_1_371)">
                        <ellipse cx="97.65" cy="102.527" rx="32.0478" ry="76.7916"
                            transform="rotate(30 97.65 102.527)" fill="#424560" />
                    </g>
                    <defs>
                        <filter id="filter0_f_1_371" x="0.27005" y="-15.8951" width="194.76" height="236.845"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="25" result="effect1_foregroundBlur_1_371" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="z-10 gap-y-7 flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                    <path
                        d="M25.2633 4.33167L37.7408 11.0592C39.1975 11.845 39.1975 14.0875 37.7408 14.8733L25.2633 21.6008C24.1517 22.195 22.8483 22.195 21.7367 21.6008L9.25917 14.8733C7.80251 14.0875 7.80251 11.845 9.25917 11.0592L21.7367 4.33167C22.8483 3.73751 24.1517 3.73751 25.2633 4.33167Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M7.41916 19.4158L19.015 25.2233C20.4525 25.9516 21.3725 27.4275 21.3725 29.0375V40.0008C21.3725 41.5917 19.705 42.6075 18.2867 41.8983L6.69083 36.0908C5.25333 35.3625 4.33333 33.8867 4.33333 32.2767V21.3133C4.33333 19.7225 6.00083 18.7066 7.41916 19.4158Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M39.5808 19.4158L27.985 25.2233C26.5475 25.9516 25.6275 27.4275 25.6275 29.0375V40.0008C25.6275 41.5917 27.295 42.6075 28.7133 41.8983L40.3092 36.0908C41.7467 35.3625 42.6667 33.8867 42.6667 32.2767V21.3133C42.6667 19.7225 40.9992 18.7066 39.5808 19.4158Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                </svg>
                <div>
                    <h3 class="font-semibold text-xl mb-2 group-hover:text-white transition-all duration-500">
                        Customizable
                    </h3>
                    <p class="text-base leading-lg text-gray-500 group-hover:text-gray-300 transition-all duration-500">
                        Pilih fitur yang sesuai dengan kebutuhan
                    </p>
                </div>
                <a href="#" class="text-[#15A7BB] font-semibold group-hover:text-white transition-all duration-500">
                    Learn More
                </a>
            </div>
        </div>
        <div class="item-card bg-white rounded-2xl p-7 gap-y-7 flex flex-col group hover:bg-[#080C2E] transition-all duration-500 relative">
            <div class="absolute right-10 w-fit opacity-0 group-hover:opacity-100 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="221" viewBox="0 0 178 221" fill="none">
                    <g filter="url(#filter0_f_1_371)">
                        <ellipse cx="97.65" cy="102.527" rx="32.0478" ry="76.7916"
                            transform="rotate(30 97.65 102.527)" fill="#424560" />
                    </g>
                    <defs>
                        <filter id="filter0_f_1_371" x="0.27005" y="-15.8951" width="194.76" height="236.845"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="25" result="effect1_foregroundBlur_1_371" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="z-10 gap-y-7 flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                    <path d="M13.6867 34.7875V30.82" stroke="#15A7BB" stroke-width="3" stroke-linecap="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M23.5 34.7875V26.8525" stroke="#15A7BB" stroke-width="3" stroke-linecap="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M33.3133 34.7875V22.8658" stroke="#15A7BB" stroke-width="3" stroke-linecap="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M33.3133 11.2125L32.4317 12.2475C27.5442 17.9592 20.9892 22.0034 13.6867 23.8242"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M27.6975 11.2125H33.3133V16.8092" stroke="#15A7BB" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path
                        d="M17.75 42.1666H29.25C38.8333 42.1666 42.6667 38.3333 42.6667 28.75V17.25C42.6667 7.66665 38.8333 3.83331 29.25 3.83331H17.75C8.16667 3.83331 4.33334 7.66665 4.33334 17.25V28.75C4.33334 38.3333 8.16667 42.1666 17.75 42.1666Z"
                        stroke="#15A7BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                </svg>
                <div>
                    <h3 class="font-semibold text-xl mb-2 group-hover:text-white transition-all duration-500">
                        Smart Reporting
                    </h3>
                    <p class="text-base leading-lg text-gray-500 group-hover:text-gray-300 transition-all duration-500">
                        Pantau performa properti dengan laporan real-time
                    </p>
                </div>
                <a href="#" class="text-[#15A7BB] font-semibold group-hover:text-white transition-all duration-500">
                    Learn More
                </a>
            </div>
        </div>
        <div class="item-card bg-white rounded-2xl p-7 gap-y-7 flex flex-col group hover:bg-[#080C2E] transition-all duration-500 relative">
            <div class="absolute right-10 w-fit opacity-0 group-hover:opacity-100 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="221" viewBox="0 0 178 221" fill="none">
                    <g filter="url(#filter0_f_1_371)">
                        <ellipse cx="97.65" cy="102.527" rx="32.0478" ry="76.7916"
                            transform="rotate(30 97.65 102.527)" fill="#424560" />
                    </g>
                    <defs>
                        <filter id="filter0_f_1_371" x="0.27005" y="-15.8951" width="194.76" height="236.845"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="25" result="effect1_foregroundBlur_1_371" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="z-10 gap-y-7 flex flex-col">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.7917 36.8591H15.8333C8.16668 36.8591 4.33334 34.9424 4.33334 25.3591V15.7758C4.33334 8.10909 8.16668 4.27576 15.8333 4.27576H31.1667C38.8333 4.27576 42.6667 8.10909 42.6667 15.7758V25.3591C42.6667 33.0258 38.8333 36.8591 31.1667 36.8591H30.2083C29.6142 36.8591 29.0392 37.1466 28.675 37.6258L25.8 41.4591C24.535 43.1458 22.465 43.1458 21.2 41.4591L18.325 37.6258C18.0183 37.2041 17.3283 36.8591 16.7917 36.8591Z" stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M15.8333 17.175L12 21.0084L15.8333 24.8417" stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M31.1667 17.175L35 21.0084L31.1667 24.8417" stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                    <path d="M25.4167 16.5425L21.5833 25.4742" stroke="#15A7BB" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-white transition-all duration-500" />
                </svg>
                <div>
                    <h3 class="font-semibold text-xl mb-2 group-hover:text-white transition-all duration-500">
                        Automation System
                    </h3>
                    <p class="text-base leading-lg text-gray-500 group-hover:text-gray-300 transition-all duration-500">
                        Otomatiskan tugas rutin, hemat waktu dan tenaga
                    </p>
                </div>
                <a href="#" class="text-[#15A7BB] font-semibold group-hover:text-white transition-all duration-500">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto py-12 md:px-8 px-4 xl:px-0">
    <div class="flex flex-col gap-y-7">
        <h3
            class="leading-tight md:leading-lg text-[34px] lg:text-5xl text-indigo-950 text-center font-['Clash_Display'] font-bold mb-5">
            Frequently Asked Questions
        </h3>
        <div class="grid lg:grid-cols-2 gap-x-8 gap-y-8">
            <div class="flex-col flex gap-y-8">
                <div class="group faq-card shaynakit-accordion">
                    <div class="bg-white rounded-2xl p-5 flex flex-col gap-y-5">
                        <a href="#" class="btn-accordion">
                            <div class="flex flex-row justify-between">
                                <h3 class="text-indigo-950 font-bold text-lg">
                                    Kenapa harus menggunakan Aplikasi ini?
                                </h3>
                                <div
                                    class="bg-white w-[30px] h-[30px] items-center flex justify-center rounded-full">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.44 6.7124L10.55 11.6024C9.9725 12.1799 9.0275 12.1799 8.45 11.6024L3.56 6.7124"
                                            stroke="#080C2E" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </a>
                        <div class="accordion-content hidden flex flex-col gap-y-5">
                            <p class="text-base text-gray-500 leading-loose">
                                Dengan aplikasi ini, Anda dapat mengelola properti, penyewa, tagihan, dan laporan keuangan secara lebih mudah dan efisien hanya dalam satu platform. Semua aktivitas tercatat otomatis, menghemat waktu dan meminimalkan kesalahan pengelolaan.
                            </p>
                            <a href="#" class="text-[#15A7BB] font-semibold">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group faq-card shaynakit-accordion">
                    <div class="bg-white rounded-2xl p-5 flex flex-col gap-y-5">
                        <a href="#" class="btn-accordion">
                            <div class="flex flex-row justify-between">
                                <h3 class="text-indigo-950 font-bold text-lg">
                                    Apakah data aman di sistem ini?
                                </h3>
                                <div
                                    class="bg-white w-[30px] h-[30px] items-center flex justify-center rounded-full">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.44 6.7124L10.55 11.6024C9.9725 12.1799 9.0275 12.1799 8.45 11.6024L3.56 6.7124"
                                            stroke="#080C2E" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </a>
                        <div class="accordion-content hidden flex flex-col gap-y-5">
                            <p class="text-base text-gray-500 leading-loose">
                                O-Rumah Management Property menggunakan sistem enkripsi data tingkat tinggi dan backup rutin untuk memastikan semua data properti dan keuangan pengguna aman serta tidak mudah diakses pihak yang tidak berwenang.
                            </p>
                            <a href="#" class="text-[#15A7BB] font-semibold">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group faq-card shaynakit-accordion">
                    <div class="bg-white rounded-2xl p-5 flex flex-col gap-y-5">
                        <a href="#" class="btn-accordion">
                            <div class="flex flex-row justify-between">
                                <h3 class="text-indigo-950 font-bold text-lg">
                                    Bagaimana jika terjadi masalah penyimpanan?
                                </h3>
                                <div
                                    class="bg-white w-[30px] h-[30px] items-center flex justify-center rounded-full">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.44 6.7124L10.55 11.6024C9.9725 12.1799 9.0275 12.1799 8.45 11.6024L3.56 6.7124"
                                            stroke="#080C2E" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </a>

                        <div class="accordion-content hidden flex flex-col gap-y-5">
                            <p class=" text-base text-gray-500 leading-loose">
                                Jika ada gangguan penyimpanan, data pengguna tetap aman karena aplikasi O-Rumah Management Property memiliki sistem cadangan otomatis. Selain itu, tim support kami siap membantu 24/7 untuk memastikan tidak ada kehilangan data.
                            </p>
                            <a href="#" class=" text-[#15A7BB] font-semibold">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="flex-col flex gap-y-8">
                <div class="group faq-card shaynakit-accordion">
                    <div class="bg-white rounded-2xl p-5 flex flex-col gap-y-5">
                        <a href="#" class="btn-accordion">
                            <div class="flex flex-row justify-between">
                                <h3 class="text-indigo-950 font-bold text-lg">
                                    Apakah bisa pindah dari sistem lama ke aplikasi ini?
                                </h3>
                                <div
                                    class="bg-white w-[30px] h-[30px] items-center flex justify-center rounded-full">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.44 6.7124L10.55 11.6024C9.9725 12.1799 9.0275 12.1799 8.45 11.6024L3.56 6.7124"
                                            stroke="#080C2E" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </a>
                        <div class="accordion-content hidden flex flex-col gap-y-5">
                            <p class=" text-base text-gray-500 leading-loose">
                                Kami menyediakan layanan migrasi data dari sistem lama Anda ke O-Rumah Management Property tanpa biaya tambahan. Tim kami akan mendampingi proses migrasi agar semua data dapat dipindahkan dengan aman dan lengkap.
                            </p>
                            <a href="#" class=" text-[#15A7BB] font-semibold">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>
                <div class="group faq-card shaynakit-accordion">
                    <div class="bg-white rounded-2xl p-5 flex flex-col gap-y-5">
                        <a href="#" class="btn-accordion">
                            <div class="flex flex-row justify-between">
                                <h3 class="text-indigo-950 font-bold text-lg">
                                    Lorem ipsum dolor sit amet?
                                </h3>
                                <div
                                    class="bg-white w-[30px] h-[30px] items-center flex justify-center rounded-full">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.44 6.7124L10.55 11.6024C9.9725 12.1799 9.0275 12.1799 8.45 11.6024L3.56 6.7124"
                                            stroke="#080C2E" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </a>
                        <div class="accordion-content hidden flex flex-col gap-y-5">
                            <p class=" text-base text-gray-500 leading-loose">
                                Kami fleksibel dalam metode pembayaran. Anda dapat memilih pembayaran bulanan, 6 bulanan, atau tahunan, sesuai kebutuhan pengelolaan properti Anda.
                            </p>
                            <a href="#" class=" text-[#15A7BB] font-semibold">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>
                <div class="group faq-card">
                    <div class="bg-[#080C2E] rounded-2xl p-5 flex flex-col gap-y-5">
                        <div class="flex flex-row justify-between items-center">
                            <a href="#" class="text-white flex gap-x-2">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 12.2V13.9C20.5 17.05 18.7 18.4 16 18.4H7C4.3 18.4 2.5 17.05 2.5 13.9V8.5C2.5 5.35 4.3 4 7 4H9.7C9.57 4.38 9.5 4.8 9.5 5.25V9.15002C9.5 10.12 9.82 10.94 10.39 11.51C10.96 12.08 11.78 12.4 12.75 12.4V13.79C12.75 14.3 13.33 14.61 13.76 14.33L16.65 12.4H19.25C19.7 12.4 20.12 12.33 20.5 12.2Z"
                                        stroke="white" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M22.5 5.25V9.15002C22.5 10.64 21.74 11.76 20.5 12.2C20.12 12.33 19.7 12.4 19.25 12.4H16.65L13.76 14.33C13.33 14.61 12.75 14.3 12.75 13.79V12.4C11.78 12.4 10.96 12.08 10.39 11.51C9.82 10.94 9.5 10.12 9.5 9.15002V5.25C9.5 4.8 9.57 4.38 9.7 4C10.14 2.76 11.26 2 12.75 2H19.25C21.2 2 22.5 3.3 22.5 5.25Z"
                                        stroke="white" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.9 22H15.1" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.5 18.3999V21.9999" stroke="white" stroke-width="2"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.9955 7.25H19.0045" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.1957 7.25H16.2047" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.3954 7.25H13.4044" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                Hubungi kami melalui email untuk pertanyaan lainnya
                            </a>
                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="30" width="30" height="30" rx="15" transform="rotate(-90 0.5 30)"
                                    fill="white" />
                                <path
                                    d="M13.2125 9.05994L18.1025 13.9499C18.68 14.5274 18.68 15.4724 18.1025 16.0499L13.2125 20.9399"
                                    stroke="#080C2E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

<x-footer />
@endsection