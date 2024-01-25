<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = new user([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ]);
        $user->save();
        return redirect('/user.index')->with('success', 'utilisateur Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $user = user::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = user::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([

            'nom'=>'required',
            'prenom'=> 'required',
            'email'=> 'required',
            'password'=> 'password',
        ]);

        $user = user::findOrFail($id);
        $user->nom = $request->get('nom');
        $user->prenom = $request->get('prenom ');
        $user->email = $request->get('email');
        $user->password = $request->get('password');


        $user->update();

        return redirect('/user.index')->with('success', 'utilisateur Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect('/user.index')->with('success', 'utilisateur Supprime avec succès');
    }
}
