@extends('app')

@section('content')
    {{--<div class="row">--}}
    @foreach($articles as $article)
        <article class="card white z-depth-2 article">
            <div class="card-content">
                <span class="card-title">
                    <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{$article->title}}</a>
                </span>
                <div class="divider"></div>
                <div class="">{!! $article->body !!}</div>
            </div>
        </article>
    @endforeach
    {{--</div>--}}

@stop