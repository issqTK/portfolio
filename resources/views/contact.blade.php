@extends('layout')

@section('title', 'Contact')

@section('content')

<div id="contact">
    <div class="contact-infos">
        <h1> {{ __("Contact us") }} </h1>
        <div>
            <img src="/images/arrow.gif">

            <span>
                <ion-icon name="mail"></ion-icon>
                eltakiissam@gmail.com
            </span>

            <span>
                <ion-icon name="phone-portrait"></ion-icon>
                +212 693331812
            </span>

        </div>
    </div>

    <form action="{{ route('contact.post') }}" method="post">
        @csrf
        
        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if(session()->has('success'))
            <div class="success"> {{ session()->get('success') }} </div>
        @endif

        <input type="text" name="fullName" placeholder="{{ __('FULL NAME') }}" class="@error('fullName') is-invalid @enderror" value="{{ old('fullName') }}">
        
        <input type="email" name="email" placeholder="{{ __('EMAIL') }}" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
        
        <input type="number" name="phone" placeholder="{{ __('CONTACT NO') }}" class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}">

        <textarea name="message" cols="30" rows="10" placeholder="{{ __('MESSAGE') }}" class="@error('message') is-invalid @enderror" >{{ old('message') }}</textarea>

        <input type="submit" value="{{ __('SEND') }}">
    </form>
    
</div>



@stop