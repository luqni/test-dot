<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\City;


class fetchCityApiRajaOngkir extends Command
{
    protected $signature = 'save:data_city';
    protected $description = 'Ini adalah perintah CLI untuk fetching data API Raja Ongkir dan menyimpan ke db';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $cities = RajaOngkir::kota()->all();
        if($cities){
            
            foreach($cities as $value){

                City::create(array(
                    'city_id'       => $value['city_id'],
                    'province_id'   => $value['province_id'],
                    'province'      => $value['province'],
                    'type'          => $value['type'],
                    'city_name'     => $value['city_name'],
                    'postal_code'   => $value['postal_code']
                ));
            }
            
            $this->info('Save Data City Success');
        }
        
    }
}
