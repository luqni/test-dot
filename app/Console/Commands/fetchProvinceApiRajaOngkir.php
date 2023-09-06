<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\Province;


class fetchProvinceApiRajaOngkir extends Command
{
    protected $signature = 'save:data_province';
    protected $description = 'Ini adalah perintah CLI untuk fetching data API Raja Ongkir dan menyimpan ke db';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $provincies = RajaOngkir::provinsi()->all();
        if($provincies){
            
            foreach($provincies as $value){

                Province::create(array(
                    'province_id'   => $value['province_id'],
                    'province_name' => $value['province']
                ));
            }
            
            $this->info('Save Data Province Success');
        }
        
    }
}
