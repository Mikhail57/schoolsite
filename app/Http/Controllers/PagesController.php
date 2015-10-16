<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
        $people = ['Yandex'];
        $data = compact('people');
        return view('pages.about')->with($data);
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
