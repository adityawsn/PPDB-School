<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Unity School | PPDB 2025/2026')</title>

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
<!-- Header Component -->
    @include('components.header')

    <!-- Main Dynamic Content -->
    <main class="w-full">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')
    @stack('scripts')
</body>
</html>
