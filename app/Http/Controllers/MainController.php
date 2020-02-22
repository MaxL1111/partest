<?php

namespace App\Http\Controllers;

use App\Models\Collections\ZeonNbExport;
use App\Models\ZeonNb;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;


class MainController extends Controller
{
    public function index(){
        return view('main');
    }

    public function pars777555(){

        $res_pars777555 = new ZeonNb();
        return view('main', ['res_pars777555' => $res_pars777555->getNb()]);
    }

    /*
    public function export()
    {
        return Excel::download(new ZeonNbExport(), 'zeon_nb.xlsx');
    }

    */

    //экспорт данных из таблицы БД в exel и загружает на диск сервера
    public function storeExcel()
    {
         Excel::store(new ZeonNbExport(), 'zeon_notebook.xlsx', 'public');
        return view('main');
    }



    public function getDownload($file_name)
    {
        $pathToFile= '../storage/app/public/reports_xlsx/'. $file_name;
        return response()->download($pathToFile);
    }


}
