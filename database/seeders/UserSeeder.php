<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //=========== avant de seeder la table user  ======
        User::truncate();


        // ==== Attribution du role administrateur ========

        $gestionnaire = Role::where('nom', 'Gestionnaire')->first();

        User::create([
            'nom' => 'ESSOH',
            'prenoms' => 'Wilfried',
            'telephone' => '0777163605',
            'identifiant' => 'ESSOH',
            'password' => Hash::make('password'),
            'role_id' => $gestionnaire->id
        ]);
    }
}
