@extends('layouts.app')

@section('title', 'Unity School | PPDB 2025/2026')

@section('content')
    <div class="flex flex-col w-full">
            <!-- 1. HERO SECTION (Immersive Editorial Canvas) -->
<section
        class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface pt-20 md:pt-14 pb-space-xl">
        <!-- Ambient light glow -->
        <div class="absolute -top-24 right-10 w-96 h-96 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none">
        </div>
        <div class="absolute top-1/3 -left-20 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-8 md:pt-6">
            <!-- Institutional Badges Pill Strip -->
            <div class="flex flex-wrap items-center gap-2 mb-6">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-lowest shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-secondary-container animate-ping"></span>
                    <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-bold">Admissions
                        2025/2026 Wave 1</span>
                </div>
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-[16px] text-primary">verified</span> Cambridge
                    International &amp; IB Candidate
                </div>
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-[16px] text-tertiary">workspace_premium</span>
                    SPK Accredited A (Exemplary)
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
                        Nurturing globally-minded learners of exemplary character through an integrated
                        Cambridge Pathway, the International Baccalaureate framework, and active bilingual
                        immersion from early childhood.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-md hover:bg-secondary hover:text-on-secondary transition-all"
                            data-path="apply-now" href="#apply-now">
                            <span>Apply for Admission</span>
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
                                100 QS Univ &amp; Premier Colleges</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-display text-display text-primary tracking-tighter">1 : 20</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Educator
                                to Student Ratio</span>
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
                        <div class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-primary/5 pointer-events-none">
                        </div>
                        <div class="flex items-center justify-between pb-4">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-error animate-pulse"></span>
                                <span
                                    class="font-label-md text-label-md text-primary uppercase tracking-wider font-semibold">Intake
                                    Wave 1 • Early Bird</span>
                            </div>
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">55
                                Seats Left</span>
                        </div>

                        <div class="pb-4">
                            <div class="flex justify-between items-baseline mb-2">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Seats Filled
                                    Across All Levels (EY-High)</span>
                                <span class="font-label-md text-label-md text-primary font-bold">185 / 240
                                    Seats</span>
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
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Days</span>
                            </div>
                            <span class="text-on-surface-variant font-bold">:</span>
                            <div>
                                <span class="block font-headline-sm text-headline-sm text-primary font-bold"
                                    id="cd-hours">09</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Hours</span>
                            </div>
                            <span class="text-on-surface-variant font-bold">:</span>
                            <div>
                                <span class="block font-headline-sm text-headline-sm text-primary font-bold"
                                    id="cd-mins">42</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Mins</span>
                            </div>
                            <span class="text-on-surface-variant font-bold">:</span>
                            <div>
                                <span class="block font-headline-sm text-headline-sm text-secondary font-bold"
                                    id="cd-secs">18</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Secs</span>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                            <span class="flex items-center gap-1.5"><span
                                    class="material-symbols-outlined text-[16px] text-primary">apartment</span>
                                School Tour: Open Daily</span>
                            <a class="text-primary font-label-sm text-label-sm font-semibold hover:underline"
                                data-path="faq-and-contact" href="#faq-and-contact">Schedule Now →</a>
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
                                <span class="font-label-sm text-label-sm tracking-wider uppercase opacity-90">Integrated
                                    School Bekasi</span>
                                <p class="font-headline-sm text-headline-sm">21st Century Collaborative Learning Spaces
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION & GLOBAL BENCHMARKS STRIP (School Profile) -->
<section id="school-profile" class="w-full bg-primary text-on-primary py-10 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary-container text-[26px]">school</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm">4 Integrated Levels</h3>
                        <p class="font-body-sm text-body-sm text-surface-container-high mt-1">Seamless curriculum continuity from Early Childhood (Toddler &amp; Kindergarten), Primary, Junior High, to High School.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary-container text-[26px]">language</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm">Multilingual Mastery</h3>
                        <p class="font-body-sm text-body-sm text-surface-container-high mt-1">100% English instructional immersion, enhanced by specialized Mandarin language electives.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary-container text-[26px]">psychology</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm">Holistic Character</h3>
                        <p class="font-body-sm text-body-sm text-surface-container-high mt-1">
                            A balanced synthesis of moral integrity, social empathy, and future-ready global leadership values.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center shrink-0">
                        <span
                            class="material-symbols-outlined text-secondary-container text-[26px]">rocket_launch</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm">Global Pathways</h3>
                        <p class="font-body-sm text-body-sm text-surface-container-high mt-1">Dedicated higher education counseling from Grade 9 toward Ivy League, Russell Group, Australia Go8, and top domestic institutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. ACADEMIC DIVISIONS SHOWCASE (Bento Style Cards) -->
