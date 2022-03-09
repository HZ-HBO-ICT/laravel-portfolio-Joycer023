@extends('layout')

@section('content')

    <div class='whiteBlock'>
        <h2>{{ $faq->question }}</h2>
        <hr>
        <p>{{ $faq->answer }}</p>
@endsection
