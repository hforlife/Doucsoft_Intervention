<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'admin',
        ]);
        $superviseurRole = Role::create(['name' => 'superviseur', 'guard_name' => 'sup']);
        $agentRole = Role::create(['name' => 'agent', 'guard_name' => 'web']);

        // Ajout d'un utilisateur admin par défaut
        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Mot de passe
        ]);

        // Attribution du rôle admin à cet utilisateur
        $admin->assignRole($adminRole);
    }
}
