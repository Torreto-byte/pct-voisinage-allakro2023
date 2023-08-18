<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProjetController extends Controller
{
    public function afficherProjet() {
        $items = Projet::all();

        return view('admin.pages.listProjet', compact('items'));
    }


    public function creation() {
        return view('admin.pages.addProjet');
    }


    public function enregistrer(Request $request) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'auteur' => 'required',
            'date_projet' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Projet();

        $add->nomPrj = $request->nom;
        $add->autPrj = $request->auteur;
        $add->datePrj = $request->date_projet;

        $add->save();

        return redirect()->route('listProjet')->with('message', 'Enregistrement effectué avec succès !');
    }


    public function modifier($id) {
        $edit = Projet::findOrFail($id);
        return view('admin.pages.editProjet', compact('edit'));
    }


    public function update(Request $request, $id) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'auteur' => 'required',
            'date_projet' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $update = Projet::findOrFail($id);

        $update->nomPrj = $request->nom;
        $update->autPrj = $request->auteur;
        $update->datePrj = $request->date_projet;

        $update->save();

        $update->save();

        return redirect()->route('listProjet')->with('message', 'Modification effectuée avec succès !');
    }


    public function supprimer($id) {
        Projet::destroy($id);
        return redirect()->route('listProjet')->with('message', 'Suppression effectuée avec succès !');
    }

}