<section id="academic-programs" class="w-full py-space-xl bg-surface scroll-mt-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span
                        class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-2 font-bold">Academic
                        Tiers &amp; Curricula</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary">Educational Pathways at
                        Unity School</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                    Each academic tier is purposefully structured to foster holistic motor skills,
                    social-emotional development, cognitive mastery, and emergent leadership at every developmental stage.
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
                            Ages 2 - 6 Years
                        </div>
                        {{-- <div
                            class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                            Reggio Emilia &amp; EYFS
                        </div> --}}
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-headline-md text-headline-md text-primary">Toddler
                                </h3>
                                <span class="material-symbols-outlined text-secondary text-[24px]">child_care</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                At Unity Montessori School, we provide a thoughtfully prepared environment that nurtures
                                well-rounded growth and inspires a lifelong love for learning through guided, hands-on
                                discovery.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Thoughtfully Prepared Environment
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Balanced Holistic Growth
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Guided Independence
                                </li>
                            </ul>
                        </div>
                        <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                            href="#tuition-and-scholarships">
                            <span>Explore Toddler Program</span>
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
                            Grades 1 - 6 (Primary)
                        </div>
                        {{-- <div
                            class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                            Cambridge Primary
                        </div> --}}
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-headline-md text-headline-md text-primary">Primary School</h3>
                                <span class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Through collaborative projects and guided experiences, our students grow in confidence
                                and character, turning every school day into an inspiring journey of friendship and
                                shared achievement.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Teamwork & Collaboration
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Guided Independence
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Holistic & Joyful Learning
                                </li>
                            </ul>
                        </div>
                        <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                            href="#tuition-and-scholarships">
                            <span>Explore Primary School Program</span>
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
                            Grades 7 - 9 (Junior High)
                        </div>
                        {{-- <div
                            class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                            Cambridge Lower Sec
                        </div> --}}
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-headline-md text-headline-md text-primary">Junior High School</h3>
                                <span class="material-symbols-outlined text-primary text-[24px]">terminal</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Our Junior High School program guides adolescent learners through a pivotal stage of
                                growth, empowering them to cultivate leadership, critical thinking, and strong ethical
                                character within an inspiring collaborative environment.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Collaborative Leadership
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Creative Expression & Innovation
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Character & Self-Discovery
                                </li>
                            </ul>
                        </div>
                        <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                            href="#tuition-and-scholarships">
                            <span>Explore Junior High School Program</span>
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
                            Grades 10 - 12 (Senior High)
                        </div>
                        {{-- <div
                            class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary">
                            IGCSE, A-Level &amp; IB
                        </div> --}}
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-headline-md text-headline-md text-primary">Senior High School</h3>
                                <span
                                    class="material-symbols-outlined text-secondary text-[24px]">account_balance</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Every milestone captured reflects our students' dedication to excellence, purposeful
                                leadership, and the proactive drive required to shape their own futures with confidence
                                and clarity.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Academic Dedication & Achievement
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Purposeful Leadership & Collaboration
                                </li>
                                <li class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-tertiary">check_circle</span>
                                    Maturity & Forward Ambition
                                </li>
                            </ul>
                        </div>
                        <a class="inline-flex items-center justify-between w-full pt-4 text-primary font-label-md text-label-md group-hover:text-secondary transition-colors"
                            href="#tuition-and-scholarships">
                            <span>Explore Senior High School Program</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SEAMLESS 5-STEP ADMISSIONS JOURNEY (Alur Pendaftaran Terpadu) -->
