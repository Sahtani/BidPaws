<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{


    public function index()
{
    $user = Auth::user();
    $applications = $user->applications()->paginate(10); 
    return view('user.applications', ['applications' => $applications]);
}
    /**
     * Store a newly created adoption request in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adoptionRequest = ModelsRequest::create([
            'annonce_id' => $request->annonce_id,
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);
        return redirect()->route('home');
    }
}
