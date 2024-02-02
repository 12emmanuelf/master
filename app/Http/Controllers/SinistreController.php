<?php

namespace App\Http\Controllers;

use App\Models\Sinistre;
use Illuminate\Http\Request;

class SinistreController extends Controller
{
    public function index()
    {

        $sinistres = Sinistre::all();
        return view('sinistre.index', compact('sinistres'));
    }
}
