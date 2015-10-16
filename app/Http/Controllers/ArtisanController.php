<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisan;

class ArtisanController extends Controller
{
    public function migrate()
    {
        Artisan::call('migrate');
    }
}
