<?php

namespace App\Http\Controllers\Front;

use App\Models\Maladie;
use App\Models\Pharmacie;
use App\Models\CentreSante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function frontHome() {
        $pharmacie = Pharmacie::all();

        return view('front.pages.home', compact('pharmacie'));
    }

    public function afficherPharmacie() {
        $items = Pharmacie::all();

        return view('front.pages.listPharmacie', compact('items'));
    }

    public function afficherCentre() {
        $items = CentreSante::all();

        return view('front.pages.listCentre', compact('items'));
    }

    public function afficherMaladies() {
        $items = Maladie::all();

        return view('front.pages.listMaladie', compact('items'));
    }
}
