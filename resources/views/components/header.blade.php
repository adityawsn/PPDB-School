    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <!-- Top Announcement Bar -->
        {{-- <div class="bg-primary text-on-primary py-1.5 px-6">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center gap-2">
                    <span
                        class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm tracking-wider uppercase">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                        Admissions Open A.Y. 2025/2026
                    </span>
                    <span class="hidden md:inline font-body-sm text-body-sm text-surface-container-high">• Early Bird
                        &amp; Merit Scholarship Assessment Open</span>
                </div>
                <div class="flex items-center gap-4 text-on-primary font-label-md text-label-md">
                    <span class="flex items-center gap-1 text-surface-container-high">
                        <span class="material-symbols-outlined text-surface-container-high text-[15px]">call</span>
                        Admissions Hotline: <a class="text-secondary-fixed hover:underline font-label-md text-label-md"
                            href="tel:+62215550199">+62 21 555-0199</a>
                    </span>
                    <span class="text-primary-fixed-dim hidden sm:inline">|</span>
                    <span class="hidden sm:flex items-center gap-1 text-surface-container-high">
                        <span class="material-symbols-outlined text-[15px]">schedule</span>
                        Mon - Fri: 08:00 - 16:00
                    </span>
                </div>
            </div>
        </div> --}}
        <div class="h-14 max-w-7xl mx-auto px-6 flex items-center justify-between">
            <!-- Brand / Logo (Kiri) -->
            <a class="flex items-center shrink-0" data-path="home" href="{{ route('home') }}">
                <!-- Sesuaikan tinggi logo di class h-* ini (misal: h-10, h-12, h-14) -->
                <img alt="Unity School Logo" class="h-11 w-auto object-contain" src="{{ asset('logo.png') }}" />
            </a>

            <!-- Container Kanan: Navigasi + Tombol (Rapat ke Kanan) -->
            <div class="flex items-center gap-2 shrink-0">
                <!-- Nav Links (Rapat dengan jarak antar menu gap-1 atau gap-2) -->
                <nav class="hidden xl:flex items-center gap-1">
                    <a class="px-3 py-2 transition-all {{ request()->routeIs('home') ? 'bg-primary-container text-on-primary' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }} font-label-lg text-label-lg rounded-lg whitespace-nowrap"
                        data-path="home" href="{{ route('home') }}">Home</a>
                    <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg {{ request()->routeIs('profile') ? 'bg-primary-container text-on-primary' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }} transition-all whitespace-nowrap"
                        data-path="school-profile" href="{{ route('profile') }}">School Profile</a>
                    <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all whitespace-nowrap"
                        data-path="academic-programs" href="{{ route('home') }}#academic-programs">Academic Programs</a>
                    <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all whitespace-nowrap"
                        data-path="process-and-requirements" href="{{ route('home') }}#process-and-requirements">Process &amp;
                        Requirements</a>
                    <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all whitespace-nowrap"
                        data-path="cost-of-education" href="{{ route('home') }}#cost-of-education">Cost of Education</a>
                    <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all whitespace-nowrap"
                        data-path="faq-and-contact" href="{{ route('home') }}#faq-and-contact">FAQ &amp; Contact</a>
                </nav>

                <!-- Divider Garis Tipis (Opsional sebagai pemisah menu & tombol) -->
                <span class="hidden xl:inline-block w-px h-6 bg-outline-variant/40 mx-1"></span>

                <!-- Action Buttons -->
                <div class="flex items-center gap-2 shrink-0">
                    @if (Route::has('register'))
                        <a class="inline-flex items-center px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm hover:bg-primary-container hover:text-on-primary-container transition-all whitespace-nowrap"
                            data-path="apply-now" href="{{ route('register') }}">
                            Apply Now
                        </a>
                    @else
                        <a class="inline-flex items-center px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm hover:bg-primary-container hover:text-on-primary-container transition-all whitespace-nowrap"
                            data-path="apply-now" href="#apply-now">
                            Apply Now
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </header>
