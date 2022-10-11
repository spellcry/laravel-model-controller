@extends('layouts.app')

@section('metaTitle', 'Films Home')
    
@section('content')
    <div class="home container">
        <h1 class="title">Films</h1>
        <ul class="films-list">
            @forelse ($films as $film)
                <li class="list-item">
                    <h3 class="film-title">
                        {{ $film->title }}
                    </h3>
                    <p class="original-title">
                        <span class="accent">Original Title:</span>
                        {{ $film->original_title }}
                    </p>
                    <p class="nationality">
                        <span class="accent">Nationality:</span>
                        @php
                            $nationalities = explode('/', $film->nationality);
                        @endphp
                        @foreach ($nationalities as $nationality)
                            {{ ucfirst($nationality) }}
                            @if ($loop->index < count($nationalities) - 1)
                                /
                            @endif
                        @endforeach
                    </p>
                    <p class="date">
                        @php
                            $date = new DateTime($film->date);                            
                        @endphp
                        <span class="accent">Date:</span>
                        {{ $date->format('d-m-Y') }}
                    </p>
                    <p class="vote">
                        <span class="accent">Vote:</span>
                        {{ $film->vote }}
                    </p>
                </li>
            @empty
                
            @endforelse
        </ul>
    </div>    
    
@endsection