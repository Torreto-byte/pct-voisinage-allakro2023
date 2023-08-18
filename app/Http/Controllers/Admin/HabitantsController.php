<?php

namespace App\Http\Controllers\Admin;

use App\Models\Habitant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HabitantsController extends Controller
{
    public function afficherHabitant() {

        $items = Habitant::all();

        return view('admin.pages.listHabitant', compact('items'));
    }

    
    public function creation() {
        return view('admin.pages.addHabitant');
    }


    public function enregistrer(Request $request) {

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'contact' => 'required',
            'genre' => 'required',
            'fonction' => 'required',
            'date_naissance' => 'required',
            'lieu_habitation' => 'required',
            'mode_naissance',
            'noms_pere',
            'noms_mere',
            'date_deces',
            'mode_deces',
            'raison_deces',
            'personne_referent',
            'provenance',
            'mode_heberg',
            'destination',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Habitant();

        $add->nomHabt = $request->nom;
        $add->prenomHabt = $request->prenoms;
        $add->contactHabt = $request->contact;
        $add->sexeHabt = $request->genre;
        $add->date_naissanceHabt = $request->date_naissance;
        $add->fonctionHabt = $request->fonction;
        $add->lieu_habitation = $request->lieu_habitation;
        $add->mode_naissanceHabt = $request->mode_naissance;
        $add->nom_prenomPere = $request->noms_pere;
        $add->nom_prenomMere = $request->noms_mere;
        $add->date_decesHabt = $request->date_deces;
        $add->mode_decesHabt = $request->mode_deces;
        $add->raison_deces = $request->raison_deces;
        $add->nom_prenomReferent = $request->personne_referent;
        $add->provenance = $request->provenance;
        $add->mode_heberg = $request->mode_heberg;
        $add->nouvelle_destination = $request->destination;

        $add->save();

        return redirect()->route('listHabitant')->with('message', 'Enregistrement effectué avec succès !');
    }


    public function modifier($id) {
        $edit = Habitant::findOrFail($id);
        return view('admin.pages.editHabitant', compact('edit'));
    }


    public function update(Request $request, $id) {

        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'contact' => 'required',
            'genre' => 'required',
            'fonction' => 'required',
            'date_naissance' => 'required',
            'lieu_habitation' => 'required',
            'mode_naissance',
            'noms_pere',
            'noms_mere',
            'date_deces',
            'mode_deces',
            'raison_deces',
            'personne_referent',
            'provenance',
            'mode_heberg',
            'destination',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $update = Habitant::findOrFail($id);

        $update->nomHabt = $request->nom;
        $update->prenomHabt = $request->prenoms;
        $update->contactHabt = $request->contact;
        $update->sexeHabt = $request->genre;
        $update->date_naissanceHabt = $request->date_naissance;
        $update->fonctionHabt = $request->fonction;
        $update->lieu_habitation = $request->lieu_habitation;
        $update->mode_naissanceHabt = $request->mode_naissance;
        $update->nom_prenomPere = $request->noms_pere;
        $update->nom_prenomMere = $request->noms_mere;
        $update->date_decesHabt = $request->date_deces;
        $update->mode_decesHabt = $request->mode_deces;
        $update->raison_deces = $request->raison_deces;
        $update->nom_prenomReferent = $request->personne_referent;
        $update->provenance = $request->provenance;
        $update->mode_heberg = $request->mode_heberg;
        $update->nouvelle_destination = $request->destination;

        $update->save();

        return redirect()->route('listHabitant')->with('message', 'Modification effectuée avec succès !');
    }


    public function supprimer($id) {
        Habitant::destroy($id);
        return redirect()->route('listHabitant')->with('message', 'Suppression effectuée avec succès !');
    }

}
