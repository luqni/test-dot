<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use DB;

class ProvinceController extends Controller
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
            $province =  RajaOngkir::provinsi()->find($id);
        }else{
            $provinces =  DB::select("SELECT province_id,province FROM province where province_id=".$id);
            $province = $provinces[0];
        }

        if ($province) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Province!',
                'data'      => $province
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found!',
            ], 404);
        }
    }

}
