@extends('app')


@section('content')
    <h2>Write a New Article</h2>

    <hr>

    <div class="row">
        {!! Form::open(['url' => 'articles']) !!}

            @include('articles.partials.form', ['submitButtonText' => 'Add article'])

        {!! Form::close() !!}
        @include('errors.list')
    </div>
    <script>
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
@stop