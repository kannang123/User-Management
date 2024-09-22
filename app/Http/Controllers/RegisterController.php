<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\DatabaseCreator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);


        $databaseName = $validatedData['email'] ;
        $databaseCreator = new DatabaseCreator();
        $email = $databaseCreator->createDatabase($databaseName);
        if ($email == 'exists') {
            return back()->with('error', 'User Already Exsit');

        }
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('login');
    }
}