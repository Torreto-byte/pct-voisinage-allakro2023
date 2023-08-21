<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CentreSante;
use App\Models\Habitant;
use App\Models\Maladie;
use App\Models\Pharmacie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        $getCountMaladie = Maladie::all();
        $getCountPharmacie = Pharmacie::all();
        $getCountCentre = CentreSante::all();
        $getCountHabitant = Habitant::all();

        $countHabitantEnAttente = Habitant::where('statut', 'EN ATTENTE')->count();

        return view('admin.pages.home', compact('getCountMaladie', 'getCountPharmacie', 'getCountCentre','getCountHabitant', 'countHabitantEnAttente'));
    }
}
