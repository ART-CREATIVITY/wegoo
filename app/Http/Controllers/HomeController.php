<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Flight;

class HomeController extends Controller
{
    public function index(Request $request){

        $first = Flight::orderBy('created_at', 'desc')->first();
        $flights = Flight::limit(3)->get();
        return View::make('home', ['flights'=> $flights, 'flight'=> $first]);
    }
}
