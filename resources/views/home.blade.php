@extends('layout')

@section('title', 'Home')

@section('content')
   <div id="home">
        <p class="head">
                <span class="text">{{ __("HEY, I'M") }}</span> 
                <span class="name"> ISSAM TAKI </span> 
                <span class="text"> {{ __("BUT YOU CAN CALL ME") }} </span>
                <span class="name"> SAM </span>
        </p>
        
        <p class="foot">
                {{ __("I'm a full stack web developer specializing in") }}
                <br> 
                <strong>Vue.js</strong> {{ __("and") }} <strong>Laravel</strong> {{ __("with 5+ years") }} 
                <br>
                {{ __("of experience.") }}
        </p>

        <div>
                <a href="{{ route('work') }}">
                        <span>
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                                {{ __("See my projects") }}
                        </span> 

                        <span></span>
                </a> 
                <a href="{{ route('about') }}">
                        <span>
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                                {{ __("More about me") }}
                        </span> 
                        <span></span>
                </a>
        </div>
   </div>
@stop