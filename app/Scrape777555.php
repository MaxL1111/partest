<?php

namespace App;

use Goutte\Client;
use Illuminate\Database\Eloquent\Model;

class Scrape777555 extends Model
{

    public $res_pars777555 = array();


    public function getTelevision()
    {

        $client = new Client();
        //  $guzzleClient = new GuzzleClient(array('timeout' => 60));

        //     $client->setClient($guzzleClient);
        $crawler = $client->request('SET', 'https://www.777555.by/kompyutery_i_seti/noutbuki_i_aksessuary/noutbuki/');
        $nodeValues = $crawler->filter('.catalog-item-title a')->each(function ($node) {
         //   $this->res_pars777555[] = $node->text() . "\n";
            return $node->text() . "\n";
        });
        return $nodeValues;
    }


    public function getRes()
    {
        $this->getTelevision();
        return $this->res_pars777555;
    }


}
