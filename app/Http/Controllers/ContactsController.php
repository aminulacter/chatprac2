<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use Auth;

class ContactsController extends Controller
{
    public function get()
    {
        $contacts = user::all();
        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        $message = Message::where('from', $id)->orWhere('to', $id)->get();
        return response()->json($message);
    }

    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->user()->id,
            'to' => $request->contact_id,
            'text' => $request->text
        ]);

        return response()->json($message);
    }

}
