@extends('layouts.app')
@section('title','Unity School | Academic Program')

@section('content')
            <!-- Top Navigation Sub-bar / Breadcrumb & Unit Switcher -->
            {{-- <section class="w-full bg-surface-container-low shadow-[0_1px_4px_rgba(0,0,0,0.03)]">
                <div class="max-w-7xl mx-auto px-4 lg:px-8 py-4">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <!-- Breadcrumb -->
                        <nav class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md">
                            <a class="hover:text-primary transition-colors" href="#">Beranda</a>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <a class="hover:text-primary transition-colors" href="#">Unit Pendidikan</a>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="text-primary font-bold">Senior High School (Grades 9-12)</span>
                        </nav>
                        <!-- Quick CTAs -->
                        <div class="flex items-center gap-3">
                            <a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-highest text-primary font-label-md text-label-md hover:bg-surface-container transition-colors"
                                href="#biaya">
                                <span class="material-symbols-outlined text-[16px]">file_download</span>
                                <span>Unduh Prospektus PDF</span>
                            </a>
                            <a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md hover:bg-primary transition-colors shadow-sm"
                                href="#jadwal-tur">
                                <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                <span>Jadwalkan Campus Tour</span>
                            </a>
                        </div>
                    </div>
                    <!-- Unit Switcher Tabs -->
                    <div class="mt-4 pt-3 flex items-center gap-2 overflow-x-auto pb-1">
                        <a class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-md text-label-md hover:text-primary hover:bg-surface-container transition-colors whitespace-nowrap"
                            href="#">
                            Early Years (Ages 3-5)
                        </a>
                        <a class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-md text-label-md hover:text-primary hover:bg-surface-container transition-colors whitespace-nowrap"
                            href="#">
                            Primary School (Grades 1-5)
                        </a>
                        <a class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-md text-label-md hover:text-primary hover:bg-surface-container transition-colors whitespace-nowrap"
                            href="#">
                            Middle School (Grades 6-8)
                        </a>
                        <a class="px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm flex items-center gap-2 whitespace-nowrap"
                            href="#">
                            <span>Senior High School (Grades 9-12)</span>
                            <span
                                class="px-1.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">Aktif</span>
                        </a>
                    </div>
                </div>
            </section> --}}
            <!-- Hero & Executive Overview -->
            <section class="w-full py-space-xl lg:py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <!-- School Identity Banner -->
                    {{-- <div
                        class="flex flex-wrap items-center justify-between gap-4 mb-8 bg-surface-container-lowest p-6 rounded-2xl shadow-sm">
                        <div class="flex items-center gap-4">
                            <img alt="Unity School International Admissions" class="h-10 w-auto object-contain"
                                src="https://lh3.googleusercontent.com/aida/AEtjO1XxcdRx0T1hBLm-7-sUoS8JzA9oUSbxQCxtz9iYmGNxrZlJEKSb8dcWPLV3qSI5tfJ4J5z8OZ7lFFv5-jG7uLSoNSSsYVaLedzvkwtZ___j7N8dvYleblGG4mplaMiaw96W9HolH7rzOLDNkRHGruP-f28lYLyjemvrvVALmrC4vlrNfiSicSBDYNIiExBRas7gBeQhpxgsiq3aHhY16L9ins4CYVR9TdjCJ2hji5tpkTmpfzhgFfqqSUs" />
                            <div class="h-8 w-px bg-surface-container-highest hidden sm:block"></div>
                            <div>
                                <p class="font-headline-sm text-headline-sm text-primary">Senior High School Campus</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Cambridge Assessment
                                    International Education #ID1082 &amp; IB World School Candidate</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-2">
                            <span
                                class="px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm flex items-center gap-1 font-bold">
                                <span class="material-symbols-outlined text-[14px]">verified</span> SPK Terakreditasi A
                                (Unggul)
                            </span>
                            <span
                                class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
                                Cambridge IGCSE &amp; A-Levels
                            </span>
                            <span
                                class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">
                                IB DP Candidate
                            </span>
                            <span
                                class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">
                                College Board Center #672109
                            </span>
                        </div>
                    </div> --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Main Lead (Col 7) -->
                        <div class="lg:col-span-7 flex flex-col gap-6">
                            <div
                                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/20 text-secondary w-fit">
                                <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                                <span class="font-label-md text-label-md font-bold">Penerimaan Tahun Ajaran 2025/2026
                                    Dibuka</span>
                            </div>
                            <h1 class="font-display text-headline-xl lg:text-display text-primary tracking-tight">
                                Membina Pemimpin Masa Depan &amp; Cendekiawan Global Kelas Dunia
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                Mengintegrasikan kurikulum Cambridge IGCSE, Cambridge International AS &amp; A-Levels,
                                serta International Baccalaureate Diploma Programme (IB DP Candidate) dengan pembinaan
                                karakter berintegritas tinggi, kepemimpinan adaptif, dan pendampingan 1-on-1 intensif
                                menuju World Top 50 Universities.
                            </p>
                            <!-- Quota Alert Pill -->
                            <div
                                class="p-4 rounded-xl bg-surface-container-high flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-[24px] text-secondary">info</span>
                                    <div>
                                        <p class="font-label-md text-label-md text-primary font-bold">Gelombang Early
                                            Bird 1: Sisa 12 Kursi</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Khusus Grade 9
                                            Intake &amp; Transfer Grade 10 Semester Ganjil 2025.</p>
                                    </div>
                                </div>
                                <a class="px-4 py-2 rounded-lg bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors whitespace-nowrap"
                                    href="#pendaftaran">
                                    Daftar Seleksi
                                </a>
                            </div>
                            <!-- Key Metrics Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                                <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                                    <span class="font-display text-headline-lg text-primary">100%</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Diterima di
                                        Kampus Global &amp; PTN Unggulan</span>
                                </div>
                                <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                                    <span class="font-display text-headline-lg text-primary">1450+</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Rata-rata
                                        Skor SAT / 8.0 IELTS Cohort</span>
                                </div>
                                <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                                    <span class="font-display text-headline-lg text-primary">1:10</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Rasio Mentor
                                        Akademik per Siswa</span>
                                </div>
                                <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                                    <span class="font-display text-headline-lg text-primary">15+</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Advanced
                                        STEAM &amp; MUN Research Lab</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side: Head of High School Message Card & Media (Col 5) -->
                        <div class="lg:col-span-5 flex flex-col gap-4">
                            <div class="relative rounded-2xl overflow-hidden bg-surface-container shadow-md">
                                <img class="w-full h-64 object-cover"
                                    data-alt="High school international classroom at Unity School with diverse students engaged in collaborative scientific discussion alongside modern laboratory equipment, warm sunlight streaming through floor-to-ceiling windows, teal and amber school accents"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmA094slgQMx6HnOAN3AUYEveECEsqZzOLWRGaUtsLZgNumJaw7XLAhUpegDXyn9WnRjaFhphTwpTiJM9DxsmLddQFKPxyp3pIL-fTs0vRiGzZQxL--doT9ez8xmHcqJo5DXc6Klyf8Vxrnqyn2erQkjtJTd8ZPO0gTI1tPCxFzaCiWZRN3RECcLn1QBnZvKul-fVGcXS3FXcxMad0hlpl8LiDHI46NrVpx_jXvLgou8A6Ej5j5N-7" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary/90 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                        Kampus Bintaro Parkway
                                    </span>
                                </div>
                            </div>
                            <!-- Principal Card -->
                            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                                <div class="flex items-center gap-4">
                                    <img class="w-16 h-16 rounded-full object-cover shadow-sm"
                                        data-alt="Professional portrait of Mr. Jonathan Miller, Head of Senior High School, wearing formal navy academic suit, smiling warmly with modern international school library in background"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIk-PXTocQvAmZw3xTLwhg-BXLzMZDDzwWwA82nmhFl4kcY0Jhn207lB4tUyLeRTSlug-GCJKQO-4TTXE8BpFxVN_K0M472TQINKLAs6JwRZBzAa4KYHq3P2cu1ZQ--SI0sRJwBclk1axBGyZTpOiOtRylnBLzo5nOv9jXuVUfW8OcGNqouNjQYxO5-61jWeklS_JFDNLA_-rJc_zUtqQwXLjtRS8YqRgrj4nVOsWmzChbOnG0Ij2T" />
                                    <div class="flex flex-col">
                                        <span class="font-headline-sm text-headline-sm text-primary">Mr. Jonathan
                                            Miller, M.Sc.</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Head of
                                            Senior High &amp; University Placement (Alumnus Univ. of Oxford)</span>
                                        <span
                                            class="mt-1 inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary font-bold">
                                            <span class="material-symbols-outlined text-[14px]">verified</span>
                                            Terverifikasi Cambridge Senior Lead
                                        </span>
                                    </div>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic leading-relaxed">
                                    "Di Unity Senior High, kami tidak hanya menyiapkan peserta didik untuk lulus ujian
                                    dengan nilai tertinggi, melainkan mendidik mereka menjadi inovator berkarakter kuat,
                                    beretika moral mendalam, dan memiliki kesiapan mental memimpin di universitas
                                    terbaik dunia."
                                </p>
                                <div class="pt-2 flex items-center justify-between">
                                    <div class="flex items-center gap-1 text-secondary-container">
                                        <span class="material-symbols-outlined text-[18px]">star</span>
                                        <span class="material-symbols-outlined text-[18px]">star</span>
                                        <span class="material-symbols-outlined text-[18px]">star</span>
                                        <span class="material-symbols-outlined text-[18px]">star</span>
                                        <span class="material-symbols-outlined text-[18px]">star</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Senior High
                                        Leadership Board</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3 Academic Pillars -->
            <section class="w-full py-space-lg bg-surface-container-low">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto mb-12">
                        <span
                            class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Keunggulan
                            Pendidikan</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Tiga Pilar Utama Senior High
                            School Unity</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            Kerangka komprehensif yang memadukan kedalaman analitis, bimbingan masa depan personal, dan
                            penumbuhan karakter kepemimpinan dunia nyata.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Pillar 1 -->
                        <div
                            class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary-container text-on-primary flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-[26px]">school</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pilar
                                    01</span>
                                <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">Global Academic
                                    Rigor &amp; Dual Pathway</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Fondasi Cambridge IGCSE terpadu di Grades 9-10 dilanjutkan dengan fleksibilitas
                                    memilih Cambridge International A-Levels atau IB Diploma Programme di Grades 11-12.
                                    Didukung 100% instruktur tersertifikasi internasional.
                                </p>
                            </div>
                            <ul
                                class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Standar asesmen Cambridge CAIE resmi</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Kurikulum bilingual &amp; penguasaan multi-bahasa</li>
                            </ul>
                        </div>
                        <!-- Pillar 2 -->
                        <div
                            class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-[26px]">account_balance</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pilar
                                    02</span>
                                <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">1-on-1 College
                                    Counseling &amp; World Top 50</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Program bimbingan masuk perguruan tinggi sejak awal Grade 9: pemetaan jurusan,
                                    persiapan intensif SAT &amp; IELTS, penulisan Personal Statement &amp; College
                                    Essay, simulasi wawancara Ivy League, Russell Group, hingga PTN Jalur Mandiri.
                                </p>
                            </div>
                            <ul
                                class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Jaringan kemitraan 80+ universitas luar negeri</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Akses platform BridgeU &amp; Naviance premium</li>
                            </ul>
                        </div>
                        <!-- Pillar 3 -->
                        <div
                            class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-xl bg-tertiary-container text-on-tertiary flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-[26px]">biotech</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pilar
                                    03</span>
                                <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">STEAM Labs,
                                    Research &amp; Leadership</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Pengembangan proyek Capstone nyata, keikutsertaan Model United Nations (MUN),
                                    kompetisi sains internasional, robotics &amp; AI development, serta program magang
                                    industri dan pengabdian masyarakat (Community Action Service).
                                </p>
                            </div>
                            <ul
                                class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Bimbingan publikasi jurnal ilmiah pra-kuliah</li>
                                <li class="flex items-center gap-2"><span
                                        class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                                    Inkubasi proyek kepemimpinan sosial siswa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dual Academic Pathway Curriculum & Electives -->
            <section class="w-full py-space-lg lg:py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                        <div>
                            <span class="font-label-md text-label-md text-secondary font-bold uppercase">Struktur
                                Pembelajaran</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Dual Academic Pathway:
                                Fleksibilitas untuk Target Studi Global</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                            Siswa dapat memilih jalur kualifikasi yang paling selaras dengan rencana karier,
                            karakteristik belajar, serta negara tujuan universitas mereka.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                        <!-- Track A: Cambridge A-Levels -->
                        <div
                            class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold">Track
                                        A • Specialization Focus</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant font-medium">Grades
                                        11 - 12</span>
                                </div>
                                <h3 class="font-headline-lg text-headline-lg text-primary mb-2">Cambridge International
                                    AS &amp; A-Levels</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                                    Dirancang bagi siswa yang menghendaki penguasaan mendalam (in-depth mastery) pada 3
                                    hingga 4 subjek spesifik. Sangat ideal untuk mendaftar langsung ke jurusan
                                    Kedokteran, Teknik, Bisnis, atau Hukum di Inggris (UK), Singapura, Australia, dan
                                    Indonesia.
                                </p>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-label-md text-label-md text-primary font-bold mb-2">Pilihan Mata
                                            Pelajaran Unggulan:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Pure
                                                Mathematics &amp; Statistics</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Further
                                                Mathematics</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Physics
                                                Advanced</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Chemistry
                                                &amp; Biology</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Economics
                                                &amp; Accounting</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Computer
                                                Science (Python/SQL)</span>
                                            <span
                                                class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">English
                                                Language &amp; Literature</span>
                                        </div>
                                    </div>
                                    <div class="p-4 rounded-xl bg-surface-container-low">
                                        <p class="font-label-sm text-label-sm text-primary font-bold">Kelebihan Jalur
                                            A-Levels di Unity:</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                            Kredit universitas (AP Credit equivalency) di universitas AS dan jalur cepat
                                            program akselerasi sarjana 3 tahun di universitas negara persemakmuran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Track B: IB Diploma Programme -->
                        <div
                            class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">Track
                                        B • Holistic Breadth</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant font-medium">Grades
                                        11 - 12 (Candidate)</span>
                                </div>
                                <h3 class="font-headline-lg text-headline-lg text-primary mb-2">IB Diploma Programme
                                    (DP Candidate)</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                                    Program interdisipliner menyeluruh dengan 6 kelompok mata pelajaran (Higher Level
                                    &amp; Standard Level), ditambah 3 pilar wajib DP Core: Theory of Knowledge (TOK),
                                    Extended Essay (4.000 kata riset mandiri), dan Creativity, Activity, Service (CAS).
                                </p>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-label-md text-label-md text-primary font-bold mb-2">Struktur DP
                                            Core &amp; Subjek:</p>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                            <div
                                                class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                                <span
                                                    class="material-symbols-outlined text-[18px] text-secondary">psychology</span>
                                                <div>
                                                    <p class="font-label-sm text-label-sm font-bold text-primary">TOK
                                                        (Theory of Knowledge)</p>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                                        Filsafat berpikir kritis</p>
                                                </div>
                                            </div>
                                            <div
                                                class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                                <span
                                                    class="material-symbols-outlined text-[18px] text-secondary">history_edu</span>
                                                <div>
                                                    <p class="font-label-sm text-label-sm font-bold text-primary">
                                                        Extended Essay (EE)</p>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Riset
                                                        akademik mendalam</p>
                                                </div>
                                            </div>
                                            <div
                                                class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                                <span
                                                    class="material-symbols-outlined text-[18px] text-secondary">volunteer_activism</span>
                                                <div>
                                                    <p class="font-label-sm text-label-sm font-bold text-primary">CAS
                                                        Experience</p>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                                        Kreativitas, aksi &amp; sosial</p>
                                                </div>
                                            </div>
                                            <div
                                                class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                                <span
                                                    class="material-symbols-outlined text-[18px] text-secondary">public</span>
                                                <div>
                                                    <p class="font-label-sm text-label-sm font-bold text-primary">6
                                                        Subject Groups</p>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                                        Bahasa, Sains, Humaniora, Matematika</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 rounded-xl bg-surface-container-low">
                                        <p class="font-label-sm text-label-sm text-primary font-bold">Karakteristik
                                            Lulusan IB DP:</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                            Kemampuan sintesis wawasan lintas disiplin, manajemen waktu setara mahasiswa
                                            tahun kedua, serta profil pembelajar yang sangat dihargai oleh universitas
                                            Ivy League.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- High School Daily Routine & Schedule Timeline -->
                    <div class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                            <div>
                                <h3 class="font-headline-md text-headline-md text-primary">Rutinitas Harian &amp; Ritme
                                    Belajar Siswa Senior High</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">07.45 - 15.30 WIB
                                    (Disertai sesi mentoring opsional hingga 16.45 WIB)</p>
                            </div>
                            <span
                                class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold w-fit">
                                Full-Day International Schedule
                            </span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">07.45 - 08.15
                                    WIB</span>
                                <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Morning Assembly &amp;
                                    Advisory</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Doa bersama, character
                                    reflection, review target akademik mingguan bersama konselor kelas.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">08.15 - 12.00
                                    WIB</span>
                                <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Advanced Academic Blocks
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sesi kuliah intensif teori
                                    sains, matematika analitis, simulasi lab dan diskusi literatur mendalam.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">12.00 - 13.00
                                    WIB</span>
                                <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Lunch &amp; Social
                                    Interaction</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Makan siang bernutrisi di
                                    Dining Hall, istirahat beribadah, dan rekreasi ruang terbuka hijau.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">13.00 - 15.30
                                    WIB</span>
                                <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">College Prep &amp;
                                    Co-Curricular</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Praktikum sains lab,
                                    workshop SAT/IELTS, latihan MUN, robotika, atau persiapan lomba internasional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Admissions Requirements & Quota Allocation -->
            <section class="w-full py-space-sm bg-surface-container-low" id="pendaftaran">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Quota Progress & Eligibility (Col 7) -->
                        <div class="lg:col-span-7 flex flex-col gap-6">
                            <div>
                                <span class="font-label-md text-label-md text-secondary font-bold uppercase">Alokasi
                                    &amp; Kriteria</span>
                                <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Persyaratan Penerimaan
                                    &amp; Monitoring Kuota</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                                    Penerimaan siswa baru dilakukan secara selektif dengan mempertimbangkan kesiapan
                                    akademik, integritas etika, dan potensi kontribusi sosial siswa.
                                </p>
                            </div>
                            <!-- Quota Meters -->
                            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm space-y-6">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-label-lg text-label-lg text-primary font-bold">Kuota Grade 9
                                            Baru (AY 2025/2026)</span>
                                        <span class="font-label-sm text-label-sm text-secondary font-bold">48 / 60
                                            Kursi (80% Terisi)</span>
                                    </div>
                                    <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden">
                                        <div class="h-full bg-primary rounded-full" style="width: 80%;"></div>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Sisa 12 kursi
                                        gelombang Early Bird dengan keringanan Biaya Pengembangan.</p>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-label-lg text-label-lg text-primary font-bold">Transfer Grade
                                            10 / Grade 11</span>
                                        <span class="font-label-sm text-label-sm text-secondary font-bold">12 / 20
                                            Kursi (60% Terisi)</span>
                                    </div>
                                    <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden">
                                        <div class="h-full bg-secondary-container rounded-full" style="width: 60%;">
                                        </div>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Wajib melalui
                                        penyelarasan silabus dan tes diagnostik mata pelajaran prasyarat.</p>
                                </div>
                            </div>
                            <!-- 3 Admission Pathways -->
                            <div class="space-y-3">
                                <h3 class="font-headline-sm text-headline-sm text-primary">3 Jalur Penerimaan Siswa
                                    Baru:</h3>
                                <div
                                    class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                                    <div class="p-2.5 rounded-lg bg-primary-container text-on-primary">
                                        <span class="material-symbols-outlined text-[20px]">military_tech</span>
                                    </div>
                                    <div>
                                        <p class="font-label-lg text-label-lg text-primary font-bold">1. Unity Global
                                            Merit &amp; Academic Excellence</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Beasiswa parsial hingga penuh (100% DPP) bagi calon siswa dengan rekam jejak
                                            juara olimpiade sains/matematika nasional-internasional atau nilai CAT4 luar
                                            biasa.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                                    <div class="p-2.5 rounded-lg bg-surface-container-high text-primary">
                                        <span class="material-symbols-outlined text-[20px]">route</span>
                                    </div>
                                    <div>
                                        <p class="font-label-lg text-label-lg text-primary font-bold">2. Continuum
                                            Pathway (Lulusan Unity Middle School)</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Jalur langsung bebas tes diagnostik umum dan insentif loyalitas bagi lulusan
                                            internal Grade 8 Unity School International.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                                    <div class="p-2.5 rounded-lg bg-surface-container-high text-primary">
                                        <span class="material-symbols-outlined text-[20px]">flight_takeoff</span>
                                    </div>
                                    <div>
                                        <p class="font-label-lg text-label-lg text-primary font-bold">3. International
                                            Transfer &amp; Talent Pathway</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Didedikasikan untuk keluarga ekspatriat, kepulangan studi dari luar negeri
                                            (overseas returnees), serta talenta khusus di bidang seni, musik, dan
                                            olahraga kompetitif.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Document Checklist (Col 5) -->
                        <div class="lg:col-span-5 p-8 rounded-2xl bg-surface-container-lowest shadow-sm">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="material-symbols-outlined text-[24px] text-primary">fact_check</span>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary">Checklist Berkas Digital
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Unggah berkas melalui
                                        portal pendaftaran online:</p>
                                </div>
                            </div>
                            <div class="space-y-3 mt-6">
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input checked="" class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Pas Foto
                                            Formal Digital</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Terbaru, latar
                                            putih/biru, resolusi tinggi (maks 2MB).</span>
                                    </div>
                                </label>
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input checked="" class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Salinan Rapor
                                            2 Tahun Terakhir</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Rapor Grade 7
                                            dan 8 yang telah dilegalisir sekolah asal.</span>
                                    </div>
                                </label>
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Identitas
                                            Kependudukan Resmi</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Akta Lahir
                                            &amp; KK (WNI) atau Paspor &amp; KITAS orang tua/anak (WNA).</span>
                                    </div>
                                </label>
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Sertifikat
                                            Kemahiran Bahasa Inggris</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">IELTS / TOEFL
                                            Junior / Cambridge Checkpoint (bila ada).</span>
                                    </div>
                                </label>
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Surat
                                            Rekomendasi Konselor</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">1 surat dari
                                            guru BK atau wali kelas sekolah terdahulu.</span>
                                    </div>
                                </label>
                                <label
                                    class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                    <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                        type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-primary font-bold">Portofolio
                                            Prestasi (Opsional Beasiswa)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Sertifikat
                                            kejuaraan sains, coding GitHub, piagam seni/debat.</span>
                                    </div>
                                </label>
                            </div>
                            <div class="mt-6 pt-4">
                                <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-primary-container transition-colors shadow-sm"
                                    href="#">
                                    <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                                    <span>Mulai Pendaftaran Akun PPDB Online</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Specialized Campus Facilities -->
            <section class="w-full py-space-sm lg:py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="text-center max-w-2xl mx-auto mb-12">
                        <span class="font-label-md text-label-md text-secondary font-bold uppercase">Lingkungan
                            Pembelajaran Unggul</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Fasilitas Standar Riset &amp;
                            Seni Internasional</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            Dirancang untuk memberikan simulasi riil atmosfer perkuliahan global dan eksplorasi
                            laboratorium sains terdepan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Facility 1 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Futuristic high-performance computer lab at Unity School with sleek monitors displaying Python code and neural network models, ambient soft teal lighting, ergonomic seating"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH3CXRYqh9sz0HhT6e9weilttRBkze2jVQZKlwQteYvYjd5xc_87IKBAKWibnInTOJmefPWWfcV12KnAzrnjVJrC0BgLqHvUe1LDPWzn1p5BwbA2VACHBylnqF9PYk_utISaQUdsl5JNrjkmhsbLcikYSEq8XjEMWxSS9u1tJc0iwa2wwwQzKEhDjePmsUXGj90tC_wdFn-vmKIXxEmKcip0N9srzgobiOd1rTW2iCy3-ow8XqnhcH" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    AI &amp; Computing
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">AI &amp; GPU
                                    High-Performance Cluster</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    40+ workstation berkemampuan komputasi tinggi untuk coding kecerdasan buatan,
                                    pemodelan data saintifik, dan pengembangan robotika cerdas.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 2 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Advanced Cambridge science laboratory with glassware, digital microscopes, fume hood, and organized lab benches, bright clean clinical daylight"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTZpZtNZlMzxCSmccjJ95ZGFDcjMu21C0FBs7ayADQct1hn3aQTGgtCsRn_effBPaTd9ZEBJ8pmURnB-2MJFBJ4UW--1a6wxB-uP6Wo2bff0_9VDxH5pe8t-nI28W_70Ccgh_Ul2sMt-drkkJafApOdUvdSX3zwvci79aR6p_xDMVKx_KrEcO7KCQOw9jscw13uvDTbjaEXUUiJcfAZ8z0Yg8nupnn_3rAiY0pi_qbUrPDcIEqN7yE" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    Sains &amp; Praktikum
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Cambridge Wet &amp; Dry
                                    Science Labs</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Tiga laboratorium terpisah (Fisika, Kimia, Biologi) berstandar isolasi internasional
                                    lengkap dengan sensor digital Vernier untuk riset akurat.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 3 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Quiet modern university placement center with glass consultation pods, comfortable sofas, university flags and college guidance guides on shelves"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwFmG5mcRYeKuyxTD1Qrx2mxibytdDJydWlLkhkxYS6btM9vaHFEzJNmYR84981Jejado4WSnj-tbBY9K7YjsfhT78DEXp39Zay-QHUhns420vwbTHJve_0gwvSGIWVlaXHtBQMoBSfIicytBO-p7vn8rz6Jcxn5mUJAV0oNaXi8SndgpaJ-NRfyrwAwgmNr42Ro62bAthgLW6lZ_D7F1gXhruYlVH7eHgURy05oHyHzHuhvXd07p2" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    Counseling Pods
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">University Guidance
                                    &amp; Silent Pods</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Ruang konsultasi privat untuk wawancara beasiswa luar negeri serta bilik riset
                                    hening untuk penyusunan Extended Essay dan Capstone Project.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 4 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Grand theater auditorium with 800 velvet seats, professional stage lighting, grand piano, and acoustic wall paneling"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSGGr-FkWRUo77imiqVzuBTZ2XxAlyIUHO5eSM0tZzzUUBo6xEM9w3idT6NxXJtzTXvUI64iknKsesfZyV31HBA-gdXsR8yLXxi9IRzTe7xF24JFudSjAGf9zVmz77zaSUpVBuFj-D_zkirm4XzCpyO-cy-j3ibKMRjMitLS_Vp-QyKAxxfX9YlMw9-ivpb9f04AGxiX3eQ8kc6AF2-v0z-vKQZSXbJkpAF5H0RLnuwfNtV1ib069N" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    Performing Arts
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">800-Seat Performing
                                    Auditorium</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Panggung pertunjukan akustik kelas orkestra untuk pagelaran seni teater, konser
                                    musik, serta konferensi internasional Model United Nations.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 5 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Olympic sized indoor swimming pool with clear turquoise water, swim lanes, and high glass atrium ceilings"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuASDM1wUZRIkkCorPf6AjSOXObSUkBlBprKopyyBW_tStrfghnq7S3sskKO9v5U52iLSDnLcKWuCtAoe7InjIyddBagelcuIe2AOPo4Jgags8UHiLQXKmnk9cThmdRe2w2JSWQ3dIFmoSIQ8IHmsgh2HHBmA3h3_7_bSOr-sdz_DMtSw4F4dp2RStxe83tv3RJRN0S6NBdfLfTJpllwNSiqdVBz44ChmVwdLA2gkvJe8ZDwIUkAPtIm" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    Olahraga &amp; Atletik
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Semi-Olympic Pool &amp;
                                    Sports Complex</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Kolam renang standar FINA dan arena olahraga indoor multifungsi untuk bola basket
                                    FIBA, bulu tangkis, dan latihan kebugaran fisik siswa.
                                </p>
                            </div>
                        </div>
                        <!-- Facility 6 -->
                        <div
                            class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <div class="relative h-48 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Bright organic cafeteria with wood tables, healthy food counter, indoor plants, and floor-to-ceiling glass looking out at lush campus garden"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoKTFFYPhYpW8Kt7y2aorENq3TPf6eC-MGMXqFmXoN-Brqw7d_x3SrovmGUu54tugeA27pmzrmu9Wg7QvjCAn24WFAauwuL__lR4kTki6l4LK1PeY8HBrYlZgKt4ZQ5PdulJVOIGztsdODL1fXaXJmhEf-KVTe1R2d_amPwfHans0-RhVK_42hSkOG89AskRCwspfR5OBt2ibR6cX05ya7c0XUHKmR7Jjbt4UiKvJHHV-ias1zW_ma" />
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                    Dining &amp; Social
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Organic Student Dining
                                    &amp; Cafe</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Layanan katering sehat bersertifikasi ahli gizi, menghadirkan menu organik
                                    bervariasi dengan area santai bersosialisasi dan outdoor terrace.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tuition & Investment Transparency Box -->
            <section class="w-full py-space-sm bg-surface-container-low" id="biaya">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="p-8 lg:p-12 rounded-3xl bg-surface-container-lowest shadow-md">
                        <div
                            class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-10 pb-8 border-b-0">
                            <div>
                                <span
                                    class="font-label-md text-label-md text-secondary font-bold uppercase">Transparansi
                                    Finansial</span>
                                <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Investasi Pendidikan
                                    Senior High School</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-xl">
                                    Seluruh biaya dirancang terstruktur tanpa pungutan tersembunyi. Termasuk lisensi
                                    materi digital Cambridge, akses laboratorium lengkap, bimbingan konseling
                                    universitas, dan asuransi siswa.
                                </p>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <button
                                    class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-high text-primary font-label-md text-label-md font-semibold hover:bg-surface-container-highest transition-colors"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">calculate</span>
                                    <span>Simulasi Cicilan 0% Bank Mitra</span>
                                </button>
                                <a class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors"
                                    href="#">
                                    <span class="material-symbols-outlined text-[18px]">payments</span>
                                    <span>Kebijakan Diskon Sibling</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Fee Card 1 -->
                            <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-3">
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold">Biaya
                                            Awal Seleksi</span>
                                        <span
                                            class="p-1.5 rounded-lg bg-surface-container-highest text-primary material-symbols-outlined text-[18px]">assignment_turned_in</span>
                                    </div>
                                    <p class="font-headline-sm text-headline-sm text-primary font-bold">Biaya Formulir
                                        &amp; Tes Diagnostik</p>
                                    <div class="mt-4 mb-2">
                                        <span class="font-display text-headline-xl text-primary">Rp 850.000</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ satu kali
                                            tes</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Mencakup Tes Kognitif CAT4, English CEFR Diagnostic Assessment, dan wawancara
                                        panel bersama Senior Counselor.
                                    </p>
                                </div>
                                <div
                                    class="mt-6 pt-4 text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">check</span> Hasil asesmen
                                    keluar dalam 2 hari kerja
                                </div>
                            </div>
                            <!-- Fee Card 2 -->
                            <div
                                class="p-6 rounded-2xl bg-primary text-on-primary flex flex-col justify-between shadow-lg relative overflow-hidden">
                                <div
                                    class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-primary-container/40 pointer-events-none">
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-3">
                                        <span
                                            class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Early
                                            Bird Promo</span>
                                        <span
                                            class="material-symbols-outlined text-secondary-container text-[20px]">workspace_premium</span>
                                    </div>
                                    <p class="font-headline-sm text-headline-sm text-on-primary font-bold">Biaya
                                        Pengembangan (DPP)</p>
                                    <div class="mt-4 mb-2">
                                        <span class="font-display text-headline-xl text-on-primary">Rp
                                            47.000.000</span>
                                        <span
                                            class="font-body-sm text-body-sm text-on-primary-container line-through block sm:inline sm:ml-2">Rp
                                            55.000.000</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-primary-container leading-relaxed">
                                        Biaya pembangunan sarana &amp; prasarana untuk masa studi penuh (3 tahun). Hemat
                                        hingga Rp 8.000.000 untuk pelunasan Early Bird sebelum 30 April 2025.
                                    </p>
                                </div>
                                <div
                                    class="mt-6 pt-4 text-secondary-container font-label-sm text-label-sm font-bold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">credit_card</span> Tersedia
                                    opsi cicilan 3x atau 6x tanpa bunga
                                </div>
                            </div>
                            <!-- Fee Card 3 -->
                            <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-3">
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold">Biaya
                                            Rutin Bulanan</span>
                                        <span
                                            class="p-1.5 rounded-lg bg-surface-container-highest text-primary material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <p class="font-headline-sm text-headline-sm text-primary font-bold">SPP / Monthly
                                        Tuition</p>
                                    <div class="mt-4 mb-2">
                                        <span class="font-display text-headline-xl text-primary">Rp 7.200.000</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ bulan</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Termasuk seluruh praktikum lab, lisensi Cambridge digital portal, konseling
                                        universitas luar negeri, bimbingan SAT/IELTS berkala, dan fasilitas student
                                        sports center.
                                    </p>
                                </div>
                                <div
                                    class="mt-6 pt-4 text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">lock</span> Tidak ada biaya
                                    laboratorium tambahan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Admissions Counselor & Location -->
            <section class="w-full py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <!-- Counselor Contact Card (Col 6) -->
                        <div
                            class="lg:col-span-6 p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-6">
                            <div>
                                <span class="font-label-md text-label-md text-secondary font-bold uppercase">Tim
                                    Bimbingan Admisi</span>
                                <h2 class="font-headline-lg text-headline-lg text-primary mt-1">Konsultasikan Masa
                                    Depan Putera-Putri Anda</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                                    Tim penasihat akademik Senior High School siap mendiskusikan pemetaan karier, profil
                                    minat bakat, dan strategi pemilihan kurikulum (A-Levels / IB DP).
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:flex-row items-center gap-4 p-4 rounded-xl bg-surface-container-low">
                                <img class="w-20 h-20 rounded-xl object-cover shadow-sm"
                                    data-alt="Portrait of Ms. Sarah Daniswara, Senior Admissions Counselor at Unity School, friendly and professional expression, holding educational prospectus"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9qUPokr8ubUyNmwTvQvwjHw2r0op7bxwG03S4dLnp-vKBK4dO_spwHBxLwf2MNVv3BAjFR9JNwuFbSI9sMyXlxgB2uF5rMdQlnuN2KhBcGlRiOv_gnGvmcl6UYlbezQsTKdeFRJzhSzXdRqmahFGB5CH6rL7S54keK7c27hGM5zSAmo4-ZocqcrZukKypn_vZi4fGifVg3CmQCDpQlQe1BQfeAfidTBwskEHDVTiEFbXetDWcSIDI" />
                                <div>
                                    <p class="font-headline-sm text-headline-sm text-primary">Ms. Sarah Daniswara,
                                        M.Ed.</p>
                                    <p class="font-label-md text-label-md text-secondary font-semibold">High School
                                        Admissions &amp; Scholarship Advisor</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Tersedia untuk
                                        konsultasi tatap muka maupun online video call.</p>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a class="flex-1 inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-bold hover:bg-tertiary transition-colors shadow-sm"
                                    href="https://wa.me/628112345804" target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat Konselor WhatsApp</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-surface-container-high text-primary font-label-md text-label-md font-semibold hover:bg-surface-container-highest transition-colors"
                                    href="tel:+622155667788">
                                    <span class="material-symbols-outlined text-[18px]">call</span>
                                    <span>(021) 5566-7788</span>
                                </a>
                            </div>
                        </div>
                        <!-- Campus Location Card (Col 6) -->
                        <div
                            class="lg:col-span-6 p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary">Admissions Welcome
                                        Pavilion</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Level 2, Senior High
                                        Academic Tower</p>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
                                    Buka Senin - Sabtu
                                </span>
                            </div>
                            <div class="w-full h-56 bg-cover bg-center rounded-xl shadow-inner relative overflow-hidden"
                                data-location="Jl. Golden Archway No. 88, Bintaro Parkway District, Indonesia"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAm1jfA4PHQsjJlOvPX8HMdW_Tx5haNY7vChSUtW16w3YmRC7-pTT0POoRPyioRKWu9CcTMYfxFXqFbcrujwbikkHoLFhBBqnpYxyxiT6fLMF8Mn2T7zE9lUdP03G1BpD1Xt8A3J8l1aFF7LmK5Dl-W6wCLnOQOlQCsvXaAAvMhjkvxxOwbPXrVBnDD_XMTm7UBPnPkq3T64QyxwdKPWMvGYlmybCVwm-qWoprDQFwYVpKUmsoU6INa');">
                                <div
                                    class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-sm p-3 rounded-lg max-w-xs shadow-sm">
                                    <p class="font-label-sm text-label-sm text-primary font-bold">Kampus Unity Senior
                                        High</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Jl. Golden Archway No.
                                        88, Bintaro Parkway District</p>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm pt-2">
                                <span class="flex items-center gap-1.5"><span
                                        class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                    08.00 - 16.00 WIB</span>
                                <span class="flex items-center gap-1.5"><span
                                        class="material-symbols-outlined text-primary text-[18px]">local_parking</span>
                                    Parkir Khusus Tamu Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Big Bottom CTA Banner -->
            <section class="w-full py-space-xl bg-primary text-on-primary">
                <div class="max-w-7xl mx-auto px-4 lg:px-8 text-center flex flex-col items-center">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold mb-4">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Penerimaan Tahun Ajaran Baru 2025/2026</span>
                    </div>
                    <h2 class="font-display text-headline-xl lg:text-display max-w-3xl leading-tight">
                        Amankan Kursi Putera-Putri Anda di Unity Senior High School Hari Ini
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl mt-4 mb-8 leading-relaxed">
                        Beri kesempatan terbaik bagi putera-putri Anda menempuh pendidikan bertaraf dunia dengan
                        pendampingan personal menuju universitas impian di dalam dan luar negeri.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-4">
                        <a class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg font-bold hover:bg-secondary-fixed-dim transition-all shadow-md"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                            <span>Daftar Sekarang Secara Online</span>
                        </a>
                        <a class="inline-flex items-center gap-2 px-6 py-4 rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold hover:bg-surface-container-high hover:text-primary transition-all"
                            href="#biaya">
                            <span class="material-symbols-outlined text-[20px]">download</span>
                            <span>Unduh Panduan Pendaftaran &amp; Biaya</span>
                        </a>
                    </div>
                </div>
            </section>
                <aside class="fixed bottom-6 right-6 z-50 flex items-end flex-col gap-2 group">
        <div
            class="hidden group-hover:flex flex-col bg-surface-container-lowest p-3 rounded-xl shadow-[0_20px_30px_-10px_rgba(15,23,42,0.15)] max-w-xs transition-all">
            <span class="font-label-md text-label-md text-primary font-bold mb-1">Helpdesk PPDB Yayasan</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Butuh Bantuan PPDB? Hubungi CS Panitia
                (Pilihan unit TK/SD/SMP/SMA)</p>
            <div class="grid grid-cols-2 gap-2"><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="#">CS TK</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="#">CS SD</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="#">CS SMP</a><a
                    class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="#">CS SMA</a></div>
        </div><button
            class="flex items-center gap-2 bg-tertiary-container text-on-tertiary px-4 py-3 rounded-full shadow-[0_10px_25px_-5px_rgba(15,76,92,0.25)] hover:bg-tertiary transition-all"
            type="button"><span class="material-symbols-outlined text-[22px]">chat</span><span
                class="font-label-md text-label-md hidden md:inline">Bantuan PPDB WhatsApp</span></button>
    </aside>
@endsection
