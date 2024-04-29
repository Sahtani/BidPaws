<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ConversationController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        // $conversations = $user->conversations()
        //     ->select('conversations.id')
        //     ->leftJoin('messages', 'conversations.id', '=', 'messages.conversation_id')
        //     ->groupBy('conversations.id')
        //     ->with('messages','user','friend')
        //     ->get();
        // $conversations = $user->conversations()
        // ->with('messages') // Charger les messages associés à chaque conversation
        // ->whereHas('friend', function ($query) use ($user) {
        //     $query->where('id', '!=', $user->id);
        // })
        // ->get();
        $conversations = auth()->user()->conversations()->with('friend', 'messages')->get();
        // foreach ($conversations as $conversation) {
        // dd($conversation->user->name);}
        return view('chat.index', compact('conversations'));
    }
    public function getUserConversations()
    {
        $user = auth()->user();
        $conversations = $user->conversations()->with('messages', 'user', 'friend')->get();

        return response()->json($conversations);
    }
}
