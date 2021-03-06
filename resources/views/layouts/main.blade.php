<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Meta tags --}}
	<meta charset="utf-8">
    <meta name="description" content="theHawker is designed as an eMarketplace especially for the local hawkers."/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="theHawker">
	<meta name="robots" content="index, follow"/>
    <meta name="keywords" content="thehawker, hawker, local, vendor"/>

    <!-- Title -->
    <title> @yield('title') | theHawker </title>

	<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>

    <!-- EXTRA CSS -->
    <script src="https://use.fontawesome.com/b8701c5b92.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-608f7770733c9a2f"></script>
    
    @yield('styles')

    @livewireStyles

</head>

<body>
    <!-- Header Here -->
    <header id="header-ajax">
        @include('layouts.header')
    </header>

    <!-- Body Content Here -->
    <main id="main">

        @yield('content')
        

    </main><!-- .site-main -->

    <!-- Footer Here -->
    @include('layouts.footer')

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

    @livewireScripts

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @yield('script')


</body>

</html>
