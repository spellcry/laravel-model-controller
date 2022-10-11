@extends('layouts.app')

@section('metaTitle', 'Films Home')
    
@section('content')
    <div class="container">
        <h1>Films</h1>
        <ul class="films-list">
            @forelse ($films as $film)
                <li class="list-item">
                    <h3 class="title">
                        {{ $film->title }}
                    </h3>
                    <p>
                        {{ $film->original_title }}
                    </p>
                    <p>
                        {{ $film->nationality }}
                    </p>
                    <p>
                        @php
                            $date = new DateTime($film->date);                            
                        @endphp
                        {{ $date->format('d-m-Y') }}
                    </p>
                    <p>
                        {{ $film->vote }}
                    </p>
                </li>
            @empty
                
            @endforelse
        </ul>
    </div>    
    
@endsection