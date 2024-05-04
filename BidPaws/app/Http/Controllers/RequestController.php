<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Request as ModelsRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{


    public function index()
    {
        $id = auth()->id();
        $annonces = ModelsRequest::where('user_id', $id)->with('annonce')->get();
        // dd($annonces);
        // les demande d'adoption pour les annonce de user 
       
        $requests = DB::table('requests')
        ->select('requests.status', 'send.name','send.role','send.image','send.id','send.created_at')
        ->join('annonces', 'requests.annonce_id', '=', 'annonces.id')
        ->join('users as send', 'requests.user_id', '=', 'send.id')
        ->join('users as receiv', 'annonces.user_id', '=', 'receiv.id')
        ->where('annonces.user_id',$id)
        ->get();
    
        

        return view('user.applications', compact('requests','annonces'));
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
