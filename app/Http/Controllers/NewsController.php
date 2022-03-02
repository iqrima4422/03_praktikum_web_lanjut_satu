<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $title=['educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'];
        return view('news',$title);
       
    }
    
}
