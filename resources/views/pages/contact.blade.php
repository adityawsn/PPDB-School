@extends('layouts.app')

@section('title', 'Unity School | Contact & Admissions Support')

@section('content')
    <!-- SECTION 1: HERO & SEARCH BANNER -->
    <section
        class="relative w-full bg-gradient-to-b from-surface-container-low via-surface to-surface px-4 lg:px-8 pt-16 pb-12 lg:pb-8 overflow-hidden">
        <!-- Ambient subtle background decorative radial glows -->
        <div
            class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-primary-fixed/25 blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute top-10 -right-24 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none">
        </div>
        <div class="max-w-7xl mx-auto relative z-10 flex flex-col items-center text-center">
            <!-- Status Badge & Indicator -->
            {{-- <div
                class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-surface-container-lowest shadow-sm mb-6 border border-surface-container-high">
                <span class="relative flex h-2.5 w-2.5">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-secondary-container"></span>
                </span>
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">
                    ADMISSIONS HELPDESK &amp; PARENT SUPPORT CENTER - AY 2025/2026
                </span>
            </div> --}}
            <!-- Main Heading -->
            <h1
                class="font-headline-xl text-headline-xl lg:text-[44px] lg:leading-[52px] text-primary max-w-4xl tracking-tight mb-4">
                Have Questions Regarding Unity School Admissions &amp; Curricula? Find Instant Answers or Consult Our Advisors
            </h1>
            <!-- Subtitle -->
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mb-8">
                Your comprehensive guide to digital registration, cognitive &amp; linguistic readiness observation (EAL), private campus tour bookings, transparent tuition fees, and direct division counselor contacts.
            </p>
            <!-- Interactive Search Container -->
            <div
                class="w-full max-w-3xl bg-surface-container-lowest p-2.5 sm:p-3 rounded-2xl shadow-lg mb-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-2 border border-surface-container-high">
                <div class="flex items-center gap-3 px-3 flex-1">
                    <span class="material-symbols-outlined text-on-surface-variant text-[24px]">search</span>
                    <input
                        class="w-full bg-transparent font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none py-2"
                        id="faq-search-input"
                        placeholder="Search queries... (e.g., placement test, EAL support, Cambridge vs IB, merit scholarship, sibling discount)"
                        type="text" />
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm"
                    onclick="filterFaqFromInput()" type="button">
                    <span class="material-symbols-outlined text-[18px]">travel_explore</span>
                    <span>Search Solutions</span>
                </button>
            </div>
            <!-- Filter Tags -->
            <div class="flex flex-wrap items-center justify-center gap-2 mb-6">
                <span class="font-label-sm text-label-sm text-on-surface-variant mr-1">Popular Topics:</span>
                <button
                    class="category-filter-btn active font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-primary text-on-primary shadow-sm transition-all"
                    data-filter="all" onclick="filterCategory('all')">
                    All Categories
                </button>
                <button
                    class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                    data-filter="admissions" onclick="filterCategory('admissions')">
                    Admissions &amp; Application
                </button>
                <button
                    class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                    data-filter="assessment" onclick="filterCategory('assessment')">
                    Placement &amp; Readiness Test
                </button>
                <button
                    class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                    data-filter="curriculum" onclick="filterCategory('curriculum')">
                    Curriculum &amp; Immersion
                </button>
                <button
                    class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                    data-filter="tuition" onclick="filterCategory('tuition')">
                    Tuition &amp; Scholarships
                </button>
                <button
                    class="category-filter-btn font-label-sm text-label-sm px-3.5 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container-highest transition-all"
                    data-filter="tour" onclick="filterCategory('tour')">
                    Campus Tour &amp; Welcome Desk
                </button>
            </div>
            <!-- Operational Live Pill -->
            <div
                class="inline-flex flex-wrap items-center justify-center gap-3 px-4 py-2 rounded-xl bg-tertiary-container/10 text-tertiary border border-tertiary-container/20">
                <div class="flex items-center gap-2 font-label-md text-label-md font-semibold">
                    <span class="material-symbols-outlined text-[18px] text-tertiary-container">verified</span>
                    <span>Today's Status: Admissions Welcome Center OPEN (08:00 - 16:00 WIB)</span>
                </div>
                <span class="hidden sm:inline text-tertiary-container">•</span>
                <div class="flex items-center gap-1.5 font-label-sm text-label-sm font-medium">
                    <span class="material-symbols-outlined text-[16px] text-secondary">bolt</span>
                    <span>WhatsApp Response Time &lt; 15 Mins</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: DIVISION ADMISSIONS COUNSELOR DIRECTORY -->
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
                        Official Academic Pathway Counselor Directory
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                        Consult curriculum pathways, diagnostic readiness assessments, and individual student developmental needs with Unity School specialists.
                    </p>
                </div>
                <div class="flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-xl">
                    <span class="material-symbols-outlined text-[20px] text-primary">timer</span>
                    <span class="font-label-sm text-label-sm text-on-surface">Consultation Hours: 08:00 - 16:00 WIB</span>
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
                            <span class="material-symbols-outlined text-[24px] text-secondary">child_care</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Early Years Division</h3>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Reggio Emilia &amp; UK EYFS Framework</p>
                        <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                            <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions Specialist:</div>
                            <div
                                class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-secondary">badge</span>
                                <span>Ms. Nabila Putri, S.Psi</span>
                            </div>
                            <div class="text-[11px] text-secondary font-medium">Early Childhood Specialist</div>
                        </div>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Nursery &amp; Kindergarten age readiness</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Toilet training &amp; early bilingual exposure</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Trial class &amp; guided sensory play tour</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                            <span>Counselor WhatsApp:</span>
                            <span class="font-semibold text-on-surface">+62 811-2345-801</span>
                        </div>
                        <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                            href="https://wa.me/628112345801?text=Hello%20Ms.%20Nabila,%20I%20would%20like%20to%20consult%20regarding%20Early%20Years%20Admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat Early Years Desk</span>
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
                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge Primary &amp; Character Building</p>
                        <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                            <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions Specialist:</div>
                            <div
                                class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-primary">badge</span>
                                <span>Mr. Dimas Anggoro, M.Ed</span>
                            </div>
                            <div class="text-[11px] text-primary font-medium">Primary Academic Counselor</div>
                        </div>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Cambridge Primary Diagnostic &amp; Singapore Math</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>EAL support &amp; communicative English readiness</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Holistic social-emotional student mapping</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                            <span>Counselor WhatsApp:</span>
                            <span class="font-semibold text-on-surface">+62 811-2345-802</span>
                        </div>
                        <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                            href="https://wa.me/628112345802?text=Hello%20Mr.%20Dimas,%20I%20would%20like%20to%20consult%20regarding%20Primary%20School%20Admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat Primary School Desk</span>
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
                            <span class="material-symbols-outlined text-[24px] text-primary-container">menu_book</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Middle School</h3>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge Lower Secondary Pathway</p>
                        <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                            <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions Specialist:</div>
                            <div
                                class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-primary-container">badge</span>
                                <span>Ms. Farah Ramadhani, B.A.</span>
                            </div>
                            <div class="text-[11px] text-primary-container font-medium">Middle School Pathway Advisor</div>
                        </div>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Cambridge Checkpoint &amp; curriculum transition</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Trilingual stream (English, Mandarin, Bahasa)</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>STEAM, Robotics Lab, &amp; Model United Nations</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                            <span>Counselor WhatsApp:</span>
                            <span class="font-semibold text-on-surface">+62 811-2345-803</span>
                        </div>
                        <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                            href="https://wa.me/628112345803?text=Hello%20Ms.%20Farah,%20I%20would%20like%20to%20consult%20regarding%20Middle%20School%20Admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat Middle School Desk</span>
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
                            <span class="material-symbols-outlined text-[24px] text-tertiary-container">psychology</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Senior High School</h3>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">Cambridge IGCSE, A-Levels &amp; IB DP</p>
                        <div class="p-3 rounded-xl bg-surface-container-low mb-4">
                            <div class="text-on-surface-variant font-body-sm text-body-sm mb-1">Admissions Specialist:</div>
                            <div
                                class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container">badge</span>
                                <span>Mr. Jonathan Miller, M.Sc.</span>
                            </div>
                            <div class="text-[11px] text-tertiary font-medium">College Counselor &amp; Senior Admissions</div>
                        </div>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>IGCSE, A-Level &amp; IB Diploma subject selection</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Ivy League, Russell Group, Go8 &amp; Premier Domestic Prep</span>
                            </div>
                            <div class="flex items-start gap-2 font-body-sm text-body-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-container mt-0.5">check_circle</span>
                                <span>Unity Global Merit &amp; Youth Talent Scholarships</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-outline mb-2 flex items-center justify-between">
                            <span>Counselor WhatsApp:</span>
                            <span class="font-semibold text-on-surface">+62 811-2345-804</span>
                        </div>
                        <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold hover:bg-tertiary transition-colors shadow-sm"
                            href="https://wa.me/628112345804?text=Hello%20Mr.%20Miller,%20I%20would%20like%20to%20consult%20regarding%20High%20School%20Admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>Chat High School Desk</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Foundation & Financial Hotline Banner -->
            <div
                class="w-full bg-gradient-to-r from-primary via-primary-container to-primary text-on-primary rounded-2xl p-6 lg:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 shadow-md">
                <div class="flex items-start gap-4">
                    <div class="p-3.5 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md">
                        <span class="material-symbols-outlined text-[32px] text-secondary-container">account_balance</span>
                    </div>
                    <div>
                        <div
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-container font-semibold mb-1">
                            Admissions Finance &amp; Bursar Office
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-primary">
                            Need Consultation on 0% Installment Plans, Sibling Privilege, or Merit Scholarships?
                        </h4>
                        <p class="font-body-sm text-body-sm text-surface-container-highest/80 max-w-2xl mt-1">
                            The Unity School Bursar Office assists with term fee projections, banking partnership installment plans, scholarship eligibility verification, and family discounts.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                    <a class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-surface-container-lowest text-primary font-label-md text-label-md font-bold hover:bg-surface-container-high transition-colors shadow-sm"
                        href="https://wa.me/628115550199" target="_blank">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>Contact Bursar Desk</span>
                    </a>
                    <a class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors shadow-sm"
                        href="#inquiry-form-section">
                        <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                        <span>Scholarship Terms</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: COMPREHENSIVE FAQ ACCORDION -->
    <section class="w-full px-4 lg:px-8 py-6 bg-surface-container-low">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-6">
                <span
                    class="px-3.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold uppercase tracking-wider">
                    Information Center &amp; Official Answers
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary mt-2">
                    Frequently Asked Questions (FAQ)
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mt-1">
                    Official insights regarding Cambridge &amp; IB frameworks, English immersion, entrance diagnostics, transfer protocols, and tuition structure.
                </p>
            </div>

            <!-- FAQ Container with JavaScript Accordion -->
            <div class="space-y-4" id="faq-list-container">
                <!-- ITEM 1 (Curriculum & Language) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="curriculum"
                    data-keywords="english language immersion eal support fluency language transition bilingual instruction">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-primary-fixed text-primary font-label-sm text-label-sm font-bold">LANGUAGE</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                Is complete English fluency mandatory prior to enrollment?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <p class="mb-3">
                            <strong>Flawless fluency is not an absolute prerequisite.</strong> Unity School recognizes that every applicant joins with varying educational backgrounds and linguistic exposure.
                        </p>
                        <ul class="list-disc pl-5 space-y-1.5 text-on-surface mb-3">
                            <li><strong>Early Years &amp; Lower Primary (Grades 1-2):</strong> No strict language prerequisites apply. Children absorb English through natural daily immersion guided by certified native and bilingual faculty.</li>
                            <li><strong>Upper Primary, Middle &amp; High School:</strong> Transitioning students receive specialized <strong>EAL (English as an Additional Language)</strong> instruction at no additional charge to facilitate rapid academic comprehension within Cambridge and IB coursework.</li>
                        </ul>
                        <div class="p-3 bg-surface-container-low rounded-xl text-body-sm font-body-sm text-on-surface-variant flex items-start gap-2">
                            <span class="material-symbols-outlined text-[18px] text-secondary mt-0.5">lightbulb</span>
                            <span>Our academic counselors conduct diagnostic mapping to formulate a supportive linguistic adaptation roadmap for your child.</span>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 (Assessment & Observation) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="assessment"
                    data-keywords="placement test cognitive observation entrance exam assessment interview readiness test diagnostic">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-surface-container-highest text-primary font-label-sm text-label-sm font-bold">ASSESSMENT</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                What does the cognitive observation and placement evaluation entail?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <p class="mb-2">
                            Assessments at Unity School are <strong>child-centered, stress-free, and designed to map individual potential</strong> rather than serve as rigid elimination barriers.
                        </p>
                        <div class="space-y-2 text-on-surface mb-3">
                            <div><strong>• Early Years (Nursery &amp; Kindergarten):</strong> A 45-minute <em>Play Observation</em> session with our child development specialists, evaluating fine/gross motor skills, curiosity, and social independence.</div>
                            <div><strong>• Primary School (Grades 1-5):</strong> Diagnostic assessments examining foundational literacy, numeracy reasoning, and an informal interest discovery dialogue.</div>
                            <div><strong>• Middle &amp; High School (Grades 6-12):</strong> Computerized Cambridge-aligned diagnostic checks (English reading &amp; mathematical logic) alongside a future pathway interview with our College Counselor.</div>
                        </div>
                        <div class="p-3 bg-secondary-fixed/30 rounded-xl text-body-sm font-body-sm text-on-surface flex items-start gap-2">
                            <span class="material-symbols-outlined text-[18px] text-secondary mt-0.5">psychology</span>
                            <span>A collaborative parent interview is also hosted to ensure educational philosophy alignment between home and school.</span>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 (Curriculum & Accreditation) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="curriculum"
                    data-keywords="accreditation spk kemendikbud ib world school cambridge id1082 international diploma qualifications">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold">CURRICULUM</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                Are Unity School qualifications recognized nationally and by international universities?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <p class="mb-3">
                            <strong>Fully accredited and globally recognized.</strong> Unity School International operates as an accredited Satuan Pendidikan Kerjasama (SPK) holding an <strong>'A' (Exemplary) rating</strong> from the Ministry of Education.
                        </p>
                        <ul class="list-disc pl-5 space-y-1.5 text-on-surface">
                            <li><strong>Global Accreditation:</strong> Officially registered as a <em>Cambridge International Centre (#ID1082)</em> and an <em>IB World School Candidate</em> for the Diploma Programme.</li>
                            <li><strong>Dual Pathway Graduation:</strong> High school graduates earn internationally recognized credentials (Cambridge IGCSE, A-Levels, or IB Diploma) alongside certified Indonesian National Diplomas, granting seamless entry into world-class global universities or top domestic colleges.</li>
                        </ul>
                    </div>
                </div>

                <!-- ITEM 4 (Admissions & Sibling Privilege) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="admissions"
                    data-keywords="two children enrollment sibling privilege family discount dual application multiple kids">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-primary-fixed text-primary font-label-sm text-label-sm font-bold">ADMISSIONS</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                Can parents enroll siblings simultaneously, and what are the Sibling Privilege terms?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <p class="mb-3">
                            Yes, all applications can be administered via a single <strong>Unity School Parent Portal Account</strong> by selecting <em>"Add Sibling Registration"</em> inside your family dashboard.
                        </p>
                        <div class="p-3 bg-surface-container-low rounded-xl text-on-surface font-body-sm text-body-sm space-y-1 mb-2">
                            <div class="font-bold text-primary flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px] text-secondary">workspace_premium</span>
                                <span>Sibling Privilege Guidelines:</span>
                            </div>
                            <div>• Second Child: <strong>10% reduction</strong> on the Development Fee (DPP) and annual tuition.</div>
                            <div>• Third Child &amp; Beyond: <strong>15% reduction</strong> on the Development Fee with priority class placement.</div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 5 (Transfer & Mid-Year Relocation) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="admissions"
                    data-keywords="student transfer mid-year entry school transition bridging course national curriculum">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-surface-container-highest text-primary font-label-sm text-label-sm font-bold">TRANSFER</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                What is the procedure for mid-year student transfers from national or bilingual schools?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <p class="mb-3">
                            Unity School welcomes mid-year transfer students on a rolling admissions basis subject to cohort seat availability.
                        </p>
                        <ol class="list-decimal pl-5 space-y-1.5 text-on-surface">
                            <li>Confirm tier quota availability with an Admissions Specialist via WhatsApp or phone.</li>
                            <li>Submit academic records from the previous two terms alongside official school transfer documentation.</li>
                            <li>Complete the diagnostic check-in and participate in a 2-week <em>Bridging Course</em> supervised by homeroom advisors.</li>
                        </ol>
                    </div>
                </div>

                <!-- ITEM 6 (Tuition & Scholarships) -->
                <div class="faq-item bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden transition-all border border-surface-container-high"
                    data-category="tuition"
                    data-keywords="scholarship merit talent academic distinction financial waiver sports arts leadership">
                    <button
                        class="w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 focus:outline-none"
                        onclick="toggleFaq(this)" type="button">
                        <div class="flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">SCHOLARSHIPS</span>
                            <span class="font-headline-sm text-[17px] text-primary font-semibold">
                                What are the qualification criteria for the Unity Global Merit &amp; Talent Awards?
                            </span>
                        </div>
                        <span class="faq-icon material-symbols-outlined text-primary text-[24px] transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 pt-2 text-on-surface-variant font-body-md text-body-md">
                        <div class="space-y-3">
                            <div>
                                <strong class="text-primary">1. Unity Global Merit Scholarship (Academic):</strong>
                                <p class="mt-0.5 text-on-surface-variant">Available for Middle &amp; High School applicants maintaining a grade average of 90+, achieving 90th percentile scores on admissions diagnostics, or holding provincial/national STEM medals (up to 100% Development Fee coverage).</p>
                            </div>
                            <div>
                                <strong class="text-primary">2. Youth Talent &amp; Innovation Awards:</strong>
                                <p class="mt-0.5 text-on-surface-variant">Honors exceptional achievement in youth leadership, international performing arts, competitive sports, or distinguished cultural &amp; language accomplishments.</p>
                            </div>
                            <div>
                                <strong class="text-primary">3. Intake Quota:</strong>
                                <p class="mt-0.5 text-on-surface-variant">Scholarship reviews are evaluated during the Early Bird intake window through April 30, 2025, with select quotas allocated per cohort.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: 4-STEP TROUBLESHOOTING & GUIDANCE -->
    <section class="w-full px-4 lg:px-8 py-6 bg-surface">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">
                    Step-by-Step Roadmap
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary mt-1">
                    4-Step Admissions &amp; Application Guidance
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mt-2">
                    Follow these four straightforward steps to ensure a smooth application and enrollment verification process.
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
                            <span class="material-symbols-outlined text-[26px] text-on-surface-variant">mark_email_read</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Check Portal &amp; Email</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Sign in to the Unity School Parent Portal and verify your inbox/spam folder for your official Registration ID and document checklist confirmation link.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        <span>Automated Instant Alert</span>
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
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Connect via WhatsApp</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Forward technical questions, document validations, or specific diagnostic scheduling requests directly to your division counselor using your Registration ID.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">schedule</span>
                        <span>Response Time &lt; 15 Mins</span>
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
                            <span class="material-symbols-outlined text-[26px] text-tertiary-container">meeting_room</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Visit Welcome Lounge</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Visit our Admissions Welcome Pavilion situated on our 3.8-hectare master campus in South Jakarta. Enjoy comfortable lounge amenities and direct staff support.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-tertiary-container font-label-sm text-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">coffee</span>
                        <span>Complimentary Barista Lounge</span>
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
                            <span class="material-symbols-outlined text-[26px] text-primary">verified_user</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Final Offer Letter</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Following successful assessment completion, an official Letter of Acceptance (LoA) alongside new student orientation instructions will be generated digitally.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-high/60 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">how_to_reg</span>
                        <span>Official Enrollment Confirmed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: CAMPUS LOCATION & VISITOR GUIDE -->
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
                    We welcome prospective families to explore our learning environment, inspect STEAM research facilities, visit our digital libraries, and tour our integrated sports grounds.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left Column: Pavilion Details -->
                <div
                    class="lg:col-span-6 bg-surface-container-lowest p-6 sm:p-8 rounded-3xl shadow-sm space-y-6 border border-surface-container-high">
                    <div class="flex items-start gap-4">
                        <div class="p-3 rounded-2xl bg-primary text-on-primary">
                            <span class="material-symbols-outlined text-[28px]">domain</span>
                        </div>
                        <div>
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Main Campus Location</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary mt-1">Admissions Center &amp; Welcome Pavilion</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                Unity International Campus, Jl. Golden Archway No. 88, Golden Parkway District, South Jakarta 12560.
                            </p>
                        </div>
                    </div>
                    <!-- Operational Hours -->
                    <div class="p-4 rounded-2xl bg-surface-container-low space-y-3">
                        <div class="font-label-md text-label-md font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px] text-secondary">schedule</span>
                            <span>Admissions Welcome Desk Hours:</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                            <div class="flex flex-col p-3 rounded-xl bg-surface-container-lowest">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Monday - Friday</span>
                                <span class="font-headline-sm text-[16px] text-on-surface font-bold">08:00 - 16:00 WIB</span>
                                <span class="font-body-sm text-body-sm text-outline">Comprehensive consultation &amp; campus tour</span>
                            </div>
                            <div class="flex flex-col p-3 rounded-xl bg-surface-container-lowest">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Saturday (Open Desk)</span>
                                <span class="font-headline-sm text-[16px] text-on-surface font-bold">08:00 - 13:00 WIB</span>
                                <span class="font-body-sm text-body-sm text-outline">By appointment &amp; family tour</span>
                            </div>
                        </div>
                        <div class="font-body-sm text-body-sm text-outline flex items-center gap-1.5 pt-1">
                            <span class="material-symbols-outlined text-[16px] text-primary">event_available</span>
                            <span>Sundays &amp; Public Holidays: Available via Special Family Appointment</span>
                        </div>
                    </div>
                    <!-- Amenities -->
                    <div>
                        <span class="font-label-md text-label-md font-bold text-primary block mb-3">Parent Welcome Pavilion Amenities:</span>
                        <div class="grid grid-cols-2 gap-2 sm:gap-3">
                            <div class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                <span class="material-symbols-outlined text-[18px] text-tertiary-container">wifi</span>
                                <span>Parent Lounge &amp; High-Speed Wi-Fi</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                <span class="material-symbols-outlined text-[18px] text-tertiary-container">local_cafe</span>
                                <span>Complimentary Gourmet Coffee &amp; Tea</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                <span class="material-symbols-outlined text-[18px] text-tertiary-container">toys</span>
                                <span>Kids Discovery &amp; Play Zone</span>
                            </div>
                            <div class="flex items-center gap-2 p-2.5 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface">
                                <span class="material-symbols-outlined text-[18px] text-tertiary-container">directions_car</span>
                                <span>Campus Electric Buggy Tour (3.8 Ha)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center gap-3 pt-2">
                        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-semibold hover:bg-primary-container transition-colors shadow-sm"
                            href="https://maps.google.com" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">directions</span>
                            <span>Google Maps Directions</span>
                        </a>
                        <button
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-semibold hover:bg-secondary-fixed-dim transition-colors shadow-sm"
                            onclick="document.getElementById('inquiry-form-section').scrollIntoView({ behavior: 'smooth' })"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                            <span>Schedule Private Campus Tour</span>
                        </button>
                    </div>
                </div>

                <!-- Right Column: Visual Imagery -->
                <div class="lg:col-span-6 flex flex-col gap-4">
                    <div class="w-full h-80 rounded-3xl bg-cover bg-center shadow-sm relative overflow-hidden flex flex-col justify-end p-6 border border-surface-container-high"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDHCIGtZhsbBZVAbFzlp4pDb6TRVNxn2yanwQlCTGK-rNNeEIM1nZ8IWAWU_dhEhcHnUPGkUR9XYua7gTVlg1pi2_fEit7UE1wsDNfAmuRaz-f4ShXSS-oCr6er1NGvX68IRhFbEQoCZii0_gbtCK13HmwDFwCWCIbuAefW0GsAu4tjPOjnCpQeZVZEUg_yHBfAhw9t7BvqBDd6e446JJcklxI3Z6sK-mhM7FXm837luuDXOF446d4j')">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent"></div>
                        <div class="relative z-10 bg-surface-container-lowest/95 backdrop-blur-md p-4 rounded-2xl shadow-md flex items-center justify-between gap-4 border border-surface-container-high">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-secondary-container animate-pulse"></div>
                                <div>
                                    <div class="font-label-md text-label-md font-bold text-primary">Unity Admissions Welcome Pavilion</div>
                                    <div class="font-body-sm text-body-sm text-on-surface-variant">Main Reception &amp; Family Drop-off</div>
                                </div>
                            </div>
                            <a class="px-3 py-1.5 rounded-lg bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors flex items-center gap-1"
                                href="https://maps.google.com" target="_blank">
                                <span>Directions</span>
                                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="w-full h-44 rounded-2xl bg-cover bg-center shadow-sm relative overflow-hidden border border-surface-container-high"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBXVoeV_tIL7gFuCNjR3W7tWbR8DNAKqveH2Q-PuD-qCnXmcY5Gh-ik_xzmJ640qcHptO3ARDm1a2hvKtyNiuO5CmNVCIrraidFM13dq4O1yI0p9mV8taRpZGEwZA_HHjTm5_bg4tSc4GjswWXvI_0sOATj3ydqh51a8rdJlmgCcgwr2HhsZUqJe9pbEPwQKD2TnGY-RgIlSz5WD2eIHC9kwLsh_zgnTThaXe8hwJbCnIJVyQflGdjp')">
                            <div class="absolute bottom-2 left-2 px-2.5 py-1 rounded-lg bg-inverse-surface/85 text-inverse-on-surface text-label-sm font-label-sm">
                                Parent Welcome Lounge
                            </div>
                        </div>
                        <div class="w-full h-44 rounded-2xl bg-cover bg-center shadow-sm relative overflow-hidden border border-surface-container-high"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBirx_DO9Ay8_HtEcZ8rkyWOy46cxeAEdBrs6HiUroSNKaRoZrU-8SQCIVgeT_KD5gjC2j6tzVKxo5uq4wCNjblZ31DA4QY9G5ztdACjbE2bAgfMnebbNeUtjejgt7nh6a8Eyl-SFPMTK9CElEhgJBiKXn9lJIEAPl6FWo2NW5a-29ockVTsoZN2tUW4WGhFHhRXtuf5_B4wwYWrJRV5rOFybluel97-h8_FN3vXtqZlKHer6kdv9og')">
                            <div class="absolute bottom-2 left-2 px-2.5 py-1 rounded-lg bg-inverse-surface/85 text-inverse-on-surface text-label-sm font-label-sm">
                                Collaborative STEAM Labs
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: INQUIRY & TOUR BOOKING FORM -->
    <section class="w-full px-4 lg:px-8 py-8 bg-surface" id="inquiry-form-section">
        <div class="max-w-4xl mx-auto">
            <div class="bg-surface-container-lowest p-6 sm:p-10 rounded-3xl shadow-sm border border-surface-container-high">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                    <div>
                        <div class="inline-flex items-center gap-1 text-secondary font-label-sm text-label-sm uppercase tracking-wider font-bold mb-1">
                            <span class="material-symbols-outlined text-[16px]">contact_support</span>
                            <span>Direct Admissions Inquiry</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-primary">
                            Submit an Inquiry or Schedule a Consultation
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            Our Admissions Advisory team will contact you via WhatsApp or email within one business day to deliver comprehensive guidance.
                        </p>
                    </div>
                    <div class="hidden sm:flex w-14 h-14 rounded-2xl bg-surface-container-high items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[32px]">send</span>
                    </div>
                </div>
                <form class="space-y-6" id="ppdb-inquiry-form" onsubmit="handleInquirySubmit(event)">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                Parent / Guardian Full Name <span class="text-error">*</span>
                            </label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                placeholder="e.g., Stephanie Gunawan" required type="text" />
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                Active WhatsApp Number <span class="text-error">*</span>
                            </label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                placeholder="e.g., +62 812-3456-7890" required type="tel" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                Email Address <span class="text-error">*</span>
                            </label>
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors"
                                placeholder="name@domain.com" required type="email" />
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                                Target Academic Tier <span class="text-error">*</span>
                            </label>
                            <select
                                class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container transition-colors"
                                required>
                                <option disabled selected value="">-- Select Academic Tier --</option>
                                <option value="early-years">Early Years (Ages 3 - 5 | Reggio Emilia &amp; EYFS)</option>
                                <option value="primary">Primary School (Grades 1 - 5 | Cambridge Primary)</option>
                                <option value="middle">Middle School (Grades 6 - 8 | Cambridge Lower Secondary)</option>
                                <option value="high">Senior High School (Grades 9 - 12 | IGCSE &amp; IB DP)</option>
                                <option value="general">Bursar / Scholarships &amp; Financial Consultation</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                            Inquiry Category <span class="text-error">*</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <label class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                <input checked class="accent-primary" name="topic" type="radio" value="Online Application" />
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">Application Process</span>
                            </label>
                            <label class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                <input class="accent-primary" name="topic" type="radio" value="Placement & EAL" />
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">Placement &amp; EAL</span>
                            </label>
                            <label class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                <input class="accent-primary" name="topic" type="radio" value="Private Campus Tour" />
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">Private Campus Tour</span>
                            </label>
                            <label class="flex items-center gap-2 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                <input class="accent-primary" name="topic" type="radio" value="Tuition & Scholarships" />
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">Tuition &amp; Aid</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md font-semibold text-on-surface mb-2">
                            Inquiry Details or Campus Tour Request <span class="text-error">*</span>
                        </label>
                        <textarea
                            class="w-full px-4 py-3 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container transition-colors resize-none"
                            placeholder="Detail your child's current academic background, preferred tour dates, or specific curriculum inquiries..."
                            required rows="4"></textarea>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                        <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm">
                            <span class="material-symbols-outlined text-[18px] text-tertiary-container">lock</span>
                            <span>Your family data is secure and protected under strict institutional privacy standards.</span>
                        </div>
                        <button
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-primary-container transition-all shadow-md"
                            type="submit">
                            <span class="material-symbols-outlined text-[18px]">send</span>
                            <span>Submit to Admissions Team</span>
                        </button>
                    </div>
                    <div class="hidden p-4 rounded-xl bg-tertiary-container/15 text-tertiary flex items-center gap-3"
                        id="form-success-message">
                        <span class="material-symbols-outlined text-[24px]">task_alt</span>
                        <div class="font-body-md text-body-md">
                            <strong>Inquiry Successfully Submitted!</strong> Reference ID: <code>#UNITY-88219</code>. An academic advisor will reach out via WhatsApp and email shortly.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FLOATING ADMISSIONS ASIDE -->
    <aside class="fixed bottom-6 right-6 z-50 flex items-end flex-col gap-2 group">
        <div
            class="hidden group-hover:flex flex-col bg-surface-container-lowest p-3 rounded-xl shadow-[0_20px_30px_-10px_rgba(15,23,42,0.15)] max-w-xs transition-all border border-surface-container-high">
            <span class="font-label-md text-label-md text-primary font-bold mb-1">Unity Admissions Support</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Connect directly with division counselors:</p>
            <div class="grid grid-cols-2 gap-2">
                <a class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345801" target="_blank">Early Years</a>
                <a class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345802" target="_blank">Primary</a>
                <a class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345803" target="_blank">Middle School</a>
                <a class="flex items-center justify-center py-1.5 px-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface rounded-lg font-label-sm text-label-sm font-semibold transition-colors"
                    href="https://wa.me/628112345804" target="_blank">High School</a>
            </div>
        </div>
        <button
            class="flex items-center gap-2 bg-tertiary-container text-on-tertiary px-4 py-3 rounded-full shadow-[0_10px_25px_-5px_rgba(15,76,92,0.25)] hover:bg-tertiary transition-all"
            type="button">
            <span class="material-symbols-outlined text-[22px]">chat</span>
            <span class="font-label-md text-label-md hidden md:inline">Admissions WhatsApp</span>
        </button>
    </aside>
@endsection

@push('scripts')
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
            document.querySelectorAll('.category-filter-btn').forEach(btn => {
                if (btn.getAttribute('data-filter') === cat) {
                    btn.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');
                    btn.classList.remove('bg-surface-container-high', 'text-on-surface');
                } else {
                    btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                    btn.classList.add('bg-surface-container-high', 'text-on-surface');
                }
            });

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
