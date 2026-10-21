<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    

    public function index(): View
    {

        $arrayTitle = ['Apple phone 1', 'Apple phone 2', 'Apple phone 3',];


        for($a = 1; $a < 5  ;$a++) {
               $arrayTitletoFor [] = 'Phone' . $a;
        }

        return view ('products.index', [
            'product' => 'Home Page',
            'arrayTitle' =>$arrayTitle,
            'arrayTitletoFor' => $arrayTitletoFor,
        ]);
    }
}
