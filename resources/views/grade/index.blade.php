@extends('layout')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

@section('content')

    <div class="grid-container">
        <div class="grid-item1">
            <div class= "image-container-banner-grade">
                <div class="inner-container-grade">
                    <h1 class="banner-home">Grades
                    </h1>
                    <h3 class="banner-home-2">See here all of my grades
                        <br>
                        <br>
                        <br>
                        <br>
                    </h3>
                </div>
            </div>
        </div>

        <h3><a class="button is-succes" href="/grade/create">Create a new grade</a></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Test Name</th>
                    <th>Grade</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($grade as $grades)
                <tr>
                    <td>{{ $grades->course_name }}</td>
                    <td>{{ $grades->test_name }}</td>
                    <td>{{ $grades->best_grade }}</td>
                    <td>
                        <div class="buttons">
                            <a class="button is-info is-ligth" href="/grade/{{ $grades->id }}/edit">Edit</a>
                            <form method="POST" action="/grade/{{ $grades->id }}">
                                @csrf
                                @method('DELETE')
                                <input class="button is-danger is-light" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </section>



@endsection
