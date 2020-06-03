<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\heroe;

class MainController extends Controller
{
    public function index()

    { $heroes = heroe::all();
    	return view('Main')->with(['heroes'=>$heroes]);
    	//return $heroes;
    }

    	public function show (heroe $heroe) {

    	 return view('heroe')-> with (['heroe'=> $heroe]);
    	}
  
    
}

