<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function  about(){
        return view('about');
    }  

    public function calculate($a,$b){
        return 'Result:'.($a+$b);
    }  

   public function admin(){
        return view('Admin.index'); 
    }


    public function service()
    {
        $services = ['design','develop','test'];
        return view('services')->with('services',$services);
    }
    
}
