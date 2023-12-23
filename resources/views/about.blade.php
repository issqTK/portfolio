@extends('layout')

@section('title', 'About')

@section('content')
   <div id="about">
       <div>
            <h1> {{ __("About") }} </h1>

            <hr>

            <p>
                {{ __("Hey, my name is Issam Taki and I use Sam as my nickname across social medias.") }}
                {{ __("I'm a full stack web developer specializing in") }} <strong>Vue.js</strong> {{__("and")}} <strong>Laravel</strong> {{ __("with 5+ years of experience.") }}
                {{ __("I'm also skilled in graphic design, I often use tailwind css for my projects..I'm passionate about music and travel and tourism..") }}
                {{ __("I'm always curious to learn more when it comes to new technologies and better ways of coding.") }}
            </p>

            <div>
                <a target="_blank" href="<?= App::isLocale('en') ? '/pdf/resume.pdf' : '/pdf/cv.pdf' ?>">
                    <span>
                        <ion-icon name="arrow-down-outline"></ion-icon> 
                        {{ __("Resume") }}
                    </span>
                    <span></span>
                </a>
            </div>
       </div>

       <div id="bg-issq"></div>
       
   </div>
@stop