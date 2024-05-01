<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Request as ModelsRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{


    public function index()
    {
        $user = Auth::user();

        $annonces = Annonce::where('user_id', $user->id)->with('requests')->get();
        $applications = ModelsRequest::where('user_id', $user->id)->with('user')->get();
        // dd($applications);
        return view('user.applications', compact('annonces', 'applications'));
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

    public function acceptRequest(ModelsRequest $request)
    {
        $request->status = 'approved';
        $request->save();
        return back()->with('success', 'Request accepted successfully.');
    }
}
