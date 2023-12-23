<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <link rel="icon" href="{{ asset('/images/logo.png') }}">

        <!-- Css  -->
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/work.css') }}" rel="stylesheet">

         <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

    </head>
    <body class="lightBG lightColor">
        <div id="header">
            <div id="logo">
                <a href="/"><img src="/images/logo.png" alt="Logo" draggable="false"></a>
            </div>

            
            <div id="right-elements">
                <div>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            
                        <a href="{{ route('lang.switch', $lang) }}" style="text-decoration:none; font-weight:bold">{{$language}}</a>
                        
                        @endif
                    @endforeach
                </div>

                <div>
                    <div id="dark">
                        <ion-icon name="moon" style="font-size:22px;fill:#606887"></ion-icon>
                    </div>
                    
                    <div id="light" style="display:none">
                        <ion-icon name="sunny" style="font-size:22px"></ion-icon>
                    </div>
                </div>
                
                <div id="icon-nav">
                    <div id="open">
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                        <span class="border-light"></span>
                    </div>
    
                    <div id="close" class="icon-nav-close"></div>
                </div>
            </div>

            <div id="nav">
                <div id="nav-illustration"> 
                    <img src="/images/ballon.png" > 
                </div>
                
                <div class="light-bg-nav" >
                    <div><a href="{{ URL::route('home') }}">{{ __("Home") }}</a></div>
                    <div><a href="{{ URL::route('work') }}">{{ __("Work") }}</a></div>
                    <div><a href="{{ URL::route('about') }}">{{ __("About") }}</a></div>
                    <div><a href="{{ route('contact') }}">{{ __("Contact") }}</a></div>
                </div>
            </div>
        </div>

        <div class="noise"></div>

        <div id="main" style="position:relative">
            @yield('content')
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
</html>
