<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
                    'name' => 'Admin',
                    'email' => 'admin@isp.ac.cd',
                ]);
        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'secretaire']);
        $user->assignRole($role);
        $permission1 =  Permission::create(['name' => 'créer horaire']);
        $permission2 = Permission::create(['name' => 'modifier horaire']);
        $permission3 = Permission::create(['name' => 'supprimer horaire']);

        $permission4 = Permission::create(['name' => 'créer tout']);
        $permission5 = Permission::create(['name' => 'modifier tout']);
        $permission6 = Permission::create(['name' => 'supprimer tout']);
    }
}
