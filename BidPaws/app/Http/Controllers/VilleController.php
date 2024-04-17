<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VilleController extends Controller
{
    public function getRegions()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://calm-fjord-14795.herokuapp.com/api/regions', [
            'verify' => false
        ]);
        
        dd($response);
        return $response->getBody();
    }

    public function getVilles()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://calm-fjord-14795.herokuapp.com/api/villes');
        return $response->getBody();
    }

    public function getVillesByRegion($regionID)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://calm-fjord-14795.herokuapp.com/api/villes/'.$regionID);
        return $response->getBody();
    }
}
