<?php

namespace App\Http\Controllers;

use App\Scrape777555;
use Illuminate\Http\Request;
use Tests\Browser\Shop5elTest;

class MainController extends Controller
{
    public function index(){
        return view('main');
    }

    public function pars777555(){

      //  $foo = 0;
        $res_pars777555 = new Scrape777555();
        return view('main', ['res_pars777555' => $res_pars777555->getTelevision()]);
    }
}
