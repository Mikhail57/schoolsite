<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ArticlesController extends Controller
{

    /**
     *
     * Show all articles
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        $data = compact('articles');
        return view('articles.index')->with($data);
    }

    /**
     *
     * Show a single article
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        $data = compact('article');
        return view('articles.show')->with($data);
    }

    /**
     *
     * Show create article page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     *
     * Save article into the table
     *
     * @param ArticleRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $input = $request->all();

        Article::create($input);

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $data = compact('article');
        return view('articles.edit')->with($data);
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles/'.$id);
    }

}
