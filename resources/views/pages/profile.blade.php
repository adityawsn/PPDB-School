@extends('layouts.app')

@section('title', 'Unity School | Profil Institusi')

@section('content')
    <div class="flex flex-col w-full">
                    <!-- HERO SECTION WITH EDITORIAL DEPTH & STATS COUNTER -->
            <section class="relative w-full bg-surface-container-lowest overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-primary/5 via-transparent to-transparent pointer-events-none">
                </div>
                <div
                    class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-secondary-container/10 blur-3xl pointer-events-none">
                </div>
                <div class="max-w-7xl mx-auto px-6 pt-10 pb-16 relative z-10">
                    <!-- Breadcrumb & Trust Badges -->
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                        <nav class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
                            <a class="hover:text-primary transition-colors" data-path="home" href="#">Beranda</a>
                            <a class="hover:text-primary transition-colors" data-path="home" href="{{ route('home') }}">Beranda</a>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="text-primary font-semibold">Profil Institusi</span>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="text-on-surface">Yayasan Penyelenggara Pendidikan SPK</span>
                        </nav>
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm shadow-sm">
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                            <span>SPK Terakreditasi A (Unggul) • Cambridge School #ID1082 • IB Candidate</span>
                        </div>
                    </div>
                    <!-- Main Hero Headline & Visual Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                        <div class="lg:col-span-7 flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <span
                                    class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">Yayasan
                                    Bina Generasi Unity • Unity Education Foundation</span>
                                <h1 class="font-display text-display text-primary tracking-tight">
                                    Membentuk Pemimpin Berwawasan Global dengan Karakter Luhur &amp; Keunggulan Akademik
                                </h1>
                            </div>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                                Lebih dari 15 tahun mendedikasikan diri menyelenggarakan ekosistem pendidikan SPK
                                bertaraf internasional yang terintegrasi penuh—dari Early Years, Primary, Middle School,
                                hingga High School—menggabungkan kurikulum Cambridge &amp; IB dengan adab moral yang
                                teguh.
                            </p>
                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container transition-all"
                                    href="#">
                                    <span class="material-symbols-outlined text-[20px]">download</span>
                                    Unduh Prospektus Yayasan (PDF)
                                </a>
                                <a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-surface-container text-primary font-label-lg text-label-lg hover:bg-surface-container-high transition-all"
                                    href="#campus-tour">
                                    <span class="material-symbols-outlined text-[20px]">view_in_ar</span>
                                    Tur Kampus Virtual 360°
                                </a>
                            </div>
                            <!-- Foundation Seal & Accreditations Micro-Strip -->
                            <div class="flex items-center gap-6 pt-4">
                                <div class="flex items-center gap-3">
                                    <img alt="Unity School International Emblem" class="h-10 w-auto object-contain"
                                        src="https://lh3.googleusercontent.com/aida/AEtjO1VYwVpozcOd06iGyHO8mSaBfBZUWnurbOtknUowIgF92ZYRtnSawwBK0Pq11_6-H2HX4gbQTn3UYHD8ns95-nn-70u15wS0QkWgV0R4J3bhtqN4T4FbosGQFyw-QnpJAK4GMugdKOVmdqdMudhIEiIClMZu6j1hOcS_hgDiprFjv8tCZK3l0mJt95_UVhibApR1UCmmBPKiu9iDwl7ue2Ntm7QXNzCnZ-2yqP7m5wygIARWThoc_JLq9eM" />
                                    <div class="flex flex-col">
                                        <span
                                            class="font-label-sm text-label-sm font-bold text-primary uppercase">Yayasan
                                            Bina Generasi</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Badan Hukum
                                            AHU-0012948.AH.01.04</span>
                                    </div>
                                </div>
                                <div class="h-8 w-px bg-surface-container-highest"></div>
                                <div
                                    class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span
                                        class="material-symbols-outlined text-secondary text-[18px]">verified_user</span>
                                    <span>Audit WTP Big-4 Selama 7 Tahun Berturut-turut</span>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Mosaic Visual Card -->
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-3xl overflow-hidden shadow-xl bg-surface-container-low p-3">
                                <div class="relative h-96 w-full rounded-2xl overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Aerial view of Unity School International modern 3.8 hectare sustainable eco-smart campus in Jakarta, featuring futuristic white and deep teal academic buildings, solar panel roofing, lush central park courtyard, semi-olympic aquatic center, and state-of-the-art sports pavilion bathed in bright morning sunlight, architectural photography style."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4fwFen-EtaS_nlt5NMEjEWWYoIYvDsi5gzi8qBZHx5zRoCemSBVvKo4yZWNmfvoPATQzpXxmTOPGqw6xkPxdNnh4sVdQjOhWx3Yt9BaHO8KkTi3Cc6lVmAjMKC8abKqlnexcW-gFzuxdXj5kkKY1iIvyERtZQH9L1yn8cqaK7rKHhMuEMbsNVF01BxoVgrgFbUOa-RhtYzkSQSJ6LjDzbnbNCa68SWFrQgoAZTzpRhayNS29ldEUV" />
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent">
                                    </div>
                                    <div
                                        class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-surface/90 backdrop-blur-md text-on-surface shadow-md">
                                        <div class="flex items-center justify-between">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Master
                                                    Campus 3.8 Hektar</span>
                                                <span class="font-headline-sm text-headline-sm text-primary">Green
                                                    Eco-Smart Learning Park</span>
                                            </div>
                                            <span
                                                class="px-2.5 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm">Jakarta
                                                Selatan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Floating Stat Badge -->
                            <div
                                class="absolute -bottom-6 -left-6 bg-surface-container-lowest p-4 rounded-2xl shadow-xl flex items-center gap-3">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary-container/20 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[28px]">school</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-headline-md text-headline-md text-primary font-bold">100%</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Lulusan Diterima
                                        di Universitas Unggulan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Institutional Metrics Band -->
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-16 pt-10">
                        <div class="p-5 rounded-2xl bg-surface-container-low flex flex-col gap-1 shadow-sm">
                            <div class="flex items-baseline gap-1">
                                <span class="font-display text-display text-primary">15+</span>
                                <span class="text-secondary font-bold text-headline-md">Tahun</span>
                            </div>
                            <span class="font-label-md text-label-md text-on-surface-variant font-semibold">Dedikasi
                                Pendidikan SPK</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Berdiri sejak 2009 dengan
                                tata kelola profesional</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-surface-container-low flex flex-col gap-1 shadow-sm">
                            <div class="flex items-baseline gap-1">
                                <span class="font-display text-display text-primary">4</span>
                                <span class="text-secondary font-bold text-headline-md">Jenjang</span>
                            </div>
                            <span class="font-label-md text-label-md text-on-surface-variant font-semibold">K-12
                                Kontinum Terpadu</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">EYFS, Primary, Secondary
                                &amp; High School</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-surface-container-low flex flex-col gap-1 shadow-sm">
                            <div class="flex items-baseline gap-1">
                                <span class="font-display text-display text-primary">3.2K+</span>
                                <span class="text-secondary font-bold text-headline-md">Alumni</span>
                            </div>
                            <span class="font-label-md text-label-md text-on-surface-variant font-semibold">Jejaring
                                Global</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ivy League, Russell Group,
                                Go8 &amp; PTN Top</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-surface-container-low flex flex-col gap-1 shadow-sm">
                            <div class="flex items-baseline gap-1">
                                <span class="font-display text-display text-primary">100%</span>
                                <span class="text-secondary font-bold text-headline-md">Imersi</span>
                            </div>
                            <span class="font-label-md text-label-md text-on-surface-variant font-semibold">English
                                &amp; Trilingual</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Pengantar Inggris +
                                Mandarin &amp; Arab</span>
                        </div>
                        <div
                            class="p-5 rounded-2xl bg-surface-container-low flex flex-col gap-1 shadow-sm col-span-2 md:col-span-1">
                            <div class="flex items-baseline gap-1">
                                <span class="font-display text-display text-primary">3.8</span>
                                <span class="text-secondary font-bold text-headline-md">Ha</span>
                            </div>
                            <span class="font-label-md text-label-md text-on-surface-variant font-semibold">Eco-Smart
                                Green Campus</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Fasilitas riset, olahraga
                                &amp; auditorium berstandar global</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TRANSFORMATION TIMELINE & FOUNDATION MILESTONES (2009 - 2025) -->
            <section class="w-full bg-surface py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                        <div class="flex flex-col gap-2 max-w-2xl">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Rekam
                                Jejak Sejarah</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Perjalanan Transformasi
                                Institusi (2009 – 2025)</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Dari sebuah inisiatif pusat stimulasi anak usia dini hingga berkembang menjadi salah
                                satu kompleks pendidikan internasional SPK terlengkap di Indonesia.
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container-high text-primary font-label-md text-label-md">
                            <span class="material-symbols-outlined text-[18px]">history_edu</span>
                            <span>16 Tahun Berinovasi Tanpa Henti</span>
                        </div>
                    </div>
                    <!-- Roadmap Bento Grid / Interactive Stepper Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                        <!-- Milestone 1 -->
                        <div
                            class="group p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary-container text-on-primary-container font-headline-sm text-headline-sm">2009</span>
                                    <span
                                        class="material-symbols-outlined text-secondary text-[24px]">child_care</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                    Pondasi Awal &amp; Early Childhood Centre
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Yayasan didirikan oleh para akademisi dan praktisi pendidikan. Dimulai dengan
                                    fasilitas Early Years berbasis Reggio Emilia &amp; EYFS yang memadukan pembiasaan
                                    adab dan cinta belajar sejak dini.
                                </p>
                            </div>
                            <div class="pt-6 mt-4">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    50 Siswa Pertama &amp; Izin Resmi Kemendikbud
                                </span>
                            </div>
                        </div>
                        <!-- Milestone 2 -->
                        <div
                            class="group p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary text-on-primary font-headline-sm text-headline-sm">2014</span>
                                    <span class="material-symbols-outlined text-secondary text-[24px]">apartment</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                    Pembangunan Master Campus 3.8 Ha &amp; Cambridge Primary
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Relokasi ke kampus terpadu seluas 3.8 hektar. Resmi terakreditasi sebagai Cambridge
                                    International School dengan integrasi kurikulum Singapore CPA Math dan kurikulum
                                    nasional SPK.
                                </p>
                            </div>
                            <div class="pt-6 mt-4">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Akreditasi A Unggul &amp; Sertifikasi Cambridge ID1082
                                </span>
                            </div>
                        </div>
                        <!-- Milestone 3 -->
                        <div
                            class="group p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-headline-sm text-headline-sm">2019</span>
                                    <span class="material-symbols-outlined text-secondary text-[24px]">biotech</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                    Secondary Expansion, STEAM &amp; Lab Riset Digital
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Peluncuran fasilitas High School komprehensif: Science Robotics Complex, Olympic
                                    Aquatic Centre, dan program IGCSE/A-Level Pathway dengan bimbingan penempatan kampus
                                    dunia.
                                </p>
                            </div>
                            <div class="pt-6 mt-4">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    100% Kelulusan Cambridge IGCSE &amp; A-Level Merit
                                </span>
                            </div>
                        </div>
                        <!-- Milestone 4 -->
                        <div
                            class="group p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-tertiary text-on-tertiary font-headline-sm text-headline-sm">2025+</span>
                                    <span class="material-symbols-outlined text-secondary text-[24px]">hub</span>
                                </div>
                                <h3
                                    class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                    Global Innovation Hub &amp; IB DP Candidacy
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Transformasi ke arah ekosistem AI-integrated learning, kandidat resmi IB Diploma
                                    Programme, pembentukan Pusat Studi Adab &amp; Kepemimpinan, dan kemitraan
                                    universitas top 50 dunia.
                                </p>
                            </div>
                            <div class="pt-6 mt-4">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    International University Placement Hub Mandiri
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- VISION, MISSION & 6 CORE GRADUATE ATTRIBUTES -->
            <section class="w-full bg-surface-container-low py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <!-- Top Split: Vision & Mission Bento -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16">
                        <!-- Vision Statement Card -->
                        <div
                            class="lg:col-span-5 p-8 rounded-3xl bg-primary text-on-primary flex flex-col justify-between shadow-xl relative overflow-hidden">
                            <div
                                class="absolute -right-16 -bottom-16 w-64 h-64 rounded-full bg-secondary-container/10 blur-2xl">
                            </div>
                            <div class="flex flex-col gap-4 relative z-10">
                                <div
                                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container text-on-primary-container w-fit font-label-sm text-label-sm uppercase tracking-wider">
                                    <span class="material-symbols-outlined text-[16px]">visibility</span>
                                    Visi Utama 2035
                                </div>
                                <h3 class="font-headline-lg text-headline-lg leading-tight">
                                    Menjadi kiblat institusi pendidikan internasional yang melahirkan generasi
                                    berintegritas tinggi, berwawasan global, dan berakar pada nilai keluhuran adab.
                                </h3>
                                <p class="font-body-md text-body-md text-primary-fixed-dim leading-relaxed">
                                    Memimpin transformasi pendidikan holistik yang menyelaraskan capaian akademik
                                    berstandar dunia dengan kesadaran spiritual, sosial, dan kecakapan masa depan.
                                </p>
                            </div>
                            <div class="pt-8 relative z-10 flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-surface-container-lowest/10 flex items-center justify-center">
                                    <span
                                        class="material-symbols-outlined text-secondary-fixed text-[22px]">workspace_premium</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-primary">World-Class
                                        Standard</span>
                                    <span class="font-body-sm text-body-sm text-primary-fixed-dim">Diakui secara formal
                                        oleh konsorsium global</span>
                                </div>
                            </div>
                        </div>
                        <!-- 4 Pillars of Mission -->
                        <div class="lg:col-span-7 flex flex-col gap-6 justify-center">
                            <div class="flex flex-col gap-2">
                                <span
                                    class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Catur
                                    Misi Institusi</span>
                                <h3 class="font-headline-xl text-headline-xl text-primary">Empat Pilar Fondasi
                                    Pendidikan Unity</h3>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-2">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                                        <span class="material-symbols-outlined text-[20px]">menu_book</span>
                                    </div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Rigour Akademik Global
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Mengintegrasikan kurikulum Cambridge, kurikulum nasional, dan persiapan IB
                                        dengan metodologi inkuiri mendalam.
                                    </p>
                                </div>
                                <div class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-2">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[20px]">favorite</span>
                                    </div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Karakter &amp; Adab
                                        Moral</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Menanamkan akhlak mulia, empati sosial, dan program Tahfidz tematik sebagai
                                        poros pembentukan identitas diri.
                                    </p>
                                </div>
                                <div class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-2">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-tertiary">
                                        <span class="material-symbols-outlined text-[20px]">language</span>
                                    </div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Kemahiran Multilingual
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Ekosistem 100% imersi Bahasa Inggris aktif diperkaya dengan penguasaan Bahasa
                                        Mandarin praktis dan Bahasa Arab dasar.
                                    </p>
                                </div>
                                <div class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-2">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary-container">
                                        <span
                                            class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                                    </div>
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Kreativitas STEAM &amp;
                                        AI</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Membina nalar komputasional, literasi kecerdasan artifisial, dan rekayasa desain
                                        melalui Maker Space modern.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Unity Learner Profile: 6 Core Attributes -->
                    <div class="p-8 rounded-3xl bg-surface-container-lowest shadow-sm flex flex-col gap-8">
                        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                            <div class="flex flex-col gap-2">
                                <span
                                    class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Profil
                                    Lulusan</span>
                                <h3 class="font-headline-lg text-headline-lg text-primary">Unity Graduate Learner
                                    Profile (6 Karakter Utama)</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                                    Setiap program pembelajaran dirancang secara sengaja untuk membangun enam profil
                                    khas yang menjadi ciri utama setiap pembelajar Unity School International.
                                </p>
                            </div>
                            <span
                                class="px-3.5 py-1.5 rounded-xl bg-surface-container text-primary font-label-sm text-label-sm font-semibold">
                                Inspirasi Standar IB &amp; Nilai Kearifan Lokal
                            </span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">psychology</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Inquiring Thinkers</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Gemar meneliti,
                                        berpikir kritis, memecahkan masalah kompleks dengan pendekatan multidisiplin.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-secondary text-on-secondary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">balance</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Principled Leaders</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Memegang integritas
                                        moral, amanah, menjunjung keadilan, dan bertanggung jawab atas setiap tindakan.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-tertiary text-on-tertiary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">diversity_1</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Compassionate Citizens
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Memiliki kepekaan rasa
                                        (empathy), aktif dalam aksi sosial, peduli lingkungan dan kemanusiaan.</p>
                                </div>
                            </div>
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">forum</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Agile Communicators</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Fasih mengekspresikan
                                        gagasan dalam berbagai bahasa, berani berdialog, dan menghargai perspektif lain.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">temple_buddhist</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Culturally Rooted</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Bangga akan identitas
                                        kebangsaan dan nilai tradisi luhur di tengah keterbukaan global.</p>
                                </div>
                            </div>
                            <div class="p-5 rounded-2xl bg-surface-container-low flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">rocket_launch</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Future-Ready Innovators
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Adaptif terhadap
                                        disrupsi teknologi, lincah berinovasi, dan memiliki jiwa kepemimpinan wirausaha.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 4 INTEGRATED ACADEMIC STAGES CONTINUUM -->
            <section class="w-full bg-surface py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col items-center text-center max-w-3xl mx-auto mb-12 gap-3">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Ekosistem
                            K-12 Terpadu</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary">Kontinum Pendidikan 4 Jenjang yang
                            Berkelanjutan</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Peralihan antar jenjang yang mulus tanpa stres seleksi ulang internal. Anak Anda didampingi
                            dari usia emas bermain hingga siap menembus kampus impian dunia.
                        </p>
                    </div>
                    <!-- 4 Stages Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Early Years -->
                        <div
                            class="p-6 rounded-3xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm font-bold">Usia
                                        3 - 5 Tahun</span>
                                    <span
                                        class="text-on-surface-variant font-label-sm text-label-sm">Kindergarten</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors">
                                        Early Years Foundation</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Eksplorasi sensorik,
                                        imersif bahasa Inggris natural, dan adab kasih sayang.</p>
                                </div>
                                <div class="flex flex-col gap-2 pt-2">
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">check</span>
                                        <span>EYFS British Curriculum</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">check</span>
                                        <span>Jolly Phonics &amp; Play Inkuiri</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">check</span>
                                        <span>Toilet Training &amp; Self-Help</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 mt-4">
                                <a class="flex items-center justify-between font-label-md text-label-md text-primary group-hover:text-secondary"
                                    data-path="academic-programs" href="#">
                                    <span>Kurikulum Lengkap</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Primary School -->
                        <div
                            class="p-6 rounded-3xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">Grades
                                        1 – 5</span>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">Sekolah
                                        Dasar</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary group-hover:text-tertiary transition-colors">
                                        Cambridge Primary</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Fondasi nalar logika,
                                        kebiasaan literasi tinggi, dan pemecahan masalah.</p>
                                </div>
                                <div class="flex flex-col gap-2 pt-2">
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary">check</span>
                                        <span>Cambridge Primary Checkpoint</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary">check</span>
                                        <span>Singapore Math CPA Method</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary">check</span>
                                        <span>Science Hands-on Lab Inquiry</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 mt-4">
                                <a class="flex items-center justify-between font-label-md text-label-md text-primary group-hover:text-tertiary"
                                    data-path="academic-programs" href="#">
                                    <span>Kurikulum Lengkap</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Middle School -->
                        <div
                            class="p-6 rounded-3xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary-container/10 text-primary-container font-label-sm text-label-sm font-bold">Grades
                                        6 – 8</span>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">SMP
                                        Internasional</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                        Cambridge Lower Secondary</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Pematangan cara
                                        berpikir analitis, kepemimpinan sosial, dan proyek riset.</p>
                                </div>
                                <div class="flex flex-col gap-2 pt-2">
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>Cambridge Checkpoint Exam</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>STEAM, Coding &amp; Robotics Hub</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>Model United Nations (MUN)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 mt-4">
                                <a class="flex items-center justify-between font-label-md text-label-md text-primary group-hover:text-primary-container"
                                    data-path="academic-programs" href="#">
                                    <span>Kurikulum Lengkap</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- High School -->
                        <div
                            class="p-6 rounded-3xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">Grades
                                        9 – 12</span>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">SMA &amp; IB
                                        DP</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors">
                                        IGCSE, A-Levels &amp; IB</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Jalur akselerasi
                                        penerimaan universitas dunia dengan portofolio riset personal.</p>
                                </div>
                                <div class="flex flex-col gap-2 pt-2">
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>Cambridge IGCSE &amp; A-Levels</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>Kandidat IB Diploma Programme</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface font-body-sm text-body-sm">
                                        <span class="material-symbols-outlined text-[16px] text-primary">check</span>
                                        <span>1-on-1 Overseas College Counselor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 mt-4">
                                <a class="flex items-center justify-between font-label-md text-label-md text-primary group-hover:text-primary-container"
                                    data-path="academic-programs" href="#">
                                    <span>Kurikulum Lengkap</span>
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Direct Progression Privilege Strip -->
                    <div
                        class="mt-8 p-6 rounded-2xl bg-surface-container flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">family_restroom</span>
                            </div>
                            <div class="flex flex-col">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Keistimewaan Internal
                                    Continuum &amp; Legacy Benefit</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Siswa Unity berhak atas
                                    prioritas kenaikan jenjang otomatis bebas tes seleksi serta potongan Uang Pangkal
                                    Sibling 15%.</p>
                            </div>
                        </div>
                        <a class="whitespace-nowrap px-5 py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all"
                            data-path="tuition-and-scholarships" href="#">
                            Pelajari Skema Beasiswa &amp; Sibling
                        </a>
                    </div>
                </div>
            </section>
            <!-- LEADERSHIP, BOARD OF TRUSTEES & ACADEMIC ADVISORY -->
            <section class="w-full bg-surface-container-low py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <!-- Chairman Quote Card -->
                    <div
                        class="p-8 md:p-12 rounded-3xl bg-surface-container-lowest shadow-sm mb-16 relative overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <div class="lg:col-span-4 flex flex-col items-center text-center">
                                <div
                                    class="w-40 h-40 rounded-full overflow-hidden shadow-lg p-1.5 bg-surface-container">
                                    <img class="w-full h-full object-cover rounded-full"
                                        data-alt="Distinguished Asian male senior academic leader and Foundation Chairman, Dr. Ir. Hendra Kusumo, smiling warm and confident in a tailored navy blazer with a smart modern tie, standing in a sunlit university library setting, realistic portrait photography."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXk9X1AaP9ShQN_-1mrTYXBdGpcSI5Tt9Rc4wr_8AX5U3g3vgg_0veFKrlcep_BCZiZmRkl7oGwuMH7heYxu8o1LnJEna4U_aM1FOqSEekb_0AUfW9XGjivTKfZDDXPM_DYLAsVwvQB1CYZDrsSfE0-gx-O40SfzqR-SDhFG8OCJZr8ebBJ6nuNowcj88-BYDzDbjs3RT8ynhbf3eyBkrIguyJ0Cq3yC4HIxGDIiZxT-OEsw03ACLy" />
                                </div>
                                <div class="mt-4 flex flex-col">
                                    <h3 class="font-headline-sm text-headline-sm text-primary">Dr. Ir. Hendra Kusumo,
                                        Ph.D.</h3>
                                    <span class="font-label-sm text-label-sm text-secondary font-bold">Ketua Dewan
                                        Pembina Yayasan</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Former Senior
                                        Visiting Fellow at NUS &amp; Cambridge</span>
                                </div>
                            </div>
                            <div class="lg:col-span-8 flex flex-col gap-4">
                                <span class="material-symbols-outlined text-secondary text-[40px]">format_quote</span>
                                <blockquote class="font-headline-md text-headline-md text-primary italic leading-snug">
                                    "Pendidikan internasional sejati tidak semata mengejar skor ujian tertinggi,
                                    melainkan menyalakan lentera adab, kejujuran budi pekerti, dan kepedulian tulus
                                    terhadap sesama. Di Unity School, kami memastikan setiap anak bertumbuh menjadi
                                    warga dunia yang cakap tanpa pernah kehilangan jati diri akarnya."
                                </blockquote>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Dewan Pembina berkomitmen menginvestasikan kembali sumber daya yayasan untuk
                                    fasilitas riset terdepan, pendampingan tenaga pendidik bersertifikat internasional,
                                    serta beasiswa inklusif bagi talenta muda berprestasi di tanah air.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Executive Leadership Team Cards -->
                    <div class="flex flex-col gap-3 mb-8">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Struktur
                            Pengelola</span>
                        <h3 class="font-headline-xl text-headline-xl text-primary">Dewan Eksekutif &amp; Tim Pengembang
                            Akademik</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Leader 1 -->
                        <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl overflow-hidden shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Portrait of Sarah Daniswara M.Ed, an Indonesian woman educator and Cambridge Academic Director in her late 30s wearing a modern elegant blazer with a professional smile in an international school campus environment."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD32yfAnKNpN3pSpfpRSUHfv17f3hSZ251HHyYZkGWcXVgM1dG4CyTak5I7xESJIEjbyGQXsIGoB-QlhxuoRQFSXvG8m14h3dgS79LS5DK6hA6w-E6kgcXuu8l2DY_tOX7s9kyTM6tWIkZhoVPjaN0zJenOojsRJiPECLVekxBTtyqKzELizkXp6ePrhiIFeujnX2n6JgM1wkPhcqqlenibnoptrZkMclSSOfp2VdbEPjvGuHWaWLBJ" />
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Sarah Daniswara, M.Ed.
                                    </h4>
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Direktur
                                        Mutu Akademik &amp; Cambridge</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Alumni Melbourne
                                        Graduate School of Education</span>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Memimpin standardisasi asesmen Cambridge, pelatihan guru berkelanjutan, dan integrasi
                                kurikulum inkuiri lintas jenjang dengan rekam jejak 14 tahun di sekolah multinasional.
                            </p>
                        </div>
                        <!-- Leader 2 -->
                        <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl overflow-hidden shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Portrait of Ust. H. Salman Faris Lc M.Ag, Director of Character and Adab Education, a thoughtful scholar in modern modest Islamic attire and blazer, smiling warmly in a contemporary library."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2wB2oDWSdMLvuNkBLGr2JDYm3qDGFpNUjSVRfmg4VRWkvzLytTMEiDDcj_mlGnrkX8MOCenC6xGcW-tIDVDIOsWa71RYX48anOv-7DGaHLmdF9daKdZNC1mz074YEGgB76R9fkN3i1spimXSjrqgahiXc7VgKa8AOk2myPMkCM7ks3DbJUWeDXTZy0EjVFjh8_prwOMK6CxcdxzRuHYGTDI-WWFroEjJcm-I3qXQPDfD2nItqOag0" />
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Ust. H. Salman Faris,
                                        Lc., M.Ag.</h4>
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Direktur
                                        Pembinaan Karakter &amp; Adab</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Al-Azhar Cairo
                                        &amp; UIN Syarif Hidayatullah</span>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Menyusun modul adab tematik, program tahfidz yang ramah anak, serta pembinaan
                                kepemimpinan moral yang menyatu dalam kultur keseharian sekolah.
                            </p>
                        </div>
                        <!-- Leader 3 -->
                        <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl overflow-hidden shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Portrait of Jonathan Miller M.Sc, Head of International Partnerships and University Counseling, a British-Australian international educator in a smart casual business jacket in a conference room."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_gk-LPrdg_47uQDTe7pfWaXsdXz47jvDOW7rvJdOqcddZGf_2uqoHdZQq-z69G1WKKAEcPN2CEWO1-KUJ6rNiEmKk7mZzJSqUx90O33bwoZ84ykc0ALfD7iBkh_GN9DB5ve2CsRD1ZR1tzfGcGDGjLjb-o2XORAjjF0tgB4voPt0Kewlko9Tl74jLS3S-cS-ilfLwb6-mGw0-H6CDM2ET5gDixEMIpEJ8LALvBlcVBHba2FM_EQUU" />
                                </div>
                                <div class="flex flex-col">
                                    <h4 class="font-headline-sm text-headline-sm text-primary">Jonathan Miller, M.Sc.
                                    </h4>
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Head of
                                        University Placement &amp; Kemitraan</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Former University
                                        Admissions Officer, UK</span>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Membimbing portofolio aplikasi, rekomendasi universitas, dan program magang global siswa
                                High School untuk masuk ke universitas top dunia di Amerika, Inggris, dan Asia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ACCREDITATION, LEGAL COMPLIANCE & GOVERNANCE TRANSPARENCY -->
            <section class="w-full bg-surface py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                        <div class="flex flex-col gap-2 max-w-2xl">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Legitimasi
                                &amp; Akreditasi</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Standar Akreditasi Dunia &amp;
                                Transparansi Tata Kelola</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Yayasan Bina Generasi Unity beroperasi dengan kepatuhan hukum penuh terhadap regulasi
                                Satuan Pendidikan Kerjasama (SPK) Republik Indonesia dan lembaga akreditasi global.
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-tertiary animate-pulse"></span>
                            <span class="font-label-sm text-label-sm text-tertiary font-bold uppercase">Semua Izin
                                Berstatus Aktif &amp; Valid</span>
                        </div>
                    </div>
                    <!-- Credentials Bento Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Credential 1 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary text-on-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">verified</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Cambridge International
                                    School</h4>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">Registered
                                    Centre ID #ID1082</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Otoritas resmi
                                    penyelenggaraan Cambridge Primary, Lower Secondary, IGCSE, serta AS &amp; A Level
                                    Exams.</p>
                            </div>
                        </div>
                        <!-- Credential 2 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-tertiary text-on-tertiary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">stars</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Akreditasi BAN-S/M Grade A
                                    (Unggul)</h4>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold">Nilai Rata-rata
                                    98/100 (Semua Jenjang)</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Izin operasional SPK resmi
                                    dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi RI.</p>
                            </div>
                        </div>
                        <!-- Credential 3 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">public</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">IB World Candidate School
                                </h4>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">International
                                    Baccalaureate (IB DP)</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Dalam proses kandidasi
                                    tahap akhir implementasi kurikulum International Baccalaureate Diploma Programme.
                                </p>
                            </div>
                        </div>
                        <!-- Credential 4 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">approval_delegation</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">WASC Accreditation Candidate
                                </h4>
                                <span class="font-label-sm text-label-sm text-primary font-semibold">Western
                                    Association of Schools and Colleges</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memastikan kesetaraan
                                    transkrip akademik bagi siswa yang melanjutkan ke universitas di Amerika Utara.</p>
                            </div>
                        </div>
                        <!-- Credential 5 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">fact_check</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">ISO 9001:2015 Educational
                                    Standard</h4>
                                <span class="font-label-sm text-label-sm text-primary font-semibold">Sistem Manajemen
                                    Mutu Teruji</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Standar operasional ketat
                                    untuk keamanan siswa (child safeguarding), higienitas, dan prosedur administrasi.
                                </p>
                            </div>
                        </div>
                        <!-- Credential 6 -->
                        <div class="p-6 rounded-2xl bg-surface-container-low flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[26px]">account_balance</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Opini Audit Wajar Tanpa
                                    Pengecualian</h4>
                                <span class="font-label-sm text-label-sm text-primary font-semibold">Audit Keuangan KAP
                                    Independen 7 Tahun</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Transparansi akuntabilitas
                                    pengelolaan dana yayasan yang menjamin keberlangsungan jangka panjang institusi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CAMPUS INFRASTRUCTURE & FACILITIES SHOWCASE (3.8 HA ECO-SMART CAMPUS) -->
            <section class="w-full bg-surface-container-low py-16" id="campus-tour">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
                        <div class="flex flex-col gap-2 max-w-2xl">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Fasilitas
                                Kampus Unggulan</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">Infrastruktur Kampus 3.8 Ha
                                Bernuansa Eco-Smart</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Dirancang secara ergonomis untuk memicu kreativitas, kebugaran fisik, dan kedamaian
                                batin para siswa di tengah ruang terbuka hijau yang asri.
                            </p>
                        </div>
                        <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                            Jadwalkan Kunjungan Fisik (Private Tour)
                        </a>
                    </div>
                    <!-- Facilities Bento Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Facility 1: AI Robotics -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="High school and middle school students working with advanced robotics kits, 3D printers, and coding monitors in a bright futuristic STEAM Maker Space lab at Unity School International, photorealistic modern education."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmV6vTtQkhqMV6W3n8Nu4OLbC6odZe6DJwd8JCUPJVpSXG91SlMtplp5-ZJCcjukGsrSX6tmvQycf9UBVyE0Jl27yKPLPJ0uhK4nIDAKLeOTvLbZE2c-101D_3pBkvugm0TvAPmJTnF4-XIa3hDMZZTgA4-wB3yk9K3dlSoKkbRTIA7R-HGXwyD-MzKF2wLKEIV0tRfB29p2gILRZpagGGwSIXDUDoWNoqcJjrhFKcvjMl5RADyAQR" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    STEAM Innovation Lab
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">AI &amp; Robotics
                                    Fabrication Studio</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Dilengkapi 3D printers, pemotong laser, modul mikrokontroler Arduino/Raspberry Pi,
                                    dan terminal komputasi berkinerja tinggi untuk riset siswa.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 2: Aquatic Center -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Crystal clear semi-olympic outdoor heated swimming pool with clear lap lanes, shaded spectator stands, and lush tropical trees on an international school campus, sunlit architectural capture."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBo9OI8FOy2WCRzDkpKTmRdshg-RKG7NM_Ic6oLuk1X5gFIPu7BXoHH0xWCJfyRS-8ygVwOzgBRH_Lt2jvcUwt2KO2Et1ZJ7bErR99LMuGiTouLxVMiENE7O5_YrXlp9LpmwA5bSGsger3Dkidd0h0p74cOxpFau8PbTjXWB_76VHjwDbnG1qFhDDrqnNYXv1PCWOVSR4duY1Fpfm6yIvq9KTCuD7Sls6Kze9HIcD2-KTxEFFdgKCA3" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    Sport Complex
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">FINA-Standard Aquatic Centre
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Kolam renang semi-olimpik dengan sistem sirkulasi garam tanpa kaporit berlebih,
                                    dilengkapi kolam pembiasaan aman untuk murid Early Years.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 3: Grand Auditorium -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Grand international school performing arts theatre auditorium with 800 velvet seats, warm acoustic wood paneling, orchestra pit, and state-of-the-art stage lighting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn2wqJJwnof3UWyNaV1ZxWVudCDF6aVUi4QPgxw9hgJNt3z7TYXWB41G6HfIh60R-FcZo_GMH3mhjpxz2DQbj8CmJImAz1L-yLn3JgzhM-Z9mjw04cDfLb6vNLAZzV_2bCpxORAKURao4orcfoVEO7icN551UScxkrCfrjLqzT031Y0IGpGUTfzBRGkI3PM3FdGQ6oEQRbE6oI1vPfszuLUrj9g8NGBboQG-v9m6fI6S2cq4_i8Fr6" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    Performing Arts
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">800-Seat Grand Performing
                                    Theatre</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Panggung pertunjukan bertaraf internasional dengan akustik profesional untuk
                                    pementasan musikal, konferensi Model UN, dan wisuda akbar.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 4: Library Commons -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Sunlit contemporary two-story international school library with floor-to-ceiling glass windows, cozy reading pods, study carrels, and digital database terminals, minimalist Scandinavian design."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuABiEawTB1lXk3aNgyNdq_jKClTn3Ps6XSn3TvKZTnPFgEMbYQndPLfaC7c2Pd0RYLbd40ZRN519-TviYTefkHcL-a211M1IO-6PgpsPMXm9W_ljmsgT-TDQTKrhQLpuT5yFB4qs9KP6ymefzWFA6GidRpKDO2o0QdWijsqzsGlrdm6_iiUCHJ7hGBY4O3SS9OVz8x-vAHM3FVCRIkdU9-mPn8hofQSLOsiu7EBVLs3piWXO-LknzoU" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    Digital Commons
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Knowledge Commons &amp;
                                    Digital Library</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Koleksi 25,000+ buku cetak, akses jurnal ilmiah internasional JSTOR dan EBSCO, serta
                                    ruang diskusi terisolasi suara (study pods).
                                </p>
                            </div>
                        </div>
                        <!-- Facility 5: Mosque & Sanctuary -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Modern serene campus mosque with airy geometric arches, natural skylight illumination, calm indoor reflecting pool, and soft beige carpet for student prayer and reflection."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIU_eTj0rf0QLcLRQ4ihm0q8AgnD5nDHXK5d8zxmKl5XUoJuO0lIX2PoVJocDZgGm2NRgP53zApQ6OO99m6yFBqU_eT91ruuBPT-93FprLM46hzu0NpIQkWiQZB_hulkE_FMiR_PFW1_3sEP8k08YFUrBAFp42WFtVijbphYruMgVFlfkRk7d27lRHBEnZ44RsvMsUJeT4FU62tK29y9t_iPiJROm1q8OA7hd6Cgh_v_LWhHwzjbwK" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    Spiritual Center
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Central Grand Mosque &amp;
                                    Halaqah Sanctuary</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Pusat ibadah harian, shalat berjamaah, lingkaran halaqah tahfidz Qur'an, dan
                                    pembiasaan adab dengan kapasitas 1,200 jamaah.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 6: Wellness & Psychology -->
                        <div
                            class="rounded-3xl bg-surface-container-lowest overflow-hidden shadow-sm flex flex-col group">
                            <div class="relative h-56 w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Welcoming and comforting school wellness clinic and counseling lounge with pastel warm tones, soft armchairs, indoor plants, and friendly medical consultation area."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJFONOb3TH8-ri4iC90hm6fL4GP2ougoKA_otq9y5feRpaUL2iA0fNz7wtt26mHWG1DfsQvbWZqYjXMFoosDfqXVfB-fEGPaz_kT1SZmDL4PbipwwHiQFmA3EQKN9Za3lNSyiX0wGQzK6kycvYqQsYNOcnduG8cPcZkhyi-yNtaZnOHcmKQxUdpTJuKT1z138lr-5dbkxEiuZwIsl6FYTcfQPFR18u24rSv8X-NGXqf8ajJvYuoBE2" />
                                <span
                                    class="absolute top-4 left-4 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm font-semibold">
                                    Health &amp; Wellbeing
                                </span>
                            </div>
                            <div class="p-6 flex flex-col gap-2">
                                <h4 class="font-headline-sm text-headline-sm text-primary">Wellness Clinic &amp;
                                    Psychological Support</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Didampingi dokter umum dan psikolog anak purna-waktu untuk menjamin kesehatan fisik,
                                    mental, serta pendampingan konseling tumbuh kembang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- INTERACTIVE TUITION & SCHOLARSHIP COMMITMENT TEASER -->
            <section class="w-full bg-surface py-12">
                <div class="max-w-7xl mx-auto px-6">
                    <div
                        class="p-8 rounded-3xl bg-gradient-to-r from-primary via-primary-container to-primary text-on-primary shadow-xl">
                        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                            <div class="flex flex-col gap-3 max-w-2xl">
                                <span
                                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-bold w-fit">
                                    <span class="material-symbols-outlined text-[16px]">redeem</span>
                                    Dana Abadi &amp; Beasiswa Unggulan
                                </span>
                                <h3 class="font-headline-xl text-headline-xl text-on-primary">
                                    Komitmen Aksesibilitas Pendidikan bagi Generasi Visioner
                                </h3>
                                <p class="font-body-md text-body-md text-surface-container-high leading-relaxed">
                                    Yayasan mengalokasikan 12% dari anggaran operasional tahunan untuk Program Beasiswa
                                    Prestasi Akademik, Beasiswa Tahfidz Al-Qur'an 30 Juz, serta beasiswa kepemimpinan
                                    pemuda.
                                </p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0">
                                <a class="px-6 py-3.5 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-md hover:bg-secondary-fixed transition-all"
                                    data-path="tuition-and-scholarships" href="#">
                                    Jelajahi Skema Beasiswa
                                </a>
                                <a class="px-6 py-3.5 rounded-xl bg-surface/10 backdrop-blur-md text-on-primary font-label-lg text-label-lg hover:bg-surface/20 transition-all"
                                    data-path="admissions-and-requirements" href="#">
                                    Persyaratan Pendaftaran
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CALL TO ACTION / ADMISSION PATHWAY BANNER -->
            <section class="w-full bg-surface-container-lowest py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div
                        class="rounded-3xl bg-surface-container-low p-8 md:p-12 shadow-sm flex flex-col items-center text-center gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary text-on-primary flex items-center justify-center shadow-md">
                            <span class="material-symbols-outlined text-[32px]">edit_calendar</span>
                        </div>
                        <div class="flex flex-col gap-2 max-w-2xl">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Penerimaan
                                Siswa Baru (PPDB) 2025/2026</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary">
                                Mari Bergabung Menjadi Bagian dari Keluarga Besar Unity School International
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Registrasi Gelombang 1 Early Bird telah dibuka untuk jenjang Kindergarten, Primary,
                                Middle School, dan High School. Kuota kelas terbatas untuk menjamin rasio guru-murid
                                optimal.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                            <a class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-primary text-on-primary font-label-lg text-label-lg shadow-lg hover:bg-primary-container transition-all"
                                data-path="apply-now" href="#">
                                <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                                Mulai Pendaftaran Online (Apply Now)
                            </a>
                            <a class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-surface-container text-primary font-label-lg text-label-lg hover:bg-surface-container-high transition-all"
                                data-path="faq-and-contact" href="#">
                                <span class="material-symbols-outlined text-[20px]">support_agent</span>
                                Hubungi Tim Admisi Yayasan
                            </a>
                        </div>
                        <!-- Contact Hotline Strip -->
                        <div
                            class="flex flex-wrap items-center justify-center gap-6 pt-4 text-on-surface-variant font-label-md text-label-md">
                            <span class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-[18px]">call</span>
                                Hotline Admisi: (021) 555-0199
                            </span>
                            <span>•</span>
                            <span class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-[18px]">chat</span>
                                WhatsApp Resmi: +62 811-9988-2025
                            </span>
                            <span>•</span>
                            <span class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                Layanan Tatap Muka: Senin - Sabtu (08.00 - 16.00 WIB)
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FLOATING WHATSAPP MULTI-TIER HELPDESK TRIGGER -->
            <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end">
                <div class="hidden mb-3 p-4 rounded-2xl bg-surface-container-lowest shadow-2xl w-72 flex-col gap-3"
                    id="wa-popover">
                    <div class="flex items-center justify-between pb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-[#25D366] text-white flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Layanan Helpdesk
                                    Yayasan</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Pilih Petugas Admisi
                                    per Jenjang:</span>
                            </div>
                        </div>
                        <button class="text-on-surface-variant hover:text-primary"
                            onclick="document.getElementById('wa-popover').classList.toggle('hidden')">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                        </button>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <a class="p-2 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface flex items-center justify-between font-label-sm text-label-sm transition-colors"
                            href="https://wa.me/6281199882025?text=Halo%20Admisi%20TK%20Unity" target="_blank">
                            <span>Admisi Early Childhood (TK)</span>
                            <span class="material-symbols-outlined text-[16px] text-secondary">arrow_forward</span>
                        </a>
                        <a class="p-2 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface flex items-center justify-between font-label-sm text-label-sm transition-colors"
                            href="https://wa.me/6281199882025?text=Halo%20Admisi%20SD%20Unity" target="_blank">
                            <span>Admisi Primary School (SD)</span>
                            <span class="material-symbols-outlined text-[16px] text-tertiary">arrow_forward</span>
                        </a>
                        <a class="p-2 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface flex items-center justify-between font-label-sm text-label-sm transition-colors"
                            href="https://wa.me/6281199882025?text=Halo%20Admisi%20SMP%20Unity" target="_blank">
                            <span>Admisi Middle School (SMP)</span>
                            <span class="material-symbols-outlined text-[16px] text-primary">arrow_forward</span>
                        </a>
                        <a class="p-2 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface flex items-center justify-between font-label-sm text-label-sm transition-colors"
                            href="https://wa.me/6281199882025?text=Halo%20Admisi%20SMA%20Unity" target="_blank">
                            <span>Admisi High School (SMA/IB)</span>
                            <span
                                class="material-symbols-outlined text-[16px] text-primary-container">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <button
                    class="flex items-center gap-2.5 px-4 py-3 rounded-full bg-primary text-on-primary shadow-2xl hover:bg-primary-container hover:scale-105 transition-all"
                    onclick="document.getElementById('wa-popover').classList.toggle('hidden')">
                    <span class="w-3 h-3 rounded-full bg-tertiary-fixed animate-ping"></span>
                    <span class="material-symbols-outlined text-[22px]">forum</span>
                    <span class="font-label-md text-label-md font-bold pr-1">Tanya Tim Admisi</span>
                </button>
            </div>
    </div>
@endsection

