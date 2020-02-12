<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Excel;

class ConvertInExcel extends Model
{
    public function convert(){
        Excel::create('zeon', function($excel) {

            // Call writer methods here

        });
    }
}
