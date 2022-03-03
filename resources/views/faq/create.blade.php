@extends('layout')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

@section('content')


    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Faq</h1>

            <form method="POST" action="/faq">
                @csrf

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="'question">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
