<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program1(){
        return view('program.karir');
      }
 
 public function program2(){
       return view('program.magang');
     }
 
 public function program3(){
       return view('program.kunjungan');
     }
}
