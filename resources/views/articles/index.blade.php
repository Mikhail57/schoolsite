@extends('app')

@section('content')

    @foreach($articles as $article)
        <article class="col s8 article-block white-bg z-depth-2">
            <h2 class="article-title">
                <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{$article->title}}</a>
            </h2>
            <div class="divider"></div>
            <div class="article-body">{!! $article->body !!}</div>
        </article>
    @endforeach

@stop