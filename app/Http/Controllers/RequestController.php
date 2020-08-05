<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends BaseController
{
    public function __construct()
    {
    }

    public function getQueryString(Request $request) {
        return $request->all();

//        return view('home', [
//            'name' => 'getQueryString'
//        ]);
    }

    public function getPost(Request $request) {
        return $request->all();
    }

    public function findCustomers(Request $request){
        $shop = $request->input('shop');

        $name = $request->input('name');

        if(!empty($name)){
            return DB::select("SELECT * FROM customers WHERE `姓名` LIKE '%$name%'");
        } else {
            return 'no name parameter';
        }




    }
}
