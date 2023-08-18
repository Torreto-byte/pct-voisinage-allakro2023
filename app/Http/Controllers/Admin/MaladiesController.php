<?php

namespace App\Http\Controllers\Admin;

use App\Models\Maladie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MaladiesController extends Controller
{

    public function afficherMaladies() {
        $items = Maladie::all();

        return view('admin.pages.listMaladie', compact('items'));
    }


    public function creation() {
        return view('admin.pages.addMaladie');
    }


    public function enregistrer(Request $request) {
        $validator =  Validator::make($request->all(), [
            'libelle' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $add = new Maladie();

        $add->libMal = $request->libelle;

        $add->save();

        return redirect()->route('listMaladie')->with('message', 'Enregistrement effectué avec succès !');
    }


    public function modifier($id) {
        $edit = Maladie::findOrFail($id);
        return view('admin.pages.editMaladie', compact('edit'));
    }


    public function update(Request $request, $id) {
        $validator =  Validator::make($request->all(), [
            'libelle' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $update = Maladie::findOrFail($id);

        $update->libMal = $request->libelle;

        $update->save();

        return redirect()->route('listMaladie')->with('message', 'Modification effectuée avec succès !');
    }


    public function supprimer($id) {
        Maladie::destroy($id);
        return redirect()->route('listMaladie')->with('message', 'Suppression effectuée avec succès !');
    }
}
