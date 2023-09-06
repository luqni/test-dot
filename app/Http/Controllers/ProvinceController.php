<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Capsule\Manager as DB;

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
        $id = $request->query('id');

        $province =  app('db')->select("SELECT * FROM province where province_id=".$id);

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
