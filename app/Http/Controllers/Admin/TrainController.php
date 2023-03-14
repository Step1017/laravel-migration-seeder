<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Importazione Models
use App\Models\Train;

class TrainController extends Controller
{
    //creazione funzione (public)
    public function index() {
        $trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();

        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
