<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

    public function readMessages(Request $request)
    {
        $conversationId = $request->input('conversation_id');

        $conversation_actuel = Conversation::findOrFail($conversationId);


        $unreadMessages = $conversation_actuel->messages()->get();

        foreach ($unreadMessages as $message) {
            $message->update(['read_at' => now()]);
        }

    }
   

    public function store(Request $request)
    {   
            // $request->validate([
            //     'conversation_id' => 'required|exists:conversations,id',
            //     'content' => 'required|string',
            // ]);
        $conversation = Conversation::findOrFail($request['conversation_id']);

        $message = Message::create([
            'conversation_id' => $conversation->id,
            'content' => $request['content'],
            'sender_id' => auth()->id(),
            'read_at' => null,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json('success');
    }
}
// broadcast(new NewMessage($message , $destinataireId))->toOthers();