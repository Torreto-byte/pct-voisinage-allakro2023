<?php

namespace App\Http\Controllers\WebSite;

use App\Models\Projet;
use App\Models\Habitant;
use App\Models\Pharmacie;
use App\Models\CentreSante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OffreService;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function webSiteHome() {
        return view('website.accueil');
    }


    public function afficherPharmacie() {
        $items = Pharmacie::all();

        return view('website.pharmacie', compact('items'));
    }


    public function afficherCentre() {
        $items = CentreSante::all();

        return view('website.centresante', compact('items'));
    }


    public function afficherProjet() {
        $items = Projet::all();

        return view('website.projet', compact('items'));
    }


    public function naissances() {
        return view('website.naissance');
    }


    public function enregistrer_naissance(Request $request){

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'genre' => 'required',
            'date_naissance' => 'required',
            'lieu_habitation' => 'required',
            'mode_naissance' => 'required',
            'noms_pere' => 'required',
            'noms_mere' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Habitant();

        $add->nomHabt = $request->nom;
        $add->prenomHabt = $request->prenoms;
        $add->sexeHabt = $request->genre;
        $add->date_naissanceHabt = $request->date_naissance;
        $add->lieu_habitation = $request->lieu_habitation;
        $add->mode_naissanceHabt = $request->mode_naissance;
        $add->nom_prenomPere = $request->noms_pere;
        $add->nom_prenomMere = $request->noms_mere;

        $add->save();

        return redirect()->back()->with('message', 'Enregistrement effectué avec succès !');

    }


    public function deces() {
        return view('website.deces');
    }


    public function enregistrer_deces(Request $request){

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'genre' => 'required',
            'date_naissance' => 'required',
            'date_deces' => 'required',
            'lieu_habitation' => 'required',
            'mode_deces' => 'required',
            'fonction' => 'required',
            'raison_deces' => 'required',
            'noms_referent' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Habitant();

        $add->nomHabt = $request->nom;
        $add->prenomHabt = $request->prenoms;
        $add->sexeHabt = $request->genre;
        $add->date_naissanceHabt = $request->date_naissance;
        $add->lieu_habitation = $request->lieu_habitation;
        $add->date_decesHabt = $request->date_deces;
        $add->mode_decesHabt = $request->mode_deces;
        $add->raison_deces = $request->raison_deces;
        $add->nom_prenomReferent = $request->noms_referent;
        $add->fonctionHabt = $request->fonction;

        $add->save();

        return redirect()->back()->with('message', 'Enregistrement effectué avec succès !');

    }


    public function amenagement() {
        return view('website.amenagement');
    }


    public function enregistrer_amenagement(Request $request){

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'genre' => 'required',
            'date_naissance' => 'required',
            'lieu_habitation' => 'required',
            'fonction' => 'required',
            'provenance' => 'required',
            'mode_heberg' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Habitant();

        $add->nomHabt = $request->nom;
        $add->prenomHabt = $request->prenoms;
        $add->sexeHabt = $request->genre;
        $add->date_naissanceHabt = $request->date_naissance;
        $add->lieu_habitation = $request->lieu_habitation;
        $add->provenance = $request->provenance;
        $add->mode_heberg = $request->mode_heberg;
        $add->fonctionHabt = $request->fonction;

        $add->save();

        return redirect()->back()->with('message', 'Enregistrement effectué avec succès !');

    }


    public function demenagement() {
        return view('website.demenagement');
    }


    public function enregistrer_demenagement(Request $request){

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'genre' => 'required',
            'date_naissance' => 'required',
            'lieu_habitation' => 'required',
            'fonction' => 'required',
            'destination' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Habitant();

        $add->nomHabt = $request->nom;
        $add->prenomHabt = $request->prenoms;
        $add->sexeHabt = $request->genre;
        $add->date_naissanceHabt = $request->date_naissance;
        $add->lieu_habitation = $request->lieu_habitation;
        $add->nouvelle_destination = $request->destination;
        $add->fonctionHabt = $request->fonction;

        $add->save();

        return redirect()->back()->with('message', 'Enregistrement effectué avec succès !');

    }


    public function formulaire() {
        return view('website.formulaire');
    }


    public function enregistrer_formulaire(Request $request){

        $validator =  Validator::make($request->all(), [
            'noms' => 'required',
            'telephone' => 'required',
            'services' => 'required',
            'competences' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new OffreService();

        $add->noms = $request->noms;
        $add->service = $request->telephone;
        $add->qualifications = $request->services;
        $add->contact = $request->competences;
        $add->photo = $request->photo;
        $add->message = $request->message;

        $add->save();

        return redirect()->back()->with('message', 'Enregistrement effectué avec succès !');

    }

}
