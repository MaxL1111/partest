<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ZeonNb extends Model
{

    protected $table = 'zeonnb';

    public function getNb()
    {

        $client = new Client();

        for ($number = 1; $number <= 2; $number++) {
            // отправляем запрос на сервер,и в качестве результата нам вернулся объект
            $crawler = $client->request('SET', 'https://www.777555.by/kompyutery_i_seti/noutbuki_i_aksessuary/noutbuki/page' . $number . '/');

            $nodeValuesTitle[] = $crawler->filter('.catalog-item-title a')->each(function ($node) {
                return $node->text();
            });


            $nodeValuesPrice[] = $crawler->filter('.catalog-item-pricemini')->each(function ($node) {
                return $node->text();
            });

            $nodeValuesAvailability[] = $crawler->filter('.catalog-item-stock')->each(function ($node) {
                return $node->text();
            });
        }


        $i = count($nodeValuesTitle);
        for ($f = 0; $f < $i; $f++) {
            foreach ($nodeValuesTitle[$f] as $key => $value) {
                $nodeValuesTitle2[] = $value;
            }
        }


        $i2 = count($nodeValuesPrice);
        for ($f2 = 0; $f2 < $i2; $f2++) {
            foreach ($nodeValuesPrice[$f2] as $key => $value) {
                $nodeValuesPrice2[] = $value;
            }
        }


        $i3 = count($nodeValuesAvailability);
        for ($f3 = 0; $f3 < $i3; $f3++) {
            foreach ($nodeValuesAvailability[$f3] as $key => $value) {
                $nodeValuesAvailability2[] = $value;
            }
        }


        $namenotebook['namenotebook'] = $nodeValuesTitle2;
        $price['price'] = $nodeValuesPrice2;
        $availability['availability'] = $nodeValuesAvailability2;


        $union_array = array_merge($namenotebook, $price, $availability);


        //подготовка окончательного массива для sql-запроса
        $i4 = count($union_array['namenotebook']);
        for ($f4 = 0; $f4 < $i4; $f4++) {
            $arr1['namenotebook'] = $union_array['namenotebook'][$f4];
            $arr2['price'] = $union_array['price'][$f4];
            $arr3['availability'] = $union_array['availability'][$f4];
            $arr4[] = array_merge($arr1, $arr2, $arr3);
        }


        //удаляем все данные из таблицы
        DB::table('zeonnb')->truncate();
        //заносим данные в таблицу
        DB::table('zeonnb')->insert($arr4);

    }


}
