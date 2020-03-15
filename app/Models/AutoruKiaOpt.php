<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AutoruKiaOpt extends Model
{
    protected $table = 'autorukiaopt';

    public function getData()
    {

        $client = new Client();

        for ($number = 1; $number <= 2; $number++) {
            // отправляем запрос на сервер,и в качестве результата нам вернулся объект
            $crawler = $client->request('SET', 'https://auto.ru');


     //       $crawler = $client->click($crawler->selectLink('Я согласен. I accept')->link());

           // $crawler = $client->request('SET', 'https://auto.ru/cars/kia/optima/7851942/all/?output_type=list&page='. $number .'&sort=price-asc');

            //   $link = $crawler->selectLink('Я согласен. I accept')->link();
         //   $this->assertCount(1, $link, 'На странице нет кнопки "Назад"');
         //  $crawler = $client->click($link);


            $nodeValuesTitle[] = $crawler->filter('.Link ListingItemTitle-module__link')->each(function ($node) {
                return $node->text();
            });


            $nodeValuesPrice[] = $crawler->filter('.ListingItemPrice-module__content')->each(function ($node) {
                return $node->text();
            });

            $nodeValuesYear[] = $crawler->filter('.ListingItem-module__year')->each(function ($node) {
                return $node->text();
            });

            $nodeValuesMileage[] = $crawler->filter('.ListingItem-module__kmAge')->each(function ($node) {
                return $node->text();
            });

            $xxx = $crawler->filter('.IndexSelector__exclusive-text')->each(function ($node) {
                return $node->text();
            });

        }

        var_dump($xxx);

      //  var_dump($nodeValuesPrice);
        die;



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


        $i3 = count($nodeValuesYear);
        for ($f3 = 0; $f3 < $i3; $f3++) {
            foreach ($nodeValuesYear[$f3] as $key => $value) {
                $nodeValuesYear2[] = $value;
            }
        }

        $i4 = count($nodeValuesMileage);
        for ($f4 = 0; $f4 < $i4; $f4++) {
            foreach ($nodeValuesMileage[$f4] as $key => $value) {
                $nodeValuesMileage2[] = $value;
            }
        }

        $namekiaopt['namekiaopt'] = $nodeValuesTitle2;
        $price['price'] = $nodeValuesPrice2;
        $year['year'] = $nodeValuesYear2;
        $meleage['car_mileage'] = $nodeValuesMileage2;

        $union_array = array_merge($namekiaopt, $price, $year, $meleage);


        //подготовка окончательного массива для sql-запроса
        $i4 = count($union_array['namekiaopt']);
        for ($f4 = 0; $f4 < $i4; $f4++) {
            $arr1['namekiaopt'] = $union_array['namekiaopt'][$f4];
            $arr2['price'] = $union_array['price'][$f4];
            $arr3['year'] = $union_array['year'][$f4];
            $arr4['car_mileage'] = $union_array['car_mileage'][$f4];
            $arr5[] = array_merge($arr1, $arr2, $arr3, $arr4);
        }


        //удаляем все данные из таблицы
        DB::table('autorukiaopt')->truncate();
        //заносим данные в таблицу
        DB::table('autorukiaopt')->insert($arr5);


    }
}
