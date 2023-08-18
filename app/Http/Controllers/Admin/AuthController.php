<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view('admin/pages/login');
    }


    public function authentificate(Request $request) {

        $validator =  Validator::make($request->all(), [
            'identifiant' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('identifiant', 'password');
        $userNotFound = Auth::attempt($credentials);

        if (!$userNotFound) {
            return redirect()->back()->with('message', 'Identifiant ou Mot de Passe incorrect !!!');
        } else {

            $user = DB::table('users')
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->select('users.*', 'roles.nom as role')
                ->where('users.identifiant', $request->identifiant)
                ->first();

            //dd($user);

            session([
                'noms' => $user->nom." ".$user->prenoms,
                'identifiant' => $user->identifiant,
                'role_id' => $user->role_id,
                'role_name' => $user->role,
                'user_id' => $user->id,
            ]);

            switch (Session::get('role_id')) {
                case 3:
                    return redirect()->route('frontHomePage');
                    break;
                
                default:
                    return redirect()->route('homePage');
                    break;
            }
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('webSiteHome');
    }


}
