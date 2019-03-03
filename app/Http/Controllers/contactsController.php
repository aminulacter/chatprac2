<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class contactsController extends Controller
{
    public function get()
    {
        $contacts = user::all();
        return response()->json($contacts);
    }
}
