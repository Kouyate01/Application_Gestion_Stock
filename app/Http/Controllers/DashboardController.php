<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Generation;
use App\Sortie;
class DashboardController extends Controller
{
    public function home()
    {
    	$entres = Generation::take(10)->get();
        $sorties = Sortie::take(10)->get();
    	return view('dashboard.home')->with('entres',$entres)->with('sorties',$sorties);
    }
}
