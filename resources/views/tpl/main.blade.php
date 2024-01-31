<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    @vite(['resources/css/app.css','resources/js/appTop.js'])--}}

    <link href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/camera.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/flexslider.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/cherry-plugin.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/main-style.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" type="text/css" data-template-style="true" rel="stylesheet">



    <script type="text/javascript" src="{{ asset('assets/js/comment-reply.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/swfobject.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jflickrfeed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>


{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ vite::asset('resources/img/favicon/apple-touch-icon.png')}}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ vite::asset('resources/img/favicon/favicon-32x32.png')}}">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ vite::asset('resources/img/favicon/favicon-16x16.png')}}">--}}
{{--    <link rel="manifest" href="{{ vite::asset('resources/img/favicon/site.webmanifest')}}">--}}
{{--    <link rel="mask-icon" href="{{ vite::asset('resources/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">--}}

    <link rel="icon" href="favicon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="{{$keywords}}">
    <meta name="keywords" content="{{$keywords}}">
    <meta name="description" content="{{$description}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120737947-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-120737947-1');
    </script>
    <script>
        var system_folder = 'https://livedemo00.template-help.com/wordpress_48469/wp-content/themes/CherryFramework/admin/data_management/',
            CHILD_URL = 'https://livedemo00.template-help.com/wordpress_48469/wp-content/themes/theme48469',
            PARENT_URL = 'https://livedemo00.template-help.com/wordpress_48469/wp-content/themes/CherryFramework',
            CURRENT_THEME = 'theme48469'</script>
    <style type="text/css">
        .cherry-fixed-layout .main-holder {
            background: #fafafa;
        }
    </style>

    <style type='text/css'>
        body {
            background-color: #392e31
        }

        .header {
            background-color: #fdfcfb
        }

    </style>
    <style type='text/css'>
        h1 {
            font: normal 30px/35px Roboto;
            color: #3d3a38;
        }

        h2 {
            font: normal 22px/22px Roboto;
            color: #3d3a38;
        }

        h3 {
            font: normal 18px/18px Roboto;
            color: #3d3a38;
        }

        h4 {
            font: normal 14px/18px Roboto;
            color: #3d3a38;
        }

        h5 {
            font: normal 12px/18px Roboto;
            color: #3d3a38;
        }

        h6 {
            font: normal 12px/18px Roboto;
            color: #3d3a38;
        }

        body {
            font-weight: normal;
        }

        .logo_h__txt, .logo_link {
            font: normal 46px/48px Roboto;
            color: #392e31;
        }

        .sf-menu > li > a {
            font: normal 21px/25px Roboto;
            color: #3d3a38;
        }

        .nav.footer-nav a {
            font: normal 12px/18px Roboto;
            color: #979091;
        }
    </style>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
            src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt=""/></a>
    </div>
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->

    <script type="text/javascript" src="{{ asset('assets/js/jquery.mobile.customized.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(function () {
            jQuery('.sf-menu').mobileMenu({defaultText: "Меню ..."});
        });
    </script>
    <!--<![endif]-->
    <script type="text/javascript">
        // Init navigation menu
        jQuery(function () {
            // main navigation init
            jQuery('ul.sf-menu').superfish({
                delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
                animation: {
                    opacity: "show",
                    height: "show"
                }, // used to animate the sub-menu open
                speed: "normal", // animation speed
                autoArrows: false, // generation of arrow mark-up (for submenu)
                disableHI: true // to disable hoverIntent detection
            });

            //Zoom fix
            //IPad/IPhone
            var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
                ua = navigator.userAgent,
                gestureStart = function () {
                    viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
                },
                scaleFix = function () {
                    if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                        document.addEventListener("gesturestart", gestureStart, false);
                    }
                };
            scaleFix();
        })
    </script>

    <title>{{ config('app.name') }}: {{$title}}</title>
</head>
<body @if($bodyClass) class="{{$bodyClass}}" @endif>
<div @if($divClass) class="{{$divClass}}" @endif>
    <x-header/>
    @yield('main')
</div>
{{--@livewireScripts--}}
{{--<script src="https://cdn.jsdelivr.net/gh/livewire/alpine-plugin@v0.1.0/dist/livewire-alpine-plugin.js"></script>--}}
<x-footer/>
</body>
</html>
