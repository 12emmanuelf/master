<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use App\Models\Coursier;
use App\Models\Bordereau;
use Illuminate\Http\Request;

class BordereauController extends Controller
{
    public function index()
    {
        $bordereaus = Bordereau::all();
        return view('bordereau.index',compact('bordereaus'));

    }

    public function create()
    {
        $colis = Colis::all();
        $bordereaus = Bordereau::all();
        $coursiers = Coursier::all();
        return view('bordereau.create', compact('bordereaus','coursiers','colis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'nom_des' => 'required',
            'coursier_id' => 'required',
        ]);

        $coursierId = $request->get('coursier_id');
        $coursier = Coursier::find($coursierId);

        if($coursier){
        $bordereau= new bordereau;
            $bordereau ->date = $request->get('date');
            $bordereau ->nom_des = $request->get('nom_des');
            $bordereau-> coursier_id = $coursier ->id;


            $bordereau->save();

            return redirect()->route('bordereau.index')->with('success', 'bordereau créé');
        } else {
            return redirect()->back()->with('error', 'erreur de creation.');
        }
    }

    public function show($id)
    {
        $bordereau = Bordereau::findOrFail($id);
        $coursier = Coursier::find($bordereau->Coursier_id);
        return view('bordereau.show', compact('bordereau','coursier' ));
    }

    public function edit($id)
    {
        $bordereau= Bordereau::findOrFail($id);
        $coursiers = Coursier::all();
        return view('bordereau.edit', compact('bordereau', 'coursiers'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'nom_des' => 'required',
            'coursier_id' => 'required',
        ]);

        $coursierId = $request->get('coursier_id');
        $coursier = Coursier::find($coursierId);

        if($coursier){
        $bordereau= new bordereau;
            $bordereau ->date = $request->get('date');
            $bordereau ->nom_des = $request->get('nom_des');
            $bordereau-> coursier_id = $coursier ->id;

            $bordereau->update();

            return redirect()->route('bordereau.index')->with('success', 'bordereau modifié');
        } else {
            return redirect()->back()->with('error', 'erreur de midification.');
        }
    }

    public function destroy($id)
    {

        $bordereau = Bordereau::findOrFail($id);
        $bordereau->delete();
        return redirect()->route('bordereau.index')->with('success', 'bordereau supprimé avec succès');
    }
}
