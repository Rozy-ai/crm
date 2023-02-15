<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<meta name="description" content="Beyond a simple software. XRM Workshop is designed to secure your income and automate processes using the latest technologies." />
		<meta name="keywords" content="SaaS, Software" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Pits - Software for mechanic workshops" />
		<meta property="og:url" content="https://getpits.com" />
		<meta property="og:site_name" content="Pits | SaaS" />
		<link rel="canonical" href="https://officecrm.net/taller-mecanico/" />
		<link rel="shortcut icon" href="https://getpits.com/wp-content/uploads/2022/07/pits-logo-100x100.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="https://business.getpits.com/front/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://business.getpits.com/front/demo1/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="https://business.getpits.com/front/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://business.getpits.com/front/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
</head>
<body>
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: light)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->

        @yield('content')

		<!--begin::Javascript-->
		<script>var hostUrl = "/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/crm/plugins/global/plugins.bundle.js"></script>
		<script src="/crm/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
<!--begin::Custom Javascript(optional)-->
        @stack('footer-scripts')
<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
</body>
</html>
