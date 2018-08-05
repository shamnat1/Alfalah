<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stock;

class ProductsController extends Controller
{
    //
    public function productList( Request $request){

        $StockCode = $request->get('product_id');
        $data['stockList'] = stock::where('StockCode','like','%'.$StockCode.'%')->limit(10)->get();
        return view('product_list',$data);
        //  echo $data['stockList'];

    }
}
