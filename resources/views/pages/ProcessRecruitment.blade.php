@extends('layouts.app')
@section('title', 'Unity School | Admissions Process & Requirements')

@section('content')
    <!-- Hero / Header Section -->
    <section class="w-full bg-surface-container-low pt-16 pb-space-lg">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Main Headline Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <div class="lg:col-span-8 flex flex-col gap-space-md">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-primary w-fit font-label-sm text-label-sm tracking-wider uppercase">
                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                        Transparent Integrated K-12 Admissions
                    </div>
                    <h1 class="font-display text-display text-primary tracking-tight">
                        Transparent Admissions Process &amp; Prospective Student Requirements
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
                        A comprehensive admissions guide across our four developmental tiers (Early Years, Primary, Middle, and High School). Featuring paperless verification, child-centered diagnostic checks, and guaranteed Letter of Acceptance (LoA) issuance within 3–5 business days.
                    </p>
                    <!-- CTAs & Stats -->
                    <div class="flex flex-wrap items-center gap-4 pt-space-sm">
                        <a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container hover:text-on-primary-container transition-all"
                            data-path="apply-now" href="#">
                            <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                            Start Online Application
                        </a>
                        <a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-surface-container text-primary font-label-lg text-label-lg hover:bg-surface-container-high transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">download_for_offline</span>
                            Download Admissions Guide (PDF)
                        </a>
                        <a class="inline-flex items-center gap-1.5 px-4 py-3.5 text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors"
                            href="#konselor-desk">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            WhatsApp Consultation
                        </a>
                    </div>
                </div>
                <!-- Quick Summary Card -->
                <div class="lg:col-span-4">
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-md flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Intake 2025/2026 Metrics</span>
                            <span
                                class="px-2 py-0.5 rounded-md bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm">Accredited A</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3 pt-2">
                            <div class="p-3.5 rounded-xl bg-surface-container-low flex flex-col gap-1">
                                <span class="font-headline-lg text-headline-lg text-primary">100%</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Paperless Digital Upload</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-surface-container-low flex flex-col gap-1">
                                <span class="font-headline-lg text-headline-lg text-secondary">3–5 Days</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Decisions &amp; LoA Release</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-surface-container-low flex flex-col gap-1">
                                <span class="font-headline-lg text-headline-lg text-primary">1 : 1</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Counselor Guidance</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-surface-container-low flex flex-col gap-1">
                                <span class="font-headline-lg text-headline-lg text-tertiary">38+</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Student Nationalities</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-surface-container flex items-center gap-3 mt-1">
                            <span
                                class="material-symbols-outlined text-primary text-[24px]">support_agent</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">Dedicated Admissions Helpdesk</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Available 6 days a week via call &amp; walk-in</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-Step Admissions Roadmap Section -->
    <section class="w-full bg-surface py-space-lg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col gap-2 max-w-2xl mb-space-xl">
                <div
                    class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[18px]">route</span>
                    Structured Admissions Roadmap
                </div>
                <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                    5 Steps to Enrollment Completion
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Our admissions journey is organized efficiently within our online portal, removing the burden of repetitive physical document submissions.
                </p>
            </div>
            <!-- Steps Timeline Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 relative">
                <!-- Step 1 -->
                <div
                    class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-xl bg-primary text-on-primary font-headline-sm text-headline-sm flex items-center justify-center">1</span>
                            <span
                                class="material-symbols-outlined text-primary text-[24px]">app_registration</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Step 01</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Applicant Portal Account</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Create parent and student profiles, select campus location and target academic tier (EY/Primary/Middle/High), and verify access with instant SMS/WhatsApp OTP.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-primary text-[14px]">timer</span>
                            Est. Time: 5 Minutes
                        </span>
                    </div>
                </div>
                <!-- Step 2 -->
                <div
                    class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-xl bg-primary text-on-primary font-headline-sm text-headline-sm flex items-center justify-center">2</span>
                            <span
                                class="material-symbols-outlined text-primary text-[24px]">cloud_upload</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Step 02</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Fee &amp; Document Upload</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Settle the application fee through an automated Virtual Account and upload digital scans of academic records, family credentials, and birth certificates.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-primary text-[14px]">task_alt</span>
                            Digital Document Checklist
                        </span>
                    </div>
                </div>
                <!-- Step 3 -->
                <div
                    class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-xl bg-primary text-on-primary font-headline-sm text-headline-sm flex items-center justify-center">3</span>
                            <span class="material-symbols-outlined text-primary text-[24px]">psychology</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Step 03</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Observation &amp; Diagnostics</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Participate in classroom play observation for Early Years, cognitive diagnostic testing (CAT4 &amp; Cambridge Math), or English proficiency check-ins.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                            <span
                                class="material-symbols-outlined text-primary text-[14px]">calendar_month</span>
                            On-Campus / Virtual Session
                        </span>
                    </div>
                </div>
                <!-- Step 4 -->
                <div
                    class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-xl bg-secondary text-on-secondary font-headline-sm text-headline-sm flex items-center justify-center">4</span>
                            <span
                                class="material-symbols-outlined text-secondary text-[24px]">mark_email_read</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Step 04</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Admissions Result &amp; LoA</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Official admission notifications are published to the portal. The Letter of Acceptance outlines cohort placement, payment terms, and scholarship grants.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-secondary text-[14px]">bolt</span>
                            3–5 Business Days
                        </span>
                    </div>
                </div>
                <!-- Step 5 -->
                <div
                    class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-xl bg-tertiary-container text-on-tertiary-container font-headline-sm text-headline-sm flex items-center justify-center">5</span>
                            <span
                                class="material-symbols-outlined text-tertiary text-[24px]">celebration</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-tertiary uppercase font-bold tracking-wider">Step 05</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Enrollment &amp; Orientation</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Confirm your placement via tuition commitment settlement, schedule official uniform fitting sessions, activate smart student IDs, and join Welcoming Days.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-tertiary text-[14px]">school</span>
                            Officially Enrolled
                        </span>
                    </div>
                </div>
            </div>
            <!-- Process Highlight Box -->
            <div
                class="mt-space-lg p-5 rounded-2xl bg-surface-container-low flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[22px]">info</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-on-surface">Remote &amp; Overseas Assessment Flexibility</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">For international applicants or families residing outside Jabodetabek, diagnostic checks and parent interviews can be scheduled virtually via secure online proctoring.</span>
                    </div>
                </div>
                <a class="whitespace-nowrap px-4 py-2 rounded-xl bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm hover:bg-surface-container transition-all"
                    href="#konselor-desk">
                    Request Remote Assessment
                </a>
            </div>
        </div>
    </section>

    <!-- Filterable Education Tier Requirements Section -->
    <section class="w-full bg-surface-container-low py-space-lg" id="kriteria-jenjang">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-space-lg">
                <div class="flex flex-col gap-2 max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                        Tier Criteria &amp; Guidelines
                    </div>
                    <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                        Academic Requirements &amp; Age of Admission
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        Every learning division enforces clear observational benchmarks tailored to child development and international academic standards.
                    </p>
                </div>
                <!-- Tier Switcher Buttons -->
                <div
                    class="flex items-center bg-surface-container p-1 rounded-xl gap-1 overflow-x-auto max-w-full">
                    <button
                        class="tier-tab active px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-lowest text-primary shadow-sm transition-all flex items-center gap-1.5 whitespace-nowrap"
                        id="tab-btn-ey" onclick="switchTier('ey')" type="button">
                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                        Early Years (EY)
                    </button>
                    <button
                        class="tier-tab px-4 py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all flex items-center gap-1.5 whitespace-nowrap"
                        id="tab-btn-primary" onclick="switchTier('primary')" type="button">
                        <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim"></span>
                        Primary School
                    </button>
                    <button
                        class="tier-tab px-4 py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all flex items-center gap-1.5 whitespace-nowrap"
                        id="tab-btn-middle" onclick="switchTier('middle')" type="button">
                        <span class="w-2 h-2 rounded-full bg-primary-fixed"></span>
                        Middle School
                    </button>
                    <button
                        class="tier-tab px-4 py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all flex items-center gap-1.5 whitespace-nowrap"
                        id="tab-btn-high" onclick="switchTier('high')" type="button">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        Senior High
                    </button>
                </div>
            </div>

            <!-- Tab Content 1: Early Years -->
            <div class="tier-panel grid grid-cols-1 lg:grid-cols-12 gap-space-lg" id="tier-content-ey">
                <div
                    class="lg:col-span-4 rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="bg-cover bg-center h-56 w-full relative"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCfmdcysQC2aCeqIOWRGDcgKvgpD_LY_iRTKobwIUoIOhKKu1sU62FsUr2QTbpG7_PQajIFo1kHgjMWTWJGQ1g2EpVcsB5fygRA3Q5bbrjiUMi0cj2jDMa0tU38JxnDkVnp9uN6MaSpLCgDFM6jl_V4Ph_Ty91PU6QYNB2ucPcOYBz4bv86_HWCdpS5YvtkMPSGjN7FhJY_NokNrOvr9Um5fVi7RiYEhApML4RNwsEohvf-QqaIDsf6')">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Ages 3 - 5 Years</span>
                            <h3 class="font-headline-md text-headline-md text-on-primary mt-1">Reggio Emilia &amp; EYFS Framework</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col gap-4">
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Focusing on emotional independence, empathetic peer socialization, foundational moral character, and sensory-motor development without high-stakes formal testing pressure.
                        </p>
                        <div class="flex flex-col gap-2 pt-2">
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Teacher-to-Student Ratio</span>
                                <span class="font-label-md text-label-md text-primary">1 : 8 (Lead + Assistant Teacher)</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Language of Instruction</span>
                                <span class="font-label-md text-label-md text-primary">English &amp; Bahasa Indonesia (Bilingual)</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Dedicated Facilities</span>
                                <span class="font-label-md text-label-md text-primary">Sensory Garden &amp; Splash Pool</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">cake</span>
                            Age Requirements (As of July 1, 2025)
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Toddler Playgroup:</strong> Minimum 2 years old upon cohort commencement.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Nursery Class:</strong> Minimum 3 years old by July 1, 2025.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Kindergarten 1 &amp; 2 (KG A/B):</strong> 4 to 5 years old (readiness buffer of maximum 2 months allowed with professional developmental assessment).</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">child_care</span>
                            Child Developmental Observation
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Basic Self-Help:</strong> Foundational toilet training and simple independent eating readiness.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Gentle Play Observation:</strong> A relaxed 45-minute play session with early childhood educators (no academic testing).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong class="text-on-surface">Parent Dialogue:</strong> Exploring home routines, screen-time habits, and pediatric allergy histories.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">folder_shared</span>
                            Early Childhood Supporting Records
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Pediatric growth records, health screening cards, and complete immunization logs are required to safeguard our early learning environment.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">alarm</span>
                            School Hours &amp; Adaptation
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Toddler &amp; Nursery: 08:00 – 11:00 WIB (3 hours). KG 1 &amp; 2: 07:45 – 12:00 WIB. A guided 2-week transition schedule is provided for new starters.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tab Content 2: Primary School -->
            <div class="tier-panel hidden grid grid-cols-1 lg:grid-cols-12 gap-space-lg" id="tier-content-primary">
                <div
                    class="lg:col-span-4 rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="bg-cover bg-center h-56 w-full relative"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuANYgmx_jyvDRy0kQGHKI_OFuOAuOspQGJdnA6IOJwv_I0UVi7sXoiFk5WOv_qzHD37n1k3RS2vPZeAf6OkpZpM_2uKaIf3cIiYGnXAYnO42mvFy8eXXYJ7nFuOELv8qIdk6lMYpnutlu0KYYnpypLVipyGlsN1Pw25IZw2DUgcvj_L9OO0SZYnWbyY3EJhO89sURjaa6GJHtfKa6_gwPVTS8jsvgoIqtX2MHrybbDymv2Y92cIFjCd')">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Grades 1 - 5 (Primary)</span>
                            <h3 class="font-headline-md text-headline-md text-on-primary mt-1">Cambridge Primary &amp; Character</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col gap-4">
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            The accredited Cambridge Primary framework (English, Mathematics, Science) unified with national cultural competencies and moral education.
                        </p>
                        <div class="flex flex-col gap-2 pt-2">
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Grade 1 Age Threshold</span>
                                <span class="font-label-md text-label-md text-primary">Min. 6 Years (by July 2025)</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Assessment Standard</span>
                                <span class="font-label-md text-label-md text-primary">Cambridge Checkpoint Ready</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Character Education</span>
                                <span class="font-label-md text-label-md text-primary">Integrated Leadership &amp; Ethics</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">verified</span>
                            Grade 1 Entry Readiness
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>6 years old by July 1, 2025 (Exceptions for 5 years 8 months require licensed psychologist verification).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Motor readiness observation, 30-minute attention span, and collaborative group task comfort.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Submission of Kindergarten certificates or developmental progress reports.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">swap_horiz</span>
                            Transfer Applicants (Grades 2 - 5)
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Academic reports from the preceding 2 years with a minimum core average of 75 (or Grade B).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Cambridge English &amp; Math diagnostic tests to identify language support needs (EAL).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Official school transfer letters and active government student identification records.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">translate</span>
                            English Language Proficiency
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Incoming Grade 1 students are not required to be fluent in English. Dedicated bilingual immersion bridging is integrated throughout the first academic term.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">groups</span>
                            Parent Partnership Consultation
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            A dialogue confirming educational values alignment, mutual learning support, and endorsement of school safety and anti-bullying policies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tab Content 3: Middle School -->
            <div class="tier-panel hidden grid grid-cols-1 lg:grid-cols-12 gap-space-lg" id="tier-content-middle">
                <div
                    class="lg:col-span-4 rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="bg-cover bg-center h-56 w-full relative"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDq8gRVCHWHKWmpyTIihhh9j-STIe7tolxNvqgzqsUIy4KU-jNUCpwEcD4OmK25vm3NjwOOiR1gFrar4l0LmWimaqC8UTU_8_E5n0Fuggvo800V1citfYgkbuurqMNf5WxnCMSfIW8iNVhFSYjZHcCif-pCxbXDePCAv447BE0wejtjbTDK76t6STZx_29XUp2I7QeKmcEBS2d15DNgv5e6yfw4z33Dlm95R_WHrEmJ2ut-xtjweZ7D')">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Grades 6 - 8 (Middle)</span>
                            <h3 class="font-headline-md text-headline-md text-on-primary mt-1">Cambridge Lower Secondary</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col gap-4">
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Nurturing adolescent development through deeper scientific inquiry, Student Council leadership, coding fundamentals, and Cambridge Checkpoint preparation.
                        </p>
                        <div class="flex flex-col gap-2 pt-2">
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Linguistic Standard</span>
                                <span class="font-label-md text-label-md text-primary">CEFR A2 / B1 Proficiency</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Diagnostic Standard</span>
                                <span class="font-label-md text-label-md text-primary">CAT4 Cognitive + Mathematics</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Learning Model</span>
                                <span class="font-label-md text-label-md text-primary">Inquiry &amp; Project-Based Learning</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">menu_book</span>
                            Academic Record Eligibility
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Successful graduation from Primary School (SD/MI or international equivalent).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Cumulative grade average of 75+ across Grades 4, 5, and Grade 6 Term 1 in Math, Science, and English.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Satisfactory disciplinary standing (minimum conduct grade B).</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">psychology_alt</span>
                            Cognitive &amp; Diagnostic Assessments
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong>Cognitive Abilities Test (CAT4):</strong> Verbal, quantitative, spatial, and non-verbal reasoning.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span><strong>English Placement Test:</strong> Reading comprehension, writing, and a 15-minute spoken interview.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Results determine individualized learning and differentiation roadmaps.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">co_present</span>
                            Student Motivation Interview
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Applicants share their personal passions (such as robotics, performing arts, or sports) and outline their aspirational goals within the Middle School student body.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">description</span>
                            Supporting Credentials
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Official recommendation letter from the previous homeroom teacher or school counselor, accompanied by extracurricular achievement records where applicable.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tab Content 4: Senior High School -->
            <div class="tier-panel hidden grid grid-cols-1 lg:grid-cols-12 gap-space-lg" id="tier-content-high">
                <div
                    class="lg:col-span-4 rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="bg-cover bg-center h-56 w-full relative"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrbr46mwyZtjhhiTdjzVLIP4-KRB8zSJLIBmwf1d_0D526fWYCSRxf5IWEOLT4AZd-29Xg6r0dcQMSIFbGO76XszJ3LhglTjvOEMih7Dc8_AV56JQDGSdckcFuLyakucpCUmC6LJ-vjPqNCTf-smQjAhHxxYRpI_DgCBW7pQE0d9F-csMF6hTlAp5MBqL3TfXvx14D0Ne_xw3mrjOdxcvW95JkNEJtN7mS4waULnbWnh5KRvv_A1Iw')">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Grades 9 - 12 (High School)</span>
                            <h3 class="font-headline-md text-headline-md text-on-primary mt-1">Cambridge IGCSE, A-Levels &amp; IB DP</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col gap-4">
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            A collegiate pre-university program offering tailored tracks (Pure Sciences, Business &amp; Economics, AI Computing, and Humanities) leading to world-renowned universities.
                        </p>
                        <div class="flex flex-col gap-2 pt-2">
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">English Standard</span>
                                <span class="font-label-md text-label-md text-primary">Min. CEFR B1/B2 (IELTS 5.5+)</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Minimum Grade Average</span>
                                <span class="font-label-md text-label-md text-primary">≥ 80.0 (Scale of 100)</span>
                            </div>
                            <div class="flex items-center justify-between text-body-sm font-body-sm py-1">
                                <span class="text-on-surface-variant">Graduation Pathways</span>
                                <span class="font-label-md text-label-md text-primary">Cambridge A-Levels / IB DP / National</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">history_edu</span>
                            Academic Records &amp; Transcripts
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Official certified transcripts from the last 5 semesters of Middle School (Grade 7 to Grade 9 Term 1).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Minimum average of 80 in prerequisite subjects related to the applicant's chosen academic track.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>IB Diploma applicants must provide Cambridge IGCSE transcripts or equivalent international qualifications.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">article</span>
                            Personal Statement &amp; Career Aspirations
                        </div>
                        <ul class="flex flex-col gap-2.5 font-body-md text-body-md text-on-surface-variant mt-1">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>A 400–500 word reflective Personal Statement in English highlighting career goals and higher education ambitions.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>Career orientation diagnostic session with Unity School College Counselors.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
                                <span>A 25-minute panel interview with the Head of High School and Academic Coordinators.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">assignment_ind</span>
                            Confidential Recommendations
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            At least one recommendation letter from a Math, Science, or School Counselor confirming intellectual curiosity, academic integrity, and personal maturity.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-primary font-headline-sm text-headline-sm">
                            <span class="material-symbols-outlined text-[22px] text-secondary">flight_takeoff</span>
                            International Transfer Credit Fast-Track
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Direct credit conversion is available for transfer students from accredited IB World Schools or Cambridge International Schools abroad without repeating terms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Document Checklist Section -->
    <section class="w-full bg-surface py-space-lg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col gap-2 max-w-2xl mb-space-xl">
                <div
                    class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[18px]">fact_check</span>
                    Document Verification
                </div>
                <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                    Required Digital Documents &amp; Supporting Files
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    All application materials should be uploaded as digital scans (.PDF or high-resolution .JPG, maximum 5MB per file). Original hard copies are not retained by the school.
                </p>
            </div>
            <!-- Checklist Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                <!-- Item 1 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">badge</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase">Mandatory for All</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Family Card &amp; Birth Certificate</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Official Family Card (Kartu Keluarga) and Birth Certificate scans for domestic students. International applicants submit valid student and parent passport copies.
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Format: PDF / JPEG (Max 3MB)</span>
                        <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                    </div>
                </div>
                <!-- Item 2 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">auto_stories</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase">Primary, Middle &amp; High</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Certified Academic Transcripts</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Official report cards from the preceding 2 academic years including student profile data, subject grades, and attendance records stamped by the school principal.
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Format: Multipage PDF (Max 5MB)</span>
                        <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                    </div>
                </div>
                <!-- Item 3 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">account_box</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase">Mandatory for All</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Official Passport Photo</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Recent colored 3x4 portrait on a neutral red or blue background, taken in formal attire or school uniform, facing forward without headwear (except religious attire).
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Format: JPG / PNG (Max 2MB)</span>
                        <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                    </div>
                </div>
                <!-- Item 4 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">medical_services</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase">Mandatory for All</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Health &amp; Immunization Record</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Medical clearance certificate from a licensed physician, disclosure of severe allergies or chronic conditions, and childhood immunization records.
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Format: PDF (Max 3MB)</span>
                        <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                    </div>
                </div>
                <!-- Item 5 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">emoji_events</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase">Optional / Scholarships</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Achievement Certificates</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Awards in STEM, arts, athletics, or coding earned within the last 3 years. Required for Global Merit and Youth Talent Scholarship applicants.
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Portfolio PDF / Link</span>
                        <span class="material-symbols-outlined text-secondary text-[18px]">stars</span>
                    </div>
                </div>
                <!-- Item 6 -->
                <div
                    class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="flex items-start justify-between gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[22px]">public</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase">International Expatriates</span>
                    </div>
                    <div class="pt-4 flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">KITAS / Visa &amp; Study Permit</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Parent and student residency permits (KITAS/KITAP), passports valid for at least 18 months, and relevant ministry study endorsements where required.
                        </p>
                    </div>
                    <div
                        class="mt-4 pt-3 bg-surface-container-low -mx-5 -mb-5 p-3 px-5 rounded-b-2xl flex items-center justify-between text-body-sm">
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Visa &amp; Liaison Support Available</span>
                        <span class="material-symbols-outlined text-primary text-[18px]">help_center</span>
                    </div>
                </div>
            </div>
            <!-- Security Notice Banner -->
            <div class="mt-space-md p-4 rounded-xl bg-surface-container-low flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-[24px] shrink-0">lock</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    <strong class="text-on-surface">Data Protection &amp; Confidentiality:</strong> All uploaded materials are encrypted via 256-bit SSL protocols and accessible solely to the Unity School International Admissions Committee.
                </p>
            </div>
        </div>
    </section>

    <!-- Special Pathways & Scholarships Section -->
    <section class="w-full bg-surface-container-low py-space-lg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col gap-2 max-w-2xl mb-space-xl">
                <div
                    class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[18px]">card_membership</span>
                    Pathways &amp; Financial Privileges
                </div>
                <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                    Admissions Pathways &amp; Scholarship Schemes
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Select the admission pathway that matches your application timeline, academic track record, or family status for optimized tuition privileges.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Pathway 1: Early Bird -->
                <div
                    class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary-container">
                            <span class="material-symbols-outlined text-[26px]">savings</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Wave 1 Intake</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Early Bird Advantage</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Direct reduction on the Development Fee (DPP) up to <strong class="text-on-surface">IDR 8,000,000</strong>, prioritized class cohort selection, and waived orientation kit fees.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-surface-container mt-4">
                        <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">schedule</span>
                            Deadline: April 30, 2025
                        </span>
                    </div>
                </div>
                <!-- Pathway 2: Global Merit & Talent -->
                <div
                    class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-tertiary-container flex items-center justify-center text-on-tertiary-container">
                            <span class="material-symbols-outlined text-[26px]">military_tech</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-tertiary uppercase font-bold tracking-wider">Merit Pathway</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Global Merit &amp; Talent</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Up to <strong class="text-on-surface">100%</strong> Development Fee scholarship for olympiad medalists in sciences, fine arts, sports, or verified cognitive test excellence.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-surface-container mt-4">
                        <span class="font-label-sm text-label-sm text-tertiary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">verified</span>
                            Assessment Review Required
                        </span>
                    </div>
                </div>
                <!-- Pathway 3: Sibling Privilege -->
                <div
                    class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined text-[26px]">family_restroom</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Family Benefit</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Sibling &amp; Legacy Privilege</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Continuous discounts of <strong class="text-on-surface">15% to 20%</strong> for second and subsequent children enrolled concurrently at Unity School.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-surface-container mt-4">
                        <span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">check</span>
                            Verified via Family Card
                        </span>
                    </div>
                </div>
                <!-- Pathway 4: International Expat Fast-Track -->
                <div
                    class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div class="flex flex-col gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[26px]">public</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Rolling Intake</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Expat Credit Transfer</h3>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Continuous year-round enrollment for children of diplomatic and expatriate staff with direct Cambridge and IB credit articulation.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-surface-container mt-4">
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">all_inclusive</span>
                            12-Month Flexible Admissions
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intake Calendar & Wave Quota Tracker Section -->
    <section class="w-full bg-surface py-space-lg" id="jadwal-gelombang">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                <!-- Calendar & Waves List -->
                <div class="lg:col-span-7 flex flex-col gap-space-md">
                    <div class="flex flex-col gap-2">
                        <div
                            class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[18px]">event_available</span>
                            Admissions Calendar AY 2025/2026
                        </div>
                        <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                            Application Waves &amp; Assessment Schedule
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Review closing deadlines and seat confirmation windows for each intake wave to secure your student placement.
                        </p>
                    </div>
                    <!-- Wave Cards -->
                    <div class="flex flex-col gap-3 mt-2">
                        <!-- Wave 1 (Active) -->
                        <div
                            class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center font-headline-sm text-headline-sm shrink-0">
                                    W1
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-headline-sm text-headline-sm text-primary">Wave 1 (Early Bird &amp; Scholarships)</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm">Active / Open</span>
                                    </div>
                                    <span
                                        class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Period: November 1, 2024 – April 30, 2025</span>
                                    <span class="font-label-sm text-label-sm text-secondary mt-1">Benefits: Up to IDR 8M DPP Discount &amp; Priority Placement</span>
                                </div>
                            </div>
                            <a class="px-4 py-2 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all whitespace-nowrap text-center"
                                data-path="apply-now" href="#">
                                Apply Wave 1
                            </a>
                        </div>
                        <!-- Wave 2 (Upcoming) -->
                        <div
                            class="p-5 rounded-2xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-surface-container text-on-surface-variant flex items-center justify-center font-headline-sm text-headline-sm shrink-0">
                                    W2
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Wave 2 (Regular Admission)</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Opens May 1, 2025</span>
                                    </div>
                                    <span
                                        class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Period: May 1, 2025 – June 30, 2025</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant mt-1">Subject to remaining cohort seats post-Wave 1</span>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md opacity-70 cursor-not-allowed whitespace-nowrap"
                                disabled="">
                                Coming Soon
                            </button>
                        </div>
                        <!-- Wave 3 (Late / Rolling) -->
                        <div
                            class="p-5 rounded-2xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-surface-container text-on-surface-variant flex items-center justify-center font-headline-sm text-headline-sm shrink-0">
                                    W3
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Late Intake &amp; International Transfer</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">July 2025</span>
                                    </div>
                                    <span
                                        class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Period: July 1, 2025 – July 15, 2025 (Orientation: July 21, 2025)</span>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant mt-1">Contingent on available waitlist seats</span>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 rounded-xl bg-surface-container text-on-surface-variant font-label-md text-label-md opacity-70 cursor-not-allowed whitespace-nowrap"
                                disabled="">
                                Waitlist Only
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Live Seat Availability Gauge Box -->
                <div
                    class="lg:col-span-5 bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
                            <span class="font-headline-sm text-headline-sm text-primary">Cohort Capacity Tracker</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Updated: Today</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        To maintain ideal educator-to-student ratios, each grade tier operates with strictly limited cohorts prioritized for families confirming their Letter of Acceptance.
                    </p>
                    <!-- Quota Meters -->
                    <div class="flex flex-col gap-4">
                        <!-- EY -->
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center justify-between text-body-sm font-body-sm">
                                <span class="font-label-md text-label-md text-on-surface">Early Years (Toddler, Nursery, KG)</span>
                                <span class="font-label-sm text-label-sm text-secondary font-bold">85% Filled (6 Seats Left)</span>
                            </div>
                            <div class="w-full bg-surface-container h-2.5 rounded-full overflow-hidden">
                                <div class="bg-secondary-container h-full rounded-full w-[85%]"></div>
                            </div>
                        </div>
                        <!-- Primary -->
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center justify-between text-body-sm font-body-sm">
                                <span class="font-label-md text-label-md text-on-surface">Primary School (Grades 1 - 5)</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">78% Filled (12 Seats Left)</span>
                            </div>
                            <div class="w-full bg-surface-container h-2.5 rounded-full overflow-hidden">
                                <div class="bg-primary h-full rounded-full w-[78%]"></div>
                            </div>
                        </div>
                        <!-- Middle -->
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center justify-between text-body-sm font-body-sm">
                                <span class="font-label-md text-label-md text-on-surface">Middle School (Grades 6 - 8)</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">70% Filled (15 Seats Left)</span>
                            </div>
                            <div class="w-full bg-surface-container h-2.5 rounded-full overflow-hidden">
                                <div class="bg-primary h-full rounded-full w-[70%]"></div>
                            </div>
                        </div>
                        <!-- High -->
                        <div class="flex flex-col gap-1.5">
                            <div class="flex items-center justify-between text-body-sm font-body-sm">
                                <span class="font-label-md text-label-md text-on-surface">Senior High &amp; IB DP (Grades 9 - 12)</span>
                                <span class="font-label-sm text-label-sm text-secondary font-bold">88% Filled (5 Seats Left)</span>
                            </div>
                            <div class="w-full bg-surface-container h-2.5 rounded-full overflow-hidden">
                                <div class="bg-secondary-container h-full rounded-full w-[88%]"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-surface-container-low flex items-center gap-3">
                        <span
                            class="material-symbols-outlined text-secondary text-[22px]">notification_important</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">
                            Seat allocations remain dynamic and update in real-time according to confirmed registration deposits.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counselor Desk & Campus Visit Pavilion -->
    <section class="w-full bg-surface-container-low py-space-lg" id="konselor-desk">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <!-- Text & Contact Cards -->
                <div class="lg:col-span-7 flex flex-col gap-space-md">
                    <div
                        class="inline-flex items-center gap-2 text-primary font-label-md text-label-md uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[18px]">support_agent</span>
                        Dedicated Admissions Advising
                    </div>
                    <h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                        Connect with Your Academic Division Counselor
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        Our admissions officers assist parents with curriculum pathways, diagnostic readiness assessments, fee breakdowns, and scholarship applications.
                    </p>
                    <!-- 4 Counselor Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                        <!-- Counselor TK -->
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[20px]">toys</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">Early Years Counselor</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Ms. Zahra Rahmadani</span>
                                </div>
                            </div>
                            <a class="p-2 rounded-lg bg-surface-container hover:bg-tertiary-container hover:text-on-tertiary-container text-primary transition-colors"
                                href="https://wa.me/628111222331" target="_blank" title="WhatsApp Chat">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                        </div>
                        <!-- Counselor SD -->
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-[20px]">backpack</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">Primary School Counselor</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mr. Adrian Wicaksono</span>
                                </div>
                            </div>
                            <a class="p-2 rounded-lg bg-surface-container hover:bg-tertiary-container hover:text-on-tertiary-container text-primary transition-colors"
                                href="https://wa.me/628111222332" target="_blank" title="WhatsApp Chat">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                        </div>
                        <!-- Counselor SMP -->
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary">
                                    <span class="material-symbols-outlined text-[20px]">menu_book</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">Middle School Counselor</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Ms. Farah Daniswara</span>
                                </div>
                            </div>
                            <a class="p-2 rounded-lg bg-surface-container hover:bg-tertiary-container hover:text-on-tertiary-container text-primary transition-colors"
                                href="https://wa.me/628111222333" target="_blank" title="WhatsApp Chat">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                        </div>
                        <!-- Counselor SMA -->
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-fixed-dim flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-[20px]">school</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">High School Counselor</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mr. Nicholas Hartono</span>
                                </div>
                            </div>
                            <a class="p-2 rounded-lg bg-surface-container hover:bg-tertiary-container hover:text-on-tertiary-container text-primary transition-colors"
                                href="https://wa.me/628111222334" target="_blank" title="WhatsApp Chat">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Admissions Welcome Pavilion & Tour Card -->
                <div
                    class="lg:col-span-5 bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
                    <div class="bg-cover bg-center h-48 w-full rounded-xl relative"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC5Y5gIeLl0qyiwRyRsaQUfdxPm3Rxd1u7GeuWGreU0iA8oyxDBcFaEGZVpRQq2ZAJSt4wLW23F42vY4HtkS6ntPgTg2rGSWsqDqgGZQrCsIc25YPb-fByWIUKzSFV9C3kmpSaSiQN1fO77iO_0IK-OFG2NSe_uBf4XYCkqW_aXR17g1ccFdGqZ0f9WuQ4uyNQsbvUyPi4ratRHVWWvO2Tp2ab5VcK5i65h5CUheBKyNA5U9Ti0oQPz')">
                        <div
                            class="absolute bottom-3 left-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1 rounded-lg">
                            <span class="font-label-sm text-label-sm text-primary font-bold">Admissions Welcome Pavilion</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-headline-sm text-headline-sm text-primary">In-Person Campus Visits (Walk-In)</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Book a private campus tour, view our STEAM laboratories, modern two-story library, aquatic facility, and interactive classrooms alongside an admissions advisor.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2 pt-1 font-body-sm text-body-sm text-on-surface">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
                            <span>Unity International Campus Blvd No. 8, Golden Archway District</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                            <span>Monday – Friday: 08:00 – 16:00 WIB | Saturday: 08:30 – 14:00 WIB</span>
                        </div>
                    </div>
                    <a class="w-full py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md text-center hover:bg-primary-container hover:text-on-primary-container transition-all mt-1"
                        data-path="faq-and-contact" href="#">
                        Schedule a Private Campus Tour
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Call-to-Action Banner -->
    <section class="w-full bg-primary text-on-primary py-space-2xl relative overflow-hidden">
        <div
            class="absolute -right-16 -top-16 w-96 h-96 rounded-full bg-primary-container/40 blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute -left-16 -bottom-16 w-96 h-96 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none">
        </div>
        <div class="max-w-5xl mx-auto px-6 text-center flex flex-col items-center gap-space-md relative z-10">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-secondary-container"></span>
                Admissions Open AY 2025/2026
            </div>
            <h2 class="font-display text-display tracking-tight max-w-3xl">
                Secure Your Child's Global Future with Unity School
            </h2>
            <p class="font-body-lg text-body-lg text-primary-fixed-dim max-w-2xl leading-relaxed">
                Confirm your child's placement in Wave 1. Completing the initial application takes approximately 5 minutes through our integrated admissions portal.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 pt-space-sm">
                <a class="px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-lg hover:bg-secondary-fixed transition-all flex items-center gap-2"
                    data-path="apply-now" href="#">
                    <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                    Start Application Now
                </a>
                <a class="px-6 py-4 rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-surface-container-high hover:text-primary transition-all flex items-center gap-2"
                    data-path="parent-portal-login" href="#">
                    <span class="material-symbols-outlined text-[20px]">login</span>
                    Sign in to Parent Portal
                </a>
            </div>
            <div
                class="flex flex-wrap items-center justify-center gap-6 pt-space-md text-primary-fixed-dim text-body-sm font-body-sm">
                <span class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                    No Hidden Fees
                </span>
                <span>•</span>
                <span class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-secondary text-[16px]">support_agent</span>
                    Admissions Hotline +62 21 555-0199
                </span>
                <span>•</span>
                <span class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-secondary text-[16px]">shield</span>
                    Fully Accredited &amp; Cambridge Registered
                </span>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function switchTier(tierKey) {
            // Hide all panels
            const panels = document.querySelectorAll('.tier-panel');
            panels.forEach(p => p.classList.add('hidden'));

            // Deactivate all tab buttons
            const buttons = document.querySelectorAll('.tier-tab');
            buttons.forEach(b => {
                b.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
                b.classList.add('text-on-surface-variant');
            });

            // Show targeted panel
            const targetPanel = document.getElementById('tier-content-' + tierKey);
            if (targetPanel) {
                targetPanel.classList.remove('hidden');
            }

            // Highlight active button
            const activeBtn = document.getElementById('tab-btn-' + tierKey);
            if (activeBtn) {
                activeBtn.classList.remove('text-on-surface-variant');
                activeBtn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
            }
        }
    </script>
@endpush
