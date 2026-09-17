@extends('layouts.app')
@section('title', 'Unity School | Academic Programs - Senior High School')

@section('content')
    <!-- Hero & Executive Overview -->
    <section class="w-full pt-16 pb-space-lg bg-surface">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Main Lead (Col 7) -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <div
                        class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-container/20 text-secondary w-fit">
                        <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                        <span class="font-label-md text-label-md font-bold">Academic Year 2025/2026 Admissions Open</span>
                    </div>
                    <h1 class="font-display text-headline-xl lg:text-display text-primary tracking-tight">
                        Cultivating Future Leaders &amp; World-Class Global Scholars
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        Integrating Cambridge IGCSE, Cambridge International AS &amp; A-Levels, and the International Baccalaureate Diploma Programme (IB DP Candidate) with principled character building, agile leadership, and intensive 1-on-1 counseling toward World Top 50 Universities.
                    </p>
                    <!-- Quota Alert Pill -->
                    <div
                        class="p-4 rounded-xl bg-surface-container-high flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[24px] text-secondary">info</span>
                            <div>
                                <p class="font-label-md text-label-md text-primary font-bold">Early Bird Wave 1: 12 Seats Remaining</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Specifically for Grade 9 intake and Grade 10 transfer applications for the Fall 2025 semester.</p>
                            </div>
                        </div>
                        <a class="px-4 py-2 rounded-lg bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors whitespace-nowrap"
                            href="#pendaftaran">
                            Apply for Selection
                        </a>
                    </div>
                    <!-- Key Metrics Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                        <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                            <span class="font-display text-headline-lg text-primary">100%</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Accepted into Leading Global &amp; Top Domestic Colleges</span>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                            <span class="font-display text-headline-lg text-primary">1450+</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Average SAT Cohort Score / 8.0 IELTS</span>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                            <span class="font-display text-headline-lg text-primary">1:10</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Academic Mentor to Student Ratio</span>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col">
                            <span class="font-display text-headline-lg text-primary">15+</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Advanced STEAM &amp; MUN Research Laboratories</span>
                        </div>
                    </div>
                </div>
                <!-- Right Side: Head of High School Message Card & Media (Col 5) -->
                <div class="lg:col-span-5 flex flex-col gap-4">
                    <div class="relative rounded-2xl overflow-hidden bg-surface-container shadow-md">
                        <img class="w-full h-64 object-cover"
                            data-alt="High school international classroom at Unity School with students engaged in collaborative scientific discussion alongside modern laboratory equipment"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmA094slgQMx6HnOAN3AUYEveECEsqZzOLWRGaUtsLZgNumJaw7XLAhUpegDXyn9WnRjaFhphTwpTiJM9DxsmLddQFKPxyp3pIL-fTs0vRiGzZQxL--doT9ez8xmHcqJo5DXc6Klyf8Vxrnqyn2erQkjtJTd8ZPO0gTI1tPCxFzaCiWZRN3RECcLn1QBnZvKul-fVGcXS3FXcxMad0hlpl8LiDHI46NrVpx_jXvLgou8A6Ej5j5N-7" />
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-3 py-1 rounded-full bg-primary/90 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                                South Jakarta Campus
                            </span>
                        </div>
                    </div>
                    <!-- Principal Card -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <img class="w-16 h-16 rounded-full object-cover shadow-sm"
                                data-alt="Professional portrait of Mr. Jonathan Miller, Head of Senior High School"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIk-PXTocQvAmZw3xTLwhg-BXLzMZDDzwWwA82nmhFl4kcY0Jhn207lB4tUyLeRTSlug-GCJKQO-4TTXE8BpFxVN_K0M472TQINKLAs6JwRZBzAa4KYHq3P2cu1ZQ--SI0sRJwBclk1axBGyZTpOiOtRylnBLzo5nOv9jXuVUfW8OcGNqouNjQYxO5-61jWeklS_JFDNLA_-rJc_zUtqQwXLjtRS8YqRgrj4nVOsWmzChbOnG0Ij2T" />
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-primary">Mr. Jonathan Miller, M.Sc.</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Head of Senior High &amp; University Placement (Alumnus, Univ. of Oxford)</span>
                                <span
                                    class="mt-1 inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary font-bold">
                                    <span class="material-symbols-outlined text-[14px]">verified</span>
                                    Certified Cambridge Senior Lead
                                </span>
                            </div>
                        </div>
                        <blockquote class="font-body-md text-body-md text-on-surface-variant italic leading-relaxed">
                            "At Unity Senior High School, our goal extends beyond academic examination triumphs. We mentor students into principled creators, culturally grounded thinkers, and innovative leaders poised to excel at premier universities worldwide."
                        </blockquote>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex items-center gap-1 text-secondary-container">
                                <span class="material-symbols-outlined text-[18px]">star</span>
                                <span class="material-symbols-outlined text-[18px]">star</span>
                                <span class="material-symbols-outlined text-[18px]">star</span>
                                <span class="material-symbols-outlined text-[18px]">star</span>
                                <span class="material-symbols-outlined text-[18px]">star</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Senior High Academic Directorate</span>
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
                    class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Educational Excellence</span>
                <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Three Core Pillars of Unity Senior High School</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                    A comprehensive educational framework uniting analytical mastery, individualized career advisory, and experiential community leadership.
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
                        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pillar 01</span>
                        <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">Global Academic Rigor &amp; Dual Pathway</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            An integrated Cambridge IGCSE foundation in Grades 9–10 followed by flexible choice between Cambridge International A-Levels or the IB Diploma Programme in Grades 11–12, taught exclusively by certified international educators.
                        </p>
                    </div>
                    <ul
                        class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Official Cambridge CAIE examination center
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Multilingual immersion &amp; advanced research frameworks
                        </li>
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
                        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pillar 02</span>
                        <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">1-on-1 College Counseling &amp; Top 50 Advisory</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Targeted collegiate mentoring starting in Grade 9: major selection mapping, intensive SAT &amp; IELTS prep, personal statement workshops, and interview simulations for Ivy League, Russell Group, and premier national universities.
                        </p>
                    </div>
                    <ul
                        class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Network partnerships with 80+ universities abroad
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Premium access to BridgeU and Naviance platforms
                        </li>
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
                        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pillar 03</span>
                        <h3 class="font-headline-md text-headline-md text-primary mt-1 mb-3">STEAM Labs, Research &amp; Leadership</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Applied Capstone research, Model United Nations (MUN) conferences, international science competitions, and Community Action Service (CAS) projects preparing students for direct societal impact.
                        </p>
                    </div>
                    <ul
                        class="mt-6 pt-4 flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Pre-university scientific research and publication coaching
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[16px]">check_circle</span>
                            Student social enterprise incubation
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Dual Academic Pathway Curriculum & Electives -->
    <section class="w-full py-space-lg bg-surface">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                <div>
                    <span class="font-label-md text-label-md text-secondary font-bold uppercase">Curriculum Architecture</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Dual Academic Pathway: Flexibility for Global Aspirations</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                    Students choose the qualification pathway best aligned with their career ambitions, individual study methods, and target international university jurisdictions.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Track A: Cambridge A-Levels -->
                <div
                    class="p-8 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold">Track A • Specialization Focus</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant font-medium">Grades 11 - 12</span>
                        </div>
                        <h3 class="font-headline-lg text-headline-lg text-primary mb-2">Cambridge International AS &amp; A-Levels</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                            Tailored for students seeking deep subject mastery across 3 to 4 chosen disciplines. Highly recommended for direct entry into Medicine, Engineering, Law, and Economics in the UK, Singapore, Australia, and elite domestic programs.
                        </p>
                        <div class="space-y-4">
                            <div>
                                <p class="font-label-md text-label-md text-primary font-bold mb-2">Key Subject Electives:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Pure Mathematics &amp; Statistics</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Further Mathematics</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Advanced Physics</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Chemistry &amp; Biology</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Economics &amp; Business</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">Computer Science (Python &amp; SQL)</span>
                                    <span class="px-3 py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">English Language &amp; Literature</span>
                                </div>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <p class="font-label-sm text-label-sm text-primary font-bold">Key Advantages at Unity:</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                    Eligible for college advanced standing credits (AP Equivalency) across US universities and direct qualification for accelerated 3-year Commonwealth undergraduate programs.
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
                                class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">Track B • Holistic Breadth</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant font-medium">Grades 11 - 12 (Candidate)</span>
                        </div>
                        <h3 class="font-headline-lg text-headline-lg text-primary mb-2">IB Diploma Programme (DP Candidate)</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                            A comprehensive multidisciplinary framework comprising 6 subject groups (Higher Level &amp; Standard Level) reinforced by the mandatory DP Core: Theory of Knowledge (TOK), the 4,000-word Extended Essay (EE), and Creativity, Activity, Service (CAS).
                        </p>
                        <div class="space-y-4">
                            <div>
                                <p class="font-label-md text-label-md text-primary font-bold mb-2">DP Core Framework &amp; Clusters:</p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                    <div class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">psychology</span>
                                        <div>
                                            <p class="font-label-sm text-label-sm font-bold text-primary">Theory of Knowledge</p>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Epistemology &amp; critical inquiry</p>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">history_edu</span>
                                        <div>
                                            <p class="font-label-sm text-label-sm font-bold text-primary">Extended Essay (EE)</p>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Independent academic thesis</p>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">volunteer_activism</span>
                                        <div>
                                            <p class="font-label-sm text-label-sm font-bold text-primary">CAS Experience</p>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Creativity, activity &amp; service</p>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg bg-surface-container-high flex items-start gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">public</span>
                                        <div>
                                            <p class="font-label-sm text-label-sm font-bold text-primary">6 Subject Groups</p>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Languages, Sciences, Math, Humanities</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low">
                                <p class="font-label-sm text-label-sm text-primary font-bold">IB Learner Distinctions:</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                    Recognized by Ivy League and global admission officers for rigorous multidisciplinary synthesis and collegiate-level self-management.
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
                        <h3 class="font-headline-md text-headline-md text-primary">Daily Learning Rhythm for Senior High Students</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">07:45 – 15:30 WIB (With optional mentoring and research suites through 16:45 WIB)</p>
                    </div>
                    <span
                        class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold w-fit">
                        Full-Day International Schedule
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-surface-container-low">
                        <span class="font-label-sm text-label-sm text-secondary font-bold">07:45 – 08:15 WIB</span>
                        <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Morning Assembly &amp; Advisory</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Community reflection, ethical discussion, and weekly academic check-ins with homeroom advisors.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-surface-container-low">
                        <span class="font-label-sm text-label-sm text-secondary font-bold">08:15 – 12:00 WIB</span>
                        <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Advanced Academic Blocks</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Seminars in sciences, analytical mathematics, laboratory investigations, and literature seminars.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-surface-container-low">
                        <span class="font-label-sm text-label-sm text-secondary font-bold">12:00 – 13:00 WIB</span>
                        <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">Lunch &amp; Social Interaction</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Nutritious meals in the Dining Hall, prayer and meditation spaces, and campus green space recreation.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-surface-container-low">
                        <span class="font-label-sm text-label-sm text-secondary font-bold">13:00 – 15:30 WIB</span>
                        <h4 class="font-label-lg text-label-lg text-primary mt-1 mb-1">College Prep &amp; Co-Curriculars</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Hands-on lab experiments, SAT/IELTS workshops, MUN rehearsals, robotics, or Olympiad coaching.</p>
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
                        <span class="font-label-md text-label-md text-secondary font-bold uppercase">Enrollment &amp; Allocation</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Admissions Criteria &amp; Seat Availability</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            Senior High School admissions are reviewed holistically, evaluating academic readiness, cognitive potential, and character alignment.
                        </p>
                    </div>
                    <!-- Quota Meters -->
                    <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm space-y-6">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-label-lg text-label-lg text-primary font-bold">Grade 9 Cohort (AY 2025/2026)</span>
                                <span class="font-label-sm text-label-sm text-secondary font-bold">48 / 60 Seats (80% Filled)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden">
                                <div class="h-full bg-primary rounded-full" style="width: 80%;"></div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">12 Early Bird quota seats remaining with exclusive institutional tuition privileges.</p>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-label-lg text-label-lg text-primary font-bold">Transfer Admissions (Grades 10 &amp; 11)</span>
                                <span class="font-label-sm text-label-sm text-secondary font-bold">12 / 20 Seats (60% Filled)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-surface-container-high overflow-hidden">
                                <div class="h-full bg-secondary-container rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Subject to credit syllabus matching and subject diagnostic evaluations.</p>
                        </div>
                    </div>
                    <!-- 3 Admission Pathways -->
                    <div class="space-y-3">
                        <h3 class="font-headline-sm text-headline-sm text-primary">3 Primary Admission Pathways:</h3>
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                            <div class="p-2.5 rounded-lg bg-primary-container text-on-primary">
                                <span class="material-symbols-outlined text-[20px]">military_tech</span>
                            </div>
                            <div>
                                <p class="font-label-lg text-label-lg text-primary font-bold">1. Unity Global Merit &amp; Academic Excellence</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Substantial tuition and development fee waivers (up to 100%) for medalists in national/international academic olympiads or outstanding CAT4 diagnostic scores.
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                            <div class="p-2.5 rounded-lg bg-surface-container-high text-primary">
                                <span class="material-symbols-outlined text-[20px]">route</span>
                            </div>
                            <div>
                                <p class="font-label-lg text-label-lg text-primary font-bold">2. Continuum Pathway (Unity Middle School Graduates)</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Direct progression exempt from standard diagnostic evaluations with dedicated continuity tuition credits for Grade 8 graduates.
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-4">
                            <div class="p-2.5 rounded-lg bg-surface-container-high text-primary">
                                <span class="material-symbols-outlined text-[20px]">flight_takeoff</span>
                            </div>
                            <div>
                                <p class="font-label-lg text-label-lg text-primary font-bold">3. International Transfer &amp; Talent Pathway</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Dedicated for international expatriates, returning overseas families, and distinguished talents in performing arts, athletics, or coding.
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
                            <h3 class="font-headline-sm text-headline-sm text-primary">Digital Document Checklist</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Required uploads via the parent application portal:</p>
                        </div>
                    </div>
                    <div class="space-y-3 mt-6">
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input checked class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Formal Digital Passport Photo</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Recent portrait, plain background, high resolution (max 2MB).</span>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input checked class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Certified Transcripts (Last 2 Years)</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Grades 7 and 8 academic reports certified by the previous school.</span>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Official Civil Identity</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Birth Certificate &amp; Family Card (or valid Passports &amp; KITAS for international students).</span>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">English Proficiency Certificate</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">IELTS, TOEFL Junior, or Cambridge Checkpoint results (where available).</span>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Counselor Recommendation Letter</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">1 letter from a former school counselor or principal.</span>
                            </div>
                        </label>
                        <label
                            class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                            <input class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary"
                                type="checkbox" />
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Distinction Portfolio (Scholarship Applicants)</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Olympiad certificates, coding repositories, debate or arts honors.</span>
                            </div>
                        </label>
                    </div>
                    <div class="mt-6 pt-4">
                        <a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-primary-container transition-colors shadow-sm"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                            <span>Start Online Admissions Application</span>
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
                <span class="font-label-md text-label-md text-secondary font-bold uppercase">Learning Environment</span>
                <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Research &amp; Arts Facilities</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                    Engineered to reflect collegiate academic spaces, specialized science laboratories, and high-performance research studios.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Facility 1 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Futuristic high-performance computer lab at Unity School with sleek monitors displaying code"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH3CXRYqh9sz0HhT6e9weilttRBkze2jVQZKlwQteYvYjd5xc_87IKBAKWibnInTOJmefPWWfcV12KnAzrnjVJrC0BgLqHvUe1LDPWzn1p5BwbA2VACHBylnqF9PYk_utISaQUdsl5JNrjkmhsbLcikYSEq8XjEMWxSS9u1tJc0iwa2wwwQzKEhDjePmsUXGj90tC_wdFn-vmKIXxEmKcip0N9srzgobiOd1rTW2iCy3-ow8XqnhcH" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            AI &amp; Computing
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">AI &amp; GPU High-Performance Cluster</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            40+ high-compute workstations dedicated to machine learning, scientific data modeling, and competition robotics engineering.
                        </p>
                    </div>
                </div>
                <!-- Facility 2 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Advanced Cambridge science laboratory with digital microscopes and organized lab benches"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTZpZtNZlMzxCSmccjJ95ZGFDcjMu21C0FBs7ayADQct1hn3aQTGgtCsRn_effBPaTd9ZEBJ8pmURnB-2MJFBJ4UW--1a6wxB-uP6Wo2bff0_9VDxH5pe8t-nI28W_70Ccgh_Ul2sMt-drkkJafApOdUvdSX3zwvci79aR6p_xDMVKx_KrEcO7KCQOw9jscw13uvDTbjaEXUUiJcfAZ8z0Yg8nupnn_3rAiY0pi_qbUrPDcIEqN7yE" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            Science &amp; Research
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Cambridge Wet &amp; Dry Science Labs</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Dedicated laboratories (Physics, Chemistry, Biology) meeting international containment and digital measurement benchmarks.
                        </p>
                    </div>
                </div>
                <!-- Facility 3 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="University placement center with glass consultation pods and college guidance resources"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwFmG5mcRYeKuyxTD1Qrx2mxibytdDJydWlLkhkxYS6btM9vaHFEzJNmYR84981Jejado4WSnj-tbBY9K7YjsfhT78DEXp39Zay-QHUhns420vwbTHJve_0gwvSGIWVlaXHtBQMoBSfIicytBO-p7vn8rz6Jcxn5mUJAV0oNaXi8SndgpaJ-NRfyrwAwgmNr42Ro62bAthgLW6lZ_D7F1gXhruYlVH7eHgURy05oHyHzHuhvXd07p2" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            Counseling Suites
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">University Guidance &amp; Silent Pods</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Private advising suites for scholarship interviews alongside quiet study booths for Extended Essay and Capstone preparation.
                        </p>
                    </div>
                </div>
                <!-- Facility 4 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Grand theater auditorium with 800 seats and professional stage lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSGGr-FkWRUo77imiqVzuBTZ2XxAlyIUHO5eSM0tZzzUUBo6xEM9w3idT6NxXJtzTXvUI64iknKsesfZyV31HBA-gdXsR8yLXxi9IRzTe7xF24JFudSjAGf9zVmz77zaSUpVBuFj-D_zkirm4XzCpyO-cy-j3ibKMRjMitLS_Vp-QyKAxxfX9YlMw9-ivpb9f04AGxiX3eQ8kc6AF2-v0z-vKQZSXbJkpAF5H0RLnuwfNtV1ib069N" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            Performing Arts
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">800-Seat Performing Arts Auditorium</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Acoustically treated concert hall supporting orchestral recitals, theatre productions, and international Model UN conferences.
                        </p>
                    </div>
                </div>
                <!-- Facility 5 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Olympic sized indoor swimming pool with swim lanes"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuASDM1wUZRIkkCorPf6AjSOXObSUkBlBprKopyyBW_tStrfghnq7S3sskKO9v5U52iLSDnLcKWuCtAoe7InjIyddBagelcuIe2AOPo4Jgags8UHiLQXKmnk9cThmdRe2w2JSWQ3dIFmoSIQ8IHmsgh2HHBmA3h3_7_bSOr-sdz_DMtSw4F4dp2RStxe83tv3RJRN0S6NBdfLfTJpllwNSiqdVBz44ChmVwdLA2gkvJe8ZDwIUkAPtIm" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            Athletics
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Semi-Olympic Pool &amp; Sports Complex</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            FINA-regulation heated pool and an indoor multipurpose sports arena accommodating FIBA basketball, badminton, and fitness conditioning.
                        </p>
                    </div>
                </div>
                <!-- Facility 6 -->
                <div
                    class="group rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Bright organic cafeteria with wood tables, healthy food counter, and indoor plants"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoKTFFYPhYpW8Kt7y2aorENq3TPf6eC-MGMXqFmXoN-Brqw7d_x3SrovmGUu54tugeA27pmzrmu9Wg7QvjCAn24WFAauwuL__lR4kTki6l4LK1PeY8HBrYlZgKt4ZQ5PdulJVOIGztsdODL1fXaXJmhEf-KVTe1R2d_amPwfHans0-RhVK_42hSkOG89AskRCwspfR5OBt2ibR6cX05ya7c0XUHKmR7Jjbt4UiKvJHHV-ias1zW_ma" />
                        <span
                            class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 text-on-primary font-label-sm text-label-sm backdrop-blur-md">
                            Dining &amp; Social
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Organic Student Dining &amp; Cafe</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Nutritionist-certified dining services offering wholesome balanced menus with relaxed outdoor seating terraces.
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
                            class="font-label-md text-label-md text-secondary font-bold uppercase">Financial Transparency</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary mt-1">Senior High School Tuition Schedule</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-xl">
                            A clear, comprehensive tuition structure without hidden charges. Covers Cambridge digital resources, laboratory access, overseas college counseling, and student insurance.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-high text-primary font-label-md text-label-md font-semibold hover:bg-surface-container-highest transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">calculate</span>
                            <span>0% Installment Simulator</span>
                        </button>
                        <a class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">payments</span>
                            <span>Sibling Discount Policies</span>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Fee Card 1 -->
                    <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold">Initial Admissions Fee</span>
                                <span
                                    class="p-1.5 rounded-lg bg-surface-container-highest text-primary material-symbols-outlined text-[18px]">assignment_turned_in</span>
                            </div>
                            <p class="font-headline-sm text-headline-sm text-primary font-bold">Application &amp; Assessment</p>
                            <div class="mt-4 mb-2">
                                <span class="font-display text-headline-xl text-primary">IDR 850,000</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">/ one-time</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Includes CAT4 Cognitive Testing, English CEFR Diagnostic Assessment, and a private interview session with our Senior Counselor.
                            </p>
                        </div>
                        <div
                            class="mt-6 pt-4 text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check</span> Diagnostic results released in 2 business days
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
                                    class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold uppercase">Early Bird Rate</span>
                                <span
                                    class="material-symbols-outlined text-secondary-container text-[20px]">workspace_premium</span>
                            </div>
                            <p class="font-headline-sm text-headline-sm text-on-primary font-bold">Development Fee (DPP)</p>
                            <div class="mt-4 mb-2">
                                <span class="font-display text-headline-xl text-on-primary">IDR 47,000,000</span>
                                <span
                                    class="font-body-sm text-body-sm text-on-primary-container line-through block sm:inline sm:ml-2">IDR 55,000,000</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-primary-container leading-relaxed">
                                Covers institutional capital and laboratory facilities for the full 3-year tenure. Save IDR 8,000,000 by completing Early Bird settlement prior to April 30, 2025.
                            </p>
                        </div>
                        <div
                            class="mt-6 pt-4 text-secondary-container font-label-sm text-label-sm font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">credit_card</span> 0% 3-term or 6-term installment plans available
                        </div>
                    </div>
                    <!-- Fee Card 3 -->
                    <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold">Monthly Term Fee</span>
                                <span
                                    class="p-1.5 rounded-lg bg-surface-container-highest text-primary material-symbols-outlined text-[18px]">calendar_today</span>
                            </div>
                            <p class="font-headline-sm text-headline-sm text-primary font-bold">Monthly Tuition (SPP)</p>
                            <div class="mt-4 mb-2">
                                <span class="font-display text-headline-xl text-primary">IDR 7,200,000</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">/ month</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Covers all laboratory consumables, Cambridge digital subscriptions, overseas university advising, regular SAT/IELTS prep, and student athletic center access.
                            </p>
                        </div>
                        <div
                            class="mt-6 pt-4 text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">lock</span> No unannounced laboratory surcharges
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
                        <span class="font-label-md text-label-md text-secondary font-bold uppercase">Admissions Advisory</span>
                        <h2 class="font-headline-lg text-headline-lg text-primary mt-1">Plan Your Child's Future with Us</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                            Our High School academic advisors are ready to consult on career pathways, subject track selection (A-Levels / IB DP), and university portfolio strategies.
                        </p>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row items-center gap-4 p-4 rounded-xl bg-surface-container-low">
                        <img class="w-20 h-20 rounded-xl object-cover shadow-sm"
                            data-alt="Portrait of Ms. Sarah Daniswara, Senior Admissions Counselor at Unity School"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9qUPokr8ubUyNmwTvQvwjHw2r0op7bxwG03S4dLnp-vKBK4dO_spwHBxLwf2MNVv3BAjFR9JNwuFbSI9sMyXlxgB2uF5rMdQlnuN2KhBcGlRiOv_gnGvmcl6UYlbezQsTKdeFRJzhSzXdRqmahFGB5CH6rL7S54keK7c27hGM5zSAmo4-ZocqcrZukKypn_vZi4fGifVg3CmQCDpQlQe1BQfeAfidTBwskEHDVTiEFbXetDWcSIDI" />
                        <div>
                            <p class="font-headline-sm text-headline-sm text-primary">Ms. Sarah Daniswara, M.Ed.</p>
                            <p class="font-label-md text-label-md text-secondary font-semibold">Senior High Admissions &amp; Scholarship Advisor</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Available for in-person consultations and virtual video appointments.</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a class="flex-1 inline-flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-bold hover:bg-tertiary transition-colors shadow-sm"
                            href="https://wa.me/628112345804" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            <span>WhatsApp Counselor Desk</span>
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
                            <h3 class="font-headline-sm text-headline-sm text-primary">Admissions Welcome Pavilion</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Level 2, Senior High Academic Tower</p>
                        </div>
                        <span
                            class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
                            Monday – Saturday
                        </span>
                    </div>
                    <div class="w-full h-56 bg-cover bg-center rounded-xl shadow-inner relative overflow-hidden"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAm1jfA4PHQsjJlOvPX8HMdW_Tx5haNY7vChSUtW16w3YmRC7-pTT0POoRPyioRKWu9CcTMYfxFXqFbcrujwbikkHoLFhBBqnpYxyxiT6fLMF8Mn2T7zE9lUdP03G1BpD1Xt8A3J8l1aFF7LmK5Dl-W6wCLnOQOlQCsvXaAAvMhjkvxxOwbPXrVBnDD_XMTm7UBPnPkq3T64QyxwdKPWMvGYlmybCVwm-qWoprDQFwYVpKUmsoU6INa');">
                        <div
                            class="absolute bottom-3 left-3 bg-surface-container-lowest/95 backdrop-blur-sm p-3 rounded-lg max-w-xs shadow-sm">
                            <p class="font-label-sm text-label-sm text-primary font-bold">Unity Senior High Campus</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jl. Golden Archway No. 88, South Jakarta</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm pt-2">
                        <span class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                            08:00 – 16:00 WIB
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-primary text-[18px]">local_parking</span>
                            Guest Parking Available
                        </span>
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
                <span>Academic Year 2025/2026 Admissions</span>
            </div>
            <h2 class="font-display text-headline-xl lg:text-display max-w-3xl leading-tight">
                Secure Your Placement at Unity Senior High School Today
            </h2>
            <p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl mt-4 mb-8 leading-relaxed">
                Empower your child with international academic excellence, comprehensive mentoring, and seamless progression into leading global institutions.
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <a class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg font-bold hover:bg-secondary-fixed-dim transition-all shadow-md"
                    href="#">
                    <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                    <span>Apply Online Now</span>
                </a>
                <a class="inline-flex items-center gap-2 px-6 py-4 rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold hover:bg-surface-container-high hover:text-primary transition-all"
                    href="#biaya">
                    <span class="material-symbols-outlined text-[20px]">download</span>
                    <span>Download Fee &amp; Admissions Schedule</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Floating Admissions Aside -->
    <aside class="fixed bottom-6 right-6 z-50 flex items-end flex-col gap-2 group">
        <div
            class="hidden group-hover:flex flex-col bg-surface-container-lowest p-3 rounded-xl shadow-[0_20px_30px_-10px_rgba(15,23,42,0.15)] max-w-xs transition-all">
            <span class="font-label-md text-label-md text-primary font-bold mb-1">Unity Admissions Helpdesk</span>
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