<section class="bg-surface-container-low relative overflow-hidden" id="alur-dan-syarat">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Simple
                    &amp; Transparent Roadmap</span>
                <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-2">
                    Admissions Process 2025/2026
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mt-3">
                    A seamless blend of fast online registration from home and on-campus document verification to ensure data validity and a comfortable experience for your child.
                </p>

            </div>
            <!-- 5-Step Process Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 relative">
                <!-- Step 1 (Warna: bg-primary -> hover:border-primary) -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between items-start relative group hover:shadow-md border-2 border-transparent hover:border-primary transition-all duration-300">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-4">
                            1
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1 block">Online
                            Portal</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Account Registration</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Fill in student &amp; parent details via this portal, choose the academic division (EY/Primary/Middle/High), and receive your <strong>Official Registration ID</strong> via SMS/WhatsApp.
                        </p>
                    </div>
                    <div
                        class="w-full mt-4 pt-3 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold border-t border-surface-container-high/40">
                        <span class="material-symbols-outlined text-[16px]">schedule</span> 3-5 Mins Online
                    </div>
                </div>

                <!-- Step 2 (Warna: bg-surface-container-high -> hover:border-surface-container-high) -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between items-start relative group hover:shadow-md border-2 border-transparent hover:border-slate-400 transition-all duration-300">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high text-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-4">
                            2
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1 block">Online
                            / Download</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Document Checklist</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Download the registration confirmation slip and prepare copies of the Family Card, Birth Certificate, passport photos, and academic records from previous school years.
                        </p>
                    </div>
                    <div
                        class="w-full mt-4 pt-3 flex items-center gap-1.5 text-primary font-label-sm text-label-sm font-semibold border-t border-surface-container-high/40">
                        <span class="material-symbols-outlined text-[16px]">cloud_upload</span> 1x24 Hours Verification
                    </div>
                </div>

                <!-- Step 3 (Warna: bg-secondary-container -> hover:border-secondary-container) -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between items-start relative group hover:shadow-md border-2 border-transparent hover:border-secondary-container transition-all duration-300">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-4">
                            3
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1 block">On-Campus
                            Session</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Verification &amp;
                            Observation</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Visit our Admissions Center for physical original document validation and child-friendly observation sessions (readiness test/talent and interest interview).
                        </p>
                    </div>
                    <div
                        class="w-full mt-4 pt-3 flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-semibold border-t border-surface-container-high/40">
                        <span class="material-symbols-outlined text-[16px]">how_to_reg</span> On-Campus / Online
                    </div>
                </div>

                <!-- Step 4 (Warna: bg-surface-container-high -> hover:border-surface-container-high) -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between items-start relative group hover:shadow-md border-2 border-transparent hover:border-slate-400 transition-all duration-300">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-surface-container-high text-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-4">
                            4
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1 block">Digital
                            Portal</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Admission Results
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Access the announcement results transparently using your Registration ID or view directly on the bulletin board at the school main lobby.
                        </p>
                    </div>
                    <div
                        class="w-full mt-4 pt-3 flex items-center gap-1.5 text-tertiary font-label-sm text-label-sm font-semibold border-t border-surface-container-high/40">
                        <span class="material-symbols-outlined text-[16px]">mark_email_read</span> Max. 3 Working Days
                    </div>
                </div>

                <!-- Step 5 (Warna: bg-tertiary -> hover:border-tertiary) -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between items-start relative group hover:shadow-md border-2 border-transparent hover:border-tertiary transition-all duration-300">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-tertiary text-on-tertiary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-4">
                            5
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1 block">On-Campus
                            Desk</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Re-enrollment &amp;
                            Uniforms</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Complete institutional enrollment administration, official uniform fitting measurements, and pick up the new student orientation starter pack.
                        </p>
                    </div>
                    <div
                        class="w-full mt-4 pt-3 flex items-center gap-1.5 text-primary-container font-label-sm text-label-sm font-semibold border-t border-surface-container-high/40">
                        <span class="material-symbols-outlined text-[16px]">inventory_2</span> Welcome to Unity!
                    </div>
                </div>
            </div>
            <!-- Verification Desk Banner Notice Inside Timeline -->
            <div
                class="mt-6 p-6 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[24px]">support_agent</span>
                    </div>
                    <div>
                        <h4 class="font-headline-sm text-headline-sm text-primary">Need Assistance With
                            Document Registration?</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Our Admissions Officers are available to assist you with the application process via video consultation or in-person guidance.</p>
                    </div>
                </div>
                <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shrink-0"
                    href="#" target="_blank">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    <span>WhatsApp Helpdesk Support</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. TRANSPARENT TUITION & SCHOLARSHIP PATHWAYS -->
