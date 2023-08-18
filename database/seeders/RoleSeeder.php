<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['nom' => 'Gestionnaire']);
        Role::create(['nom' => 'Chefferie']);
        Role::create(['nom' => 'Usager']);
    }
}
