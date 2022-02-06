<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public $products = array(
     ['id' => 1, 'name' => 'one', 'price' => 5000],
     ['id' => 2, 'name' => 'two', 'price' => 1000], 
     ['id' => 3, 'name' => 'three', 'price' => 14100], 
     ['id' => 4, 'name' => 'four', 'price' => 10200],
     ['id' => 5, 'name' => 'five', 'price' => 11800],
     ['id' => 6, 'name' => 'six', 'price' => 12000],
     ['id' => 7, 'name' => 'seven', 'price' => 13000],
     ['id' => 8, 'name' => 'eight', 'price' => 15000],
     ['id' => 9, 'name' => 'nine', 'price' => 16000],
     ['id' => 10, 'name' => 'ten', 'price' => 1000],
     ['id' => 11, 'name' => 'eleven', 'price' => 1800],
     ['id' => 12, 'name' => 'tweleve', 'price' => 9000]);
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function Products()
    {
         return view('products' , ['Products' => $this->products]);

        }
    public function ProductsDetails( $id){
    $index=$id-1;
    $item=$this->products[$index];

    return view('product-details',['product' => $item] );
            
    }
}
