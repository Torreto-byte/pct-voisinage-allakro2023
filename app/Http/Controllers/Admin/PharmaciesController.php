<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PharmaciesController extends Controller
{
    public function afficherPharmacie() {
        $items = Pharmacie::all();

        return view('admin.pages.listPharmacie', compact('items'));
    }


    public function creation() {
        return view('admin.pages.addPharmacie');
    }


    public function enregistrer(Request $request) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'localisation' => 'required',
            'garde' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Pharmacie();

        $add->nomPha = $request->nom;
        $add->lacPha = $request->localisation;
        $add->pgarPha = $request->garde;

        $add->save();

        return redirect()->route('listPharmacie')->with('message', 'Enregistrement effectué avec succès !');
    }


    public function modifier($id) {
        $edit = Pharmacie::findOrFail($id);
        return view('admin.pages.editPharmacie', compact('edit'));
    }


    public function update(Request $request, $id) {
        $validator =  Validator::make($request->all(), [
            'nom' => 'required',
            'localisation' => 'required',
            'garde' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $update = Pharmacie::findOrFail($id);

        $update->nomPha = $request->nom;
        $update->lacPha = $request->localisation;
        $update->pgarPha = $request->garde;

        $update->save();

        return redirect()->route('listPharmacie')->with('message', 'Modification effectuée avec succès !');
    }


    public function supprimer($id) {
        Pharmacie::destroy($id);
        return redirect()->route('listPharmacie')->with('message', 'Suppression effectuée avec succès !');
    }
}
