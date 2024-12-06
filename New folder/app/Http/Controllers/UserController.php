<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\student;
use App\Models\user;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        utilse form request
        return response()->json(user::with([
            'student',
        ])->get()
//        return response()->json(user::all());
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = [
            'name' => $request->name ,
            'firstName'=> $request->firstName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'photo' => $request->photo,
            'domaine'=> $request->domaine,
            'type'=> $request->type,
        ];
        user::create($form);
        return $form ;
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
