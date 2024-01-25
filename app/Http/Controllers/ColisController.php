<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use Illuminate\Http\Request;

class ColisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colis = Colis::all();
        return view('colis.index', compact('colis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'expedition'=>'required',
            'adresse'=>'required',
            'ville'=> 'required',
            'code_postale' => 'required',
            'n_colis'=>'required',
            'poids'=>'required',
            'reference'=> 'required',
            'expediteur' => 'required',
            // 'nature_id' => 'required|exists:natures,id',
        ]);


        $colis = new colis([
            'expedition' => $request->get('expedition'),
            'adresse' => $request->get('adresse'),
            'ville' => $request->get('ville'),
            'code_postale' => $request->get('code_postale'),
            'n_colis' => $request->get('n_colis'),
            'poids' => $request->get('poids'),
            'reference' => $request->get('reference'),
            'expediteur' => $request->get('expediteur'),
            // 'nature_id' => $request->get('nature_id'),
        ]);
        $colis->save();
        return redirect('/colis.index')->with('success', 'Client Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $colis = colis::findOrFail($id);
        return view('colis.show', compact('colis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colis = colis::findOrFail($id);

        return view('colis.edit', compact('colis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colis $id)
    {
        $request->validate([
            'expedition'=>'required',
            'adresse'=>'required',
            'ville'=> 'required',
            'code_postale' => 'required',
            'n_colis'=>'required',
            'date'=>'required',
            'poids'=>'required',
            'reference'=> 'required',
            'expediteur' => 'required',
            // 'nature_id' => 'required|exists:natures,id',
        ]);
            $colis= colis::findOrFail($id);
            $colis->expedition = $request->get('expedition');
            $colis->adresse = $request->get('adresse ');
            $colis->ville = $request->get('ville');
            $colis->code_postale = $request->get('code_postale');
            $colis->n_colis = $request->get('n_colis');
            $colis->poids = $request->get('poids ');
            $colis->reference = $request->get('reference');
            $colis->expediteur = $request->get('expediteur');
            // $colis->nature_id = $request->get('nature_id');

        $colis->update();

        return redirect('/colis.index')->with('success', 'colis Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $colis = colis::findOrFail($id);
        $colis->delete();

        return redirect('/coli.index')->with('success', 'Supprime avec succès');
    }
}
