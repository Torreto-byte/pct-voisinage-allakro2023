<?php

namespace App\Http\Controllers\Admin;

use App\Models\Habitant;
use App\Models\CentreSante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CentreSanteController extends Controller
{
    public function afficherCentre() {
        $items = CentreSante::all();

        $countHabitantEnAttente = Habitant::where('statut', 'EN ATTENTE')->count();

        return view('admin.pages.listCentre', compact('items', 'countHabitantEnAttente'));
    }


    public function creation() {
        $countHabitantEnAttente = Habitant::where('statut', 'EN ATTENTE')->count();

        return view('admin.pages.addCentre', compact('countHabitantEnAttente'));
    }


    public function enregistrer(Request $request) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'localisation' => 'required',
            'service' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new CentreSante();

        $add->nomCdsan = $request->nom;
        $add->locCdsan = $request->localisation;
        $add->servCdsan = $request->service;

        $add->save();

        return redirect()->route('listCentre')->with('message', 'Enregistrement effectué avec succès !');
    }


    public function modifier($id) {
        $edit = CentreSante::findOrFail($id);

        $countHabitantEnAttente = Habitant::where('statut', 'EN ATTENTE')->count();
        
        return view('admin.pages.editCentre', compact('edit', 'countHabitantEnAttente'));
    }


    public function update(Request $request, $id) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'localisation' => 'required',
            'service' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $update = CentreSante::findOrFail($id);

        $update->nomCdsan = $request->nom;
        $update->locCdsan = $request->localisation;
        $update->servCdsan = $request->service;

        $update->save();

        return redirect()->route('listCentre')->with('message', 'Modification effectuée avec succès !');
    }


    public function supprimer($id) {
        CentreSante::destroy($id);
        return redirect()->route('listCentre')->with('message', 'Suppression effectuée avec succès !');
    }
}
