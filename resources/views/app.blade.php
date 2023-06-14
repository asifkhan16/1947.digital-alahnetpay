<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Page Title  -->
    <title>Sales Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css?ver=2.2.0') }}">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar">
    @inertia

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.2.0') }}"></script>
    {{-- <script src="{{ asset('assets/js/charts/chart-ecommerce.js') }}"></script> --}}
    <script src="https://momentjs.com/downloads/moment.js"></script>
    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}


    {{-- &callback=initAutocomplete --}}
</body>

</html>
