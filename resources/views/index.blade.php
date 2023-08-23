@extends('layouts.main')
@section('title', 'Company Events')
@section('content')
    <div class="container_master">
        <div class="home-container">
            <h1>Busque seu evento na melhor plataforma!</h1>
            <form class="form" action="">
                <input class="input" type="search" id="search" name="search" placeholder="Busque seu evento...">
            </form>
        </div>
        <div class="events-container">
            <h2>Próximos Eventos</h2>
            <p>Eventos que aconteceram ainda nesta semana!</p>
            <div class="cards-container">
                @foreach ($events as $event)
                    <div class="card">
                        <img src="/img/events/anime.webp" alt={{$event->title}}>
                        <div class="overlay">
                            <p>{{$event->title}}</p>
                            <p>02/02/2023</p>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
        <div class="events-features">
            <h1 class="title">Eventos em destaques</h1>
            <div class="card-container">
                <div class="card">
                    <img src="/img/events/anime.webp" alt={{$event->title}}>
                </div>
                <div class="overlay">
                    <div class="info-container">
                        <p>title</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="parties-container">
            <h2>Festas e Shows</h2>
            <div class="cards-container">
                @foreach ($events as $event)
                    <div class="card">
                        <img src="/img/events/anime.webp" alt={{$event->title}}>
                        <div class="overlay">
                            <p>{{$event->title}}</p>
                            <p>02/02/2023</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tours-container">
            <h2>Passeios e Tours</h2>
            <div class="cards-container">
                @foreach ($events as $event)
                    <div class="card">
                        <img src="/img/events/anime.webp" alt={{$event->title}}>
                        <div class="overlay">
                            <p>{{$event->title}}</p>
                            <p>02/02/2023</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection