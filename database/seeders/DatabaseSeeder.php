<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Création des rôles
        $adminRole = Role::create(['name' => 'admin']);
        $formateurRole = Role::create(['name' => 'formateur']);
        $adherentRole = Role::create(['name' => 'adherent']);

        // Ajout d'un utilisateur admin par défaut
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Assure-toi de changer le mot de passe
        ]);

        // Attribution du rôle admin à cet utilisateur
        $admin->assignRole($adminRole);

        // Création de permissions et assignation aux rôles si nécessaire
        $permissions = [
            'manage users',
            'manage courses',
            'view courses',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Attribution des permissions aux rôles
        $adminRole->givePermissionTo(['manage users', 'manage courses']);
        $formateurRole->givePermissionTo(['manage courses']);
        $adherentRole->givePermissionTo(['view courses']);
    }
}