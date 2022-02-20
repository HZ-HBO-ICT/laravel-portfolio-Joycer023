@extends('layout')

@section('content')

<div class="grid-container">
    <div class="grid-item1">
        <div class= "image-container-banner-about">
            <div class="inner-container-about">
                <h1 class="banner-home">Profile
                </h1>
                <h3 class="banner-home-2">Learn to know me better
                    <br>
                    <br>
                    <br>
                    <br>
                </h3>
            </div>
        </div>
    </div>
    <div class='whiteBlock'>
        <h2>ABOUT ME
        </h2>
        <hr>
        <p>Ik ben Joyce, 25 jaar oud en woon in VLISSINGEN. In mijn vrije tijd ben ik graag bezig met het verzamelen van Funko Pops. Ik heb nu ongeveer zo'n 100 pops in mijn verzameling. Verder ben ik in de zomer graag bezig met longboarden. Dit doe ik voornamelijk langst de kust op de zeedijk als het niet te druk is. Gemiddeld rij ik zo'n 5 tot 7km per keer. Mijn andere hobby is koken, ik vind het bijvoorbeeld leuk om uren in de keuken te staan en dan voor vrienden te koken of het maken van een heerlijke cheesecake.
            Ook ben ik graag in de natuur aan het wandelen of aan het gamen. Ik speel graag games zoals Watchdogs en Assasin's creed
            <br>
            <br>
            Als je aan mij vraagt wat mijn favoriete film is dan is het de Harry Potter reeks, sinds de eerste film was ik hier al fan van. Eens in de zoveel tijd hou ik een Harry Potter marathon en kijk dan alle films opnieuw. Ook ben ik erge fan van de Marvel films, het mooie is dat ze allemaal verbonden zijn met elkaar en het een groter geheel wordt.
        </p>
    </div>
    <div class='blockGreen'>
        <h2>PERSOONLIJKE KWALITEITEN
        </h2>
        <hr>
        <br>
        <ul class="profile">
            <li class="profile2">Sociaal
            </li>
            <li class="profile2">Leergrierig
            </li>
            <li class="profile2">Enthousiast
            </li>
            <li class="profile2">Goede concentratie
            </li>
            <li class="profile2">Stressbestendig
            </li>
        </ul>
    </div>
    <div class='whiteBlock'>
        <h2>SOME PICTURES
        </h2>
        <hr>
        <div class='imagesProfile'>
            <img id='photo1Profile' src="{{ asset('img/me.jpg') }}" alt='Photo of myself'>
            <img id='photo2Profile' src="{{ asset('img/dessert.jpg') }}" alt='Photo of a dessert'>
            <img id='photo3Profile' src="{{ asset('img/longboard.JPG') }}" alt='photo of my longboard'>
        </div>
        <div class='blockGreen'>
            <h2>POSTS
            </h2>
            <hr>
            <br>
            @foreach($articles as $article)
                <h3>
                    <a href="/articles/{{$article->id}}">
                        {{ $article->title }}
                    </a>
                </h3>
                <p>{{ $article->excerpt }}</p>
                <hr>
            @endforeach
        </div>
    </div>
</div>

@endsection
