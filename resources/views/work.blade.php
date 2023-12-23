@extends('layout')

@section('title', 'Work')

@section('content')


<div id="work" >
    <div id="displayer"></div>

    <div class="container">
        <h1> {{__("Work")}} <span>{{ count($works) }}</span> </h1>

        <ul>
            @foreach($works as $work)
            <li>
                <a href="{{ route('work.view', $work->slug) }}" source="{{$work->preview}}">
                    <span> 
                        <ion-icon name="arrow-forward-outline"></ion-icon> 
                        {{ $work->name }}
                    </span>

                    @if($work->name == 'Sam')
                        <span id="new" class="darkBG darkColor"> {{ __("New") }} </span>
                    @endif

                    @php 
                    {{
                        if(App::isLocale('en'))
                            $label = explode('=', explode("|", $work->label)[0])[1];
                        else
                            $label = explode('=', explode("|", $work->label)[1])[1];
                    }}
                    @endphp
                    
                    <span> {{ $label }} </span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop