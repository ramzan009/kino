<?php

namespace App\Http\Controllers\Web\Main;

use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function main()
    {
      return view('web.index.index');
    }
}

