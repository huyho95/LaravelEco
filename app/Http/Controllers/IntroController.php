<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IntroController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getIntro()
    {
        return view('intro.index');
    }
}