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

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     *
     * Show all articles
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->get();

        $data = compact('articles');
        return view('articles.index')->with($data);
    }

    /**
     *
     * Show a single article
     *
     * @param Article $article
     * @return Response
     */
    public function show(Article $article)
    {
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
        if (\Auth::guest()){
            return redirect('/');
        }
        return view('articles.create');
    }

    /**
     *
     * Save a new article into the table
     *
     * @param ArticleRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        \Auth::user()->articles()->save(new Article($request->all()));

        \Session::flash('flash_message', 'Your article has been created!');

        return redirect('articles');
    }

    /**
     *
     * Edit existing article
     *
     * @param Article $article
     * @return $this
     */
    public function edit(Article $article)
    {
        $data = compact('article');
        return view('articles.edit')->with($data);
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles/'.$article->id);
    }

}
