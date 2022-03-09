@extends('layout')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
            <form method="POST" action="/grade/{{ $grade->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="course_name">Course Name</label>

                    <div class="control">
                        <input class="input" type="text" name="course_name" id="course_name" value=" {{$grade->course_name}}">
                        @error('course_name')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">Test Name</label>

                    <div class="control">
                        <input class="input" type="text"  name="test_name" id="test_name" value=" {{$grade->test_name}}">
                        @error('test_name')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="grade">Grade</label>

                    <div class="control">
                        <input class="input" type="text" name="best_grade" id="best_grade" value=" {{$grade->best_grade}}">
                        @error('grade')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

            <form method="POST" action="/grade/{{ $grade->id }}">
                @csrf
                @method('DELETE')
                <button class="button is-link" type="submit">Delete</button>
            </form>

        </div>
    </div>

@endsection
