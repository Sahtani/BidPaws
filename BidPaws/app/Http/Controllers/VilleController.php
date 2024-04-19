<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VilleController extends Controller
{
    
    public function getVilles()
    {
        $villes = json_decode(file_get_contents(storage_path('villes_maroc.json')));
        dd($villes);
        return view('user.create', ['villes' => $villes]);

    }
}
