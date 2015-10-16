@extends('app')


@section('content')

    <h1>About</h1>

    @if (count($people))

        <h3>People I like:</h3>
        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>

    @endif

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores ex excepturi exercitationem illum magnam nisi tenetur voluptas voluptatem! Eius natus nemo reprehenderit. Animi consequuntur doloribus error eveniet sapiente.
    </p>

@stop