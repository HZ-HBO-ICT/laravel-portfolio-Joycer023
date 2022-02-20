@extends('layout')

@section('content')

    <div class='whiteBlock'>
        <h2>{{ $article->title }}</h2>
        <hr>
        <p>{{ $article->body }}</p>
@endsection
