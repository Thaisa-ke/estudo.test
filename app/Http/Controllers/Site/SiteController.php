<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

   /* public function __construct(){
        $this->middleware('auth')
            ->only(['contato',
                'categoria'
            ]);
    }*/

    public function index(){
        $var1 = '123';
        $array = [1,2,3,4,5,6,7,8,9];
        return view('site.home.index', compact('var1', 'array'));
    }
    public function contato(){
        return view('site.home.contato');
    }
    public function categoria(){
        return view('site.home.categoria');
    }
}
