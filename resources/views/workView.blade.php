@extends('layout')

@section('title', 'View Work')

@section('content')

<?php 

if (App::isLocale('en')) {
    $category = explode('=', explode("|", $work->category)[0])[1];
    $description = explode('=', explode("|", $work->description)[0])[1];
}
else { 
    $category = explode('=', explode("|", $work->category)[1])[1];
    $description = explode('=', explode("|", $work->description)[1])[1];
}


?>

<div id="work-view">
    <div class="header">
        <img src="/images/work/preview/{{$work->preview}}">
    </div>

    <div class="block">
        <h1>{{ $work->name }}</h1>

        <hr>
        
        <div class="infos">
            <div>
                <span class="title"> {{__("Category")}} </span>
                <span> {{ $category }} </span>

                <span class="title"> {{__("Year")}} </span>
                <span> {{ $work->year }} </span>
            
                @if($work->client)
                    <span class="title"> {{__("Client")}} </span>
                    <span> {{ $work->client }} </span>
                @endif
            </div>

            <div>
                <p> {{ $description }} </p>
            </div>
        </div>

        @if($work->name == 'Sam')
        <div class="sam">
            <div class="concept">
                <h3> {{ __("Concept") }} </h3>

                <hr>

                <p>
                    {{ __( "The whole concept is built around a modular and adaptable system by making designs move themselves arround a noisy background." ) }}
                    
                    <br>
                    
                    <span style="display:block; margin-top:10px">
                        {{ __("The main goals of this brand are to create something alive by distorting it and to be unpredictable.") }}
                    </span>
                </p>

                <hr>
            </div>

            <div class="colors">
                <h3> {{ __("Colors") }} </h3>

                <hr>

                <ul>
                    <li>
                        <div class="container">
                            <div>
                                <span>Hex: #f3f2f9</span>
                                <span>RGB: 243 | 242 | 249</span>
                                <span>CMYK: 6 | 5 | 0 | 0</span>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Text Color dark backgrounds") }}
                                </span>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Light background") }}
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div>
                                <span>Hex: #aab2d1</span>
                                <span>RGB: 170 | 178 | 209</span>
                                <span>CMYK: 38 | 27 | 7 | 0</span>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Highlight or mute some elements (depending on the background)") }}
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div>
                                <span>Hex: #606887</span>
                                <span>RGB: 96 | 104 | 135</span>
                                <span>CMYK: 68 | 55 | 28 | 12</span>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Text Color (on light backgrounds)") }}
                                </span>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Medium background") }}
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div>
                                <span>Hex: #45495d</span>
                                <span>RGB: 69 | 73 | 93</span>
                                <span>CMYK: 75 | 64 | 41 | 34</span>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Highlight or mute some elements (depending on the background)") }}
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div>
                                <span>Hex: #2b2b33</span>
                                <span>RGB: 43 | 43 | 51</span>
                                <span>CMYK: 78 | 69 | 53 | 64</span>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="arrow-forward-outline" class="flesh-left"></ion-icon>
                                    {{ __("Dark background") }}
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>

                <hr>
            </div>

            <div class="typography">
                <h3> {{ __("Typography") }} </h3>

                <hr>

                <div class="container">
                    <div>
                        <span>Phudu weight 900</span>
                        <span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                            {{ __("Headers") }}
                        </span>
                    </div>
                    
                    <div>
                        <span>Londrina Outline</span>
                        <span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                            {{ __("Links") }}
                        </span>
                    </div>

                    <div>
                        <span>Lato</span>
                        <span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                            {{ __("Content") }}
                        </span>
                    </div>
                </div>

                <hr>
            </div>

            <div class="applications">
                <h3>Applications</h3>

                <hr>

                <div>
                    <div class="item1"><img src="/images/work/sam/1.png"></div>
                    
                    <div class="item2"><img src="/images/work/sam/2.png"></div>
                    
                    <div class="item3"><img src="/images/work/sam/3.png"></div>

                    <div class="item4"><img src="/images/work/sam/4.png"></div>

                    <div class="item5"><img src="/images/work/sam/5.png"></div>

                   <div class="item6">
                        <img src="/images/work/sam/10.png">
                        <img src="/images/work/sam/8.png">
                        <img src="/images/work/sam/7.png">
                        <img src="/images/work/sam/9.png">
                    </div>
                   
                </div>

                <hr>
            </div>
        </div>
        @endif

        @if($work->name == 'Lenergia')
        <div class="lenergia">
            <div class="page">
                <h3>{{ __("Request Estimate") }}</h3>

                <hr>
                
                <img src="/images/work/lenergia/devis-1.png" alt="">
                <img src="/images/work/lenergia/devis-2.png" alt="">
                <img src="/images/work/lenergia/devis-3.png" alt="">
                <img src="/images/work/lenergia/devis-4.png" alt="">
                <img src="/images/work/lenergia/devis-5.png" alt="">
                <img src="/images/work/lenergia/devis-6.png" alt="">
                <img src="/images/work/lenergia/devis-7.png" alt="">
                <img src="/images/work/lenergia/devis-8.png" alt="">

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("Welcome Page") }} </h3>

                <hr>

                <img src="/images/work/lenergia/lenergia-home.png" alt="">

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("Landing Page") }} </h3>

                <hr>

                <img src="/images/work/lenergia/lenergia-landing.png" alt="">

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("Responsive") }} </h3>

                <hr>

                <div class="responsive">
                    <img src="/images/work/lenergia/lenergia.-resp-1.png" alt="">
                    <img src="/images/work/lenergia/lenergia.-resp-2.png" alt="">
                    <img src="/images/work/lenergia/lenergia.-resp-3.png" alt="">
                    <img src="/images/work/lenergia/lenergia.-resp-4.png" alt="">
                    <img src="/images/work/lenergia/lenergia.-resp-5.png" alt="">
                </div>

                <hr>
            </div>

            <a href="https://lenergia.fr/" target="_blank" class="visite">{{ __("Visit") }} {{ $work->name }}</a>
        </div>
        @endif

        @if($work->name == 'Prixa')
        <div class="prixa">
            <div >
                <h3> {{ __("Prixa demo") }} </h3>

                <hr>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/AZb_A2VeyR4?si=N7E1tETGifXbopWl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <hr>
            </div>
        </div>
        @endif

        @if($work->name == 'Pharmagarde')
        <div class="pharmagarde">
            <div class="page">
                <h3> {{ __("Search Page") }} </h3>

                <hr>

                <img src="/images/work/pharmagarde/pharmagarde4.png">
                <img src="/images/work/pharmagarde/pharmagarde5.png">

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("Welcome Page") }} </h3>

                <hr>

                <img src="/images/work/pharmagarde/pharmagarde1.png" >

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("About Page") }} </h3>

                <hr>

                <img src="/images/work/pharmagarde/pharmagarde2.png" >

                <hr>
            </div>

            <div class="page">
                <h3> {{ __("Contact Page") }} </h3>

                <hr>

                <img src="/images/work/pharmagarde/pharmagarde3.png" >

                <hr>
            </div>

            <a href="https://pharmagarde.ma/" target="_blank" class="visite">{{ __("Visit") }} {{ $work->name }}</a>
        </div>
        @endif
       
        @if($work->name == 'Formy')
        <div class="formy">
            <div class="page">
                <h3> {{ __("Welcome Page") }} </h3>

                <hr>
                
                <img src="/images/work/formy/formy-1.png" >

                <hr>
            </div>

            <div class="page">
                <hr>

                <img src="/images/work/formy/formy-2.png" >

                <hr>
            </div>

            <div class="page">
                <hr>

                <img src="/images/work/formy/formy-3.png" >

                <hr>
            </div>

            <div class="page">
                <hr>

                <img src="/images/work/formy/formy-4.png" >

                <hr>
            </div>

            <div class="page">
                <hr>

                <img src="/images/work/formy/formy-5.png" >

                <hr>
            </div>
        </div>
        @endif

        <div class="pre-next">
            @if( !is_int($previous) )
                <a class="right" href="{{ route('work.view', $previous->slug) }}">
                    <span>{{ $previous->name }}</span>
                    <ion-icon name="play-forward-outline"></ion-icon>    
                </a>
            @endif
            
            @if( !is_int($next) )
                <a class="left" href="{{ route('work.view', $next->slug) }}">
                    <ion-icon name="play-back-outline"></ion-icon>                
                    <span>{{ $next->name }}</span>
                </a>
            @endif
        </div>
    </div>
</div>

@stop