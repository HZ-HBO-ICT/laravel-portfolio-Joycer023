@extends('layout')

@section('content')

    <div class='blockGreen'>
        <div class="posts">
    @foreach($articles as $article)
            <h2>
                <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
                </a>
            </h2>
            <hr>
            <p> {{$article->excerpt}} </p>
    @endforeach
        </div>
    </div>
@endsection
