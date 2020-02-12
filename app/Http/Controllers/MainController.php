<?php

namespace App\Http\Controllers;

use App\Scrape777555;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;



class MainController extends Controller
{
    public function index(){
        return view('main');
    }

    public function pars777555(){

      //  $foo = 0;
        $res_pars777555 = new Scrape777555();

     //  $q = new Excel();
     //   $arr=array(4,5,7);
     //   Excel::download($arr, 'users.xlsx');
  //    $q->download($arr, 'users.xlsx',null, $headers = []);
        return view('main', ['res_pars777555' => $res_pars777555->getTelevision()]);
    }
}
