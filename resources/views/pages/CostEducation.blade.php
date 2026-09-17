@extends('layouts.app')

@section('title', 'Unity School | Cost of Education')

@section('content')
    <!-- Top Breadcrumb & Hero Notification Ribbon -->
    <section class="w-full bg-surface-container-lowest shadow-sm pt-16">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-6">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-2">
                <div class="max-w-3xl">
                    {{-- <div
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm mb-3">
                        <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                        <span class="font-bold tracking-wide uppercase">Cambridge Pathway &amp; IB World School Candidate • Accredited A</span>
                    </div> --}}
                    <h1 class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight mb-3">
                        Tuition &amp; Academic Investment Structure AY 2025/2026
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        A transparent and comprehensive fee structure for world-class Cambridge and International Baccalaureate (IB) education, supported by 0% interest installment plans, Sibling Privileges, and the Unity Global Merit Scholarship program.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm font-semibold"
                        href="#kalkulator-simulasi">
                        <span class="material-symbols-outlined text-[18px]">calculate</span>
                        <span>Interactive Fee Estimator</span>
                    </a>
                    <a class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-high text-on-surface font-label-md text-label-md hover:bg-surface-container-highest transition-colors font-medium"
                        href="#tabel-komparasi">
                        <span class="material-symbols-outlined text-[18px]">table_chart</span>
                        <span>4-Tier Comparison Table</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-6 pt-6 bg-surface-container-low p-4 rounded-xl">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-surface-container-lowest flex items-center justify-center text-tertiary shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">verified_user</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-on-surface font-bold">All-Inclusive Fees</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Includes digital learning &amp; lab resources</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">credit_card</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-on-surface font-bold">0% Interest Plan</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">BCA, Mandiri, CIMB 3-12 months</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-surface-container-lowest flex items-center justify-center text-tertiary-container shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">workspace_premium</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-on-surface font-bold">Merit Scholarship</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Up to 100% Development Fee waiver</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">contact_phone</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-on-surface font-bold">Parent Finance Desk</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Virtual &amp; in-person consultations</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Estimator / Fee Calculator Widget -->
    <section class="w-full py-6 px-4 lg:px-8" id="kalkulator-simulasi">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Interactive Fee Estimator</span>
                    <h2 class="font-headline-lg text-headline-lg text-primary font-bold">Educational Investment Cost Calculator 2025/2026</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Select the Cambridge/IB academic tier, admissions wave, and eligible scholarship schemes to estimate your family's educational investment.</p>
                </div>
                <div class="inline-flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm bg-surface-container-high px-3 py-1.5 rounded-lg">
                    <span class="material-symbols-outlined text-[16px] text-tertiary">verified</span>
                    <span>Official Rates Authorized by the Bursar Office</span>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <!-- Step 1 -->
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <label class="font-headline-sm text-headline-sm text-primary flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center">1</span>
                                Select Academic Tier
                            </label>
                            <span class="font-label-sm text-label-sm font-bold text-secondary bg-secondary-fixed px-2.5 py-1 rounded-full"
                                id="selected-grade-label">Primary School (Grades 1-5)</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <button class="grade-tab-btn flex flex-col p-3 rounded-xl bg-surface-container-low text-left transition-all hover:bg-surface-container-high"
                                data-grade="EY" type="button">
                                <span class="font-label-md text-label-md text-primary font-bold">Early Years</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Ages 3 - 5 (EYFS)</span>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold mt-2">DPP IDR 22,000,000</span>
                            </button>
                            <button class="grade-tab-btn active-grade flex flex-col p-3 rounded-xl bg-surface-container-high text-left transition-all hover:bg-surface-container-highest"
                                data-grade="PRI" type="button">
                                <span class="font-label-md text-label-md text-primary font-bold">Primary School</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Grades 1 - 5</span>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold mt-2">DPP IDR 38,000,000</span>
                            </button>
                            <button class="grade-tab-btn flex flex-col p-3 rounded-xl bg-surface-container-low text-left transition-all hover:bg-surface-container-high"
                                data-grade="MID" type="button">
                                <span class="font-label-md text-label-md text-primary font-bold">Middle School</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Grades 6 - 8</span>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold mt-2">DPP IDR 45,000,000</span>
                            </button>
                            <button class="grade-tab-btn flex flex-col p-3 rounded-xl bg-surface-container-low text-left transition-all hover:bg-surface-container-high"
                                data-grade="SHS" type="button">
                                <span class="font-label-md text-label-md text-primary font-bold">Senior High</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Grades 9 - 12 (IB/A-L)</span>
                                <span class="font-label-sm text-label-sm text-tertiary font-semibold mt-2">DPP IDR 55,000,000</span>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
                        <label class="font-headline-sm text-headline-sm text-primary flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center">2</span>
                            Intake Wave &amp; Period
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="relative flex items-start gap-3 p-4 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input checked class="mt-1 accent-primary" name="wave-radio" type="radio" value="early" />
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-md text-label-md font-bold text-primary">Intake Wave 1 (Early Bird)</span>
                                        <span class="font-label-sm text-label-sm bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded-full font-bold">Save IDR 4M - 8M</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Valid through April 30, 2025. International cohort capacity is capped at 20 students per class.</span>
                                </div>
                            </label>
                            <label class="relative flex items-start gap-3 p-4 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input class="mt-1 accent-primary" name="wave-radio" type="radio" value="regular" />
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md font-bold text-primary">Intake Wave 2 (Regular)</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">May 1 - June 30, 2025. Standard development fee rates apply per Bursar regulations.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
                        <label class="font-headline-sm text-headline-sm text-primary flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center">3</span>
                            Scholarship Schemes &amp; Privileges
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input checked class="mt-1 accent-primary" name="discount-radio" type="radio" value="none" />
                                <div>
                                    <span class="font-label-md text-label-md font-bold text-on-surface">Standard Enrollment</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Prospective student enrollment under standard terms</p>
                                </div>
                            </label>
                            <label class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input class="mt-1 accent-primary" name="discount-radio" type="radio" value="sibling" />
                                <div>
                                    <span class="font-label-md text-label-md font-bold text-on-surface">Sibling Privilege (15%)</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">15% Development Fee deduction for the 2nd sibling (20% for 3rd+)</p>
                                </div>
                            </label>
                            <label class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input class="mt-1 accent-primary" name="discount-radio" type="radio" value="merit" />
                                <div>
                                    <span class="font-label-md text-label-md font-bold text-on-surface">Unity Global Merit Scholarship (30%)</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Awarded for outstanding CAT4 diagnostic scores and panel review</p>
                                </div>
                            </label>
                            <label class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <input class="mt-1 accent-primary" name="discount-radio" type="radio" value="legacy" />
                                <div>
                                    <span class="font-label-md text-label-md font-bold text-on-surface">Continuum Pathway Legacy (25%)</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Internal graduates advancing to Primary, Middle, or High School</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
                        <label class="font-headline-sm text-headline-sm text-primary flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center">4</span>
                            Optional Monthly Services &amp; Co-Curriculars
                        </label>
                        <div class="flex flex-col gap-2.5">
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <div class="flex items-center gap-3">
                                    <input class="w-4 h-4 accent-primary rounded" id="catering-check" type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">Healthy Gourmet Lunch &amp; Snacks (Certified Nutritionist)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Organic, allergen-free, and certified balanced menu</span>
                                    </div>
                                </div>
                                <span class="font-label-md text-label-md font-bold text-primary whitespace-nowrap">+ IDR 1,450,000</span>
                            </label>
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <div class="flex items-center gap-3">
                                    <input class="w-4 h-4 accent-primary rounded" id="jemputan-check" type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">Two-Way Safe Shuttle Service (Radius up to 15 KM)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Air-conditioned fleet with real-time GPS tracking and chaperone</span>
                                    </div>
                                </div>
                                <span class="font-label-md text-label-md font-bold text-primary whitespace-nowrap">+ IDR 1,650,000</span>
                            </label>
                            <label class="flex items-center justify-between p-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container-high cursor-pointer transition-all">
                                <div class="flex items-center gap-3">
                                    <input class="w-4 h-4 accent-primary rounded" id="steam-check" type="checkbox" />
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">After-School STEAM Robotics &amp; AI Academy</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Twice weekly intensive coding, competition robotics, and public speaking</span>
                                    </div>
                                </div>
                                <span class="font-label-md text-label-md font-bold text-primary whitespace-nowrap">+ IDR 650,000</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Right Calculation Summary Card -->
                <div class="lg:col-span-5 lg:sticky lg:top-24">
                    <div class="bg-primary text-on-primary p-6 md:p-8 rounded-3xl shadow-xl flex flex-col gap-6 relative overflow-hidden">
                        <div class="absolute -right-16 -top-16 w-56 h-56 rounded-full bg-secondary-container opacity-20 blur-3xl pointer-events-none"></div>
                        <div class="flex items-center justify-between pb-4 bg-primary-container/40 p-4 rounded-xl backdrop-blur-md">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary-fixed-dim">receipt_long</span>
                                <span class="font-label-md text-label-md font-bold tracking-wide uppercase">Investment Projection</span>
                            </div>
                            <span class="font-label-sm text-label-sm bg-tertiary-container text-on-tertiary-container px-2.5 py-1 rounded-full font-semibold">AY 2025/2026</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="font-body-sm text-body-sm text-surface-container-highest">Selected Tier &amp; Program:</span>
                            <div class="flex items-center justify-between">
                                <span class="font-headline-md text-headline-md font-bold text-on-primary" id="res-unit-title">Primary School (Grades 1-5)</span>
                                <span class="font-label-sm text-label-sm bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded-full font-bold" id="res-wave-pill">Early Bird Active</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2.5 pt-4 bg-primary-container/20 p-4 rounded-2xl">
                            <div class="flex items-center justify-between font-body-sm text-body-sm">
                                <span class="text-surface-container-highest">Application &amp; Assessment Fee</span>
                                <span class="font-bold text-on-primary" id="res-form-fee">IDR 750,000</span>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm">
                                <span class="text-surface-container-highest">Development Fee (DPP)</span>
                                <span class="font-bold text-on-primary" id="res-base-dpp">IDR 38,000,000</span>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm text-secondary-fixed-dim font-medium">
                                <span id="res-discount-name">Early Bird Wave 1</span>
                                <span id="res-discount-val">- IDR 6,000,000</span>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm">
                                <span class="text-surface-container-highest">Monthly Tuition Fee (Month 1)</span>
                                <span class="font-bold text-on-primary" id="res-spp">IDR 4,600,000</span>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm">
                                <span class="text-surface-container-highest">Uniform, Starter &amp; Lab Kit</span>
                                <span class="font-bold text-on-primary" id="res-kit">IDR 2,200,000</span>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm">
                                <span class="text-surface-container-highest">Digital Learning &amp; Cambridge License</span>
                                <span class="font-bold text-on-primary" id="res-license">IDR 1,450,000</span>
                            </div>
                            <div class="hidden flex items-center justify-between font-body-sm text-body-sm text-tertiary-fixed font-medium" id="res-addons-row">
                                <span>Selected Add-On Services</span>
                                <span id="res-addons-val">+ IDR 0</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 pt-2">
                            <span class="font-label-md text-label-md text-surface-container-highest">Total Initial Investment:</span>
                            <div class="flex items-baseline gap-2">
                                <span class="font-display-mobile text-display-mobile font-extrabold text-secondary-fixed-dim" id="res-grand-total">IDR 41,000,000</span>
                                <span class="font-body-sm text-body-sm text-surface-container-highest">nett</span>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <span class="font-label-sm text-label-sm font-bold tracking-wide uppercase text-on-primary">0% Per-Term Installment Facility</span>
                                <span class="font-label-sm text-label-sm text-tertiary-fixed font-semibold">Partner Banks: BCA / Mandiri</span>
                            </div>
                            <div class="grid grid-cols-3 gap-2 text-center">
                                <div class="p-2.5 rounded-lg bg-primary-container/60 flex flex-col">
                                    <span class="font-label-sm text-[11px] text-surface-container-highest">Term 1 (50%)</span>
                                    <span class="font-label-md text-[13px] font-bold text-on-primary mt-1" id="res-term-1">IDR 20,500,000</span>
                                    <span class="font-body-sm text-[10px] text-surface-container-highest">Upon Acceptance</span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-primary-container/60 flex flex-col">
                                    <span class="font-label-sm text-[11px] text-surface-container-highest">Term 2 (25%)</span>
                                    <span class="font-label-md text-[13px] font-bold text-on-primary mt-1" id="res-term-2">IDR 10,250,000</span>
                                    <span class="font-body-sm text-[10px] text-surface-container-highest">November 2025</span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-primary-container/60 flex flex-col">
                                    <span class="font-label-sm text-[11px] text-surface-container-highest">Term 3 (25%)</span>
                                    <span class="font-label-md text-[13px] font-bold text-on-primary mt-1" id="res-term-3">IDR 10,250,000</span>
                                    <span class="font-body-sm text-[10px] text-surface-container-highest">February 2026</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2.5 pt-2">
                            <a class="w-full py-3 px-4 rounded-xl bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary-container font-label-md text-label-md font-bold flex items-center justify-center gap-2 transition-all shadow-md"
                                href="#apply-now">
                                <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                                <span>Apply for this Academic Tier</span>
                            </a>
                            <button class="w-full py-2.5 px-4 rounded-xl bg-surface-container-lowest/15 hover:bg-surface-container-lowest/25 text-on-primary font-label-md text-label-md font-semibold flex items-center justify-center gap-2 transition-colors"
                                onclick="window.print()" type="button">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                                <span>Download PDF Fee Estimate</span>
                            </button>
                        </div>
                        <p class="font-body-sm text-body-sm text-surface-container-highest text-center">Fee quotes are formally ratified upon issuance of the official Letter of Acceptance (LoA).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Comparative Table Section -->
    <section class="w-full py-6 px-4 lg:px-8 bg-surface-container-lowest shadow-sm" id="tabel-komparasi">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div>
                    <span class="font-label-md text-label-md text-tertiary font-bold uppercase tracking-wider">Fee Transparency Matrix</span>
                    <h2 class="font-headline-lg text-headline-lg text-primary font-bold">Academic Investment Comparison Across All Tiers</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Structured comprehensive fee breakdown for Cambridge Pathway &amp; IB Diploma Programme at Unity School.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary text-[22px]">info</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant font-medium">All figures in Indonesian Rupiah (IDR) • Taxes &amp; academic licenses included</span>
                </div>
            </div>
            <div class="overflow-x-auto rounded-2xl shadow-sm bg-surface-container-low">
                <table class="w-full text-left font-body-md text-body-md min-w-[760px]">
                    <thead>
                        <tr class="bg-primary text-on-primary">
                            <th class="p-4 lg:p-5 font-headline-sm text-headline-sm font-bold w-1/4">Cost Component</th>
                            <th class="p-4 lg:p-5 font-headline-sm text-headline-sm font-bold text-center">
                                <span>Early Years</span>
                                <span class="block font-label-sm text-label-sm font-normal text-surface-container-highest">Ages 3 - 5 (EYFS)</span>
                            </th>
                            <th class="p-4 lg:p-5 font-headline-sm text-headline-sm font-bold text-center">
                                <span>Primary School</span>
                                <span class="block font-label-sm text-label-sm font-normal text-surface-container-highest">Grades 1 - 5 (Cambridge)</span>
                            </th>
                            <th class="p-4 lg:p-5 font-headline-sm text-headline-sm font-bold text-center">
                                <span>Middle School</span>
                                <span class="block font-label-sm text-label-sm font-normal text-surface-container-highest">Grades 6 - 8 (Lower Sec)</span>
                            </th>
                            <th class="p-4 lg:p-5 font-headline-sm text-headline-sm font-bold text-center bg-primary-container">
                                <div class="inline-flex items-center gap-1 justify-center">
                                    <span>Senior High School</span>
                                    <span class="material-symbols-outlined text-[16px] text-secondary-fixed">star</span>
                                </div>
                                <span class="block font-label-sm text-label-sm font-normal text-secondary-fixed">Grades 9 - 12 (IGCSE &amp; IB DP)</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-high text-on-surface">
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Application &amp; Diagnostic Assessment Fee</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">One-time payment during account registration and cognitive assessment</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 600,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 750,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 850,000</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">IDR 950,000</td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Development Fee / DPP (One-Time per Tier)</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Campus facility growth, STEM research laboratories, auditorium, and sports facilities</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 22,000,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 38,000,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 45,000,000</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">IDR 55,000,000</td>
                        </tr>
                        <tr class="bg-secondary-fixed/40 hover:bg-secondary-fixed/60 transition-colors">
                            <td class="p-4 font-bold text-secondary">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[18px]">verified</span>
                                    <span>Early Bird Wave 1 Discount (DPP Deduction)</span>
                                </div>
                                <span class="block font-body-sm text-body-sm text-on-secondary-fixed-variant font-normal">Direct promotional incentive valid through April 30, 2025</span>
                            </td>
                            <td class="p-4 text-center font-bold text-secondary">- IDR 4,000,000</td>
                            <td class="p-4 text-center font-bold text-secondary">- IDR 6,000,000</td>
                            <td class="p-4 text-center font-bold text-secondary">- IDR 7,000,000</td>
                            <td class="p-4 text-center font-bold text-secondary bg-secondary-fixed/70">- IDR 8,000,000</td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Monthly Tuition Fee</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Includes international instruction, online Cambridge resources, and laboratory access</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">
                                IDR 3,200,000
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">/month</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">
                                IDR 4,600,000
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">/month</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">
                                IDR 5,800,000
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">/month</span>
                            </td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">
                                IDR 7,200,000
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">/month</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Student Uniform &amp; Starter Kit (5 Sets + Lab Coat)</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Blazer, institutional uniform, physical education sports kit, lab coat &amp; house crest</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 1,800,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 2,200,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 2,500,000</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">IDR 2,800,000</td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Digital Learning &amp; Resource License (Annual)</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Cambridge Elevate, Oxford Reading Club, Microsoft 365 Pro, and research database access</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 950,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 1,450,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 1,850,000</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">IDR 2,400,000</td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Annual Medical Check-Up &amp; Student Insurance</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Annual pediatric medical assessment, dental check-up, and comprehensive 24-hr student accident insurance</span>
                            </td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 450,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 550,000</td>
                            <td class="p-4 text-center font-bold text-on-surface">IDR 650,000</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">IDR 750,000</td>
                        </tr>
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="p-4 font-semibold text-primary">
                                <span>Cambridge / IB External Exam Fee</span>
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">Terminal exams at Grade 10 (IGCSE) and Grade 12 (A-Levels / IB DP)</span>
                            </td>
                            <td class="p-4 text-center text-on-surface-variant font-medium">-</td>
                            <td class="p-4 text-center text-on-surface-variant font-medium">-</td>
                            <td class="p-4 text-center text-on-surface-variant font-medium">Optional Checkpoint</td>
                            <td class="p-4 text-center font-bold text-primary bg-surface-container-high/40">As per CIE/IBO Regulations</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="bg-surface-container-highest text-primary font-bold">
                            <td class="p-4">Estimated Initial Intake Payment (Early Bird Wave 1)</td>
                            <td class="p-4 text-center font-headline-sm text-headline-sm">IDR 25,000,000</td>
                            <td class="p-4 text-center font-headline-sm text-headline-sm">IDR 41,000,000</td>
                            <td class="p-4 text-center font-headline-sm text-headline-sm">IDR 49,650,000</td>
                            <td class="p-4 text-center font-headline-sm text-headline-sm bg-secondary-fixed/50 text-secondary">IDR 61,100,000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-4 p-4 rounded-xl bg-surface-container-low text-on-surface-variant font-body-sm text-body-sm">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-tertiary text-[20px]">task_alt</span>
                    <span>Tuition includes digital textbooks, science laboratory consumables, term examinations, and mandatory co-curricular clubs.</span>
                </div>
                <a class="text-primary font-bold hover:underline inline-flex items-center gap-1 whitespace-nowrap" href="#">
                    <span class="material-symbols-outlined text-[16px]">file_download</span>
                    <span>Download Fee Schedule &amp; Financial Policy PDF</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Special Discounts & Scholarship Schemes -->
    <section class="w-full py-6 px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Merit &amp; Privilege Framework</span>
                <h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Scholarship Policies &amp; Family Privileges</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">Unity School recognizes academic distinction, global talents, and long-term continuity across all our learning tiers.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-[28px]">family_restroom</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-tertiary font-bold uppercase tracking-wide">Family Privilege</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mt-1 mb-2">Sibling Privilege Discount</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">A <strong>15% DPP reduction</strong> for the second child and <strong>20% DPP reduction</strong> for the third child onwards studying concurrently.</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Req: Family Card / Birth Certificate</span>
                        <span class="material-symbols-outlined text-[18px] text-tertiary">check_circle</span>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant mb-4">
                            <span class="material-symbols-outlined text-[28px]">workspace_premium</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-tertiary-container font-bold uppercase tracking-wide">Academic Excellence</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mt-1 mb-2">Unity Global Merit Scholarship</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Development Fee discounts ranging from <strong>25% to 100%</strong> for applicants demonstrating exceptional cognitive results via CAT4 and panel interview.</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Req: Assessment Score &gt; 90%</span>
                        <span class="material-symbols-outlined text-[18px] text-tertiary">check_circle</span>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant mb-4">
                            <span class="material-symbols-outlined text-[28px]">military_tech</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wide">Sports, Arts &amp; STEM</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mt-1 mb-2">Youth Talent &amp; Innovation</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Up to <strong>50% DPP subsidy</strong> for medalists of recognized international science olympiads (IJSO, SASMO, WRO), accredited fine arts, or national athletes.</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Req: Portfolio Certificate &amp; Audition</span>
                        <span class="material-symbols-outlined text-[18px] text-tertiary">check_circle</span>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-surface-container-highest flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-[28px]">timeline</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wide">Internal Continuum</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mt-1 mb-2">Continuum Pathway Legacy</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">A <strong>25% DPP fee reduction</strong> and waived application fee for existing Unity students advancing between Early Years, Primary, Middle, and High School.</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Automatic via Unity Student ID</span>
                        <span class="material-symbols-outlined text-[18px] text-tertiary">check_circle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Procedures & Campus Loket TU Section -->
    <section class="w-full py-6 px-4 lg:px-8 bg-surface-container-lowest shadow-sm">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5 flex flex-col gap-6">
                    <div>
                        <span class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Payment Channels &amp; Finance</span>
                        <h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Official Payment Channels &amp; Bursar Services</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">Unity School provides automated multi-currency Virtual Account billing and personalized Bursar finance desks on campus.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-low shadow-sm flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center">
                                <span class="material-symbols-outlined text-[22px]">account_balance</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Bursar &amp; Finance Desk</h4>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Admissions Welcome Pavilion, Level 1</span>
                            </div>
                        </div>
                        <div class="space-y-2 font-body-sm text-body-sm text-on-surface">
                            <div class="flex items-center justify-between py-1 border-b border-surface-container-high">
                                <span class="text-on-surface-variant">Monday - Friday</span>
                                <span class="font-bold">08:00 - 16:00 WIB</span>
                            </div>
                            <div class="flex items-center justify-between py-1 border-b border-surface-container-high">
                                <span class="text-on-surface-variant">Saturday (Consultations Only)</span>
                                <span class="font-bold">08:30 - 13:00 WIB</span>
                            </div>
                            <div class="flex items-center justify-between py-1">
                                <span class="text-on-surface-variant">Partner Banking Channels</span>
                                <span class="font-bold text-tertiary">BCA, Mandiri, CIMB Niaga, BNI &amp; 0% Credit Card</span>
                            </div>
                        </div>
                        <div class="p-3 bg-secondary-fixed/50 rounded-xl flex items-start gap-2.5">
                            <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5">lock</span>
                            <p class="font-body-sm text-body-sm text-on-secondary-fixed-variant">
                                <strong>Official Transaction Notice:</strong> All admission fees and tuition invoices must only be remitted through official Unity School Virtual Accounts or via on-site EDC terminals at the Bursar Desk.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 flex flex-col gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-low hover:bg-surface-container-high transition-all flex flex-col sm:flex-row items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center shrink-0">1</div>
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Online Application &amp; Diagnostic Fee</h3>
                                <span class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed px-2 py-0.5 rounded-full font-bold">Step 1</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Parents register prospective student data on the admissions portal, upload academic records from the past two years, and pay the assessment fee via automatic Virtual Account (IDR/USD).</p>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-low hover:bg-surface-container-high transition-all flex flex-col sm:flex-row items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-tertiary text-on-tertiary font-headline-sm text-headline-sm font-bold flex items-center justify-center shrink-0">2</div>
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Academic Assessment &amp; Bursar Consultation</h3>
                                <span class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 rounded-full font-bold">Step 2</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">The applicant undergoes cognitive diagnostic and English assessments. Concurrently, parents may consult with Bursar officers regarding installment plans and scholarship validations.</p>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl bg-surface-container-low hover:bg-surface-container-high transition-all flex flex-col sm:flex-row items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-secondary text-on-secondary font-headline-sm text-headline-sm font-bold flex items-center justify-center shrink-0">3</div>
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Letter of Acceptance (LoA) &amp; Enrollment Completion</h3>
                                <span class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed px-2 py-0.5 rounded-full font-bold">Step 3</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Following LoA issuance, parents complete the initial commitment (Term 1) to secure enrollment quota. Schedules for uniform fitting and student orientation are then dispatched.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion & Live Consultation Section -->
    <section class="w-full py-6 px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-8 flex flex-col gap-6">
                    <div>
                        <span class="font-label-md text-label-md text-secondary font-bold uppercase tracking-wider">Tuition &amp; Financial FAQ</span>
                        <h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Frequently Asked Financial Questions</h2>
                    </div>
                    <div class="flex flex-col gap-3" id="faq-container">
                        <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm transition-all faq-item">
                            <button class="w-full flex items-center justify-between text-left faq-btn" type="button">
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">Does the monthly tuition fee include Cambridge digital resources and course texts?</span>
                                <span class="material-symbols-outlined text-primary transform transition-transform faq-icon">expand_more</span>
                            </button>
                            <div class="faq-content hidden mt-3 pt-3 border-t border-surface-container-high font-body-md text-body-md text-on-surface-variant">
                                Yes. All international digital licenses (Cambridge Elevate, Oxford Reading Club, Microsoft 365 Pro, learning portals) and primary curriculum textbooks are included in the tuition schedule. Parents will not incur unannounced fees for standard modules or compulsory materials.
                            </div>
                        </div>
                        <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm transition-all faq-item">
                            <button class="w-full flex items-center justify-between text-left faq-btn" type="button">
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">How does the 0% per-term installment facility function?</span>
                                <span class="material-symbols-outlined text-primary transform transition-transform faq-icon">expand_more</span>
                            </button>
                            <div class="faq-content hidden mt-3 pt-3 border-t border-surface-container-high font-body-md text-body-md text-on-surface-variant">
                                Unity School provides an internal 3-term installment schedule without interest (Term 1 50% upon acceptance, Term 2 25% in November, and Term 3 25% in February). Furthermore, 0% interest credit card facilities ranging from 6 to 12 months are accessible with partner banks (BCA, Mandiri, and CIMB Niaga).
                            </div>
                        </div>
                        <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm transition-all faq-item">
                            <button class="w-full flex items-center justify-between text-left faq-btn" type="button">
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">What is the deadline for Early Bird Wave 1, and can fees be transferred during relocation?</span>
                                <span class="material-symbols-outlined text-primary transform transition-transform faq-icon">expand_more</span>
                            </button>
                            <div class="faq-content hidden mt-3 pt-3 border-t border-surface-container-high font-body-md text-body-md text-on-surface-variant">
                                Early Bird Wave 1 privileges conclude on April 30, 2025. In instances of documented corporate or diplomatic relocation overseas prior to session commencement, Development Fees paid may be 75% refunded or deferred to the subsequent academic year without penalty.
                            </div>
                        </div>
                        <div class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm transition-all faq-item">
                            <button class="w-full flex items-center justify-between text-left faq-btn" type="button">
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">Is English as an Additional Language (EAL) assistance provided for transfer students?</span>
                                <span class="material-symbols-outlined text-primary transform transition-transform faq-icon">expand_more</span>
                            </button>
                            <div class="faq-content hidden mt-3 pt-3 border-t border-surface-container-high font-body-md text-body-md text-on-surface-variant">
                                Yes. Dedicated EAL specialists deliver integrated immersion coaching within daily school hours to support accelerated linguistic proficiency, ensuring every student smoothly adapts to the Cambridge and IB framework.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 flex flex-col gap-4">
                    <div class="p-6 rounded-2xl bg-surface-container-low shadow-sm flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center">
                                <span class="material-symbols-outlined text-[20px]">support_agent</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Bursar Advisory</h4>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Parent Financial Counseling</span>
                            </div>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">Consult your tuition plan, corporate sponsorship arrangements, or merit scholarship verifications directly with our financial officers.</p>
                        <div class="flex flex-col gap-2 pt-2">
                            <a class="w-full py-2.5 px-4 rounded-xl bg-tertiary-container text-on-tertiary font-label-md text-label-md font-semibold flex items-center justify-center gap-2 hover:bg-tertiary transition-colors"
                                href="https://wa.me/62215550199?text=Hello,%20I%20would%20like%20to%20consult%20with%20the%20Bursar%20Office" target="_blank">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                                <span>WhatsApp Bursar Desk</span>
                            </a>
                            <a class="w-full py-2.5 px-4 rounded-xl bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold flex items-center justify-center gap-2 hover:bg-surface-container-highest transition-colors"
                                href="tel:+62215550199">
                                <span class="material-symbols-outlined text-[18px]">call</span>
                                <span>+62 21 555-0199 (Ext. 104)</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl bg-primary text-on-primary shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-2 text-secondary-fixed">
                            <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                            <span class="font-label-sm text-label-sm font-bold uppercase tracking-wide">Campus Tour &amp; Discovery</span>
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-primary font-bold">Campus Visit &amp; Principal Dialogue</h4>
                        <p class="font-body-sm text-body-sm text-surface-container-highest">Explore our international STEM labs, performing arts pavilion, and consult directly with our Academic Leadership team.</p>
                        <a class="mt-2 inline-flex items-center justify-center py-2 px-4 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md font-bold hover:bg-surface-container-high transition-colors"
                            href="#faq-and-contact">Book Private Campus Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Call to Action Banner -->
    <section class="w-full py-8 px-4 lg:px-8 bg-surface-container-low" id="apply-now">
        <div class="max-w-7xl mx-auto">
            <div class="relative overflow-hidden rounded-3xl bg-primary text-on-primary p-8 md:p-12 shadow-xl flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="relative z-10 max-w-2xl flex flex-col gap-3 text-center md:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold w-fit mx-auto md:mx-0">
                        <span class="material-symbols-outlined text-[16px]">alarm</span>
                        <span>Early Bird Intake AY 2025/2026 Closing Soon</span>
                    </div>
                    <h2 class="font-headline-xl text-headline-xl text-on-primary font-bold tracking-tight">
                        Secure Your Child's Placement at Unity School International
                    </h2>
                    <p class="font-body-md text-body-md text-surface-container-highest">
                        Receive up to IDR 8,000,000 in early enrollment savings and guarantee your seat in a strictly capped cohort of maximum 20 students per class.
                    </p>
                </div>
                <div class="relative z-10 flex flex-col sm:flex-row gap-3 w-full md:w-auto shrink-0">
                    <a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary-container font-label-lg text-label-lg font-bold transition-all shadow-md"
                        href="https://wa.me/62215550199?text=Hello,%20I%20would%20like%20to%20apply%20online%20for%20Unity%20School%20admissions">
                        <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                        <span>Start Online Application</span>
                    </a>
                    <a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-surface-container-lowest/15 hover:bg-surface-container-lowest/25 text-on-primary font-label-lg text-label-lg font-semibold transition-colors"
                        href="#">
                        <span>Schedule Bursar Consultation</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        (function() {
            var feeData = {
                EY: {
                    name: 'Early Years (EYFS)',
                    form: 600000,
                    dpp: 22000000,
                    earlyDiscount: 4000000,
                    spp: 3200000,
                    kit: 1800000,
                    license: 950000
                },
                PRI: {
                    name: 'Primary School (Grades 1-5)',
                    form: 750000,
                    dpp: 38000000,
                    earlyDiscount: 6000000,
                    spp: 4600000,
                    kit: 2200000,
                    license: 1450000
                },
                MID: {
                    name: 'Middle School (Grades 6-8)',
                    form: 850000,
                    dpp: 45000000,
                    earlyDiscount: 7000000,
                    spp: 5800000,
                    kit: 2500000,
                    license: 1850000
                },
                SHS: {
                    name: 'Senior High School (Grades 9-12)',
                    form: 950000,
                    dpp: 55000000,
                    earlyDiscount: 8000000,
                    spp: 7200000,
                    kit: 2800000,
                    license: 2400000
                }
            };

            var currentGrade = 'PRI';

            function formatIDR(num) {
                return 'IDR ' + Math.round(num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            }

            function calculateTotal() {
                var data = feeData[currentGrade];
                if (!data) return;

                var waveRadio = document.querySelector('input[name="wave-radio"]:checked');
                var isEarlyBird = waveRadio && waveRadio.value === 'early';
                var waveDiscount = isEarlyBird ? data.earlyDiscount : 0;

                var discountRadio = document.querySelector('input[name="discount-radio"]:checked');
                var discountType = discountRadio ? discountRadio.value : 'none';

                var extraDiscount = 0;
                var discountLabel = isEarlyBird ? 'Early Bird Wave 1 Discount' : 'Promotional Discount';

                if (discountType === 'sibling') {
                    extraDiscount = data.dpp * 0.15;
                    discountLabel = isEarlyBird ? 'Early Bird + Sibling Privilege (15%)' : 'Sibling Privilege Discount (15%)';
                } else if (discountType === 'merit') {
                    extraDiscount = data.dpp * 0.30;
                    discountLabel = isEarlyBird ? 'Early Bird + Merit Scholarship (30%)' : 'Global Merit Scholarship (30%)';
                } else if (discountType === 'legacy') {
                    extraDiscount = data.dpp * 0.25;
                    discountLabel = isEarlyBird ? 'Early Bird + Pathway Legacy (25%)' : 'Continuum Pathway Legacy (25%)';
                }

                var totalDiscount = waveDiscount + extraDiscount;

                var cateringChecked = document.getElementById('catering-check').checked;
                var jemputanChecked = document.getElementById('jemputan-check').checked;
                var steamChecked = document.getElementById('steam-check').checked;
                var addonsTotal = (cateringChecked ? 1450000 : 0) + (jemputanChecked ? 1650000 : 0) + (steamChecked ? 650000 : 0);

                var effectiveDpp = data.dpp - totalDiscount;
                if (effectiveDpp < 0) effectiveDpp = 0;

                var grandTotal = data.form + effectiveDpp + data.spp + data.kit + data.license + addonsTotal;

                document.getElementById('res-unit-title').textContent = data.name;
                document.getElementById('res-wave-pill').textContent = isEarlyBird ? 'Early Bird Active' : 'Regular Intake';
                document.getElementById('res-form-fee').textContent = formatIDR(data.form);
                document.getElementById('res-base-dpp').textContent = formatIDR(data.dpp);
                document.getElementById('res-discount-name').textContent = discountLabel;
                document.getElementById('res-discount-val').textContent = '- ' + formatIDR(totalDiscount);
                document.getElementById('res-spp').textContent = formatIDR(data.spp);
                document.getElementById('res-kit').textContent = formatIDR(data.kit);
                document.getElementById('res-license').textContent = formatIDR(data.license);

                var addonsRow = document.getElementById('res-addons-row');
                var addonsVal = document.getElementById('res-addons-val');
                if (addonsTotal > 0) {
                    addonsRow.classList.remove('hidden');
                    addonsVal.textContent = '+ ' + formatIDR(addonsTotal);
                } else {
                    addonsRow.classList.add('hidden');
                }

                document.getElementById('res-grand-total').textContent = formatIDR(grandTotal);

                var term1 = Math.round(grandTotal * 0.5);
                var term2 = Math.round(grandTotal * 0.25);
                var term3 = grandTotal - term1 - term2;

                document.getElementById('res-term-1').textContent = formatIDR(term1);
                document.getElementById('res-term-2').textContent = formatIDR(term2);
                document.getElementById('res-term-3').textContent = formatIDR(term3);
            }

            var gradeButtons = document.querySelectorAll('.grade-tab-btn');
            gradeButtons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    gradeButtons.forEach(function(b) {
                        b.classList.remove('bg-surface-container-high', 'active-grade');
                        b.classList.add('bg-surface-container-low');
                    });
                    btn.classList.remove('bg-surface-container-low');
                    btn.classList.add('bg-surface-container-high', 'active-grade');

                    currentGrade = btn.getAttribute('data-grade');
                    var gradeTitles = {
                        EY: 'Early Years (Ages 3-5)',
                        PRI: 'Primary School (Grades 1-5)',
                        MID: 'Middle School (Grades 6-8)',
                        SHS: 'Senior High School (Grades 9-12)'
                    };
                    document.getElementById('selected-grade-label').textContent = gradeTitles[currentGrade];
                    calculateTotal();
                });
            });

            document.querySelectorAll('input[name="wave-radio"]').forEach(function(input) {
                input.addEventListener('change', calculateTotal);
            });

            document.querySelectorAll('input[name="discount-radio"]').forEach(function(input) {
                input.addEventListener('change', calculateTotal);
            });

            document.getElementById('catering-check').addEventListener('change', calculateTotal);
            document.getElementById('jemputan-check').addEventListener('change', calculateTotal);
            document.getElementById('steam-check').addEventListener('change', calculateTotal);

            calculateTotal();

            var faqBtns = document.querySelectorAll('.faq-btn');
            faqBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var content = btn.parentElement.querySelector('.faq-content');
                    var icon = btn.querySelector('.faq-icon');
                    var isHidden = content.classList.contains('hidden');

                    document.querySelectorAll('.faq-content').forEach(function(c) {
                        c.classList.add('hidden');
                    });
                    document.querySelectorAll('.faq-icon').forEach(function(i) {
                        i.classList.remove('rotate-180');
                    });

                    if (isHidden) {
                        content.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    }
                });
            });
        })();
    </script>
@endpush
