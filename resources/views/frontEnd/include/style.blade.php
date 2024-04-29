
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEndAsset')}}/images/favicon.ico">

    <!-- All css files are included here
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/et-line-fonts.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/core.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/chosen.min.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/plugins/hover.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Modernizr JS -->
    <script src="{{asset('frontEndAsset')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
