<?php

use Illuminate\Database\Seeder;
use App\Customer;
use League\Csv\Reader;
use GuzzleHttp\Client;


class CustomerTableSeeder extends Seeder
{
    private $httpClass;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->httpClass = new Client;

        foreach($this->getCsvRecords() as $record){

            $json = $this->decodeResponse($this->getLocation($record['city']));

            $record['latitude'] = $json->results[0]->annotations->DMS->lat;
            $record['longitude'] = $json->results[0]->annotations->DMS->lng;

            Customer::create($record);
        }
    }

    private function getCsvRecords(){
        $csv = Reader::createFromPath(resource_path('data/customers.csv'), 'r');
        $csv->setHeaderOffset(0);
        return $csv->getRecords();
    }

    private function decodeResponse($response){
        return json_decode($response->getBody()->getContents());
    }

    private function getLocation($address){
        return $this->httpClass->get("https://api.opencagedata.com/geocode/v1/json?q=$address&key=f9f1cc698f524e4089a393a85a76f5b1");
    }
}
