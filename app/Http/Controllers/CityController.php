<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(Request $request)
    {
        $getRajaOngkir = false;
        $id = $request->query('id');
        $getRajaOngkir = $request->query('getRajaOngkir');


        if($getRajaOngkir){
            $city = RajaOngkir::kota()->find($id);
        }else{
            $city =  DB::select("SELECT city_id, province_id, province, type, city_name, postal_code FROM city where city_id=".$id);
        }

        if ($city) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail City!',
                'data'      => $city
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found!',
            ], 404);
        }
    }

}
