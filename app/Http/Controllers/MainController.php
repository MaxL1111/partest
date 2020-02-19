<?php

namespace App\Http\Controllers;

use App\Models\Collections\ZeonNbExport;
use App\Models\ZeonNb;
use Maatwebsite\Excel\Facades\Excel;



class MainController extends Controller
{
    public function index(){
        return view('main');
    }

    public function pars777555(){

        $res_pars777555 = new ZeonNb();
        return view('main', ['res_pars777555' => $res_pars777555->getNb()]);
    }

    public function export()
    {
        return Excel::download(new ZeonNbExport(), 'zeon_nb.xlsx');
    }

    public function storeExcel()
    {
         Excel::store(new ZeonNbExport(), 'invoices1.xlsx', 'public');
        return view('main');
    }


}
