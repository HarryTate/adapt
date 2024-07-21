<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $this->validator($request->all())->validate();

        // Create the user
        $user = $this->create($request->all());

        // Log the user in
        Auth::login($user);
        $request->session()->flash('success', 'Registration successful!');
        // Redirect to the home page or wherever you want
        return redirect()->route('register');
    }

    // Validate the registration data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // Create a new user instance
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
