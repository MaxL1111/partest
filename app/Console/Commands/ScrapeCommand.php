<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
      //  $guzzleClient = new GuzzleClient(array('timeout' => 60));

   //     $client->setClient($guzzleClient);
        $crawler = $client->request('SET', 'https://www.777555.by/kompyutery_i_seti/noutbuki_i_aksessuary/noutbuki/');
        $crawler->filter('.catalog-item-title a')->each(function ($node) {
            print $node->text()."\n";
        });
    }
}
