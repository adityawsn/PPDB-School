<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
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
                    "colors": {
                        "on-secondary-fixed-variant": "#653e00",
                        "surface-bright": "#faf8ff",
                        "surface": "#faf8ff",
                        "surface-container": "#eaedff",
                        "outline": "#70787c",
                        "secondary-fixed-dim": "#ffb95f",
                        "inverse-on-surface": "#eef0ff",
                        "primary-fixed": "#b6ebfe",
                        "on-surface-variant": "#40484b",
                        "on-secondary-container": "#684000",
                        "surface-container-highest": "#dae2fd",
                        "tertiary": "#003724",
                        "on-primary-fixed-variant": "#114d5d",
                        "tertiary-container": "#005036",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#002114",
                        "tertiary-fixed": "#85f8c4",
                        "primary-container": "#0f4c5c",
                        "secondary-fixed": "#ffddb8",
                        "on-secondary-fixed": "#2a1700",
                        "primary-fixed-dim": "#9acee1",
                        "surface-dim": "#d2d9f4",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#9acee1",
                        "surface-container-high": "#e2e7ff",
                        "on-primary-fixed": "#001f28",
                        "secondary-container": "#fea619",
                        "surface-tint": "#306576",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "surface-container-low": "#f2f3ff",
                        "primary": "#003441",
                        "inverse-surface": "#283044",
                        "on-surface": "#131b2e",
                        "surface-variant": "#dae2fd",
                        "tertiary-fixed-dim": "#68dba9",
                        "secondary": "#855300",
                        "on-primary": "#ffffff",
                        "outline-variant": "#c0c8cb",
                        "on-background": "#131b2e",
                        "on-error": "#ffffff",
                        "on-primary-container": "#87bbce",
                        "on-tertiary-container": "#53c896",
                        "on-error-container": "#93000a",
                        "background": "#faf8ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#005137"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "space-xs": "0.25rem",
                        "space-lg": "1.5rem",
                        "margin": "2rem",
                        "gutter-mobile": "1rem",
                        "space-xl": "2.5rem",
                        "margin-mobile": "1rem",
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "space-2xl": "4rem",
                        "space-sm": "0.5rem"
                    },
                    "fontFamily": {
                        "label-sm": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "display": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-mobile": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "label-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["12px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }],
                        "headline-xl": ["36px", {
                            "lineHeight": "44px",
                            "fontWeight": "700"
                        }],
                        "headline-sm": ["18px", {
                            "lineHeight": "26px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["28px", {
                            "lineHeight": "36px",
                            "fontWeight": "700"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "22px",
                            "fontWeight": "400"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "600"
                        }],
                        "display": ["48px", {
                            "lineHeight": "56px",
                            "fontWeight": "800"
                        }],
                        "headline-md": ["22px", {
                            "lineHeight": "30px",
                            "fontWeight": "600"
                        }],
                        "display-mobile": ["32px", {
                            "lineHeight": "40px",
                            "fontWeight": "800"
                        }],
                        "headline-xl-mobile": ["26px", {
                            "lineHeight": "34px",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "26px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">
    <header class="fixed top-0 left-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="bg-primary text-on-primary py-1.5 px-4 lg:px-8">
            <div
                class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
                <div class="flex items-center gap-2 overflow-x-auto whitespace-nowrap"><span
                        class="inline-flex w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span><span
                        class="font-label-sm text-label-sm text-surface-bright uppercase tracking-wider">Gelombang 1 TA
                        2025/2026 Dibuka</span><span
                        class="text-primary-fixed-dim text-body-sm font-light">|</span><span
                        class="font-body-sm text-body-sm text-surface-container-high">Penerimaan Siswa Baru KB/TK, SD,
                        SMP &amp; SMA Terpadu</span></div><a
                    class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary-fixed hover:text-on-primary transition-colors whitespace-nowrap"
                    href="#"><span
                        class="material-symbols-outlined text-[14px]">support_agent</span><span>Helpdesk Panitia PPDB
                        Online</span></a>
            </div>
        </div>
        <div class="h-20 bg-surface-container-lowest/95 backdrop-blur-xl">
            <div class="h-full max-w-7xl mx-auto px-4 lg:px-8 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3"><img alt="Logo Yayasan Insan Utama"
                        class="h-9 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1WwtZ3a-in9tyopTM36fGN0czw-xImWLJugYROtr3Rb3trbiomjQ1qjNNUH82WGXlJVx1zPVuEPhXZ2enT9PmUVlQPwoNnt_U3mM0IEjpfXs9fWI3THUGmnCt0vrhUYaTgxSvMBJLNriTKnlEM2LLo_tB6P0N7pBsvXO8x6I--e00RqSR4p-Y5o9TWECKTP328fevWR4KIptFXQMRP2yAonT95H86QrHCYNIkt6hHbn7QDL_zev1PxVPQ" />
                    <div class="flex flex-col"><span
                            class="font-headline-sm text-headline-sm text-primary leading-tight tracking-tight">Yayasan
                            Insan Utama</span><span
                            class="font-label-sm text-label-sm text-on-surface-variant font-medium">Portal Resmi PPDB
                            Terpadu T.A. 2025/2026</span></div>
                </div>
                <nav class="hidden xl:flex items-center gap-1 lg:gap-1.5"
                    data-active-classes="text-primary font-bold bg-surface-container-high rounded-lg px-3 py-1.5"><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="beranda" href="#">Beranda</a><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="profil-yayasan" href="#">Profil Yayasan</a><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="unit-pendidikan" href="#">Unit Pendidikan</a><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="alur-dan-syarat" href="#">Alur &amp; Syarat</a><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="biaya-pendidikan" href="#">Biaya Pendidikan</a><a
                        class="font-label-lg text-label-lg px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                        data-path="faq-dan-kontak" href="#">FAQ &amp; Kontak</a></nav>
                <div class="flex items-center gap-3"><a
                        class="hidden sm:inline-flex items-center justify-center font-label-md text-label-md px-4 py-2 rounded-lg bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-colors"
                        data-path="masuk-akun" href="#">Masuk Akun</a><a
                        class="inline-flex items-center gap-2 font-label-md text-label-md px-4 py-2.5 rounded-lg bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-colors shadow-sm font-semibold"
                        data-path="daftar-ppdb" href="#"><span
                            class="material-symbols-outlined text-[18px]">how_to_reg</span><span>Daftar
                            Sekarang</span></a></div>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-surface min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Breadcrumb & Top Indicator Bar -->
            <section class="w-full bg-surface-container-low py-4 px-4 lg:px-8">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-3">
                    <nav aria-label="Breadcrumb"
                        class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="#">
                            <span class="material-symbols-outlined text-[16px]">home</span>
                            <span>Beranda</span>
                        </a>
                        <span class="text-outline-variant">/</span>
                        <span class="text-primary font-bold">Profil Yayasan</span>
                    </nav>
                    <div
                        class="inline-flex items-center gap-2 self-start md:self-auto bg-surface-container-lowest px-3 py-1.5 rounded-full shadow-sm">
                        <span class="material-symbols-outlined text-[16px] text-tertiary">verified</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">SK Kemenkumham RI
                            No. AHU-0014258.AH.01.04 • Terakreditasi BAN-S/M Grade A</span>
                    </div>
                </div>
            </section>
            <!-- Hero Section Profil Yayasan -->
            <section class="w-full bg-surface-container-low pb-16 px-4 lg:px-8 relative overflow-hidden">
                <!-- Subtle architectural background pattern -->
                <div
                    class="absolute -right-24 -bottom-24 w-96 h-96 rounded-full bg-primary-container/10 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute left-10 top-0 w-72 h-72 rounded-full bg-secondary-container/15 blur-2xl pointer-events-none">
                </div>
                <div class="max-w-7xl mx-auto pt-6 relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                        <div class="lg:col-span-7 flex flex-col gap-6">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm self-start shadow-sm">
                                <span class="material-symbols-outlined text-[15px] text-secondary-fixed">school</span>
                                <span>Profil Resmi Lembaga Pendidikan Islam Terpadu</span>
                            </div>
                            <h1 class="font-display text-display text-primary tracking-tight">
                                Membangun Generasi Robbani yang Unggul dalam Adab, Tangguh dalam Ilmu, &amp; Berdaya
                                Saing Global.
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                Lebih dari 15 tahun Yayasan Insan Utama mengabdi menyelenggarakan ekosistem pendidikan
                                Islam terpadu berkelanjutan dari usia dini (TKIT), dasar (SDIT), hingga menengah pertama
                                dan atas (SMPIT &amp; SMA). Berakar kuat pada Al-Qur'an dan Sunnah, siap menatap masa
                                depan global.
                            </p>
                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg px-6 py-3.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container shadow-md transition-all"
                                    href="#ekosistem-jenjang">
                                    <span class="material-symbols-outlined text-[20px]">account_tree</span>
                                    <span>Jelajahi 4 Jenjang Kami</span>
                                </a>
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg px-6 py-3.5 rounded-lg bg-surface-container-lowest text-primary hover:bg-surface-container-high transition-all shadow-sm"
                                    href="#struktur-pengurus">
                                    <span class="material-symbols-outlined text-[20px]">groups</span>
                                    <span>Dewan Pengurus Yayasan</span>
                                </a>
                            </div>
                        </div>
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-2xl overflow-hidden shadow-xl bg-surface-container-highest">
                                <img class="w-full h-96 lg:h-[440px] object-cover"
                                    data-alt="Modern Islamic campus aerial view of Yayasan Insan Utama in warm morning golden light with teal-roofed pavilions, lush green gardens, minaret, student courtyards, and state-of-the-art educational facilities."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0jYvfJFFs2Rrqo-fcD45YzhGDB_wzHq2ZxkHI49_19F37i2BxgZ29JM5y51W084E3PLeWmrRQIcya_4k8GID8Fe-POrimpeA879MqyXcvbDay6TI14iCK-ptmRvzqcC6l-o-Lorp8DO4isQP7xKwVhqtdvUfvSoW1iu1Hg24QW1nbgo6aukziGQ55-_yF4nbyBsQSdb10qShAuPQcydP_IgxE4uHxXAu5clt7FQMo9SB0O0Qrh_QJ" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent">
                                </div>
                                <div
                                    class="absolute bottom-6 left-6 right-6 p-4 rounded-xl bg-surface-container-lowest/90 backdrop-blur-md shadow-md">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center text-secondary-fixed">
                                            <span
                                                class="material-symbols-outlined text-[24px]">workspace_premium</span>
                                        </div>
                                        <div>
                                            <h4 class="font-headline-sm text-headline-sm text-primary leading-tight">
                                                Kampus Edukasi Terpadu</h4>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Lahan wakaf
                                                mandiri seluas 3.5 Hektar di lingkungan asri &amp; kondusif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Metrics Bar -->
                    <div class="mt-14 pt-8 bg-surface-container-lowest rounded-2xl p-6 lg:p-8 shadow-sm">
                        <div
                            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 divide-y lg:divide-y-0 divide-surface-container">
                            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                                <div class="font-display text-display text-primary leading-none">15+</div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mt-2">Tahun
                                    Mengabdi</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Sejak 2009
                                    mencerdaskan bangsa</span>
                            </div>
                            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                                <div class="font-display text-display text-primary leading-none">4</div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mt-2">Unit
                                    Pendidikan</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">TKIT, SDIT,
                                    SMPIT, &amp; SMA</span>
                            </div>
                            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                                <div class="font-display text-display text-primary leading-none">2.400+</div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mt-2">Alumni
                                    Berkiprah</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Diterima di PTN
                                    &amp; Kampus Global</span>
                            </div>
                            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                                <div class="font-display text-display text-primary leading-none">120+</div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mt-2">Pendidik
                                    Bersertifikasi</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Guru berkarakter
                                    &amp; asatidz mukim</span>
                            </div>
                            <div
                                class="flex flex-col items-center lg:items-start text-center lg:text-left col-span-2 md:col-span-1">
                                <div class="font-display text-display text-secondary leading-none">3.5 Ha</div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mt-2">Kawasan
                                    Terpadu</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Laboratorium,
                                    masjid, &amp; sarana olahraga</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sejarah & Milestones Perjalanan -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                        <div class="max-w-2xl">
                            <div
                                class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary font-bold uppercase tracking-wider mb-2">
                                <span class="material-symbols-outlined text-[18px]">history_edu</span>
                                <span>Kilos Sejarah Yayasan</span>
                            </div>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                                Melangkah dari Niat Ikhlas Menjadi Institusi Pendidikan Rujukan
                            </h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                            Didirikan pada tahun 2009 oleh himpunan tokoh pendidik, akademisi muslim, dan praktisi
                            dakwah dengan satu tekad: menghadirkan kurikulum komprehensif yang menyeimbangkan keimanan,
                            kecerdasan intelektual, dan kesiapan hidup.
                        </p>
                    </div>
                    <!-- Interactive Milestones Timeline -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Card 2009 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-headline-lg text-headline-lg text-primary font-extrabold group-hover:text-secondary-container transition-colors">2009</span>
                                    <span
                                        class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">child_care</span>
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">Peletakan
                                    Batu Pertama TKIT &amp; SDIT</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Memulai rintisan pendidikan anak usia dini dan sekolah dasar berfokus pada tahsin
                                    metode Utsmani, adab harian, dan stimulasi fitrah belajar anak dengan 45 siswa
                                    angkatan perdana.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low px-3 py-2 rounded-lg text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                <span>Pondasi Karakter &amp; Adab</span>
                            </div>
                        </div>
                        <!-- Card 2014 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-headline-lg text-headline-lg text-primary font-extrabold group-hover:text-secondary-container transition-colors">2014</span>
                                    <span
                                        class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">domain</span>
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">Kampus
                                    Terpadu &amp; SMPIT Boarding</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Ekspansi kampus terpadu 3.5 hektar dan peresmian SMPIT Insan Utama dengan program
                                    asrama (boarding school) santri tahfidz 5 Juz dan penguatan bahasa Arab-Inggris
                                    interaktif.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low px-3 py-2 rounded-lg text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                <span>Integrasi Asrama &amp; Sains</span>
                            </div>
                        </div>
                        <!-- Card 2019 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-headline-lg text-headline-lg text-primary font-extrabold group-hover:text-secondary-container transition-colors">2019</span>
                                    <span
                                        class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">science</span>
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">SMA
                                    Unggulan Riset &amp; Sanad Tahfidz</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Membuka jenjang SMA Insan Utama yang memadukan kurikulum Merdeka Berbasis Riset
                                    Ilmiah Remaja, program intensif bimbingan tembus PTN Favorit (UI, ITB, UGM), serta
                                    Beasiswa Luar Negeri.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low px-3 py-2 rounded-lg text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                <span>Kesiapan Akademik Unggul</span>
                            </div>
                        </div>
                        <!-- Card 2024 - Sekarang -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-headline-lg text-headline-lg text-secondary font-extrabold">2024+</span>
                                    <span
                                        class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary group-hover:bg-secondary-container group-hover:text-on-secondary-container transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">language</span>
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                                    Transformasi AI &amp; Cambridge Pathway</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Implementasi Smart Digital Campus, sertifikasi TOEFL/IELTS institusional terpadu,
                                    kurikulum coding dan AI etis, serta penguatan jejaring kemitraan dengan universitas
                                    di Timur Tengah dan Eropa.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-high px-3 py-2 rounded-lg text-primary font-label-sm text-label-sm flex items-center gap-1.5 font-bold">
                                <span class="material-symbols-outlined text-[16px] text-secondary">star</span>
                                <span>Global Standard Readiness</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Visi, Misi & Falsafah Penta-Karakter -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface-container-low">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span
                            class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Arah
                            &amp; Prinsip Dasar</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-2">Visi, Misi &amp;
                            Penta-Karakter Insan Utama</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-3">
                            Setiap kegiatan belajar mengajar, pembiasaan ibadah, hingga tata kelola yayasan diletakkan
                            di atas komitmen moral dan falsafah pembentukan manusia yang seutuhnya.
                        </p>
                    </div>
                    <!-- Visi & Misi Split Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16">
                        <!-- Visi Card (Large Featured) -->
                        <div
                            class="lg:col-span-5 bg-primary text-on-primary rounded-3xl p-8 lg:p-10 flex flex-col justify-between shadow-lg relative overflow-hidden">
                            <div class="relative z-10">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary-container text-secondary-fixed flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-[28px]">lightbulb</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider font-bold">Visi
                                    Akbar 2030</span>
                                <blockquote
                                    class="font-headline-md text-headline-md text-on-primary font-bold mt-4 leading-relaxed">
                                    “Menjadi yayasan pendidikan Islam terdepan di Indonesia yang mencetak pemimpin
                                    berakhlak mulia, berwawasan saintifik modern, mandiri, dan memberi manfaat abadi
                                    bagi peradaban dunia.”
                                </blockquote>
                            </div>
                            <div class="relative z-10 pt-8 mt-8 bg-primary-container/40 p-4 rounded-xl">
                                <p class="font-body-sm text-body-sm text-primary-fixed-dim">
                                    Indikator Keberhasilan: 100% lulusan hafal target juz Al-Qur'an, memiliki kecakapan
                                    bilingual, serta kompetensi berpikir kritis dalam sains terapan.
                                </p>
                            </div>
                        </div>
                        <!-- Misi Strategis Cards -->
                        <div class="lg:col-span-7 flex flex-col justify-between gap-4">
                            <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0 font-bold font-headline-sm text-headline-sm">
                                    1
                                </div>
                                <div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">
                                        Penyelenggaraan Kurikulum Holistik &amp; Seimbang</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Memadukan kurikulum
                                        nasional berbasis kompetensi dengan kurikulum kepesantrenan dan penguatan STEAM
                                        secara terpadu tanpa dikotomi ilmu.</p>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0 font-bold font-headline-sm text-headline-sm">
                                    2
                                </div>
                                <div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Pembinaan
                                        Adab, Aqidah &amp; Al-Qur'an Bersanad</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Membudayakan
                                        keteladanan ibadah praktis, adab islami harian, dan bimbingan tahfidz intensif
                                        oleh asatidz bersanad qira'ah.</p>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0 font-bold font-headline-sm text-headline-sm">
                                    3
                                </div>
                                <div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">
                                        Penguasaan Bahasa Internasional &amp; Literasi Digital</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Menghidupkan
                                        lingkungan aktif dwibahasa (Arab &amp; Inggris) serta membekali peserta didik
                                        dengan etika komputasi digital dan literasi riset.</p>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0 font-bold font-headline-sm text-headline-sm">
                                    4
                                </div>
                                <div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Tata
                                        Kelola Amanah, Transparan, &amp; Akuntabel</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Menjalankan manajemen
                                        kelembagaan berbasis ISO 9001:2015, audit syariah, serta pengelolaan dana wakaf
                                        dan infak yang terverifikasi akuntan publik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Falsafah 5 Karakter Pokok (Penta-Karakter Insan Utama) -->
                    <div class="mt-8">
                        <div class="text-center mb-10">
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider px-3 py-1 bg-surface-container-high rounded-full">Core
                                Values</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary font-bold mt-2">Penta-Karakter
                                Lulusan Insan Utama</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nilai luhur yang ditanamkan
                                secara konsisten di semua tingkatan pendidikan</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <!-- 1. Salimul Aqidah -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary-container text-on-primary flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-[24px]">shield</span>
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Salimul
                                    Aqidah</h4>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold mb-2">Aqidah yang
                                    Bersih &amp; Kokoh</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">
                                    Memiliki keyakinan tauhid yang lurus murni, terbebas dari khurafat, serta menjunjung
                                    tinggi ketaatan kepada Allah SWT.
                                </p>
                            </div>
                            <!-- 2. Shahihul Ibadah -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-tertiary-container text-on-tertiary flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-[24px]">mosque</span>
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Shahihul
                                    Ibadah</h4>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold mb-2">Ibadah yang
                                    Benar &amp; Istiqomah</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">
                                    Melaksanakan sholat fardhu berjamaah tepat waktu, thaharah sempurna, dan mengamalkan
                                    sunnah sesuai tuntunan Rasulullah SAW.
                                </p>
                            </div>
                            <!-- 3. Matinul Khuluq -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-[24px]">sentiment_satisfied</span>
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Matinul
                                    Khuluq</h4>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold mb-2">Akhlak yang
                                    Mulia &amp; Santun</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">
                                    Berbakti kepada orang tua (birrul walidain), tawadhu' kepada guru, toleran, jujur,
                                    serta menjauhi perundungan (anti-bullying).
                                </p>
                            </div>
                            <!-- 4. Qadirun 'alal Kasbi -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-surface-container-highest text-primary flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-[24px]">military_tech</span>
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Qadirun 'alal
                                    Kasbi</h4>
                                <span class="font-label-sm text-label-sm text-primary font-semibold mb-2">Mandiri &amp;
                                    Berdaya Cipta</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">
                                    Memiliki etos kerja tinggi, disiplin waktu, jiwa wirausaha islami, serta
                                    kepemimpinan problem solver dalam menghadapi tantangan zaman.
                                </p>
                            </div>
                            <!-- 5. Nafi'un Lighairihi -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-[24px]">volunteer_activism</span>
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Nafi'un
                                    Lighairihi</h4>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold mb-2">Bermanfaat
                                    bagi Umat &amp; Bangsa</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">
                                    Mendedikasikan ilmu dan potensi untuk kemaslahatan masyarakat luas serta menjadi
                                    agen pencerah di tengah kehidupan sosial.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Ekosistem Pendidikan Berkelanjutan (Koneksi 4 Jenjang) -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface" id="ekosistem-jenjang">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-14 gap-6">
                        <div>
                            <span
                                class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Continuum
                                of Excellence</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-2">
                                Ekosistem Pendidikan Berkelanjutan 4 Jenjang
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-2">
                                Jaminan kesinambungan kurikulum adab, tahfidz, dan keilmuan sejak usia balita hingga
                                remaja siap kuliah tanpa perlu ganti kultur belajar.
                            </p>
                        </div>
                        <!-- Alumni Continuation Privilege Callout -->
                        <div class="bg-secondary-fixed/50 p-4 rounded-2xl max-w-md flex items-start gap-3 shadow-sm">
                            <span class="material-symbols-outlined text-[28px] text-secondary shrink-0">loyalty</span>
                            <div>
                                <span
                                    class="font-label-md text-label-md text-on-secondary-fixed font-bold block">Fasilitas
                                    Khusus Siswa Internal</span>
                                <p class="font-body-sm text-body-sm text-on-secondary-fixed-variant mt-1">
                                    Bebas uang seleksi ulang, prioritas kuota kelas utama, dan potongan biaya
                                    pengembangan sarana s/d 20% bagi alumni yang melanjutkan ke jenjang di atasnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 4-Stage Pathway Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Tier 1: TKIT -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:shadow-lg transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-label-sm text-label-sm px-3 py-1 bg-surface-container-high rounded-full font-bold text-primary">Usia
                                        4 - 6 Tahun</span>
                                    <span
                                        class="font-label-sm text-label-sm text-tertiary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">star</span> Akreditasi A
                                    </span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary-container/20 text-secondary-container flex items-center justify-center mb-3">
                                    <span class="material-symbols-outlined text-[24px]">child_friendly</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">TKIT Insan
                                    Utama</h3>
                                <p class="font-label-sm text-label-sm text-secondary font-semibold mb-3">Pondasi
                                    Fitrah, Sensorik &amp; Adab</p>
                                <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Metode Talaqqi Juz
                                        'Amma (Surah Pilihan)</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Motorik kasar-halus
                                        &amp; Montessori Islami</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Pembiasaan Toilet
                                        Training &amp; Doa Harian</li>
                                </ul>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Output:
                                    Cinta Masjid &amp; Mandiri</span>
                                <span class="material-symbols-outlined text-[18px] text-primary">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Tier 2: SDIT -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:shadow-lg transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-label-sm text-label-sm px-3 py-1 bg-surface-container-high rounded-full font-bold text-primary">Kelas
                                        1 - 6</span>
                                    <span
                                        class="font-label-sm text-label-sm text-tertiary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">star</span> Akreditasi A
                                    </span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-tertiary-container/20 text-tertiary flex items-center justify-center mb-3">
                                    <span class="material-symbols-outlined text-[24px]">menu_book</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">SDIT Insan
                                    Utama</h3>
                                <p class="font-label-sm text-label-sm text-tertiary font-semibold mb-3">Literasi,
                                    Numerasi &amp; Tahfidz Juz 29-30</p>
                                <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>Target hafal minimal 2
                                        - 3 Juz mutqin</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>Pembelajaran Bilingual
                                        (English &amp; Arabic Basic)</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>Klub Robotika &amp;
                                        Olimpiade Sains Dasar</li>
                                </ul>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Output:
                                    Disiplin Shalat &amp; Cerdas</span>
                                <span class="material-symbols-outlined text-[18px] text-primary">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Tier 3: SMPIT -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:shadow-lg transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-label-sm text-label-sm px-3 py-1 bg-surface-container-high rounded-full font-bold text-primary">Kelas
                                        7 - 9</span>
                                    <span
                                        class="font-label-sm text-label-sm text-tertiary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">star</span> Akreditasi A
                                    </span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary-container/20 text-primary flex items-center justify-center mb-3">
                                    <span class="material-symbols-outlined text-[24px]">psychology</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">SMPIT Insan
                                    Utama</h3>
                                <p class="font-label-sm text-label-sm text-primary font-semibold mb-3">Karakter Remaja,
                                    Sains &amp; 5 Juz</p>
                                <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-primary"></span>Pilihan Boarding
                                        Pesantren &amp; Full Day School</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-primary"></span>Muhadatsah / English
                                        Zone harian</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-primary"></span>Pramuka Garuda &amp;
                                        Kepemimpinan OSIS Mandiri</li>
                                </ul>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Output:
                                    Kepemimpinan &amp; Akidah Kuat</span>
                                <span class="material-symbols-outlined text-[18px] text-primary">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Tier 4: SMA -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between hover:shadow-lg transition-all group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="font-label-sm text-label-sm px-3 py-1 bg-surface-container-high rounded-full font-bold text-primary">Kelas
                                        10 - 12</span>
                                    <span
                                        class="font-label-sm text-label-sm text-tertiary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">star</span> Akreditasi A
                                    </span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center mb-3">
                                    <span class="material-symbols-outlined text-[24px]">school</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">SMA Insan
                                    Utama</h3>
                                <p class="font-label-sm text-label-sm text-secondary font-semibold mb-3">Riset Ilmiah,
                                    AI &amp; Tembus PTN / Luar Negeri</p>
                                <ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Intensif SNBT, UTBK,
                                        Kedokteran &amp; Kedinasan</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Program Karya Tulis
                                        Ilmiah (KIR) berbasis AI</li>
                                    <li class="flex items-center gap-2"><span
                                            class="w-1.5 h-1.5 rounded-full bg-secondary"></span>Bimbingan Beasiswa
                                        Timur Tengah &amp; Barat</li>
                                </ul>
                            </div>
                            <div
                                class="mt-6 pt-4 bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Output:
                                    Siap Kampus Top Dunia</span>
                                <span class="material-symbols-outlined text-[18px] text-primary">arrow_forward</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Struktur Kepengurusan & Dewan Pembina / Manajemen Yayasan -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface-container-low" id="struktur-pengurus">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span
                            class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Amanah
                            &amp; Keteladanan</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-2">Dewan Pembina &amp;
                            Pimpinan Manajemen</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-3">
                            Dipimpin oleh akademisi, ulama, dan profesional berpengalaman yang mengabdikan ilmu dan
                            keahlian untuk kemajuan generasi Islam masa depan.
                        </p>
                    </div>
                    <!-- Sambutan Ketua Yayasan (Featured Banner) -->
                    <div class="bg-surface-container-lowest rounded-3xl p-8 lg:p-12 shadow-sm mb-12">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <div class="lg:col-span-4 flex flex-col items-center text-center">
                                <div
                                    class="relative w-48 h-48 lg:w-56 lg:h-56 rounded-2xl overflow-hidden shadow-md bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Warm and authoritative portrait photo of Prof. Dr. KH. Ahmad Syafii, M.A., an elderly respected Indonesian Muslim scholar and educator with modest peci cap and institutional academic attire, serene and compassionate expression, high-end studio portrait lighting."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAivufk0SOsBatmIwQAR_GPFK3yyhfIavWS-9Uai1OOKEpU0EgSenk9W-xUMQRVD34DYzugBDGn2wjAML7Sr93WJt7F1XT97YNizK2q-iAHEXeDRjkxhZscPTE4wsnHRWIfiUa3D5lTdZ5IDfBHJgUEIq_i5bkNnf5A0cwy1gttfBfVAWQOoFMlA8f57XDssq6BtwLQTnISpLrfc6C5QehcRQDiOIDWWTTdevuxxZCOWVBAOEYk4V9p" />
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold mt-4">Prof. Dr. KH.
                                    Ahmad Syafii, M.A.</h3>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">Ketua Umum
                                    Yayasan Insan Utama</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Guru Besar Pendidikan
                                    Islam &amp; Anggota Dewan Pertimbangan Pendidikan</p>
                            </div>
                            <div class="lg:col-span-8 flex flex-col gap-4">
                                <div class="flex items-center gap-2 text-secondary">
                                    <span class="material-symbols-outlined text-[28px]">format_quote</span>
                                    <span class="font-label-lg text-label-lg font-bold">Kutipan Amanah
                                        Pendidikan</span>
                                </div>
                                <blockquote class="font-body-lg text-body-lg text-on-surface leading-relaxed italic">
                                    “Mendidik anak bukanlah sekadar mengisi cawan kosong dengan aneka rumus matematika
                                    dan teori sains. Mendidik adalah menyalakan pelita tauhid di dalam hati nurani
                                    mereka, lalu membekali mereka dengan akal sehat, adab mulia, dan keterampilan hidup
                                    sehingga mereka berdiri tegak di tengah peradaban modern sebagai muslim yang
                                    bermartabat dan menebar rahmat.”
                                </blockquote>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Di Yayasan Insan Utama, kami memandang amanah dari setiap orang tua sebagai sebuah
                                    titipan suci. Setiap rupiah infak dan SPP yang dipercayakan kami kembalikan dalam
                                    bentuk peningkatan kualitas guru, fasilitas bermutu, dan lingkungan yang steril dari
                                    hal-hal destruktif bagi jiwa anak-anak kita.
                                </p>
                                <div class="pt-4 flex items-center gap-6">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface font-semibold">Integritas
                                            Akademik</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface font-semibold">Keteladanan
                                            Guru</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface font-semibold">Transparansi
                                            Wakaf</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dewan Pembina & Manajemen Inti 4-Card Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Pengurus 1 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 bg-surface-container shadow-inner">
                                <img class="w-full h-full object-cover"
                                    data-alt="Professional portrait of Ir. H. Ridwan Mansyur, M.M., Chairman of the Board of Trustees, distinguished senior Indonesian engineer and educational philanthropist in smart formal batik shirt."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfh8g1nKUfLIVC_rDQIwWSmSR6FlqlJq-SswZyFdxwmO6Q9DrohA7mTsvx2pu6bW9nBYS3IdHEJgU7JdpX80YfiG0e8D99XEf2siUdzKghmR7oX9AsUBeW9aOBpxCxZbdcpvVicxhsyBIVe4dR2mspGvrIIDQKfd5sosMo1OltSHoxCX5jOiVxgMzTR0lvOH2NBdyRRTniXcHTnadYn1n6mnJiNXcGFzsJmzy522fSdOU0zpHNfbBm" />
                            </div>
                            <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Ir. H. Ridwan Mansyur,
                                M.M.</h4>
                            <span class="font-label-sm text-label-sm text-secondary font-bold mt-1">Ketua Dewan
                                Pembina</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                Praktisi manajemen korporasi &amp; pengembang wakaf produktif yayasan selama lebih dari
                                20 tahun.
                            </p>
                        </div>
                        <!-- Pengurus 2 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 bg-surface-container shadow-inner">
                                <img class="w-full h-full object-cover"
                                    data-alt="Professional portrait of Dr. Hj. Nur Laila, M.Pd., Director of Education and Quality Assurance, intelligent Indonesian woman educator wearing neat modern hijab and blazer."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9wUlEmckrJhMTFjb4KvDncCypquhN39R2HFzjJbw-qBBnBFFFyuSrPgc9PbZZW30Z0WQOjF8BFmoQ2NIlS7_LT9wxAA3zNQl1uRQf2rzz-w9IBrscFYuIRPcs7vnNWlH0g-xHS5Zgr10TD56sclW-fVozuEHDojaVteTAGl4t8hqlu5wAVeOyBonpfbykh0mCNH51pnHUmavLddfa0J9CI__xUSwpvQxldqwRDl5BlRK6RR9Dk_-d" />
                            </div>
                            <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Dr. Hj. Nur Laila,
                                M.Pd.</h4>
                            <span class="font-label-sm text-label-sm text-secondary font-bold mt-1">Direktur Pendidikan
                                &amp; Mutu</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                Pakar kurikulum terpadu, asesor BAN-S/M, serta pengawas standarisasi pengajaran 4 unit
                                jenjang.
                            </p>
                        </div>
                        <!-- Pengurus 3 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 bg-surface-container shadow-inner">
                                <img class="w-full h-full object-cover"
                                    data-alt="Friendly professional portrait of Ust. H. Salman Faris, Lc., M.Ag., Director of Pesantren and Tahfidz, Islamic scholar holding Arabic cert wearing neat modest koko shirt."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo9YFJ03DIzHgt9L3FqSkJpdI-PoiJbQ1rVX4l8Olu68-JiAKGxWlUacfTcZaiKVQ3jpZNFEVAnW7C5ep83s5w-CWNgFcBpkAGdV-tx-hN2-K120mPJrDgvhsbEyK1jtWasdoIAYtHhcU45zF5s9MlmqWGPS51vewv_-ukfRC4twWH5DPz9fEorkeJdQDAgBES2ZwDbKqOwD3jRvRLKa9sGegmjzF9hIgzHv7ZGlg56DQFnUKMsP5d" />
                            </div>
                            <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Ust. H. Salman Faris,
                                Lc., M.Ag.</h4>
                            <span class="font-label-sm text-label-sm text-secondary font-bold mt-1">Direktur
                                Kepesantrenan &amp; Tahfidz</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                Alumnus Universitas Al-Azhar Kairo, pemegang sanad Al-Qur'an 30 Juz bersambung ke
                                Rasulullah SAW.
                            </p>
                        </div>
                        <!-- Pengurus 4 -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col items-center text-center">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 bg-surface-container shadow-inner">
                                <img class="w-full h-full object-cover"
                                    data-alt="Professional portrait of Hendro Kusumo, S.E., Ak., Director of Finance and Waqf Assets, professional certified accountant in sleek business attire."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA63iB5Mx9_712O-UMWZreYaFYG4fcsR2gCx4YNvZBuEdvCOPVsBXQYLU-rjeO5xZibZW21Z_SzyqF72aVyKxWqX-WBL6jhVPMXCdAhL-SDbGTHql8AoZrsu5GHC9acKgyDCoeDvPTfmHQ0c4FaAfdK0DSCJxNKSYYuQC0JmTTNW6LO8PpMPCwm3iPc7RsA9zKz7zPGtmkCbbHywpgVcs-M-XfpMqIz5U3ISlSsqkRxjCYxtiQYmeuf" />
                            </div>
                            <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Hendro Kusumo, S.E.,
                                Ak.</h4>
                            <span class="font-label-sm text-label-sm text-secondary font-bold mt-1">Direktur Keuangan
                                &amp; Aset Wakaf</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                Mantan praktisi perbankan syariah nasional yang menjamin akuntabilitas audit keuangan
                                WTP yayasan.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Legalitas, Sertifikasi & Tata Kelola Amanah -->
            <section class="w-full py-16 px-4 lg:px-8 bg-surface">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-surface-container-high rounded-3xl p-8 lg:p-10">
                        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                            <div class="max-w-xl">
                                <span
                                    class="font-label-sm text-label-sm text-tertiary uppercase font-bold tracking-wider px-3 py-1 bg-surface-container-lowest rounded-full shadow-sm">
                                    Transparansi &amp; Akuntabilitas Publik
                                </span>
                                <h3 class="font-headline-lg text-headline-lg text-primary font-bold mt-3">
                                    Legalitas Resmi dan Audit Keuangan Wajar Tanpa Pengecualian (WTP)
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                                    Yayasan Insan Utama berbadan hukum sah di bawah Republik Indonesia. Seluruh laporan
                                    operasional dan dana pembangunan diaudit rutin oleh Kantor Akuntan Publik (KAP)
                                    independen selama 5 tahun berturut-turut.
                                </p>
                            </div>
                            <!-- Badges Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 w-full lg:w-auto">
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span class="material-symbols-outlined text-[32px] text-primary mb-1">gavel</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">Kemenkumham
                                        RI</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">AHU-0014258</span>
                                </div>
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span
                                        class="material-symbols-outlined text-[32px] text-secondary mb-1">verified_user</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">BAN-S/M Grade
                                        A</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Akreditasi
                                        Unggul</span>
                                </div>
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span
                                        class="material-symbols-outlined text-[32px] text-tertiary mb-1">request_quote</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">Opini Audit
                                        WTP</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">5 Tahun
                                        Beruntun</span>
                                </div>
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span class="material-symbols-outlined text-[32px] text-primary mb-1">mosque</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">Izin Operasional
                                        Pontren</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Kemenag RI</span>
                                </div>
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span
                                        class="material-symbols-outlined text-[32px] text-secondary mb-1">policy</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">ISO
                                        9001:2015</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mutu
                                        Manajemen</span>
                                </div>
                                <div
                                    class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col items-center text-center">
                                    <span
                                        class="material-symbols-outlined text-[32px] text-tertiary mb-1">translate</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">Lisensi TOEFL
                                        &amp; Cambridge</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mitra Uji
                                        Resmi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fasilitas Utama Kampus Terpadu -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface-container-low">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                        <div>
                            <span
                                class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Infrastruktur
                                Unggulan</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-2">
                                Sarana &amp; Fasilitas Terpadu 3.5 Hektar
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-2">
                                Dirancang secara higienis, aman, ramah anak, dan mendukung penuh pembelajaran sains,
                                bahasa, tahfidz, serta kebugaran fisik.
                            </p>
                        </div>
                        <a class="inline-flex items-center gap-2 font-label-md text-label-md text-primary font-bold hover:text-primary-container transition-colors"
                            href="#">
                            <span>Lihat Tur Virtual 360° Kampus</span>
                            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                        </a>
                    </div>
                    <!-- Facility Bento Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        <!-- Facility 1 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Majestic and tranquil Grand Mosque of Yayasan Insan Utama with modern Islamic architecture, wooden mashrabiya lattice, clean marble prayer floor, and gentle sunlight streaming in for students' daily congregational prayers."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrZeZDakp54hx_NlE1zi4cib49ZZR3PGOzfuiv3ZHWClX5lPQpVanzz37TFueN_xTcVLaSNMPWvnUFCBMeNgfRJpPua3bHMDDpssTSOI8sF26jb_Rb4OcWrYng_NRzL9s4hTQsZ35Lgg4BOXZ1zm1q4lY2G7y7WIrALlWqV4psqggmhAib2UMsntHlZCdj6W6xcrkLPVN_p-u-e__FTlpaQoVS8fg8jhUbqVyLmjrmnnaEsDIyUrQA" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-bold inline-block mb-1">Pusat
                                    Spiritual</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Masjid Utama Insan Utama</h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">Kapasitas
                                    1.500 jamaah untuk sholat fardhu, tahajjud &amp; kajian dhuha</p>
                            </div>
                        </div>
                        <!-- Facility 2 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="State-of-the-art modern Science and AI Computer Laboratory at Yayasan Insan Utama with neatly arranged desktop workstations, robotics test track, 3D printers, and students engaging with mentors in clean teal environment."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnpKmv7Y72_Zr_sPr2IVUaiHi5rC_8AxCgIxdN2w2RKrM33QPn5wb-4FyETLHF70VBA8WIJUos7rwyYA1qw5HVOAfXcZVo3xVL6b1N_bI4C2UZG8MkG_ZJOMXwvkP_LvNMnOUGbBqx5QbvJzc5yA64PHIGZbIHz9CHx9WC77iOcz2bBouRsLLL3rf3WVbytsoL0zzqZDbhQXuNgrTthC2kPeQk01xcGbvTnz6oiXkAxTILJesCGnWG" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-primary text-on-primary font-bold inline-block mb-1">Riset
                                    &amp; Teknologi</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Lab Sains &amp; AI Digital</h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">Komputasi
                                    mutakhir, robotika STEAM &amp; instrumen biologi-fisika</p>
                            </div>
                        </div>
                        <!-- Facility 3 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Spacious integrated indoor sports hall and open-air synthetic futsal arena of Islamic school complex with student basketball court, badminton nets, and track lanes."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNyR66zduKvWNbM35akBlfD5xx-klFJ3-BjAiWlM26FN72vb24vUG_Ftz5vlQbGQV6Q0Ck-Z8cOeeRN7KoMgWCgpyEpPicedZt5aubczv4wZbttRZRqyqgqeV9li2SAtidkEKX6JLQduvgrvapdurO0oMxEWZtVXznuQruYjHRTvriAZioFNKJwzOP5zRX3H7aXI9bMVlQnUNmDAU0ePb3apIJTJkhLDkvOOouxBxFvqGghqpv44nz" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-tertiary text-on-tertiary font-bold inline-block mb-1">Kebugaran
                                    Fisik</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Sport Center &amp; Panahan
                                    Terpadu</h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">Lapangan
                                    futsal, basket indoor, bulutangkis, serta area panahan sunnah</p>
                            </div>
                        </div>
                        <!-- Facility 4 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Warm and comfortable modern Central Library at Islamic foundation with ergonomic reading cubicles, rich Islamic literature collection, academic books, and quiet digital search kiosks."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD56u12gPR7x9SWOeJfEhqQXpU7SCwqgnOm4jYKGHjCq2p5l-FOA-gEKmeaTLqsnXMhU4NjY_fbqp3JjlNEG4e55vhSxRTa9lLw8vdrFcqwHSfz4O4LbbCQrYzC_DrwSeiWAA79UFSMBnQElkD8Eh5CnDJzepbPoIMFlP1wNlTtCVat_0MbsOzlDc5DS-5vP9zv8utHPitzt1OPBU47wicVfYG44r03HEWQvgJSUr4bagjs0CnfW0t" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-primary-container text-on-primary font-bold inline-block mb-1">Literasi
                                    &amp; Khasanah</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Perpustakaan Sentral Maktabah
                                </h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">20.000+
                                    judul kitab turats, buku sains umum, dan e-library nasional</p>
                            </div>
                        </div>
                        <!-- Facility 5 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Professional broadcast studio and multimedia podcasting room in an Islamic educational institution with acoustic soundproofing, professional studio microphones, and multi-cam setup."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyhFUrDqr4FRtVui5etATxO0b_Gn9DaMg_-6MK52RU0lkZvC8GfcG1YLHCWRzPRJn2r-bM4zaavlSPl03YSm_FyRt3JlpVihDbDnVh8bswsZ5shIsxNE_-rVrKiX5q5nJ1K2OJt7GwK3Nd95XAu3VFR1xTEMB56BW3sDHCpLvQTLl2UKq2goAa8e4BsrZhZg-ITnuVpQlP1g_ofyGxJrIRcTM74IN2mMJQZiCL1V9Bq-PKkPt1aWBx" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-bold inline-block mb-1">Kreativitas
                                    Santri</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Studio Podcast &amp; Multimedia
                                    Dakwah</h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">Wadah
                                    pelatihan public speaking, konten kreator islami, dan penyiaran</p>
                            </div>
                        </div>
                        <!-- Facility 6 -->
                        <div class="relative rounded-2xl overflow-hidden shadow-sm group bg-surface-container-highest">
                            <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Clean and warm pediatric healthcare clinic at Yayasan Insan Utama with registered nurse, examination bed, first-aid equipment, and sanitized waiting room."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNYl2hlcMs_8HyMX0C5ZzKLOh-Oyfo6KwHA9ZN88qFPKUsKfxok2ca7WiJO4prrAf6oSjf1UlWEnTZxUaxz7V-KdRNrdvxQCgOc4ssRHvbAx1s_2y6UUdEYm4Klz6fX3j8WD_iN4HXxJQiTVI_bs2IFWyOCyJfeF0pqEQFQH1a29H-dnI1PAtsmKMZaoBBjKm49493_sRncQ07jq1NK54w89TBZL4uB12IHyTzYuicOsWd0kRWsff8" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                                <span
                                    class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-tertiary-container text-on-tertiary font-bold inline-block mb-1">Kesehatan
                                    &amp; Tanggap Medis</span>
                                <h4 class="font-headline-sm text-headline-sm font-bold">Klinik Pratama &amp; Konseling
                                    Jiwa</h4>
                                <p class="font-body-sm text-body-sm text-surface-container-high line-clamp-1">Dokter
                                    jaga harian, perawat siaga 24 jam, serta psikolog anak berlisensi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA Terpadu ke PPDB TA 2025/2026 -->
            <section class="w-full py-20 px-4 lg:px-8 bg-surface">
                <div class="max-w-7xl mx-auto">
                    <div
                        class="relative rounded-3xl bg-primary overflow-hidden shadow-2xl p-8 lg:p-14 text-on-primary">
                        <!-- Abstract light accents -->
                        <div
                            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-primary-fixed/10 blur-2xl pointer-events-none">
                        </div>
                        <div class="relative z-10 max-w-3xl">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold mb-6">
                                <span class="inline-flex w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                <span>Penerimaan Peserta Didik Baru Gelombang 1 Dibuka</span>
                            </div>
                            <h2 class="font-display text-display text-on-primary tracking-tight leading-tight">
                                Mari Bergabung Menjadi Bagian dari Keluarga Besar Insan Utama
                            </h2>
                            <p class="font-body-lg text-body-lg text-primary-fixed-dim mt-4 leading-relaxed">
                                Investasikan pendidikan putra-putri Anda di lingkungan yang kondusif, mendalam dalam
                                agama, dan unggul dalam sains. Kuota kelas dibatasi untuk menjaga rasio ideal pendidik
                                dan peserta didik.
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-8">
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-all shadow-md font-bold"
                                    href="#">
                                    <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                                    <span>Daftar Akun PPDB Sekarang</span>
                                </a>
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg px-6 py-4 rounded-xl bg-primary-container text-on-primary hover:bg-primary-fixed-dim hover:text-primary transition-all shadow-sm"
                                    href="#">
                                    <span class="material-symbols-outlined text-[20px]">download</span>
                                    <span>Unduh Profil Lengkap (PDF)</span>
                                </a>
                                <a class="inline-flex items-center gap-2 font-label-lg text-label-lg px-6 py-4 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md text-on-primary hover:bg-surface-container-lowest/20 transition-all"
                                    href="#">
                                    <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                                    <span>Jadwalkan Kunjungan Kampus</span>
                                </a>
                            </div>
                            <div
                                class="mt-8 pt-6 border-t border-primary-container flex flex-wrap items-center gap-6 text-primary-fixed-dim font-label-sm text-label-sm">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary-container">call</span>
                                    <span>Layanan Konsultasi: (021) 8890-1234</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary-container">mail</span>
                                    <span>Email: info@insanutama.sch.id</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary-container">location_on</span>
                                    <span>Kampus Utama: Jl. Pendidikan Utama No. 88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <aside class="fixed bottom-6 right-6 z-50 flex items-end flex-col gap-2 group">
        <div
            class="hidden group-hover:flex flex-col bg-surface-container-lowest p-3 rounded-xl shadow-[0_20px_30px_-10px_rgba(15,23,42,0.15)] max-w-xs transition-all">
            <span class="font-label-md text-label-md text-primary font-bold mb-1">Helpdesk PPDB Yayasan</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Pusat bantuan konsultasi &amp; info
                persyaratan pendaftaran per unit:</p>
            <div class="grid grid-cols-2 gap-2"><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/6281234567801" target="_blank">CS TK</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/6281234567801" target="_blank">CS SD</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/6281234567802" target="_blank">CS SMP</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/6281234567803" target="_blank">CS SMA</a></div>
        </div><button
            class="flex items-center gap-2 bg-tertiary-container text-on-tertiary px-4 py-3 rounded-full shadow-[0_10px_25px_-5px_rgba(15,76,92,0.25)] hover:bg-tertiary transition-all"
            type="button"><span class="material-symbols-outlined text-[22px]">chat</span><span
                class="font-label-md text-label-md hidden md:inline">Bantuan PPDB WhatsApp</span></button>
    </aside>
    <footer class="w-full bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3"><img alt="Logo Yayasan Insan Utama"
                            class="h-9 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1WwtZ3a-in9tyopTM36fGN0czw-xImWLJugYROtr3Rb3trbiomjQ1qjNNUH82WGXlJVx1zPVuEPhXZ2enT9PmUVlQPwoNnt_U3mM0IEjpfXs9fWI3THUGmnCt0vrhUYaTgxSvMBJLNriTKnlEM2LLo_tB6P0N7pBsvXO8x6I--e00RqSR4p-Y5o9TWECKTP328fevWR4KIptFXQMRP2yAonT95H86QrHCYNIkt6hHbn7QDL_zev1PxVPQ" /><span
                            class="font-headline-sm text-headline-sm text-primary font-bold">Yayasan Insan Utama</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Kampus Lembaga Pendidikan Terpadu
                        Yayasan Insan Utama. Menyelenggarakan ekosistem pendidikan berkarakter Qur'ani, mandiri, dan
                        berwawasan global.</p>
                    <div class="flex flex-col gap-2 text-on-surface-variant font-body-sm text-body-sm mt-1">
                        <div class="flex items-start gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary mt-0.5">pin_drop</span><span>Jl.
                                Pendidikan Utama No. 88, Kompleks Insan Edu Center, Indonesia</span></div>
                        <div class="flex items-start gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary mt-0.5">schedule</span><span>Loket
                                TU &amp; Verifikasi Offline: Senin - Sabtu (08.00 - 15.00 WIB)</span></div>
                    </div>
                </div>
                <div class="flex flex-col gap-3"><span
                        class="font-headline-sm text-headline-sm text-primary font-bold">Direktori Unit Sekolah</span>
                    <ul class="flex flex-col gap-2 font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[14px] text-secondary">arrow_forward</span>TK
                                Islam Terpadu Insan Utama</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[14px] text-secondary">arrow_forward</span>SD
                                Islam Terpadu Insan Utama</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[14px] text-secondary">arrow_forward</span>SMP
                                Islam Terpadu Insan Utama</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[14px] text-secondary">arrow_forward</span>SMA
                                Insan Utama (Boarding &amp; Full Day)</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3"><span
                        class="font-headline-sm text-headline-sm text-primary font-bold">Layanan Informasi PPDB</span>
                    <ul class="flex flex-col gap-2 font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[16px] text-on-surface-variant">download</span>Unduh
                                Brosur Lengkap TA 2025/2026</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[16px] text-on-surface-variant">rule</span>Alur
                                Seleksi &amp; Berkas Syarat</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[16px] text-on-surface-variant">payments</span>Rincian
                                Biaya &amp; Skema Pembayaran</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[16px] text-on-surface-variant">school</span>Program
                                Beasiswa Prestasi &amp; Tahfidz</a></li>
                        <li><a class="hover:text-primary transition-colors flex items-center gap-2"
                                href="#"><span
                                    class="material-symbols-outlined text-[16px] text-on-surface-variant">domain_verification</span>Lokasi
                                Verifikasi Berkas Fisik</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3"><span
                        class="font-headline-sm text-headline-sm text-primary font-bold">Kontak &amp; Helpdesk
                        Unit</span>
                    <div class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant"><a
                            class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors flex items-center justify-between"
                            href="#"><span class="font-medium">Helpdesk KB-TK &amp; SD</span><span
                                class="font-label-sm text-label-sm text-tertiary font-semibold">+62
                                812-3456-7801</span></a><a
                            class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors flex items-center justify-between"
                            href="#"><span class="font-medium">Helpdesk SMP</span><span
                                class="font-label-sm text-label-sm text-tertiary font-semibold">+62
                                812-3456-7802</span></a><a
                            class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors flex items-center justify-between"
                            href="#"><span class="font-medium">Helpdesk SMA</span><span
                                class="font-label-sm text-label-sm text-tertiary font-semibold">+62
                                812-3456-7803</span></a><a
                            class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors flex items-center justify-between"
                            href="#"><span class="font-medium">Sekretariat Yayasan</span><span
                                class="font-label-sm text-label-sm text-primary font-semibold">+62
                                811-9876-5432</span></a></div>
                </div>
            </div>
            <div
                class="border-t border-surface-container-high pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <p class="font-body-sm text-body-sm text-on-surface-variant">© 2025 Yayasan Insan Utama. Hak Cipta
                    Dilindungi. Sistem Informasi PPDB Terpadu Berbasis Digital &amp; Offline Verification.</p>
                <div class="flex items-center gap-4 text-on-surface-variant font-label-sm text-label-sm"><a
                        class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan
                        PPDB</a><span>•</span><a class="hover:text-primary transition-colors" href="#">Kebijakan
                        Privasi Siswa</a></div>
            </div>
        </div>
    </footer>
</body>

</html>