<section id="tuition-and-scholarships" class="w-full py-space-lg bg-surface scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Information Column -->
                <div class="lg:col-span-5 flex flex-col gap-6">
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Transparent Tuition &amp; Scholarships</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary">The Best Investment for Your Child's Future</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Unity School implements a fully transparent tuition framework with no hidden fees throughout the academic year, complemented by 0% interest installment plans through leading partner banks.
                    </p>

                    <div class="space-y-4">
                        <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                            <div class="p-2 rounded-lg bg-secondary-container text-on-secondary-container">
                                <span class="material-symbols-outlined text-[22px]">diversity_3</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary">Sibling Privilege Discount</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Development Fee reduction of 10% for the second child, and 15% for the third child enrolled.</p>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                            <div class="p-2 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed">
                                <span class="material-symbols-outlined text-[22px]">auto_awesome</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary">Unity Global Merit Scholarship</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Up to 100% tuition waiver for international academic/arts olympiad medalists and exceptional talent achievements.</p>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-4">
                            <div class="p-2 rounded-lg bg-primary-fixed text-on-primary-fixed">
                                <span class="material-symbols-outlined text-[22px]">credit_card</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary">0% Flexible Installment Plan</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Convenient payment options for the Institutional Development Fee (DPP) divided into 3x or 6x terms per semester.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="inline-flex items-center gap-2 font-label-lg text-label-lg text-primary hover:text-secondary font-bold transition-colors"
                            href="#tuition-and-scholarships">
                            <span>View Detailed Fee Structure &amp; Scholarship Terms</span>
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Right Interactive Cost Summary Card -->
                <div class="lg:col-span-7">
                    <div class="rounded-xl bg-surface-container-lowest p-8 shadow-xl">
                        <div class="flex items-center justify-between pb-6">
                            <div>
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Initial Cost Simulation</span>
                                <h3 id="tier-display-title" class="font-headline-lg text-headline-lg text-primary">
                                    Early Bird Period Estimate: EY</h3>
                            </div>
                            <span id="tier-badge-discount"
                                class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold transition-all">
                                Save up to 15 Million IDR
                            </span>
                        </div>

                        <!-- Interactive Tier Toggle Buttons -->
                        <div class="grid grid-cols-4 gap-2 p-1.5 rounded-xl bg-surface-container mb-6 text-center"
                            id="tier-pill-selector">
                            <button
                                class="py-2.5 px-3 rounded-lg bg-surface-container-lowest text-primary font-bold shadow-sm transition-all"
                                data-tier="tk" type="button">
                                Toddler
                            </button>
                            <button
                                class="py-2.5 px-3 rounded-lg text-on-surface-variant hover:text-primary font-medium transition-all"
                                data-tier="sd" type="button">
                                Primary
                            </button>
                            <button
                                class="py-2.5 px-3 rounded-lg text-on-surface-variant hover:text-primary font-medium transition-all"
                                data-tier="smp" type="button">
                                Junior High
                            </button>
                            <button
                                class="py-2.5 px-3 rounded-lg text-on-surface-variant hover:text-primary font-medium transition-all"
                                data-tier="sma" type="button">
                                High School
                            </button>
                        </div>

                        <!-- Dynamic Cost Breakdown Table -->
                        <div class="space-y-4 pb-6">
                            <div class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                <span class="font-body-md text-body-md text-on-surface-variant">Application &amp; Assessment Fee</span>
                                <span id="tier-form-fee"
                                    class="font-headline-sm text-headline-sm text-primary font-bold">IDR 650,000</span>
                            </div>

                            <div class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                <div class="flex flex-col">
                                    <span class="font-body-md text-body-md text-on-surface-variant">Development Fee / DPP (One-Time per Tier)</span>
                                    <span id="tier-dpp-discount"
                                        class="font-label-sm text-label-sm text-tertiary font-semibold">Includes Early Bird Discount -IDR 8,000,000</span>
                                </div>
                                <div class="text-right">
                                    <span id="tier-dpp-original"
                                        class="line-through text-on-surface-variant font-body-sm text-body-sm block">IDR 38,000,000</span>
                                    <span id="tier-dpp-final"
                                        class="font-headline-sm text-headline-sm text-primary font-bold">IDR 30,000,000</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                <span class="font-body-md text-body-md text-on-surface-variant">Monthly Tuition (Includes Digital Books &amp; Labs)</span>
                                <span id="tier-spp" class="font-headline-sm text-headline-sm text-primary font-bold">
                                    IDR 3,500,000 <span
                                        class="text-body-sm font-normal text-on-surface-variant">/mo</span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center py-2.5 border-b border-surface-container">
                                <span class="font-body-md text-body-md text-on-surface-variant">Complete 5-Set Uniform Package</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-bold">Complimentary (Early Bird Wave 1)</span>
                            </div>
                        </div>

                        <!-- Total Savings Summary -->
                        <div class="p-4 rounded-xl bg-surface-container flex items-center justify-between">
                            <span class="font-label-lg text-label-lg text-primary font-semibold">Estimated Total Savings</span>
                            <span id="tier-total-savings"
                                class="font-headline-md text-headline-md text-secondary font-bold">
                                Total Savings: IDR 11,500,000
                            </span>
                        </div>

                        <!-- CTAs -->
                        <div class="mt-6 flex flex-col sm:flex-row gap-3">
                            <a class="flex-1 text-center py-3 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all font-semibold shadow-sm"
                                data-path="apply-now" href="#apply-now">
                                Claim Early Bird Offer
                            </a>
                            <a class="px-5 py-3 rounded-lg bg-surface-container-high text-primary font-label-md text-label-md hover:bg-surface-container-highest transition-all text-center font-semibold"
                                data-path="tuition-and-scholarships" href="#tuition-and-scholarships">
                                Download Complete Fee Schedule
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WORLD-CLASS CAMPUS FACILITIES (Sarana Berstandar Internasional) -->
<section id="facilities" class="w-full py-space-lg bg-surface-container-low scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span
                        class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-2 font-bold">World-Class
                        Environment</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary">School Facilities Empowering
                        Full Potential</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                    Eco-friendly, secure, and inspiring creativity across integrated sports, arts,
                    sciences, and spiritual spaces situated on a 2.8-hectare campus.
                </p>
            </div>

            <!-- Facilities Bento Showcase -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Facility 1: STEAM Lab (Large Card) -->
                <div class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
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
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Robotics, AI
                            &amp; Digital Fabrication Center</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Equipped with 3D printing, IoT sensors, and modern coding workstations where students develop
                            computational thinking and excel in prestigious national and international science competitions.
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
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Semi Olympic
                            Swimming Pool</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Heated ozone-filtered pool meeting international aquatic safety standards, supervised by certified professional coaches.
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
                            Auditorium &amp; Music
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Grand Performing Arts
                            Hall</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            A 600-seat acoustic auditorium built for orchestral performances, theatre productions, and major ceremonial assemblies.
                        </p>
                    </div>
                </div>

                <!-- Facility 4: Modern Commons Library -->
                <div class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
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
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Digital Library
                            &amp; Open Collaborative Commons</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Access to over 45,000 physical titles alongside premier digital research databases, supported by comfortable multimedia group discussion pods.
                        </p>
                    </div>
                </div>

                <!-- Facility 5: Mosque & Spiritual Sanctuary -->
                <div class="md:col-span-2 rounded-xl bg-surface-container-lowest overflow-hidden shadow-sm group">
                    <div class="relative h-64 bg-surface-container">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            alt="Contemporary campus mosque"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBP9PGfYiTCDv_G0ZysXqqTOH9JiWbpYq393-VM4SRXnfbk3wwD5DgjYFsei9ANRbR0ziVAH03Ermje-bQIlr3MKcJwaQ3kiWAr1UjwkcXRe7zkyDB7LCEAqtwRQv33i-JMMK-jt3QdQ2b33g0bh3O_Kcm4Flm3HoxiJRMYFUAcyQMyxrwrvu7z2pzJ-vUVUf5SAbXlARf4PGbjjG4nG6HqZUAEggVS1FiAznr5pK7huabyMs7nRv_M" />
                        <div
                            class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-bold">
                            Spiritual Center
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Campus Grand Sanctuary
                            &amp; Reflection Hall</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            A serene environment dedicated to character cultivation, daily worship, and structured ethical and spiritual guidance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. PARENT & ALUMNI TESTIMONIALS -->
