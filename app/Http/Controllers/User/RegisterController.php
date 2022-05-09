<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $alakuku)
    {
        $yenonblomonan = $alakuku->validate([
            'name' => ['required', 'string', 'max:10', 'min:4'],
            'email' => ['required', 'email'],
            'password' => ['string', 'required', 'confirmed'],
            'phone_number' => ['numeric', 'required']
        ]);

        User::create([
            'name' => $yenonblomonan['name'],
            'email' => $yenonblomonan['email'],
            'password' => bcrypt($yenonblomonan['password']),
            'phone_number' => $yenonblomonan['phone_number'],
        ]);
        return response('Alakuku OK oooo');
    }
}
