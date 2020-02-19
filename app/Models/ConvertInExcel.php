<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ConvertInExcel extends Model
{

   /*
    public function export()
    {


        $customer_data = DB::table('zeonnb')->get()->toArray();
        $customer_array[] = array('id','namenotebook', 'price', 'availability');


        foreach ($customer_data as $customer){
            $customer_array[] = array(
                'id' => $customer->id,
                'namenotebook' => $customer->namenotebook,
                'price' => $customer->price,
                'availability' => $customer->availability
            );
        }

      //  Excel::store('Customer Data', function () use ($customer_array));
    }

   */

}
