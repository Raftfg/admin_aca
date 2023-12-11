<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\LogSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\VehicleSeeder;
use Database\Seeders\ImporterSeeder;
use Database\Seeders\ModeelSeeder;

// seedepermission
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ImporterSeeder::class);
        $this->call(LogSeeder::class);
        $this->call(ModeelSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ImageSeeder::class);
    }

    // public function run()
    // {
    //     // Création des rôles
    //     $superAdminRole = Role::create(['name' => 'super_admin']);
    //     $adminRole = Role::create(['name' => 'admin']);

    //     // Création des permissions
    //     $permissions = [
    //         'voir_module_utilisateur',
    //         'voir_module_vehicle',
    //         'voir_module_marque_vehicule',
    //         'voir_module_model_vehicule',
    //         'voir_module_importateur',
    //         'voir_module_tracking',
    //     ];

    //     foreach ($permissions as $permission) {
    //         Permission::create(['name' => $permission]);
    //     }

    //     // Attribution des permissions aux rôles
    //     $superAdminRole->givePermissionTo($permissions);
    //     $adminRole->givePermissionTo(array_diff($permissions, ['voir_module_tracking']));

    //     // Suppression de la permission "voir_module_tracking" pour le rôle "admin"
    //     $adminRole->revokePermissionTo('voir_module_tracking');

    //     // Création d'un utilisateur avec le rôle "super_admin"
    //     $superAdminUser = User::create([
    //         'lastname' => 'Super Admin ',
    //         'firstname'=>'User',
    //         'email' => 'superadmin@example.com',
    //         'password' => bcrypt('password'),
    //     ]);
    //     $superAdminUser->assignRole('super_admin');

    //     // Vous pouvez également attribuer des rôles spécifiques aux utilisateurs ici si nécessaire
    //     // Exemple : $user->assignRole('admin');

    //     // Le reste de votre code Seeder...
    // }
}
