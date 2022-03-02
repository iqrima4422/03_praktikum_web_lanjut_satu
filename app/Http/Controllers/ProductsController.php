<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category1(){
           return view('category.products');
         }
    
    public function category2(){
          return view('category.products2');
        }
    
    public function category3(){
          return view('category.products3');
        }
}
