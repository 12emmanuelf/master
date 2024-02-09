<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use App\Models\Bordereau;
use App\Models\Lbordereau;
use Illuminate\Http\Request;

class LbordereauController extends Controller
{
   public function index()
   {

    $lbordereaus= Lbordereau::all();
    return view('lbordereau.index',compact('lbordereaus'));
   }

   public function create()
   {
       $lbordereaus = Lbordereau::all();
       $colis = Colis::all();
       $bordereaus = Bordereau::all();
       return view('bordereau.create', compact('lbordereaus', 'bordereaus', 'colis'));
   }

   public function store(Request $request)
   {
      $request->validate([
         'categorie' => 'required',
         'bordereau_id' => 'required',
         'colis_id' => 'required',
      ]);

      $bordereau = Bordereau::find($request->bordereau_id);
      $colis = Colis::find($request->colis_id);

      if ($bordereau && $colis) {
         $lbordereau = new Lbordereau;
         $lbordereau->categorie = $request->categorie;
         $lbordereau->bordereau_id = $bordereau->id;
         $lbordereau->colis_id = $colis->id;

         $lbordereau->save();
      } else {
         return redirect()->back()->with('error', 'Le colis ou le bordereau spécifiée n\'a pas été trouvée.');
      }
   }

       // event(new ClientCreated($client));

   public function show($id)
   {
       $lbordereau= Lbordereau::findOrFail($id);
       $bordereau = Bordereau::find($lbordereau->colis_id);
       $colis = Colis::find($lbordereau->colis_id);
       return view('lbordereau.show', compact('lbordereau','colis','bordereau' ));
   }

   public function edit($id)
   {
       $lbordereau = Lbordereau::findOrFail($id);
       $colis = Colis::all();
       $bordereaus = Bordereau::all();
       return view('lbordereau.edit', compact('lbordereau', 'Colis','Bordereau'));
   }

   public function update(Request $request, $id)
   {
      $request->validate([
         'categorie' => 'required',
         'bordereau_id' => 'required',
         'colis_id' => 'required',
      ]);

      $bordereau = Bordereau::find($request->bordereau_id);
      $colis = Colis::find($request->colis_id);

      if ($bordereau && $colis) {
         $lbordereau = Lbordereau::findOrFail($id);
         $lbordereau->categorie = $request->categorie;
         $lbordereau->bordereau_id = $bordereau->id;
         $lbordereau->colis_id = $colis->id;

         $lbordereau->save();
      } else {
         return redirect()->back()->with('error', 'Le colis ou le bordereau spécifiée n\'a pas été trouvée.');
      }
   }

   public function destroy($id)
   {
      $lbordereau = Lbordereau::findOrFail($id);
      $lbordereau->delete();

      return redirect()->route('lbordereau.index')->with('success', 'Ligne supprimée avec succès');
   }

}