<section id="testimonials" class="w-full py-space-lg bg-surface scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-4">
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Voices of Parents &amp; Alumni</span>
                <h2 class="font-headline-xl text-headline-xl text-primary mt-2">Why Families Choose Unity School</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                    Real stories of transformative growth, global academic excellence, and grounded character development.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
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
                            "My child enrolled in Kindergarten and is currently thriving in Grade 5 Primary. Her English communication confidence blossomed naturally without undue pressure, while core moral integrity and personal discipline remain firmly rooted at home."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4">
                        <div
                            class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                            DS
                        </div>
                        <div>
                            <span class="font-headline-sm text-headline-sm text-primary block">Dr. Sarah Daniswara</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Primary Parent (Grade 5)</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 (Non-university, High School Mentorship Focus) -->
                <div class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
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
                            "The faculty advisors at Unity High School provided dedicated guidance for our son since Grade 10, refining his talent portfolio, critical thinking, and technical projects. He graduated with immense self-reliance and earned gold distinctions in national science competitions."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4">
                        <div
                            class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                            RM
                        </div>
                        <div>
                            <span class="font-headline-sm text-headline-sm text-primary block">Ir. Rahmat Mulyadi</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Alumni Parent, Class of 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="p-8 rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
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
                            "Moving from an international school in Singapore to Jakarta was seamless for my daughter. Unity's Cambridge framework kept her academic momentum intact while giving her an inclusive, welcoming community with a profound sense of belonging."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4">
                        <div
                            class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center text-primary font-headline-sm text-headline-sm">
                            AL
                        </div>
                        <div>
                            <span class="font-headline-sm text-headline-sm text-primary block">Amanda Lee-Tan</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Expatriate Parent, Junior High School (Grade 8)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. DIRECT ADMISSIONS SUPPORT & MULTI-TIER HELPDESK -->
