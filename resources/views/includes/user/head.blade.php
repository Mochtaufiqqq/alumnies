<head>
    <meta charset="utf-8">
    <title>Tracer Study |  @yield('title')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    @if ($fvicon == null)
        
    @else
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($fvicon->favicon) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($fvicon->favicon) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($fvicon->favicon) }}">
    <link rel="manifest" href="{{ asset($fvicon->favicon) }}">
    <link rel="mask-icon" href="/user/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="{{ asset($fvicon->favicon) }}">
    @endif
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="/user/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="/user/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="/user/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="/user/vendor/lightgallery/css/lightgallery-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/custom1.css') }}">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="/user/css/theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Page loading styles -->
    <style>
        .page-loading {
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          -webkit-transition: all .4s .2s ease-in-out;
          transition: all .4s .2s ease-in-out;
          background-color: #fff;
          opacity: 0;
          visibility: hidden;
          z-index: 9999;
        }
        .dark-mode .page-loading {
          background-color: #0b0f19;
        }
        .page-loading.active {
          opacity: 1;
          visibility: visible;
        }
        .page-loading-inner {
          position: absolute;
          top: 50%;
          left: 0;
          width: 100%;
          text-align: center;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          -webkit-transition: opacity .2s ease-in-out;
          transition: opacity .2s ease-in-out;
          opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
          opacity: 1;
        }
        .page-loading-inner > span {
          display: block;
          font-size: 1rem;
          font-weight: normal;
          color: #9397ad;
        }
        .dark-mode .page-loading-inner > span {
          color: #fff;
          opacity: .6;
        }
        .page-spinner {
          display: inline-block;
          width: 2.75rem;
          height: 2.75rem;
          margin-bottom: .75rem;
          vertical-align: text-bottom;
          border: .15em solid #b4b7c9;
          border-right-color: transparent;
          border-radius: 50%;
          -webkit-animation: spinner .75s linear infinite;
          animation: spinner .75s linear infinite;
        }
        .dark-mode .page-spinner {
          border-color: rgba(255,255,255,.4);
          border-right-color: transparent;
        }
        @-webkit-keyframes spinner {
          100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @keyframes spinner {
          100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
      </style>

      <style>
        html {
          scroll-behavior: smooth;
          }
      </style>

</head>