@extends('layouts.app')

@section('title', 'Unity School | Contact')
@section('content')
                <!-- SECTION 1: HERO & SEARCH BANNER -->
            <section
                class="relative w-full bg-gradient-to-b from-surface-container-low via-surface to-surface px-4 lg:px-8 py-12 lg:py-8 overflow-hidden">
                <!-- Ambient subtle background decorative radial glows -->
                <div
                    class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-primary-fixed/25 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute top-10 -right-24 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none">
                </div>
                <div class="max-w-7xl mx-auto relative z-10 flex flex-col items-center text-center">
                    <!-- Status Badge & Indicator -->
                    <div
                        class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-surface-container-lowest shadow-sm mb-6 border border-surface-container-high">
                        <span class="relative flex h-2.5 w-2.5">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-secondary-container"></span>
                        </span>
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">
                            ADMISSIONS HELPDESK &amp; PARENT SUPPORT CENTER - AY 2025/2026
                        </span>
                    </div>
                    <!-- Main Heading -->
                    <h1
                        class="font-headline-xl text-headline-xl lg:text-[44px] lg:leading-[52px] text-primary max-w-4xl tracking-tight mb-4">
                        Ada Pertanyaan Seputar Admissions &amp; Kurikulum Unity School? Temukan Jawaban Cepat &amp;
                        Hubungi Konselor Kami
                    </h1>
                    <!-- Subtitle -->
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mb-8">
                        Panduan terpadu seputar pendaftaran digital, observasi kesiapan kognitif &amp; bahasa (EAL),
                        jadwal private campus tour, skema biaya transparan &amp; beasiswa, serta kontak langsung
                        konselor per jenjang.
                    </p>
                    <!-- Interactive Search Container -->
                    <div
                        class="w-full max-w-3xl bg-surface-container-lowest p-2.5 sm:p-3 rounded-2xl shadow-lg mb-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-2 border border-surface-container-high">
                        <div class="flex items-center gap-3 px-3 flex-1">
                            <span class="material-symbols-outlined text-on-surface-variant text-[24px]">search</span>
                            <input
                                class="w-full bg-transparent font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none py-2"
                                id="faq-search-input"
                                placeholder="Cari pertanyaan... (contoh: placement test, EAL support, Cambridge vs IB, beasiswa merit, sibling discount)"
                                type="text" />
                        </div>
                        <button
                            class="inline-flex items-center justify-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm"
                            onclick="filterFaqFromInput()" type="button">
                            <span class="material-symbols-outlined text-[18px]">travel_explore</span>
                            <span>Cari Solusi</span>
                        </button>
                    </div>
                    <!-- Filter Tags -->
                    <div class="flex flex-wrap items-center justify-center gap-2 mb-6">
                        <span class="font-label-sm text-label-sm text-on-surface-variant mr-1">Topik Populer:</span>
                        <button
                            class="category-filter-btn active font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-primary text-on-primary shadow-sm transition-all"
                            data-filter="all" onclick="filterCategory('all')">
                            Semua Kategori
                        </button>
                        <button
                            class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                            data-filter="admissions" onclick="filterCategory('admissions')">
                            Admissions &amp; Pendaftaran Online
                        </button>
                        <button
                            class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                            data-filter="asesmen" onclick="filterCategory('asesmen')">
                            Placement Test &amp; Asesmen
                        </button>
                        <button
                            class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                            data-filter="kurikulum" onclick="filterCategory('kurikulum')">
                            Kurikulum &amp; Bahasa Pengantar
                        </button>
                        <button
                            class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                            data-filter="biaya" onclick="filterCategory('biaya')">
                            Tuition Fee &amp; Beasiswa
                        </button>
                        <button
                            class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                            data-filter="tour" onclick="filterCategory('tour')">
                            On-Campus Tour &amp; Welcome Desk
                        </button>
                    </div>
                    <!-- Operational Live Pill -->
                    <div
                        class="inline-flex flex-wrap items-center justify-center gap-3 px-4 py-2 rounded-xl bg-tertiary-container/10 text-tertiary border border-tertiary-container/20">
                        <div class="flex items-center gap-2 font-label-md text-label-md font-semibold">
                            <span class="material-symbols-outlined text-[18px] text-tertiary-container">verified</span>
                            <span>Status Hari Ini: Admissions Welcome Center BUKA (08.00 - 16.00 WIB)</span>
                        </div>
                        <span class="hidden sm:inline text-tertiary-container">•</span>
                        <div class="flex items-center gap-1.5 font-label-sm text-label-sm font-medium">
                            <span class="material-symbols-outlined text-[16px] text-secondary">bolt</span>
                            <span>Respon Cepat CS WhatsApp &lt; 15 Menit</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 2: DIREKTORI KONTAK HELPDESK RESMI PANITIA PER UNIT -->
            <section class="w-full px-4 lg:px-8 py-6 bg-surface">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                        <div>
                            <div
                                class="inline-flex items-center gap-1.5 text-secondary font-label-sm text-label-sm uppercase tracking-wider mb-2">
                                <span class="material-symbols-outlined text-[16px]">support_agent</span>
                                <span>Dedicated Admissions Counselors</span>
                            </div>
                            <h2 class="font-headline-lg text-headline-lg text-primary">
                                Direktori Konselor Admissions Resmi Per Jenjang
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                Konsultasikan kesiapan kurikulum, diagnostik penempatan, dan kebutuhan individual anak
                                dengan Academic Pathway Advisor Unity School International.
                            </p>
                        </div>
                        <div class="flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-xl">
                            <span class="material-symbols-outlined text-[20px] text-primary">timer</span>
                            <span class="font-label-sm text-label-sm text-on-surface">Konsultasi Tatap Muka &amp;
                                Online: 08.00 - 16.00 WIB</span>
                        </div>
                    </div>
                    <!-- Grid 4 Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- 1. Early Years -->
                        <div
                            class="flex flex-col justify-between bg-surface-container-lowest p-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase">
                                        Early Years (Ages 3 - 5)
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[24px] text-secondary">child_care</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Early Years Division
                                </h3>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Reggio Emilia &amp;
                                    UK EYFS Framework</p>
                                <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                                    <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions
                                        Specialist:</div>
                                    <div
                                        class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">badge</span>
                                        <span>Ms. Nabila Putri, S.Psi</span>
                                    </div>
                                    <div class="text-[11px] text-secondary font-medium">Early Childhood Specialist
                                    </div>
                                </div>
                                <div class="space-y-2 mb-6">
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Kesiapan usia masuk Nursery &amp; Kindergarten</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Toilet training &amp; bilingual exposure awal</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Jadwal trial class &amp; guided sensory play tour</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                                    <span>WhatsApp Konselor:</span>
                                    <span class="font-semibold text-on-surface">+62 811-2345-801</span>
                                </div>
                                <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                                    href="https://wa.me/628112345801?text=Halo%20Ms.%20Nabila,%20saya%20ingin%20konsultasi%20Admissions%20Early%20Years%20Unity%20School"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat WA Early Years</span>
                                </a>
                            </div>
                        </div>
                        <!-- 2. Primary School -->
                        <div
                            class="flex flex-col justify-between bg-surface-container-lowest p-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-bold uppercase">
                                        Primary (Grades 1 - 5)
                                    </span>
                                    <span class="material-symbols-outlined text-[24px] text-primary">school</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Primary School</h3>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge Primary
                                    &amp; Character Building</p>
                                <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                                    <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions
                                        Specialist:</div>
                                    <div
                                        class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-primary">badge</span>
                                        <span>Mr. Dimas Anggoro, M.Ed</span>
                                    </div>
                                    <div class="text-[11px] text-primary font-medium">Primary Academic Counselor</div>
                                </div>
                                <div class="space-y-2 mb-6">
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Cambridge Primary Diagnostic &amp; Singapore Math</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>EAL support &amp; communicative English readiness</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Pemetaan sosio-emosional &amp; holistik anak</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                                    <span>WhatsApp Konselor:</span>
                                    <span class="font-semibold text-on-surface">+62 811-2345-802</span>
                                </div>
                                <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                                    href="https://wa.me/628112345802?text=Halo%20Mr.%20Dimas,%20saya%20ingin%20konsultasi%20Admissions%20Primary%20Unity%20School"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat WA Primary School</span>
                                </a>
                            </div>
                        </div>
                        <!-- 3. Middle School -->
                        <div
                            class="flex flex-col justify-between bg-surface-container-lowest p-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-bold uppercase">
                                        Middle (Grades 6 - 8)
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[24px] text-primary-container">menu_book</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Middle School</h3>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge Lower
                                    Secondary Pathway</p>
                                <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                                    <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions
                                        Specialist:</div>
                                    <div
                                        class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-primary-container">badge</span>
                                        <span>Ms. Farah Ramadhani, B.A.</span>
                                    </div>
                                    <div class="text-[11px] text-primary-container font-medium">Middle School Pathway
                                        Advisor</div>
                                </div>
                                <div class="space-y-2 mb-6">
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Cambridge Checkpoint &amp; transisi kurikulum</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Trilingual stream (English, Mandarin, Bahasa)</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>STEAM, Robotics Lab, &amp; Model United Nations</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                                    <span>WhatsApp Konselor:</span>
                                    <span class="font-semibold text-on-surface">+62 811-2345-803</span>
                                </div>
                                <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                                    href="https://wa.me/628112345803?text=Halo%20Ms.%20Farah,%20saya%20ingin%20konsultasi%20Admissions%20Middle%20School%20Unity%20School"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat WA Middle School</span>
                                </a>
                            </div>
                        </div>
                        <!-- 4. High School -->
                        <div
                            class="flex flex-col justify-between bg-surface-container-lowest p-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold uppercase">
                                        High (Grades 9 - 12)
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[24px] text-tertiary-container">psychology</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Senior High School</h3>
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge IGCSE,
                                    A-Levels &amp; IB DP</p>
                                <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                                    <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions
                                        Specialist:</div>
                                    <div
                                        class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container">badge</span>
                                        <span>Mr. Jonathan Miller, M.Sc.</span>
                                    </div>
                                    <div class="text-[11px] text-tertiary font-medium">College Counselor &amp; Senior
                                        Admissions</div>
                                </div>
                                <div class="space-y-2 mb-6">
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Pemilihan subjek IGCSE, A-Level &amp; IB Diploma</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Ivy League, Russell Group, Go8 &amp; Top PTN prep</span>
                                    </div>
                                    <div
                                        class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                        <span>Beasiswa Unity Global Merit &amp; Youth Talent</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                                    <span>WhatsApp Konselor:</span>
                                    <span class="font-semibold text-on-surface">+62 811-2345-804</span>
                                </div>
                                <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                                    href="https://wa.me/628112345804?text=Halo%20Mr.%20Miller,%20saya%20ingin%20konsultasi%20Admissions%20High%20School%20Unity%20School"
                                    target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat WA High School</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Foundation & Financial Hotline Banner -->
                    <div
                        class="w-full bg-gradient-to-r from-primary via-primary-container to-primary text-on-primary rounded-2xl p-6 lg:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 shadow-md">
                        <div class="flex items-start gap-4">
                            <div class="p-3.5 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md">
                                <span
                                    class="material-symbols-outlined text-[32px] text-secondary-container">account_balance</span>
                            </div>
                            <div>
                                <div
                                    class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-container font-semibold mb-1">
                                    Admissions Finance &amp; Bursar Office
                                </div>
                                <h4 class="font-headline-sm text-headline-sm text-on-primary">
                                    Butuh Konsultasi Skema Angsuran 0%, Sibling Privilege, atau Pengajuan Unity Global
                                    Merit Scholarship?
                                </h4>
                                <p class="font-body-sm text-body-sm text-surface-container-highest/80 max-w-2xl mt-1">
                                    Bursar Office Unity School melayani simulasi pembayaran semesteran/tahunan, program
                                    cicilan perbankan 0%, verifikasi kelayakan beasiswa akademik, serta diskon keluarga.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                            <a class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-surface-container-lowest text-primary font-label-md text-label-md font-bold hover:bg-surface-container-high transition-colors shadow-sm"
                                href="https://wa.me/628115550199" target="_blank">
                                <span class="material-symbols-outlined text-[18px]">call</span>
                                <span>Hubungi Admissions Bursar</span>
                            </a>
                            <a class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors shadow-sm"
                                href="#inquiry-form-section">
                                <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                                <span>Ketentuan Beasiswa</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 3: FAQ ACCORDION KOMPREHENSIF -->
            <section class="w-full px-4 lg:px-8 py-6 bg-surface-container-low">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-6">
                        <span
                            class="px-3.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold uppercase tracking-wider">
                            Pusat Informasi &amp; Jawaban Resmi
                        </span>
                        <h2 class="font-headline-lg text-headline-lg text-primary mt-2">
                            Frequently Asked Questions (FAQ)
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mt-1">
                            Kumpulan jawaban resmi tim Admissions terkait kurikulum Cambridge &amp; IB, English
                            immersion, asesmen masuk, kebijakan transfer siswa, dan tuition fee.
                        </p>
                    </div>
                    <!-- FAQ Container with JavaScript Accordion -->
                    <div class="space-y-4" id="faq-list-container">
                        <!-- ITEM 1 (Kurikulum & Bahasa) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="kurikulum"
                            data-keywords="bahasa inggris english immersion eal support fasih lancar transisi bahasa pengantar">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-primary-fixed text-primary font-label-sm text-label-sm font-bold">BAHASA</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Apakah calon siswa wajib fasih berbahasa Inggris saat pertama mendaftar?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <p class="mb-3">
                                    <strong>Tidak wajib fasih sempurna.</strong> Unity School International menyadari
                                    bahwa setiap anak memiliki latar belakang sekolah dan paparan bahasa yang beragam.
                                </p>
                                <ul class="list-disc pl-5 space-y-1.5 text-on-surface mb-3">
                                    <li><strong>Early Years &amp; Primary Bawah (Grades 1-2):</strong> Tidak ada syarat
                                        kemahiran bahasa Inggris mutlak. Anak akan secara alami menyerap bahasa Inggris
                                        melalui metode <em>natural immersion</em> dan interaksi harian bersama guru
                                        native dan bilingual.</li>
                                    <li><strong>Primary Atas, Middle &amp; High School:</strong> Siswa yang sedang dalam
                                        masa transisi dari sekolah non-SPK/nasional akan mendapatkan program
                                        pendampingan khusus <strong>EAL (English as an Additional Language)</strong>
                                        intensif tanpa biaya tambahan, guna mengakselerasi pemahaman materi Cambridge
                                        dan IB mereka.</li>
                                </ul>
                                <div
                                    class="p-3 bg-surface-container-low rounded-xl text-body-sm font-body-sm text-on-surface-variant flex items-start gap-2">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-secondary mt-0.5">lightbulb</span>
                                    <span>Konselor akademik kami siap melakukan pemetaan diagnostik suportif untuk
                                        merancang rencana adaptasi yang nyaman bagi ananda.</span>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM 2 (Asesmen & Observasi) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="asesmen"
                            data-keywords="placement test observasi kognitif tes seleksi ujian masuk ramah anak wawancara diagnostic">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-surface-container-highest text-primary font-label-sm text-label-sm font-bold">ASESMEN</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Bagaimana proses observasi kognitif dan placement test di Unity School?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <p class="mb-2">
                                    Proses asesmen di Unity School dirancang <strong>ramah anak, bebas stres, dan
                                        berfokus pada potensi unik</strong> siswa, bukan semata-mata ujian eliminatif
                                    kelulusan.
                                </p>
                                <div class="space-y-2 text-on-surface mb-3">
                                    <div><strong>• Early Years (Nursery &amp; Kindergarten):</strong> Berbentuk <em>Play
                                            Observation</em> selama 45 menit bersama psikolog perkembangan anak kami,
                                        mengamati kemampuan motorik halus/kasar, rasa ingin tahu, sosialisasi, dan
                                        kemandirian.</div>
                                    <div><strong>• Primary School (Grades 1-5):</strong> Asesmen diagnostik literasi
                                        membaca sederhana, logika numerasi praktis, serta wawancara ramah anak untuk
                                        memahami minat bakat.</div>
                                    <div><strong>• Middle &amp; High School (Grades 6-12):</strong> Diagnostic test
                                        Cambridge berbasis komputer (English Reading &amp; Math Logic) serta sesi
                                        wawancara aspirasi bersama College Counselor.</div>
                                </div>
                                <div
                                    class="p-3 bg-secondary-fixed/30 rounded-xl text-body-sm font-body-sm text-on-surface flex items-start gap-2">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-secondary mt-0.5">psychology</span>
                                    <span>Sesi wawancara orang tua juga diadakan secara santai untuk menyelaraskan visi
                                        pengasuhan antara rumah dan sekolah.</span>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM 3 (Kurikulum & Legalitas) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="kurikulum"
                            data-keywords="legalitas spk akreditasi a kemendikbud ib world school cambridge id1082 ijazah ptn luar negeri">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold">KURIKULUM</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Apakah kurikulum Unity School diakui Kemendikbudristek RI dan universitas
                                        global?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <p class="mb-3">
                                    <strong>Pasti dan memiliki legalitas resmi penuh.</strong> Unity School
                                    International berstatus Satuan Pendidikan Kerjasama (SPK) yang terakreditasi
                                    <strong>A (Unggul)</strong> oleh BAN-S/M Kemendikbudristek Republik Indonesia.
                                </p>
                                <ul class="list-disc pl-5 space-y-1.5 text-on-surface">
                                    <li><strong>Akreditasi Global:</strong> Resmi terdaftar sebagai <em>Cambridge
                                            International Centre (#ID1082)</em> dan <em>Candidate School IB World
                                            School</em> untuk Diploma Programme.</li>
                                    <li><strong>Dual Pathway Kelulusan:</strong> Lulusan High School mendapatkan
                                        Sertifikat Internasional (Cambridge IGCSE, A-Levels, atau IB Diploma) serta
                                        Ijazah Nasional Indonesia yang disetarakan resmi, sehingga siswa bebas memilih
                                        kuliah di universitas ivy league/top tier dunia maupun Seleksi Nasional PTN
                                        favorit (UI, ITB, UGM, Unair).</li>
                                </ul>
                            </div>
                        </div>
                        <!-- ITEM 4 (Admissions & Sibling Privilege) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="admissions"
                            data-keywords="daftar dua anak sibling privilege diskon saudara family portal akun ganda">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-primary-fixed text-primary font-label-sm text-label-sm font-bold">ADMISSIONS</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Bisakah mendaftarkan dua anak atau lebih sekaligus dan bagaimana ketentuan
                                        Sibling Privilege?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <p class="mb-3">
                                    Ya, seluruh proses dapat dikelola secara praktis dalam <strong>Satu Akun Parent
                                        Portal Unity School</strong>. Ayah/Bunda cukup masuk ke dashboard orang tua dan
                                    memilih opsi <em>"Add Sibling Registration"</em> tanpa harus membuat email terpisah.
                                </p>
                                <div
                                    class="p-3 bg-surface-container-low rounded-xl text-on-surface font-body-sm text-body-sm space-y-1 mb-2">
                                    <div class="font-bold text-primary flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-secondary">workspace_premium</span>
                                        <span>Ketentuan Sibling Privilege Program:</span>
                                    </div>
                                    <div>• Anak Kedua: Diskon <strong>10%</strong> untuk Uang Pendaftaran (Development
                                        Fee) &amp; SPP tahunan.</div>
                                    <div>• Anak Ketiga &amp; Seterusnya: Diskon <strong>15%</strong> untuk Development
                                        Fee &amp; prioritas antrean kuota kelas.</div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM 5 (Transfer & Pindahan) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="admissions"
                            data-keywords="transfer siswa pindahan sekolah nasional tengah tahun semester konversi rapor bridging course">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-surface-container-highest text-primary font-label-sm text-label-sm font-bold">TRANSFER</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Bagaimana prosedur transfer/pindahan siswa dari sekolah nasional di tengah tahun
                                        ajaran?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <p class="mb-3">
                                    Unity School menerima siswa transfer (pindahan) sepanjang tahun ajaran (rolling
                                    admissions) selama kuota kelas pada jenjang yang dituju masih tersedia.
                                </p>
                                <ol class="list-decimal pl-5 space-y-1.5 text-on-surface">
                                    <li>Konsultasikan ketersediaan kuota jenjang kepada Admissions Specialist via
                                        WhatsApp/telepon.</li>
                                    <li>Unggah salinan Rapor 2 semester terakhir dan surat keterangan pindah sekolah
                                        dari sistem DAPODIK Kemendikbud.</li>
                                    <li>Mengikuti placement check-in dan sesi <em>Bridging Course</em> pendampingan
                                        transisi kurikulum selama 2 pekan pertama oleh wali kelas.</li>
                                </ol>
                            </div>
                        </div>
                        <!-- ITEM 6 (Tuition & Beasiswa) -->
                        <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                            data-category="biaya"
                            data-keywords="beasiswa unity merit scholarship youth talent tahfidz quran potongan biaya uang sekolah">
                            <button
                                class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                                onclick="toggleFaq(this)" type="button">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="p-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">BEASISWA</span>
                                    <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                        Apa kriteria beasiswa Unity Global Merit Scholarship &amp; Youth Talent Awards?
                                    </span>
                                </div>
                                <span
                                    class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                                <div class="space-y-3">
                                    <div>
                                        <strong class="text-primary">1. Unity Global Merit Scholarship
                                            (Akademik):</strong>
                                        <p class="mt-0.5 text-on-surface-variant">Diberikan kepada calon siswa Middle
                                            &amp; High School dengan riwayat nilai rata-rata min. 90, hasil tes
                                            diagnostik skor 90th percentile, atau prestasi medali olimpiade
                                            sains/matematika tingkat provinsi/nasional (beasiswa hingga 100% Development
                                            Fee).</p>
                                    </div>
                                    <div>
                                        <strong class="text-primary">2. Youth Talent &amp; Noble Character
                                            Awards:</strong>
                                        <p class="mt-0.5 text-on-surface-variant">Penghargaan apresiasi bakat luar
                                            biasa di bidang kepemimpinan, seni, olahraga internasional, atau sertifikat
                                            Tahfidz Al-Qur'an (minimal 3 Juz untuk Middle School dan 5 Juz untuk High
                                            School).</p>
                                    </div>
                                    <div>
                                        <strong class="text-primary">3. Kuota &amp; Periode Seleksi:</strong>
                                        <p class="mt-0.5 text-on-surface-variant">Asesmen beasiswa dibuka pada
                                            Gelombang Early Bird hingga 30 April 2025 dengan kuota selektif per cohort.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 4: ALUR CEPAT PENYELESAIAN KENDALA PENDAFTARAN -->
            <section class="w-full px-4 lg:px-8 py-6 bg-surface">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-8">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">
                            Panduan Langkah Demi Langkah
                        </span>
                        <h2 class="font-headline-lg text-headline-lg text-primary mt-1">
                            4-Step Troubleshooting &amp; Admissions Guidance
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mt-2">
                            Ikuti langkah praktis berikut untuk memastikan proses pendaftaran putra-putri Anda berjalan
                            lancar hingga tahap konfirmasi tempat.
                        </p>
                    </div>
                    <!-- Step Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-all border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm font-bold">
                                        01
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[26px] text-on-surface-variant">mark_email_read</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Cek Notifikasi Portal
                                    &amp; Email</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Masuk ke Parent Portal Unity School dan cek folder Inbox/Spam email Anda untuk
                                    memastikan konfirmasi registrasi ID dan tautan kelengkapan dokumen telah diterima.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">check_circle</span>
                                <span>Notifikasi Instan Otomatis</span>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="relative bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-all border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="w-10 h-10 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center font-headline-sm text-headline-sm font-bold">
                                        02
                                    </span>
                                    <span class="material-symbols-outlined text-[26px] text-secondary">chat</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Hubungi Konselor
                                    WhatsApp</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Sampaikan kendala teknis, verifikasi dokumen, atau permintaan jadwal asesmen khusus
                                    ke nomor WhatsApp resmi konselor jenjang yang dituju dengan format ID pendaftaran.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">schedule</span>
                                <span>Respon Terjadwal &lt; 15 Menit</span>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="relative bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-all border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="w-10 h-10 rounded-xl bg-tertiary-container text-on-tertiary flex items-center justify-center font-headline-sm text-headline-sm font-bold">
                                        03
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[26px] text-tertiary-container">meeting_room</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Kunjungi Welcome Lounge
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Kunjungi Campus Admissions Welcome Lounge kami di Kampus 3.8 Ha Bintaro/Jakarta
                                    Selatan. Nikmati suasana lobi ber-AC dan layanan pendampingan input berkas langsung
                                    oleh tim kami.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-tertiary-container font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">coffee</span>
                                <span>Free Barista Coffee &amp; Lounge</span>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div
                            class="relative bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-all border border-surface-container-high">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="w-10 h-10 rounded-xl bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-headline-sm text-headline-sm font-bold">
                                        04
                                    </span>
                                    <span
                                        class="material-symbols-outlined text-[26px] text-primary">verified_user</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Finalisasi &amp; Offer
                                    Letter</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Setelah asesmen kesiapan diselesaikan dengan sukses, Surat Penawaran Resmi (Letter
                                    of Acceptance / Offer Letter) serta rincian orientasi siswa baru akan diterbitkan
                                    secara digital.
                                </p>
                            </div>
                            <div
                                class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[16px]">how_to_reg</span>
                                <span>Penerimaan Resmi Sah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 5: PETA LOKASI KAMPUS & PANDUAN KUNJUNGAN LOKET FISIK -->
            <section class="w-full px-4 lg:px-8 py-8 bg-surface-container-low" id="welcome-pavilion">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-8">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">
                            Campus Visit &amp; Experience Tour
                        </span>
                        <h2 class="font-headline-lg text-headline-lg text-primary mt-1">
                            Admissions Center &amp; Welcome Pavilion
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mt-2">
                            Kami mengundang Ayah/Bunda dan Ananda untuk merasakan atmosfer belajar berstandar
                            internasional, melihat fasilitas laboratorium STEAM, perpustakaan modern, serta fasilitas
                            olahraga terintegrasi kami.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Kolom Kiri: Detail Pelayanan Loket -->
                        <div
                            class="lg:col-span-6 bg-surface-container-lowest p-6 sm:p-8 rounded-3xl shadow-sm space-y-6 border border-surface-container-high">
                            <div class="flex items-start gap-4">
                                <div class="p-3 rounded-2xl bg-primary text-on-primary">
                                    <span class="material-symbols-outlined text-[28px]">domain</span>
                                </div>
                                <div>
                                    <span
                                        class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Lokasi
                                        Kampus Utama</span>
                                    <h3 class="font-headline-sm text-headline-sm text-primary mt-1">Admissions Center
                                        &amp; Welcome Pavilion</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                        Unity International Campus, Jl. Golden Archway No. 88, Golden Parkway District,
                                        Jakarta 12560 (Kawasan Bintaro - Jakarta Selatan).
                                    </p>
                                </div>
                            </div>
                            <!-- Jam Operasional -->
                            <div class="p-4 rounded-2xl bg-surface-container-low space-y-3">
                                <div
                                    class="font-label-md text-label-md font-bold text-primary flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px] text-secondary">schedule</span>
                                    <span>Jam Layanan Admissions Welcome Desk:</span>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                                    <div class="flex flex-col p-3 rounded-xl bg-surface-container-lowest">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Senin -
                                            Jumat</span>
                                        <span class="font-headline-sm text-[16px] text-on-surface font-bold">08.00 -
                                            16.00 WIB</span>
                                        <span class="font-body-sm text-body-sm text-outline">Konsultasi lengkap &amp;
                                            campus tour</span>
                                    </div>
                                    <div class="flex flex-col p-3 rounded-xl bg-surface-container-lowest">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Sabtu
                                            (Weekend Open Desk)</span>
                                        <span class="font-headline-sm text-[16px] text-on-surface font-bold">08.00 -
                                            13.00 WIB</span>
                                        <span class="font-body-sm text-body-sm text-outline">By appointment &amp;
                                            family tour</span>
                                    </div>
                                </div>
                                <div class="font-body-sm text-body-sm text-outline flex items-center gap-1.5 pt-1">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary">event_available</span>
                                    <span>Hari Minggu &amp; Libur Nasional: Kunjungan via Special Family
                                        Appointment</span>
                                </div>
                            </div>
                            <!-- Fasilitas Ruang Tunggu -->
                            <div>
                                <span class="font-label-md text-label-md font-bold text-primary block mb-3">Fasilitas
                                    Parent Welcome Pavilion:</span>
                                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                                    <div
                                        class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-tertiary-container">wifi</span>
                                        <span>Parent Lounge &amp; Fast Wi-Fi</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-tertiary-container">local_cafe</span>
                                        <span>Free Gourmet Barista Coffee/Tea Corner</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-tertiary-container">toys</span>
                                        <span>Kids Discovery &amp; Play Zone</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-tertiary-container">directions_car</span>
                                        <span>Shuttle Buggy Tour Kampus 3.8 Ha</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row items-center gap-3 pt-2">
                                <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-semibold hover:bg-primary-container transition-colors shadow-sm"
                                    href="https://maps.google.com" target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">directions</span>
                                    <span>Petunjuk Arah Google Maps</span>
                                </a>
                                <button
                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-semibold hover:bg-secondary-fixed-dim transition-colors shadow-sm"
                                    onclick="document.getElementById('inquiry-form-section').scrollIntoView({ behavior: 'smooth' })"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                    <span>Jadwalkan Private Campus Tour</span>
                                </button>
                            </div>
                        </div>
                        <!-- Kolom Kanan: Peta Mockup & Foto Suasana -->
                        <div class="lg:col-span-6 flex flex-col gap-4">
                            <!-- Static/Dynamic Map Container -->
                            <div class="w-full h-80 rounded-3xl bg-cover bg-center shadow-sm relative overflow-hidden flex flex-col justify-end p-6 border border-surface-container-high"
                                data-alt="Modern international school campus aerial architecture with lush greenery, olympic swimming pool, football pitch, clean pedestrian paths, and grand administrative building."
                                data-location="Unity International Campus, Jl. Golden Archway No. 88, Jakarta"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDHCIGtZhsbBZVAbFzlp4pDb6TRVNxn2yanwQlCTGK-rNNeEIM1nZ8IWAWU_dhEhcHnUPGkUR9XYua7gTVlg1pi2_fEit7UE1wsDNfAmuRaz-f4ShXSS-oCr6er1NGvX68IRhFbEQoCZii0_gbtCK13HmwDFwCWCIbuAefW0GsAu4tjPOjnCpQeZVZEUg_yHBfAhw9t7BvqBDd6e446JJcklxI3Z6sK-mhM7FXm837luuDXOF446d4j')">
                                <!-- Dark gradient overlay for text legibility -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent">
                                </div>
                                <!-- Overlay Info Chip -->
                                <div
                                    class="relative z-10 bg-surface-container-lowest/95 backdrop-blur-md p-4 rounded-2xl shadow-md flex items-center justify-between gap-4 border border-surface-container-high">
                                    <div class="flex items-center gap-3">
                                        <div class="w-3 h-3 rounded-full bg-secondary-container animate-pulse"></div>
                                        <div>
                                            <div class="font-label-md text-label-md font-bold text-primary">Unity
                                                Admissions Welcome Pavilion</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Lobi Utama
                                                &amp; Area Drop-off Mobil Keluarga</div>
                                        </div>
                                    </div>
                                    <a class="px-3 py-1.5 rounded-lg bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors flex items-center gap-1"
                                        href="https://maps.google.com" target="_blank">
                                        <span>Navigasi</span>
                                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Secondary Image: Suasana Kampus & Lab -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="w-full h-44 rounded-2xl bg-cover bg-center shadow-sm relative overflow-hidden border border-surface-container-high"
                                    data-alt="Warm welcoming lounge in an international school admissions hall with counselors and happy parents."
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBXVoeV_tIL7gFuCNjR3W7tWbR8DNAKqveH2Q-PuD-qCnXmcY5Gh-ik_xzmJ640qcHptO3ARDm1a2hvKtyNiuO5CmNVCIrraidFM13dq4O1yI0p9mV8taRpZGEwZA_HHjTm5_bg4tSc4GjswWXvI_0sOATj3ydqh51a8rdJlmgCcgwr2HhsZUqJe9pbEPwQKD2TnGY-RgIlSz5WD2eIHC9kwLsh_zgnTThaXe8hwJbCnIJVyQflGdjp')">
                                    <div
                                        class="absolute bottom-2 left-2 px-2.5 py-1 rounded-lg bg-inverse-surface/85 text-inverse-on-surface text-label-sm font-label-sm">
                                        Parent Welcome Lounge
                                    </div>
                                </div>
                                <div class="w-full h-44 rounded-2xl bg-cover bg-center shadow-sm relative overflow-hidden border border-surface-container-high"
                                    data-alt="Modern interactive classroom and library with students engaged in collaborative group learning."
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBirx_DO9Ay8_HtEcZ8rkyWOy46cxeAEdBrs6HiUroSNKaRoZrU-8SQCIVgeT_KD5gjC2j6tzVKxo5uq4wCNjblZ31DA4QY9G5ztdACjbE2bAgfMnebbNeUtjejgt7nh6a8Eyl-SFPMTK9CElEhgJBiKXn9lJIEAPl6FWo2NW5a-29ockVTsoZN2tUW4WGhFHhRXtuf5_B4wwYWrJRV5rOFybluel97-h8_FN3vXtqZlKHer6kdv9og')">
                                    <div
                                        class="absolute bottom-2 left-2 px-2.5 py-1 rounded-lg bg-inverse-surface/85 text-inverse-on-surface text-label-sm font-label-sm">
                                        Collaborative STEAM Labs
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 6: FORMULIR TIKET PENGADUAN & PESAN LANGSUNG -->
            <section class="w-full px-4 lg:px-8 py-8 bg-surface" id="inquiry-form-section">
                <div class="max-w-4xl mx-auto">
                    <div
                        class="bg-surface-container-lowest p-6 sm:p-10 rounded-3xl shadow-sm border border-surface-container-high">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                            <div>
                                <div
                                    class="inline-flex items-center gap-1 text-secondary font-label-sm text-label-sm uppercase tracking-wider font-bold mb-1">
                                    <span class="material-symbols-outlined text-[16px]">contact_support</span>
                                    <span>Direct Admissions Inquiry</span>
                                </div>
                                <h2 class="font-headline-lg text-headline-lg text-primary">
                                    Kirim Pertanyaan / Jadwalkan Konsultasi
                                </h2>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                    Tim Admissions Counselor kami akan menghubungi Ayah/Bunda melalui WhatsApp atau
                                    email dalam kurun waktu 1x24 jam kerja untuk memberikan konsultasi mendalam.
                                </p>
                            </div>
                            <div
                                class="hidden sm:flex w-14 h-14 rounded-2xl bg-surface-container-high items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[32px]">send</span>
                            </div>
                        </div>
                        <form class="space-y-6" id="ppdb-inquiry-form" onsubmit="handleInquirySubmit(event)">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Nama Wali Murid -->
                                <div>
                                    <label
                                        class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                        Nama Lengkap Orang Tua / Wali <span class="text-error">*</span>
                                    </label>
                                    <input
                                        class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                        placeholder="Contoh: Ibu Stephanie Gunawan" required="" type="text" />
                                </div>
                                <!-- No WhatsApp -->
                                <div>
                                    <label
                                        class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                        Nomor WhatsApp Aktif <span class="text-error">*</span>
                                    </label>
                                    <input
                                        class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                        placeholder="Contoh: 081234567890" required="" type="tel" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Parent Email -->
                                <div>
                                    <label
                                        class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                        Alamat Email Orang Tua <span class="text-error">*</span>
                                    </label>
                                    <input
                                        class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                        placeholder="nama@domain.com" required="" type="email" />
                                </div>
                                <!-- Child Target Tier -->
                                <div>
                                    <label
                                        class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                        Jenjang Target Calon Siswa <span class="text-error">*</span>
                                    </label>
                                    <select
                                        class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container transition-colors"
                                        required="">
                                        <option disabled="" selected="" value="">-- Pilih Jenjang Unity
                                            School --</option>
                                        <option value="early-years">Early Years (Ages 3 - 5 | Reggio Emilia &amp; EYFS)
                                        </option>
                                        <option value="primary">Primary School (Grades 1 - 5 | Cambridge Primary)
                                        </option>
                                        <option value="middle">Middle School (Grades 6 - 8 | Cambridge Lower Secondary)
                                        </option>
                                        <option value="high">Senior High School (Grades 9 - 12 | IGCSE &amp; IB DP)
                                        </option>
                                        <option value="general">Bursar / Konsultasi Beasiswa Merit &amp; Finansial
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- Topik Kendala -->
                            <div>
                                <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                    Kategori Informasi yang Dibutuhkan <span class="text-error">*</span>
                                </label>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                        <input checked="" class="accent-primary" name="topic" type="radio"
                                            value="Pendaftaran &amp; Portal" />
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">Admissions
                                            Online</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                        <input class="accent-primary" name="topic" type="radio"
                                            value="Placement Test &amp; EAL" />
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">Placement
                                            &amp; EAL</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                        <input class="accent-primary" name="topic" type="radio"
                                            value="Private Campus Tour" />
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">Private
                                            Campus Tour</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                        <input class="accent-primary" name="topic" type="radio"
                                            value="Tuition Fee &amp; Beasiswa" />
                                        <span class="font-body-sm text-body-sm text-on-surface font-medium">Tuition
                                            &amp; Beasiswa</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Pesan atau Pertanyaan Detail -->
                            <div>
                                <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                    Detail Pertanyaan atau Permintaan Jadwal Tour <span class="text-error">*</span>
                                </label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors resize-none"
                                    placeholder="Tuliskan latar belakang pendidikan ananda saat ini, rencana jadwal campus visit yang diinginkan, atau pertanyaan spesifik seputar kurikulum Cambridge &amp; IB..."
                                    required="" rows="4"></textarea>
                            </div>
                            <!-- Submit Button & Disclaimer -->
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                                <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-tertiary-container">lock</span>
                                    <span>Data keluarga Anda aman dan dilindungi sesuai standar kerahasiaan institusi
                                        internasional.</span>
                                </div>
                                <button
                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-primary-container transition-all shadow-md"
                                    type="submit">
                                    <span class="material-symbols-outlined text-[18px]">send</span>
                                    <span>Kirim Pertanyaan ke Admissions Team</span>
                                </button>
                            </div>
                            <!-- Status Alert Callback -->
                            <div class="hidden p-4 rounded-xl bg-tertiary-container/15 text-tertiary flex items-center gap-3"
                                id="form-success-message">
                                <span class="material-symbols-outlined text-[24px]">task_alt</span>
                                <div class="font-body-md text-body-md">
                                    <strong>Pertanyaan Berhasil Terkirim!</strong> Nomor referensi Anda:
                                    <code>#UNITY-88219</code>. Academic counselor kami akan segera menyapa Anda via
                                    WhatsApp dan email.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
                <aside class="fixed bottom-6 right-6 z-50 flex items-end flex-col gap-2 group">
        <div
            class="hidden group-hover:flex flex-col bg-surface-container-lowest p-3 rounded-xl shadow-[0_20px_30px_-10px_rgba(15,23,42,0.15)] max-w-xs transition-all border border-surface-container-high">
            <span class="font-label-md text-label-md text-primary font-bold mb-1">Unity Admissions Support</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Hubungi konselor akademik resmi per
                jenjang:</p>
            <div class="grid grid-cols-2 gap-2"><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345801" target="_blank">Early Years</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345802" target="_blank">Primary</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345803" target="_blank">Middle School</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345804" target="_blank">High School</a></div>
        </div><button
            class="flex items-center gap-2 bg-tertiary-container text-on-tertiary px-4 py-3 rounded-full shadow-[0_10px_25px_-5px_rgba(15,76,92,0.25)] hover:bg-tertiary transition-all"
            type="button"><span class="material-symbols-outlined text-[22px]">chat</span><span
                class="font-label-md text-label-md hidden md:inline">Admissions WhatsApp</span></button>
    </aside>
