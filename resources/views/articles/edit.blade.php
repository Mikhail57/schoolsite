@extends('app')

@section('content')

    <h1>Edit: {!! $article->title !!}</h1>

    <hr>

    <div class="row">
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
            @include('articles.partials.form', ['submitButtonText' => 'Update article'])
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