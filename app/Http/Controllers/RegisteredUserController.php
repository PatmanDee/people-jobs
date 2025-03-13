<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate all the attributes
        $userAttributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::min(6)],
        ]);

        $employerAttributes = $request->validate([
            'employer_name' => ['required', 'string', 'max:255'],
            'employer_logo' => ['required', File::types(['jpg', 'png', 'jpeg', 'svg', 'gif', 'webp','avif'])],
        ]);

        //Create the user
        $user = User::create($userAttributes);

        //Store the logo
        $logoPath = $request->employer_logo->store('logos');

        //Create the employer
        $user->employer()->create([
            'name' => $employerAttributes['employer_name'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