@endsection

@push('scripts')
            <!-- Interactive JavaScript logic for Search, Accordion, and Feedback -->
            <script>
                function toggleFaq(btnElement) {
                    const content = btnElement.nextElementSibling;
                    const icon = btnElement.querySelector('.faq-icon');
                    const isExpanded = !content.classList.contains('hidden');

                    if (isExpanded) {
                        content.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    } else {
                        content.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    }
                }

                function filterCategory(cat) {
                    // Update Buttons
                    document.querySelectorAll('.category-filter-btn').forEach(btn => {
                        if (btn.getAttribute('data-filter') === cat) {
                            btn.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');
                            btn.classList.remove('bg-surface-container-high', 'text-on-surface');
                        } else {
                            btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                            btn.classList.add('bg-surface-container-high', 'text-on-surface');
                        }
                    });

                    // Filter Cards
                    const items = document.querySelectorAll('.faq-item');
                    items.forEach(item => {
                        const itemCategory = item.getAttribute('data-category');
                        if (cat === 'all' || itemCategory === cat) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                }

                function filterFaqFromInput() {
                    const query = document.getElementById('faq-search-input').value.toLowerCase().trim();
                    const items = document.querySelectorAll('.faq-item');

                    items.forEach(item => {
                        const keywords = (item.getAttribute('data-keywords') || '').toLowerCase();
                        const textContent = item.innerText.toLowerCase();

                        if (query === '' || keywords.includes(query) || textContent.includes(query)) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });

                    // Reset category buttons
                    document.querySelectorAll('.category-filter-btn').forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                        btn.classList.add('bg-surface-container-high', 'text-on-surface');
                    });
                }

                document.getElementById('faq-search-input')?.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        filterFaqFromInput();
                    }
                });

                function handleInquirySubmit(e) {
                    e.preventDefault();
                    const alertBox = document.getElementById('form-success-message');
                    alertBox.classList.remove('hidden');
                    e.target.reset();
                    setTimeout(() => {
                        alertBox.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }, 100);
                }
            </script>
@endpush
