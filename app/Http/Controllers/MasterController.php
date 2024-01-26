<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Client;
use App\Models\Coursier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class MasterController extends Controller
{
    public function index()
    {
        $totals = [
            'users' => User::count(),
            'clients' => Client::count(),
            'coursiers' => Coursier::count(),
        ];

        $clients = Client::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as mois, COUNT(*) as total')
        ->groupBy('mois')
        ->orderBy('mois')
        ->get();

        return view('Master.index', compact('totals','clients'));
    }
}
