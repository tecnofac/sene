<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jcarousel.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" />
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> --}}
        <!-- Theme skin -->
        {{-- <link href="{{ asset('css/skins/default.css') }}" rel="stylesheet" /> --}}
        <!-- Fav and touch icons -->
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="{{ asset('js/all.js') }}" i></script>
        
    </head>
    <body class="overFX">
        <livewire:client.nav />
        {{-- content --}}
        @yield('content')
        <livewire:client.footer />
        
       {{--  <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js')  }}"></script>
        <script src="{{ asset('js/jcarousel/jquery.jcarousel.min.js')  }}"></script>
        <script src="{{ asset('js/jquery.fancybox.pack.js')  }}"></script>
        <script src="{{ asset('js/jquery.fancybox-media.js')  }}"></script>
        <script src="{{ asset('js/google-code-prettify/prettify.js')  }}"></script>
        <script src="{{ asset('js/portfolio/jquery.quicksand.js')  }}"></script>
        <script src="{{ asset('js/portfolio/setting.js')  }}"></script>
        <script src="{{ asset('js/jquery.flexslider.js')  }}"></script>
        <script src="{{ asset('js/jquery.nivo.slider.js')  }}"></script>
        <script src="{{ asset('js/modernizr.custom.js')  }}"></script>
        <script src="{{ asset('js/jquery.ba-cond.min.js')  }}"></script>
        <script src="{{ asset('js/jquery.slitslider.js')  }}"></script> --}}
        {{-- <script src="{{ asset('js/animate.js')  }}"></script> --}}

        <!-- Template Custom JavaScript File -->
        {{-- <script src="{{ asset('js/custom.js')  }}"></script> --}}
        <div class="fixed-bottom">

            <a href="#" class="bg-black scrollup"><i class="fa fa-user active"></i></a>
        </div>
    </body>
</html>
