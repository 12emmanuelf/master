<?php

namespace App\Livewire\Bordereau;

use App\Models\Colis;
use Livewire\Component;
use App\Models\Coursier;
use App\Models\Bordereau;
use App\Livewire\Bordereau\CRUD;

class CRUD extends Component
{

    public  $date, $nom_des , $coursier_id ;
    public $confirmingBordereauDeletion = false;

    public function mount()
    {
        $this->bordereau = new Bordereau();
        $this->colis = Colis::all();
        $this->coursiers = Coursier::all();
    }

    public function render()
    {
        $bordereaus = Bordereau::all();

        return view('livewire.bordereau.index', ['bordereaus' => $bordereaus])
        ->extends('Dashboards.layout.app')
        ->section('contenu');
    }

    public function confirmBordereauDeletion($id)
    {
        $this->bordereau = Bordereau::findOrFail($id);
        $this->confirmingBordereauDeletion = true;
        return view('bordereau.confirm-delete')->with(compact('bordereaus'));
    }

    public function cancelBordereauDeletion()
    {
        $this->confirmingBordereauDeletion = false;
    }

    public function deleteBordereau()
    {
        $this->bordereau->delete();

        session()->flash('success', 'Bordereau supprimé avec succès.');
        return redirect()->route('bordereau.index');
    }

    public function create()
    {
        $colis = Colis::all();
        $bordereaus = Bordereau::all();
        $coursiers = Coursier::all();
        return view('livewire.bordereau.create', compact('bordereaus','coursiers','colis'));
    }
    public function store()
    {
        $this->validate([
            'bordereau.date' => 'required',
            'bordereau.nom_des' => 'required',
            'bordereau.coursier_id' => 'required',
        ]);

        $coursier = Coursier::find($this->bordereau['coursier_id']);

        if ($coursier) {
            $this->bordereau->save();

            session()->flash('success', 'Bordereau créé.');
            return redirect()->route('bordereau.index');
        } else {
            session()->flash('error', 'Erreur de création.');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $this->bordereau = Bordereau::findOrFail($id);

        return view('livewire.bordereau.edit');
    }

    public function update($id)
    {
        $this->validate([
            'bordereau.date' => 'required',
            'bordereau.nom_des' => 'required',
            'bordereau.coursier_id' => 'required',
        ]);

        $coursier = Coursier::find($this->bordereau['coursier_id']);

        if ($coursier) {
            $bordereau = Bordereau::findOrFail($id);
            $bordereau->update($this->bordereau->toArray());

            session()->flash('success', 'Bordereau modifié.');
            return redirect()->route('bordereau.index');
        } else {
            session()->flash('error', 'Erreur de modification.');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $bordereau = Bordereau::findOrFail($id);
        $bordereau->delete();

        session()->flash('success', 'Bordereau supprimé avec succès.');
        return redirect()->route('bordereau.index');
    }
}
