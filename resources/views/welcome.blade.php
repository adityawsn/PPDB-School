<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Unity School | PPDB 2025/2026</title>

    <link rel="icon" type="image/png" href="{{ asset('logo2.png') }}">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main> :first-child {
                margin-top: 0 !important;
            }

            main> :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-dim": "#d2d9f4",
                        "surface-tint": "#306576",
                        "tertiary-fixed": "#85f8c4",
                        "tertiary-fixed-dim": "#68dba9",
                        "inverse-on-surface": "#eef0ff",
                        "surface-bright": "#faf8ff",
                        "tertiary-container": "#005036",
                        "tertiary": "#003724",
                        "primary-fixed": "#b6ebfe",
                        "on-primary-fixed-variant": "#114d5d",
                        "primary-container": "#0f4c5c",
                        "surface-container-high": "#e2e7ff",
                        "secondary-fixed": "#ffddb8",
                        "inverse-surface": "#283044",
                        "secondary-fixed-dim": "#ffb95f",
                        "background": "#faf8ff",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed": "#2a1700",
                        "error": "#ba1a1a",
                        "on-primary-fixed": "#001f28",
                        "on-surface-variant": "#40484b",
                        "error-container": "#ffdad6",
                        "on-tertiary-container": "#53c896",
                        "on-background": "#131b2e",
                        "secondary-container": "#fea619",
                        "on-secondary-fixed-variant": "#653e00",
                        "on-tertiary": "#ffffff",
                        "primary-fixed-dim": "#9acee1",
                        "outline-variant": "#c0c8cb",
                        "primary": "#003441",
                        "surface-container-low": "#f2f3ff",
                        "on-surface": "#131b2e",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#dae2fd",
                        "secondary": "#855300",
                        "surface": "#faf8ff",
                        "outline": "#70787c",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#002114",
                        "surface-container": "#eaedff",
                        "surface-variant": "#dae2fd",
                        "on-tertiary-fixed-variant": "#005137",
                        "on-error": "#ffffff",
                        "inverse-primary": "#9acee1",
                        "on-primary-container": "#87bbce",
                        "on-secondary-container": "#684000",
                        "on-primary": "#ffffff"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    spacing: {
                        "space-xl": "2.5rem",
                        gutter: "1.5rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "space-xs": "0.25rem",
                        "margin-mobile": "1rem",
                        "gutter-mobile": "1rem",
                        "space-md": "1rem",
                        margin: "2rem",
                        "space-2xl": "4rem"
                    },
                    fontFamily: {
                        "headline-sm": ["Plus Jakarta Sans"],
                        "display-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "label-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        display: ["Plus Jakarta Sans"],
                        "body-md": ["Inter"]
                    },
                    fontSize: {
                        "headline-sm": ["18px", {
                            lineHeight: "26px",
                            fontWeight: "600"
                        }],
                        "display-mobile": ["32px", {
                            lineHeight: "40px",
                            fontWeight: "800"
                        }],
                        "headline-lg": ["28px", {
                            lineHeight: "36px",
                            fontWeight: "700"
                        }],
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "600"
                        }],
                        "headline-md": ["22px", {
                            lineHeight: "30px",
                            fontWeight: "600"
                        }],
                        "headline-xl-mobile": ["26px", {
                            lineHeight: "34px",
                            fontWeight: "700"
                        }],
                        "label-sm": ["11px", {
                            lineHeight: "14px",
                            fontWeight: "700"
                        }],
                        "body-lg": ["16px", {
                            lineHeight: "26px",
                            fontWeight: "400"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            fontWeight: "600"
                        }],
                        "body-sm": ["12px", {
                            lineHeight: "18px",
                            fontWeight: "400"
                        }],
                        "headline-xl": ["36px", {
                            lineHeight: "44px",
                            fontWeight: "700"
                        }],
                        display: ["48px", {
                            lineHeight: "56px",
                            fontWeight: "800"
                        }],
                        "body-md": ["14px", {
                            lineHeight: "22px",
                            fontWeight: "400"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
    <!-- TOP HEADER -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <!-- Top Announcement Bar -->
        <div class="bg-primary text-on-primary py-1.5 px-6">
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
                        Mon - Sat: 08:00 - 16:00
                    </span>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <div class="h-20 max-w-7xl mx-auto px-6 flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <a class="flex items-center gap-3 group" data-path="home" href="#">
                    <img alt="Unity School International Logo" class="h-8 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1VYwVpozcOd06iGyHO8mSaBfBZUWnurbOtknUowIgF92ZYRtnSawwBK0Pq11_6-H2HX4gbQTn3UYHD8ns95-nn-70u15wS0QkWgV0R4J3bhtqN4T4FbosGQFyw-QnpJAK4GMugdKOVmdqdMudhIEiIClMZu6j1hOcS_hgDiprFjv8tCZK3l0mJt95_UVhibApR1UCmmBPKiu9iDwl7ue2Ntm7QXNzCnZ-2yqP7m5wygIARWThoc_JLq9eM" />
                    <div class="flex flex-col">
                        <span
                            class="font-headline-sm text-headline-sm text-primary tracking-tight group-hover:text-primary-container transition-colors">Unity
                            School</span>
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">International
                            Portal</span>
                    </div>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="hidden xl:flex items-center gap-1">
                <a class="px-3 py-2 transition-all bg-primary-container text-on-primary font-label-lg text-label-lg rounded-lg"
                    data-path="home" href="#">Home</a>
                <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                    data-path="school-profile" href="#school-profile">School Profile</a>
                <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                    data-path="academic-programs" href="#academic-programs">Academic Programs</a>
                <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                    data-path="admissions-and-requirements" href="#admissions-and-requirements">Admissions &amp;
                    Requirements</a>
                <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                    data-path="tuition-and-scholarships" href="#tuition-and-scholarships">Tuition &amp; Scholarships</a>
                <a class="px-3 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all"
                    data-path="faq-and-contact" href="#faq-and-contact">FAQ &amp; Contact</a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a class="hidden sm:inline-flex items-center px-3.5 py-2 rounded-lg bg-surface-container-low text-primary font-label-md text-label-md hover:bg-surface-container hover:text-primary-container transition-all"
                            href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    @else
                        <a class="hidden sm:inline-flex items-center px-3.5 py-2 rounded-lg bg-surface-container-low text-primary font-label-md text-label-md hover:bg-surface-container hover:text-primary-container transition-all"
                            data-path="parent-portal-login" href="{{ route('login') }}">
                            Parent Portal Login
                        </a>
                    @endauth
                @else
                    <a class="hidden sm:inline-flex items-center px-3.5 py-2 rounded-lg bg-surface-container-low text-primary font-label-md text-label-md hover:bg-surface-container hover:text-primary-container transition-all"
                        data-path="parent-portal-login" href="#parent-portal">
                        Parent Portal Login
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="inline-flex items-center px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm hover:bg-primary-container hover:text-on-primary-container transition-all"
                        data-path="apply-now" href="{{ route('register') }}">
                        Apply Now
                    </a>
                @else
                    <a class="inline-flex items-center px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm hover:bg-primary-container hover:text-on-primary-container transition-all"
                        data-path="apply-now" href="#apply-now">
                        Apply Now
                    </a>
                @endif

                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-28 bg-surface">
        <div class="flex flex-col w-full">
            <!-- 1. HERO SECTION (Immersive Editorial Canvas) -->
            <section
                class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface pb-space-2xl">
                <!-- Ambient light glow -->
                <div
                    class="absolute -top-24 right-10 w-96 h-96 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute top-1/3 -left-20 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none">
                </div>

                <div class="max-w-7xl mx-auto px-6 pt-8 md:pt-12">
                    <!-- Institutional Badges Pill Strip -->
                    <div class="flex flex-wrap items-center gap-2 mb-6">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-lowest shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-secondary-container animate-ping"></span>
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-bold">PMB
                                2025/2026 Gelombang 1</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[16px] text-primary">verified</span> Cambridge
                            International &amp; IB Candidate
                        </div>
                        <div
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[16px] text-tertiary">workspace_premium</span>
                            SPK Terakreditasi A (Unggul)
                        </div>
                    </div>

                    <!-- Hero Grid: Typography + Dynamic Live Tracker Bento -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Main Pitch -->
                        <div class="lg:col-span-7 flex flex-col gap-6">
                            <h1 class="font-display text-display text-primary tracking-tight leading-tight">
                                Empowering Global Thinkers, <span class="text-secondary">Inspiring Future
                                    Leaders.</span>
                            </h1>
                            <p class="font-headline-md text-headline-md text-on-surface-variant max-w-2xl font-normal">
                                Membentuk Generasi Berwawasan Global &amp; Berkarakter Unggul melalui kurikulum
                                terintegrasi Cambridge Pathway, pendekatan International Baccalaureate, dan pembiasaan
                                dwibahasa aktif sejak usia dini.
                            </p>

                            <!-- CTAs -->
                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <a class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-md hover:bg-secondary hover:text-on-secondary transition-all"
                                    data-path="apply-now" href="#apply-now">
                                    <span>Apply for Admission (Daftar Sekarang)</span>
                                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                                </a>
                                <a class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-surface-container-lowest text-primary font-label-lg text-label-lg shadow-sm hover:bg-surface-container-high transition-all"
                                    data-path="tuition-and-scholarships" href="#tuition-and-scholarships">
                                    <span
                                        class="material-symbols-outlined text-[20px] text-secondary">download_for_offline</span>
                                    <span>Download Prospectus 2025/2026 (PDF)</span>
                                </a>
                            </div>

                            <!-- Trust Proof Metrics -->
                            <div class="pt-6 grid grid-cols-3 gap-4">
                                <div class="flex flex-col">
                                    <span class="font-display text-display text-primary tracking-tighter">98.4%</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Top
                                        100 QS Univ &amp; PTN Favorit</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-display text-display text-primary tracking-tighter">1 : 10</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Rasio
                                        Pendidik &amp; Siswa</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-display text-display text-primary tracking-tighter">100%</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">English
                                        Immersion Environment</span>
                                </div>
                            </div>
                        </div>

                        <!-- Live Admissions Intake Card & Hero Imagery -->
                        <div class="lg:col-span-5 flex flex-col gap-5">
                            <!-- Live Intake Tracker Card -->
                            <div class="rounded-xl bg-surface-container-lowest p-6 shadow-xl relative overflow-hidden">
                                <div
                                    class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-primary/5 pointer-events-none">
                                </div>
                                <div class="flex items-center justify-between pb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-error animate-pulse"></span>
                                        <span
                                            class="font-label-md text-label-md text-primary uppercase tracking-wider font-semibold">Intake
                                            Wave 1 • Early Bird</span>
                                    </div>
                                    <span
                                        class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">Tersisa
                                        55 Kursi</span>
                                </div>

                                <div class="pb-4">
                                    <div class="flex justify-between items-baseline mb-2">
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Kuota Terisi
                                            Seluruh Jenjang (TK-SMA)</span>
                                        <span class="font-label-md text-label-md text-primary font-bold">185 / 240
                                            Kursi</span>
                                    </div>
                                    <div class="w-full h-3 rounded-full bg-surface-container-highest overflow-hidden">
                                        <div class="h-full bg-primary-container rounded-full" style="width: 77%;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Countdown Timer Row -->
                                <div
                                    class="p-3.5 rounded-lg bg-surface-container-low mb-4 flex items-center justify-between text-center">
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-primary font-bold"
                                            id="cd-days">14</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase">Hari</span>
                                    </div>
                                    <span class="text-on-surface-variant font-bold">:</span>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-primary font-bold"
                                            id="cd-hours">09</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase">Jam</span>
                                    </div>
                                    <span class="text-on-surface-variant font-bold">:</span>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-primary font-bold"
                                            id="cd-mins">42</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase">Menit</span>
                                    </div>
                                    <span class="text-on-surface-variant font-bold">:</span>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-secondary font-bold"
                                            id="cd-secs">18</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase">Detik</span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                                    <span class="flex items-center gap-1.5"><span
                                            class="material-symbols-outlined text-[16px] text-primary">apartment</span>
                                        On-Campus Tour: Buka Setiap Hari</span>
                                    <a class="text-primary font-label-sm text-label-sm font-semibold hover:underline"
                                        data-path="faq-and-contact" href="#faq-and-contact">Jadwalkan →</a>
                                </div>
                            </div>

                            <!-- Featured Campus Atmosphere Graphic -->
                            <div class="rounded-xl overflow-hidden shadow-lg relative h-56 bg-surface-container">
                                <img class="w-full h-full object-cover"
                                    alt="Modern bright international school lobby with multicultural students"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDryAY95K_PegWRe58W1RRg_mB1awdjMvNt9DFrHhH87933mSBEl1jcWXR486wCXABoCRLpNgm9YDiUxc3eFEvqfYQxmwrpAaYdlEuXrp9ViXJ3TG9uoaN1J0eJ9vHnMoAW4ZNmKnAder3nAV-o461xZZzdlYW6BADMn_dOf1Tjr3A9BDmFIoKTIZppbaSdUdN-PJTe_gsVFcAGdDwMLNkzn8R3fZTO7Mnm9BTkg3kHwR_jP5wCTscE" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent flex items-end p-4">
                                    <div class="text-on-primary">
                                        <span
                                            class="font-label-sm text-label-sm tracking-wider uppercase opacity-90">Kampus
                                            Terpadu Bintaro-Serpong</span>
                                        <p class="font-headline-sm text-headline-sm">Ruang Belajar Kolaboratif Abad 21
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. VALUE PROPOSITION & GLOBAL BENCHMARKS STRIP (School Profile) -->
            <section id="school-profile" class="w-full bg-primary text-on-primary py-12 scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-secondary-container text-[26px]">school</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm">4 Jenjang Terpadu</h3>
                                <p class="font-body-sm text-body-sm text-surface-container-high mt-1">Kesinambungan
                                    kurikulum dari Early Years (TK), Primary (SD), Middle (SMP) hingga High School (SMA
                                    IB/IGCSE).</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-secondary-container text-[26px]">language</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm">Multilingual Mastery</h3>
                                <p class="font-body-sm text-body-sm text-surface-container-high mt-1">100% Bahasa
                                    Pengantar Bahasa Inggris, diperkuat program elektif bahasa Mandarin &amp; Arab
                                    tematik.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-secondary-container text-[26px]">psychology</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm">Holistic Character</h3>
                                <p class="font-body-sm text-body-sm text-surface-container-high mt-1">Harmoni
                                    integritas moral, program Tahfidz Al-Qur'an terarah, dan kepemimpinan berwawasan
                                    kebangsaan.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-secondary-container text-[26px]">rocket_launch</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm">Global Pathways</h3>
                                <p class="font-body-sm text-body-sm text-surface-container-high mt-1">Bimbingan
                                    universitas intensif sejak Kelas 9 menuju Ivy League, Russell Group, Australia Go8,
                                    &amp; PTN Top RI.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. ACADEMIC DIVISIONS SHOWCASE (Bento Style Cards) -->
            <section id="academic-programs" class="w-full py-space-2xl bg-surface scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-2 font-bold">Academic
                                Tiers &amp; Curricula</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Pilihan Jenjang Pendidikan di
                                Unity School</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                            Setiap jenjang dirancang khusus untuk memfasilitasi fase tumbuh kembang motorik,
                            sosial-emosional, kognitif, dan kepemimpinan anak secara berjenjang.
                        </p>
                    </div>

                    <!-- 4 Division Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Division 1: Early Years -->
                        <div
                            class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative h-48 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Kindergarten children in learning activity"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTXaFnsVOnHijvQjwhHvl-UBPwbfjyD9Nc9xzUp7HQ-qME-RGD5KRcIn5pkq6_PrVMD7TqXKHu57-TO3He7vNSiT6OqbZSurncO8yUPJj2erpAv2sKyhW1VkJBhVgnwufVrZ1P7QPuCcMQeQMKS0q4qWskldu4c7NQ02ZSLeh4jyb3CT52EX9X5C6hUBnoDbyKoOeL2pAba0Xh_BBwZ9FnJHBwIkxMaRCy73W3HSr_FI6N7wqdU8Gl" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">
                                    Usia 3 - 5 Tahun
                                </div>
                                <div
                                    class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                                    Reggio Emilia &amp; EYFS
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-headline-md text-headline-md text-primary">Early Years (TK)
                                        </h3>
                                        <span
                                            class="material-symbols-outlined text-secondary text-[24px]">child_care</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                        Pondasi rasa ingin tahu anak lewat eksplorasi sensori, Jolly Phonics, bilingual
                                        conversational habit, dan sosialisasi penuh kasih sayang.
                                    </p>
                                    <ul class="space-y-2 mb-6">
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Jolly Phonics &amp; Early Literacy
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Nature Play &amp; Gross Motor Studio
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Gentle Islamic Character &amp; Adab
                                        </li>
                                    </ul>
                                </div>
                                <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                                    href="#tuition-and-scholarships">
                                    <span>Jelajahi Program TK</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Division 2: Primary School -->
                        <div
                            class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative h-48 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Elementary students collaborating on STEAM science project"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCy1wIXVg9XeWhnAwKaBNpaKx2ZRTZ1Qq36xMmUW2VZX-sptwX7vjdOoTcH_6EAujiPdT3C9A0qAwiDiN1dmiBpydSZSGKRA9ekm5VV6Dfu2Zb8Xu2q-OzfYV7hs6gsMK4NRiWBXZGiBe_NnErMMGju49ob6AeMuGgH_cwnu0aqj_3eI0VQiRSnQtKmlWflnAzdICgd11oW-goAVtD9uI3Sy4oLbb5X1m-kEpnbI37tK5AZ90jAwmsW" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold">
                                    Kelas 1 - 5 (SD)
                                </div>
                                <div
                                    class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                                    Cambridge Primary
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-headline-md text-headline-md text-primary">Primary School</h3>
                                        <span
                                            class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                        Pondasi akademik kokoh berbasis Singapore Math, Cambridge Primary Science &amp;
                                        English, dilengkapi pemikiran kritis dan hafalan juz pilihan.
                                    </p>
                                    <ul class="space-y-2 mb-6">
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Singapore Math &amp; CPA Approach
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            STEAM &amp; Junior Coding Classes
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Bilingual Public Speaking Club
                                        </li>
                                    </ul>
                                </div>
                                <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                                    href="#tuition-and-scholarships">
                                    <span>Jelajahi Program SD</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Division 3: Middle School -->
                        <div
                            class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative h-48 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Middle school students with robotics vehicle"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4kiQygais3Pa3sgxVuWVNvh7j8juT2CAPUVspfjSF_-JjVUjsILQpsDrLjPVMeOm3GkZaiPy7mtBrT6o6g0SqObq2qw4XcfyF7BF6SMHC4xsioYYAZWYgDCW2NcM5hc3CLQkYnAZlhZpbiphfnnA_7JZ3CXunXL9V7dBmre1H2JS15-YKEcPreseIXJkQs4nZr46hZaaCuDggfEqYb1Vjfk3KnB6oC4ZHyuOSJg2KU8xy5MB5TeG3" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-surface-tint text-on-primary font-label-sm text-label-sm font-bold">
                                    Kelas 6 - 8 (SMP)
                                </div>
                                <div
                                    class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                                    Cambridge Lower Sec
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-headline-md text-headline-md text-primary">Middle School</h3>
                                        <span
                                            class="material-symbols-outlined text-primary text-[24px]">terminal</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                        Transisi penting remaja dengan penguatan logika ilmiah, coding Python dasar,
                                        kepemimpinan OSIS, debat bahasa Inggris, dan ekspedisi sosial.
                                    </p>
                                    <ul class="space-y-2 mb-6">
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Cambridge Checkpoint Readiness
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Model United Nations (MUN) Junior
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Youth Leadership &amp; Social Project
                                        </li>
                                    </ul>
                                </div>
                                <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                                    href="#tuition-and-scholarships">
                                    <span>Jelajahi Program SMP</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Division 4: High School -->
                        <div
                            class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative h-48 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="High school students in university prep"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrCwpxxVqoQJ6BNoIAWtG2wrFOWxvU7rN6L6VwozW51a6ZYQxAVAtF5E2gxS-vST-PUI7RB3ufiHTmgSxGdS-gLyO3-gXn4XHqNL7IOZhPz7WT0f3nf99w5j9tORTcO1AEbxPGWwd32Eb8QpJwOkcNVDR-E8CxrdLUo7Ity5A4Hjsmo-upvAYYLvshvVBFy-GWhnyAPVLjUr2XVcqmU1wVzBsBLs7-GqaboiaRv0nqAtHUD_SelwsN" />
                                <div
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm font-bold">
                                    Kelas 9 - 12 (SMA)
                                </div>
                                <div
                                    class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                                    IGCSE, A-Level &amp; IB
                                </div>
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-headline-md text-headline-md text-primary">High School</h3>
                                        <span
                                            class="material-symbols-outlined text-secondary text-[24px]">account_balance</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                        Jalur pra-universitas bergengsi. Cambridge IGCSE, Cambridge International AS
                                        &amp; A Levels, serta persiapan matang portofolio perguruan tinggi global.
                                    </p>
                                    <ul class="space-y-2 mb-6">
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            1-on-1 College Admissions Counseling
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            SAT, IELTS, &amp; UTBK Acceleration
                                        </li>
                                        <li
                                            class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                            <span
                                                class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                            Research Mentorship &amp; Internships
                                        </li>
                                    </ul>
                                </div>
                                <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                                    href="#tuition-and-scholarships">
                                    <span>Jelajahi Program SMA</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. SEAMLESS 5-STEP ADMISSIONS JOURNEY (Alur Pendaftaran Terpadu) -->
            <section id="admissions-and-requirements"
                class="w-full py-space-2xl bg-surface-container-low scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-bold">Simple
                            &amp; Transparent Roadmap</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Alur Pendaftaran Siswa Baru
                            (PPDB 2025/2026)</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-3">
                            Seluruh proses seleksi dan administrasi dapat diselesaikan secara fleksibel melalui portal
                            online kami atau dipandu langsung di Sekretariat Pendaftaran Kampus.
                        </p>
                    </div>

                    <!-- Step Stepper Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 relative">
                        <!-- Step 1 -->
                        <div
                            class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between relative">
                            <div>
                                <div
                                    class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm mb-4">
                                    1
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Pendaftaran Akun</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Buat akun orang tua pada portal resmi dalam 3 menit untuk memilih jenjang dan tahun
                                    ajaran.
                                </p>
                            </div>
                            <div
                                class="mt-4 pt-3 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">schedule</span> 3-5 Menit Online
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between relative">
                            <div>
                                <div
                                    class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm mb-4">
                                    2
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Unggah Berkas</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Upload Akta Kelahiran, KK/Paspor, dan rapor 2 tahun terakhir secara digital tanpa
                                    perlu berkas cetak.
                                </p>
                            </div>
                            <div
                                class="mt-4 pt-3 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">cloud_upload</span> Verifikasi 1x24
                                Jam
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between relative">
                            <div
                                class="absolute -top-3 right-4 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">
                                Pusat Evaluasi
                            </div>
                            <div>
                                <div
                                    class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-headline-sm text-headline-sm mb-4">
                                    3
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Observasi &amp; Asesmen
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Observasi ramah anak (TK), asesmen literasi-numerasi (SD-SMP), atau tes penempatan
                                    mata pelajaran (SMA).
                                </p>
                            </div>
                            <div
                                class="mt-4 pt-3 flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">how_to_reg</span> On-Campus /
                                Online
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div
                            class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between relative">
                            <div>
                                <div
                                    class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm mb-4">
                                    4
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Surat Kelulusan</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Menerima Surat Keputusan Penerimaan (LoA) beserta penetapan potongan beasiswa
                                    prestasi yang disetujui.
                                </p>
                            </div>
                            <div
                                class="mt-4 pt-3 flex items-center gap-1.5 text-tertiary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">mark_email_read</span> Maks. 3 Hari
                                Kerja
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div
                            class="rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between relative">
                            <div>
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-headline-sm text-headline-sm mb-4">
                                    5
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Daftar Ulang &amp; Kit
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Konfirmasi kursi, pengukuran seragam resmi, serta pengambilan starter-pack orientasi
                                    siswa baru.
                                </p>
                            </div>
                            <div
                                class="mt-4 pt-3 flex items-center gap-1.5 text-primary-container font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">inventory_2</span> Welcome to
                                Unity!
                            </div>
                        </div>
                    </div>

                    <!-- Quick Action Under Flow -->
                    <div
                        class="mt-10 p-6 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">support_agent</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary">Butuh Pendampingan
                                    Pendaftaran Berkas?</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Tim Admission Officer kami
                                    siap membantu proses input data melalui video call atau konsultasi tatap muka.</p>
                            </div>
                        </div>
                        <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shrink-0"
                            href="https://wa.me/62215550199" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Bantuan Helpdesk WhatsApp</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- 5. TRANSPARENT TUITION & SCHOLARSHIP PATHWAYS -->
            <section id="tuition-and-scholarships" class="w-full py-space-2xl bg-surface scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-5 flex flex-col gap-6">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Biaya
                                Transparan &amp; Beasiswa</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Investasi Terbaik Untuk Masa
                                Depan Putra-Putri Anda</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Unity School menerapkan skema biaya pendidikan yang transparan tanpa pungutan
                                tersembunyi sepanjang tahun ajaran. Dilengkapi opsi cicilan bunga 0% via bank rekanan
                                terkemuka.
                            </p>

                            <div class="space-y-4">
                                <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                                    <div class="p-2 rounded-lg bg-secondary-container text-on-secondary-container">
                                        <span class="material-symbols-outlined text-[22px]">diversity_3</span>
                                    </div>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm text-primary">Sibling Privilege
                                            Discount</h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Potongan
                                            Biaya Pengembangan sebesar 10% untuk anak kedua, dan 15% untuk anak ketiga.
                                        </p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                                    <div class="p-2 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed">
                                        <span class="material-symbols-outlined text-[22px]">auto_awesome</span>
                                    </div>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm text-primary">Unity Global Merit
                                            Scholarship</h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Beasiswa
                                            bebas SPP hingga 100% untuk peraih medali olimpiade sains/seni internasional
                                            &amp; hafizh Qur'an minimal 3 Juz.</p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                                    <div class="p-2 rounded-lg bg-primary-fixed text-on-primary-fixed">
                                        <span class="material-symbols-outlined text-[22px]">credit_card</span>
                                    </div>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm text-primary">Fasilitas Cicilan
                                            Fleksibel 0%</h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Kemudahan
                                            pelunasan Dana Pengembangan Pendidikan (DPP) berkala 3x atau 6x per
                                            semester.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:text-secondary font-bold transition-colors"
                                    href="#tuition-and-scholarships">
                                    <span>Buka Rincian Biaya Tiap Jenjang &amp; Syarat Beasiswa</span>
                                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Interactive Cost Summary Card -->
                        <div class="lg:col-span-7">
                            <div class="rounded-xl bg-surface-container-lowest p-8 shadow-xl">
                                <div class="flex items-center justify-between pb-6">
                                    <div>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase">Simulasi
                                            Biaya Awal</span>
                                        <h3 class="font-headline-lg text-headline-lg text-primary">Estimasi Periode
                                            Early Bird</h3>
                                    </div>
                                    <span id="tier-badge-discount"
                                        class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">Hemat
                                        s.d 15 Juta IDR</span>
                                </div>

                                <!-- Interactive Tier Toggle -->
                                <div class="grid grid-cols-4 gap-2 p-1.5 rounded-xl bg-surface-container mb-6 text-center"
                                    id="tier-pill-selector">
                                    <button
                                        class="py-2 px-3 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm transition-all"
                                        data-tier="tk" type="button">TK (EY)</button>
                                    <button
                                        class="py-2 px-3 rounded-lg text-on-surface-variant hover:text-primary font-label-md text-label-md transition-all"
                                        data-tier="sd" type="button">SD (Primary)</button>
                                    <button
                                        class="py-2 px-3 rounded-lg text-on-surface-variant hover:text-primary font-label-md text-label-md transition-all"
                                        data-tier="smp" type="button">SMP (Middle)</button>
                                    <button
                                        class="py-2 px-3 rounded-lg text-on-surface-variant hover:text-primary font-label-md text-label-md transition-all"
                                        data-tier="sma" type="button">SMA (High)</button>
                                </div>

                                <!-- Breakdown Table -->
                                <div class="space-y-4 pb-6">
                                    <div
                                        class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                        <span class="font-body-md text-body-md text-on-surface-variant">Biaya Formulir
                                            &amp; Tes Asesmen</span>
                                        <span id="tier-form-fee"
                                            class="font-headline-sm text-headline-sm text-primary">Rp 650.000</span>
                                    </div>
                                    <div
                                        class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                        <div class="flex flex-col">
                                            <span class="font-body-md text-body-md text-on-surface-variant">Uang
                                                Pangkal / DPP (Sekali Selama Jenjang)</span>
                                            <span id="tier-dpp-discount"
                                                class="font-label-sm text-label-sm text-tertiary">Termasuk Diskon Early
                                                Bird -Rp 8.000.000</span>
                                        </div>
                                        <div class="text-right">
                                            <span id="tier-dpp-original"
                                                class="line-through text-on-surface-variant font-body-sm text-body-sm block">Rp
                                                38.000.000</span>
                                            <span id="tier-dpp-final"
                                                class="font-headline-sm text-headline-sm text-primary">Rp
                                                30.000.000</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                        <span class="font-body-md text-body-md text-on-surface-variant">SPP Bulanan
                                            (Termasuk Buku Digital &amp; Lab)</span>
                                        <span id="tier-spp" class="font-headline-sm text-headline-sm text-primary">Rp
                                            3.500.000 <span
                                                class="text-body-sm font-normal text-on-surface-variant">/bln</span></span>
                                    </div>
                                    <div class="flex justify-between items-center py-2.5">
                                        <span class="font-body-md text-body-md text-on-surface-variant">Paket Seragam
                                            Lengkap 5 Pasang</span>
                                        <span class="font-headline-sm text-headline-sm text-primary">Gratis (Early Bird
                                            Wave 1)</span>
                                    </div>
                                </div>

                                <div class="p-4 rounded-xl bg-surface-container flex items-center justify-between">
                                    <span class="font-label-lg text-label-lg text-primary">Estimasi Penghematan Wave
                                        1</span>
                                    <span id="tier-total-savings"
                                        class="font-headline-md text-headline-md text-secondary font-bold">Total Hemat:
                                        Rp 11.500.000</span>
                                </div>

                                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                    <a class="flex-1 text-center py-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all"
                                        data-path="apply-now" href="#apply-now">
                                        Ambil Penawaran Early Bird
                                    </a>
                                    <a class="px-5 py-3 rounded-lg bg-surface-container-high text-primary font-label-md text-label-md hover:bg-surface-container-highest transition-all text-center"
                                        data-path="tuition-and-scholarships" href="#tuition-and-scholarships">
                                        Unduh Tabel Biaya Lengkap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 6. WORLD-CLASS CAMPUS FACILITIES (Sarana Berstandar Internasional) -->
            <section id="facilities" class="w-full py-space-2xl bg-surface-container-low scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-2 font-bold">World-Class
                                Environment</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Fasilitas Kampus Mendukung
                                Potensi Maksimal</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                            Dirancang ramah lingkungan, aman, dan memicu kreativitas melalui sarana olahraga, seni,
                            sains, dan spiritualitas yang terpadu di atas lahan 3.8 hektar.
                        </p>
                    </div>

                    <!-- Facilities Bento Showcase -->
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Facility 1: STEAM Lab (Large Card) -->
                        <div
                            class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                            <div class="relative h-64 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="High-tech STEAM and Robotics laboratory"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVAtKHmNVPUw6lu4P5iuSy5lflZcWO_pcnwJAMbq_G2jiYZyWUp2EI_VctFURVMD7Ezhzoa8Zb4L-cD5AZd4bYmUhN4_PD4V6p6ihDrz9un1XXkyeIk5MnpQW9oWmpr8SohOu-DEzSBNYpOdzF2FjsdqyuKB9FJ2q8y0sINmxB8jRE7cNdtE9svK_JB5FR7Z60f40mP2HoBA35Dey1kV9q74AJj-oGNzcnvWH3UXYeTsfmOBq09sKB" />
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                                    STEAM &amp; AI Innovation Lab
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-md text-headline-md text-primary mb-2">Pusat Robotika, AI
                                    &amp; Fabrikasi Digital</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Fasilitas cetak 3D, sensor IoT, serta ruang coding modern tempat siswa melatih
                                    pemikiran komputasional dan memenangkan kejuaraan kompetisi sains nasional maupun
                                    internasional.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 2: Olympic Pool -->
                        <div class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                            <div class="relative h-64 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Indoor semi-Olympic swimming pool"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbvCbIfZd9Bt16q1QA8em296y-fzUr1uOMxZH1uXUK46J87CzF9S5-EENnlHZVUZWANiZzILqX0FFJkcN2TL-UJczJZmF1QM2HqLbg8_nintJ0O32pOBnD-ecG0mP0WpIyYD39H1P0KwCtHJJCHGiqtOqcjysfi9bcpL7VTIjg6fBuWGzV9_BKgmt8cdyAoACsMWU7MAKpGTMHernp9kBjdUPHH0Zecx1Wqmjqr3vmxdQtiiw6ZME5" />
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                                    Sports Complex
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-md text-headline-md text-primary mb-2">Kolam Renang
                                    Semi-Olimpiade</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Kolam air hangat bersirkulasi ozon berstandar keamanan internasional lengkap dengan
                                    pelatih sertifikasi FINA.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 3: Performing Arts Center -->
                        <div class="rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                            <div class="relative h-64 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Performing arts auditorium"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUAwKVQTNYWrmaAO71MYVRADcEedHme7iDk7WNq3FKb5x-BMT0prXu8Tp-Dbfc9yAOQ6wJzAs4uQVq6fi3lh3yQRvRCRPPe1z20-IPOhTA9fhGP6tyE6oqkSpjBYEetkk95q85BodSg57N07NdEruHx6wZfRJ1PH9_RJptDJKEYvIH4UU36Q1Az_CB4ZwZiWZyTRAfY5BAZ9ZH7QMDsalWk4LoYWfHQHaQLNIb1zH2fNNJsdLeh49B" />
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                                    Auditorium &amp; Musik
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-md text-headline-md text-primary mb-2">Grand Performing Arts
                                    Hall</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Auditorium 600 kursi berakustik prima untuk orkestra, pementasan drama bahasa
                                    Inggris, dan wisuda akbar.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 4: Modern Commons Library -->
                        <div
                            class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                            <div class="relative h-64 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Multi-level modern library and media commons"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxBbltYnTJpa-T_wdzdUVzXZESo5LY4nCnNAqDtxmE4FPMMkAkK6aKy5je4meZjzxfF3SDqvmtmR7HgNRzjcHtPZjKj0U8fEDKPCw3RKUEWJSLSWKgl1bKPVw7C9K4NUmmEaI_x8Hu5GW0JdgGkr7-C3jmRzSGt6YRV2SxnED4LfdVlHx1yuRpTbSiv4wPs0NXeWhzjhETiD4EqtxaSgu5OWkG9dA367k_PGCihsg_ADWnr9zkybPi" />
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                                    Learning Commons
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-md text-headline-md text-primary mb-2">Perpustakaan Digital
                                    &amp; Ruang Diskusi Terbuka</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Akses ke lebih dari 45.000 judul literatur fisik dan jutaan jurnal akademik JSTOR
                                    &amp; EBSCO dengan pod diskusi multimedia yang nyaman.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 5: Mosque & Spiritual Sanctuary -->
                        <div
                            class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                            <div class="relative h-64 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="Contemporary campus mosque"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBP9PGfYiTCDv_G0ZysXqqTOH9JiWbpYq393-VM4SRXnfbk3wwD5DgjYFsei9ANRbR0ziVAH03Ermje-bQIlr3MKcJwaQ3kiWAr1UjwkcXRe7zkyDB7LCEAqtwRQv33i-JMMK-jt3QdQ2b33g0bh3O_Kcm4Flm3HoxiJRMYFUAcyQMyxrwrvu7z2pzJ-vUVUf5SAbXlARf4PGbjjG4nG6HqZUAEggVS1FiAznr5pK7huabyMs7nRv_M" />
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                                    Pusat Spiritual
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-md text-headline-md text-primary mb-2">Masjid Raya Kampus
                                    &amp; Halaqah Tahfidz</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Pusat pembinaan adab, shalat berjamaah harian, serta bimbingan tahsin-tahfidz
                                    bersama asatidz bersanad mu'tabar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 7. PARENT & ALUMNI TESTIMONIALS -->
            <section id="testimonials" class="w-full py-space-2xl bg-surface scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center max-w-2xl mx-auto mb-14">
                        <span
                            class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Suara
                            Orang Tua &amp; Alumni</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Mengapa Keluarga Memilih Unity
                            School</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            Kisah nyata transformasi putra-putri kami dalam meraih prestasi akademik tingkat dunia
                            sekaligus menjaga kesantunan pekerti luhur.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Testimonial 1 -->
                        <div
                            class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex text-secondary mb-4">
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface italic mb-6">
                                    "Anak saya masuk sejak TK dan kini di Grade 5 SD. Kepercayaan dirinya berbicara
                                    bahasa Inggris berkembang sangat natural tanpa rasa tertekan. Nilai-nilai akhlak dan
                                    shalat tepat waktu juga tertanam sangat kuat di rumah."
                                </p>
                            </div>
                            <div class="flex items-center gap-3 pt-4">
                                <div
                                    class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                                    DS
                                </div>
                                <div>
                                    <span class="font-headline-sm text-headline-sm text-primary block">Dr. Sarah
                                        Daniswara</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Orang Tua Murid
                                        Primary (Grade 5)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex text-secondary mb-4">
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface italic mb-6">
                                    "University Counselor di SMA Unity School benar-benar mendampingi anak kami sejak
                                    kelas 10 dalam menyusun esai dan portofolio. Alhamdulillah dia diterima di
                                    University of Melbourne jurusan Computer Science dengan scholarship."
                                </p>
                            </div>
                            <div class="flex items-center gap-3 pt-4">
                                <div
                                    class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                                    RM
                                </div>
                                <div>
                                    <span class="font-headline-sm text-headline-sm text-primary block">Ir. Rahmat
                                        Mulyadi</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Orang Tua Alumni
                                        Class of 2024</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex text-secondary mb-4">
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface italic mb-6">
                                    "Moving from an international school in Singapore to Jakarta was seamless for my
                                    daughter. Unity's Cambridge framework kept her academic momentum intact while giving
                                    her a profound sense of cultural belonging."
                                </p>
                            </div>
                            <div class="flex items-center gap-3 pt-4">
                                <div
                                    class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                                    AL
                                </div>
                                <div>
                                    <span class="font-headline-sm text-headline-sm text-primary block">Amanda
                                        Lee-Tan</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Expatriate
                                        Parent, Middle School (Grade 8)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 8. DIRECT ADMISSIONS SUPPORT & MULTI-TIER HELPDESK -->
            <section id="faq-and-contact" class="w-full py-16 bg-surface-container-high scroll-mt-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="rounded-2xl bg-surface-container-lowest p-8 md:p-12 shadow-sm">
                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 pb-8">
                            <div>
                                <span
                                    class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-bold">Dedicated
                                    Admission Counselors</span>
                                <h3 class="font-headline-lg text-headline-lg text-primary mt-1">Konsultasi Langsung
                                    dengan Petugas Jenjang</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-2">
                                    Setiap jenjang memiliki spesialis penerimaan yang menguasai tahapan observasi,
                                    kurikulum, serta asesmen yang relevan.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all self-start lg:self-center shrink-0"
                                href="https://wa.me/62215550199?text=Halo,%20saya%20ingin%20jadwalkan%20private%20campus%20tour"
                                target="_blank">
                                <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                                <span>Jadwalkan Private Campus Tour</span>
                            </a>
                        </div>

                        <!-- 4 Division Contact Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <span
                                        class="font-label-sm text-label-sm text-secondary uppercase font-bold">Helpdesk
                                        TK (Early Years)</span>
                                    <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Ms. Nabila, S.Psi
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Observasi motorik
                                        &amp; kesiapan masuk TK A/B.</p>
                                </div>
                                <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                                    href="https://wa.me/62215550199?text=Halo%20Ms.%20Nabila,%20saya%20ingin%20konsultasi%20PPDB%20TK"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">chat</span> Chat WhatsApp →
                                </a>
                            </div>

                            <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Helpdesk
                                        SD (Primary)</span>
                                    <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Mr. Dimas, M.Ed
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Asesmen
                                        diagnostik &amp; transfer siswa.</p>
                                </div>
                                <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                                    href="https://wa.me/62215550199?text=Halo%20Mr.%20Dimas,%20saya%20ingin%20konsultasi%20PPDB%20SD"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">chat</span> Chat WhatsApp →
                                </a>
                            </div>

                            <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <span
                                        class="font-label-sm text-label-sm text-surface-tint uppercase font-bold">Helpdesk
                                        SMP (Middle)</span>
                                    <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Ms. Farah, B.A.
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Cambridge
                                        Checkpoint &amp; beasiswa prestasi.</p>
                                </div>
                                <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                                    href="https://wa.me/62215550199?text=Halo%20Ms.%20Farah,%20saya%20ingin%20konsultasi%20PPDB%20SMP"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">chat</span> Chat WhatsApp →
                                </a>
                            </div>

                            <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <span
                                        class="font-label-sm text-label-sm text-secondary uppercase font-bold">Helpdesk
                                        SMA (High School)</span>
                                    <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Mr. Jonathan, M.Sc
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Jalur IGCSE,
                                        A-Levels &amp; University Prep.</p>
                                </div>
                                <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                                    href="https://wa.me/62215550199?text=Halo%20Mr.%20Jonathan,%20saya%20ingin%20konsultasi%20PPDB%20SMA"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">chat</span> Chat WhatsApp →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 9. FINAL CALL TO ACTION BANNER (Grand Closure) -->
            <section id="apply-now"
                class="w-full py-space-2xl bg-gradient-to-br from-primary via-primary-container to-primary text-on-primary scroll-mt-24">
                <div class="max-w-5xl mx-auto px-6 text-center">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-wider mb-6 font-semibold">
                        Tahun Ajaran 2025/2026 Segera Dimulai
                    </div>
                    <h2 class="font-display text-display tracking-tight text-on-primary">
                        Amankan Kursi Putra-Putri Anda di Unity School International
                    </h2>
                    <p
                        class="font-headline-md text-headline-md text-surface-container-high mt-4 max-w-2xl mx-auto font-normal">
                        Raih kesempatan diskon Early Bird serta konsultasi rencana studi bersama konselor akademik
                        berpengalaman kami hari ini.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
                        <a class="px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-lg hover:bg-secondary hover:text-on-secondary transition-all font-semibold"
                            href="https://wa.me/62215550199?text=Halo,%20saya%20ingin%20mendaftar%20online%20PPDB%20Unity%20School">
                            Mulai Pendaftaran Online Sekarang
                        </a>
                        <a class="px-7 py-4 rounded-xl bg-primary-fixed-dim text-on-primary-fixed font-label-lg text-label-lg hover:bg-surface-container-lowest transition-all font-semibold"
                            href="#faq-and-contact">
                            Kunjungi Kampus (Jadwalkan Tur)
                        </a>
                    </div>
                    <div
                        class="pt-10 flex flex-wrap items-center justify-center gap-8 text-surface-container-high font-body-sm text-body-sm">
                        <span class="flex items-center gap-1.5"><span
                                class="material-symbols-outlined text-[18px] text-tertiary-fixed">verified</span>
                            Pengisian Formulir Mudah 5 Menit</span>
                        <span class="flex items-center gap-1.5"><span
                                class="material-symbols-outlined text-[18px] text-tertiary-fixed">lock</span>
                            Kerahasiaan Dokumen Terjamin</span>
                        <span class="flex items-center gap-1.5"><span
                                class="material-symbols-outlined text-[18px] text-tertiary-fixed">credit_score</span>
                            Cicilan SPP Fleksibel 0%</span>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="w-full bg-surface-container-low mt-space-2xl text-on-surface-variant">
        <div class="max-w-7xl mx-auto px-6 pt-space-2xl pb-space-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-sm">
                    <div class="flex items-center gap-3">
                        <img alt="Unity School International Logo" class="h-9 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1VYwVpozcOd06iGyHO8mSaBfBZUWnurbOtknUowIgF92ZYRtnSawwBK0Pq11_6-H2HX4gbQTn3UYHD8ns95-nn-70u15wS0QkWgV0R4J3bhtqN4T4FbosGQFyw-QnpJAK4GMugdKOVmdqdMudhIEiIClMZu6j1hOcS_hgDiprFjv8tCZK3l0mJt95_UVhibApR1UCmmBPKiu9iDwl7ue2Ntm7QXNzCnZ-2yqP7m5wygIARWThoc_JLq9eM" />
                        <div class="flex flex-col">
                            <span class="font-headline-sm text-headline-sm text-primary">Unity School
                                International</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Nurturing
                                Global Visionaries</span>
                        </div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant pr-4">An integrated world-class campus
                        advancing rigorous academic disciplines alongside holistic character integrity. Serving learners
                        across Early Years, Primary, Middle, and High School educational tiers.</p>
                    <div class="flex flex-col gap-1.5 pt-space-xs text-on-surface">
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">location_on</span>
                            <span class="font-body-sm text-body-sm">Unity International Campus Blvd No. 8, Golden
                                Archway District, Jakarta 12560</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px]">mail</span>
                            <span class="font-body-sm text-body-sm">admissions@unityschool.sch.id</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px]">headset_mic</span>
                            <span class="font-body-sm text-body-sm">Senior Registrar Desk: +62 21 555-0199</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface">Academic Tiers</span>
                    <div class="flex flex-col gap-2 font-body-sm text-body-sm">
                        <a class="hover:text-primary transition-colors" href="#academic-programs">Early Childhood /
                            Kindergarten</a>
                        <a class="hover:text-primary transition-colors" href="#academic-programs">Primary School
                            (Grades 1-6)</a>
                        <a class="hover:text-primary transition-colors" href="#academic-programs">Middle School
                            (Grades 7-9)</a>
                        <a class="hover:text-primary transition-colors" href="#academic-programs">High School &amp; IB
                            Diploma (Grades 10-12)</a>
                        <a class="hover:text-primary transition-colors" href="#school-profile">Tahfidz &amp; Moral
                            Leadership</a>
                        <a class="hover:text-primary transition-colors" href="#facilities">STEAM Innovation Labs</a>
                    </div>
                </div>

                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface">Admissions Hub</span>
                    <div class="flex flex-col gap-2 font-body-sm text-body-sm">
                        <a class="hover:text-primary transition-colors" href="#admissions-and-requirements">Admissions
                            Roadmap 2025/2026</a>
                        <a class="hover:text-primary transition-colors" href="#admissions-and-requirements">Entry
                            Requirements by Grade</a>
                        <a class="hover:text-primary transition-colors" href="#tuition-and-scholarships">Transparent
                            Fee Schedule</a>
                        <a class="hover:text-primary transition-colors" href="#tuition-and-scholarships">Merit &amp;
                            Tahfidz Scholarships</a>
                        <a class="hover:text-primary transition-colors" href="#faq-and-contact">Book Private Campus
                            Tour</a>
                        <a class="hover:text-primary transition-colors" href="#parent-portal">Application Status
                            Tracker</a>
                    </div>
                </div>

                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface">Global Credentials</span>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Accredited by premier world
                        educational authorities ensuring seamless overseas university transitions.</p>
                    <div class="flex flex-col gap-2">
                        <div class="p-2.5 rounded-lg bg-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">verified</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">Cambridge Assessment</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">International School
                                    ID #ID382</span>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-lg bg-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">stars</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">IB World Candidate</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Primary Years &amp;
                                    Diploma Programme</span>
                            </div>
                        </div>
                        <div class="p-2.5 rounded-lg bg-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">workspace_premium</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">WASC Accredited</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Focus on Learning
                                    Accreditation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="pt-space-lg border-t border-surface-container flex flex-col md:flex-row items-center justify-between gap-4 font-body-sm text-body-sm text-on-surface-variant">
                <p>© 2025 Unity School International. All rights reserved. Admissions Directorate Office.</p>
                <div class="flex items-center gap-6">
                    <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-primary transition-colors" href="#">Terms of Enrollment</a>
                    <a class="hover:text-primary transition-colors" href="#">Student Safeguarding</a>
                    <a class="hover:text-primary transition-colors" href="https://wa.me/62215550199"
                        target="_blank">Helpdesk WhatsApp</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        // Micro-interaction: Live Intake Countdown
        (function() {
            let days = 14,
                hours = 9,
                mins = 42,
                secs = 18;
            const elDays = document.getElementById('cd-days');
            const elHours = document.getElementById('cd-hours');
            const elMins = document.getElementById('cd-mins');
            const elSecs = document.getElementById('cd-secs');

            if (elSecs) {
                setInterval(function() {
                    if (secs > 0) {
                        secs--;
                    } else {
                        secs = 59;
                        if (mins > 0) {
                            mins--;
                        } else {
                            mins = 59;
                            if (hours > 0) {
                                hours--;
                            } else {
                                hours = 23;
                                if (days > 0) days--;
                            }
                        }
                    }
                    elSecs.textContent = secs < 10 ? '0' + secs : secs;
                    elMins.textContent = mins < 10 ? '0' + mins : mins;
                    elHours.textContent = hours < 10 ? '0' + hours : hours;
                    elDays.textContent = days < 10 ? '0' + days : days;
                }, 1000);
            }

            // Micro-interaction: Tier Switcher Selector with dynamic cost calculation
            const tierData = {
                tk: {
                    badge: "Hemat s.d 15 Juta IDR",
                    formFee: "Rp 650.000",
                    dppDiscount: "Termasuk Diskon Early Bird -Rp 8.000.000",
                    dppOriginal: "Rp 38.000.000",
                    dppFinal: "Rp 30.000.000",
                    spp: "Rp 3.500.000",
                    totalSavings: "Total Hemat: Rp 11.500.000"
                },
                sd: {
                    badge: "Hemat s.d 18 Juta IDR",
                    formFee: "Rp 750.000",
                    dppDiscount: "Termasuk Diskon Early Bird -Rp 10.000.000",
                    dppOriginal: "Rp 50.000.000",
                    dppFinal: "Rp 40.000.000",
                    spp: "Rp 4.750.000",
                    totalSavings: "Total Hemat: Rp 13.500.000"
                },
                smp: {
                    badge: "Hemat s.d 20 Juta IDR",
                    formFee: "Rp 850.000",
                    dppDiscount: "Termasuk Diskon Early Bird -Rp 12.000.000",
                    dppOriginal: "Rp 58.000.000",
                    dppFinal: "Rp 46.000.000",
                    spp: "Rp 5.800.000",
                    totalSavings: "Total Hemat: Rp 15.500.000"
                },
                sma: {
                    badge: "Hemat s.d 25 Juta IDR",
                    formFee: "Rp 1.000.000",
                    dppDiscount: "Termasuk Diskon Early Bird -Rp 15.000.000",
                    dppOriginal: "Rp 68.000.000",
                    dppFinal: "Rp 53.000.000",
                    spp: "Rp 6.900.000",
                    totalSavings: "Total Hemat: Rp 18.500.000"
                }
            };

            const pillButtons = document.querySelectorAll('#tier-pill-selector button');
            const elBadge = document.getElementById('tier-badge-discount');
            const elFormFee = document.getElementById('tier-form-fee');
            const elDppDiscount = document.getElementById('tier-dpp-discount');
            const elDppOriginal = document.getElementById('tier-dpp-original');
            const elDppFinal = document.getElementById('tier-dpp-final');
            const elSpp = document.getElementById('tier-spp');
            const elTotalSavings = document.getElementById('tier-total-savings');

            pillButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    pillButtons.forEach(b => {
                        b.className =
                            'py-2 px-3 rounded-lg text-on-surface-variant hover:text-primary font-label-md text-label-md transition-all';
                    });
                    this.className =
                        'py-2 px-3 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm transition-all';

                    const tierKey = this.getAttribute('data-tier');
                    if (tierData[tierKey]) {
                        const data = tierData[tierKey];
                        if (elBadge) elBadge.textContent = data.badge;
                        if (elFormFee) elFormFee.textContent = data.formFee;
                        if (elDppDiscount) elDppDiscount.textContent = data.dppDiscount;
                        if (elDppOriginal) elDppOriginal.textContent = data.dppOriginal;
                        if (elDppFinal) elDppFinal.textContent = data.dppFinal;
                        if (elSpp) elSpp.innerHTML =
                            `${data.spp} <span class="text-body-sm font-normal text-on-surface-variant">/bln</span>`;
                        if (elTotalSavings) elTotalSavings.textContent = data.totalSavings;
                    }
                });
            });
        })();
    </script>
</body>

</html>
