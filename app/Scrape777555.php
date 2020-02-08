<?php

namespace App;

use Goutte\Client;
use Illuminate\Database\Eloquent\Model;

class Scrape777555 extends Model
{


    public function getTelevision()
    {

        $client = new Client();

        for ($number = 0; $number <= 2; $number++) {
            // отправляем запрос на сервер,и в качестве результата нам вернулся объект
            $crawler = $client->request('SET', 'https://www.777555.by/kompyutery_i_seti/noutbuki_i_aksessuary/noutbuki/page' . $number . '/');

            $nodeValuesTitle[] = $crawler->filter('.catalog-item-title a')->each(function ($node) {
                return $node->text() . "\n";
            });


            $nodeValuesPrice[] = $crawler->filter('.catalog-item-pricemini')->each(function ($node) {
                return $node->text() . "\n";
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


        $nodeValues = array_combine($nodeValuesTitle2, $nodeValuesPrice2);
        return $nodeValues;
    }


}
