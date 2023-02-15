<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pits - Software for mechanic workshops, Repair Fast. Earn More.</title>

	<meta charset="utf-8" />
	<meta name="description" content="Beyond a simple software. Pits is designed to secure your income and automate processes using the latest technologies." />
	<meta name="keywords" content="SaaS, Software" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Pits - Software for mechanic workshops" />
	<meta property="og:url" content="https://getpits.com" />
	<meta property="og:site_name" content="Pits | SaaS" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="https://getpits.com/wp-content/uploads/2022/07/pits-logo-100x100.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
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
		<script>var hostUrl = "https://business.getpits.com/front/demo1/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="https://business.getpits.com/front/demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="https://business.getpits.com/front/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/apps/ecommerce/catalog/save-category.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/utilities/modals/create-account.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/widgets.bundle.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/widgets.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
		<script src="https://business.getpits.com/front/demo1/dist/assets/js/main.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
</body>
</html>