<section id="faq-and-contact" class="w-full py-8 bg-surface-container-high scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="rounded-2xl bg-surface-container-lowest p-8 md:p-10 shadow-sm">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 pb-8">
                    <div>
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-bold">Dedicated
                            Admission Counselors</span>
                        <h3 class="font-headline-lg text-headline-lg text-primary mt-1">Direct Consultation
                            with Division Specialists</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mt-2">
                            Each academic tier is supported by a dedicated admissions specialist ready to guide you through observational procedures, curriculum details, and relevant assessments.
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all self-start lg:self-center shrink-0"
                        href="https://wa.me/62215550199?text=Hello,%20I%20would%20like%20to%20schedule%20a%20private%20campus%20tour"
                        target="_blank">
                        <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                        <span>Schedule a Private Campus Tour</span>
                    </a>
                </div>

                <!-- 4 Division Contact Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold">Helpdesk
                                EY (Toddler &amp; KG)</span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Ms. Nabila, S.Psi
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Motor skills observation
                                &amp; Kindergarten readiness.</p>
                        </div>
                        <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                            href="https://wa.me/62215550199?text=Hello%20Ms.%20Nabila,%20I%20would%20like%20to%20consult%20about%20Early%20Years%20admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[16px]">chat</span> Chat via WhatsApp →
                        </a>
                    </div>

                    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Helpdesk
                                Primary School</span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Mr. Dimas, M.Ed
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Diagnostic assessments
                                &amp; student transfer process.</p>
                        </div>
                        <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                            href="https://wa.me/62215550199?text=Hello%20Mr.%20Dimas,%20I%20would%20like%20to%20consult%20about%20Primary%20School%20admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[16px]">chat</span> Chat via WhatsApp →
                        </a>
                    </div>

                    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-surface-tint uppercase font-bold">Helpdesk
                                Junior High School</span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Ms. Farah, B.A.
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Cambridge Checkpoint
                                &amp; merit scholarship inquiries.</p>
                        </div>
                        <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                            href="https://wa.me/62215550199?text=Hello%20Ms.%20Farah,%20I%20would%20like%20to%20consult%20about%20Junior%20High%20School%20admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[16px]">chat</span> Chat via WhatsApp →
                        </a>
                    </div>

                    <div class="p-4 rounded-xl bg-surface-container-low flex flex-col justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold">Helpdesk
                                Senior High School</span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mt-1">Mr. Jonathan, M.Sc
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">IGCSE, A-Levels
                                &amp; University Preparation pathways.</p>
                        </div>
                        <a class="mt-4 inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:text-secondary font-semibold"
                            href="https://wa.me/62215550199?text=Hello%20Mr.%20Jonathan,%20I%20would%20like%20to%20consult%20about%20Senior%20High%20School%20admissions"
                            target="_blank">
                            <span class="material-symbols-outlined text-[16px]">chat</span> Chat via WhatsApp →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FINAL CALL TO ACTION BANNER (Grand Closure) -->
 <section id="apply-now"
        class="w-full py-space-xl bg-gradient-to-br from-primary via-primary-container to-primary text-on-primary scroll-mt-24">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-wider mb-6 font-semibold">
                Academic Year 2025/2026 Admissions Open
            </div>
            <h2 class="font-display text-display tracking-tight text-on-primary">
                Secure Your Child's Future at <br> Unity School
            </h2>
            <p
                class="font-headline-md text-headline-md text-surface-container-high mt-4 max-w-2xl mx-auto font-normal">
                Take advantage of exclusive Early Bird privileges and complimentary academic consultation sessions with our experienced admissions advisors today.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
                <a class="px-8 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-lg hover:bg-secondary hover:text-on-secondary transition-all font-semibold"
                    href="https://wa.me/62215550199?text=Hello,%20I%20would%20like%20to%20apply%20online%20for%20Unity%20School%20admissions">
                    Start Online Application Now
                </a>
                <a class="px-7 py-4 rounded-xl bg-primary-fixed-dim text-on-primary-fixed font-label-lg text-label-lg hover:bg-surface-container-lowest transition-all font-semibold"
                    href="#faq-and-contact">
                    Visit Campus (Schedule a Tour)
                </a>
            </div>
            <div
                class="pt-10 flex flex-wrap items-center justify-center gap-8 text-surface-container-high font-body-sm text-body-sm">
                <span class="flex items-center gap-1.5"><span
                        class="material-symbols-outlined text-[18px] text-tertiary-fixed">verified</span>
                    Simple 5-Minute Application</span>
                <span class="flex items-center gap-1.5"><span
                        class="material-symbols-outlined text-[18px] text-tertiary-fixed">lock</span>
                    Strict Data &amp; Document Privacy</span>
                <span class="flex items-center gap-1.5"><span
                        class="material-symbols-outlined text-[18px] text-tertiary-fixed">credit_score</span>
                    0% Interest Installment Options</span>
            </div>
        </div>
    </section>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- 1. Countdown Logic ---
        let days = 13, hours = 9, mins = 42, secs = 18;
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
                if (elSecs) elSecs.textContent = secs < 10 ? '0' + secs : secs;
                if (elMins) elMins.textContent = mins < 10 ? '0' + mins : mins;
                if (elHours) elHours.textContent = hours < 10 ? '0' + hours : hours;
                if (elDays) elDays.textContent = days < 10 ? '0' + days : days;
            }, 1000);
        }

        // --- 2. Tier Switcher Logic ---
        const tierPricing = {
            tk: {
                title: "Estimasi Periode Early Bird: TK",
                badge: "Hemat s.d 15 Juta IDR",
                formFee: "Rp 650.000",
                dppDiscount: "Termasuk Diskon Early Bird -Rp 8.000.000",
                dppOriginal: "Rp 38.000.000",
                dppFinal: "Rp 30.000.000",
                spp: "Rp 3.500.000",
                totalSavings: "Total Hemat: Rp 11.500.000"
            },
            sd: {
                title: "Estimasi Periode Early Bird: SD",
                badge: "Hemat s.d 18 Juta IDR",
                formFee: "Rp 750.000",
                dppDiscount: "Termasuk Diskon Early Bird -Rp 10.000.000",
                dppOriginal: "Rp 50.000.000",
                dppFinal: "Rp 40.000.000",
                spp: "Rp 4.750.000",
                totalSavings: "Total Hemat: Rp 13.500.000"
            },
            smp: {
                title: "Estimasi Periode Early Bird: SMP",
                badge: "Hemat s.d 20 Juta IDR",
                formFee: "Rp 850.000",
                dppDiscount: "Termasuk Diskon Early Bird -Rp 12.000.000",
                dppOriginal: "Rp 58.000.000",
                dppFinal: "Rp 46.000.000",
                spp: "Rp 5.800.000",
                totalSavings: "Total Hemat: Rp 15.500.000"
            },
            sma: {
                title: "Estimasi Periode Early Bird: SMA",
                badge: "Hemat s.d 25 Juta IDR",
                formFee: "Rp 1.000.000",
                dppDiscount: "Termasuk Diskon Early Bird -Rp 15.000.000",
                dppOriginal: "Rp 68.000.000",
                dppFinal: "Rp 53.000.000",
                spp: "Rp 6.900.000",
                totalSavings: "Total Hemat: Rp 18.500.000"
            }
        };

        const buttons = document.querySelectorAll('#tier-pill-selector button');
        const titleEl = document.getElementById('tier-display-title');
        const badgeEl = document.getElementById('tier-badge-discount');
        const formFeeEl = document.getElementById('tier-form-fee');
        const dppDiscountEl = document.getElementById('tier-dpp-discount');
        const dppOriginalEl = document.getElementById('tier-dpp-original');
        const dppFinalEl = document.getElementById('tier-dpp-final');
        const sppEl = document.getElementById('tier-spp');
        const totalSavingsEl = document.getElementById('tier-total-savings');

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Reset state class semua tombol
                buttons.forEach(b => {
                    b.className = 'py-2.5 px-3 rounded-lg text-on-surface-variant hover:text-primary font-medium transition-all';
                });

                // Set styling tombol aktif
                this.className = 'py-2.5 px-3 rounded-lg bg-surface-container-lowest text-primary font-bold shadow-sm transition-all';

                const tierKey = this.getAttribute('data-tier');
                const data = tierPricing[tierKey];

                if (data) {
                    if (titleEl) titleEl.textContent = data.title;
                    if (badgeEl) badgeEl.textContent = data.badge;
                    if (formFeeEl) formFeeEl.textContent = data.formFee;
                    if (dppDiscountEl) dppDiscountEl.textContent = data.dppDiscount;
                    if (dppOriginalEl) dppOriginalEl.textContent = data.dppOriginal;
                    if (dppFinalEl) dppFinalEl.textContent = data.dppFinal;
                    if (sppEl) sppEl.innerHTML = `${data.spp} <span class="text-body-sm font-normal text-on-surface-variant">/mo</span>`;
                    if (totalSavingsEl) totalSavingsEl.textContent = data.totalSavings;
                }
            });
        });
    });
</script>
@endpush
