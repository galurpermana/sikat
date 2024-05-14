<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_mahasiswa = Role::updateOrCreate(
            ['name' => 'mahasiswa'],
            ['name' => 'mahasiswa']
        );

        $role_tendik = Role::updateOrCreate(
            ['name' => 'tendik'],
            ['name' => 'tendik']
        );

        $role_koorpro = Role::updateOrCreate(
            ['name' => 'koor_prodi'],
            ['name' => 'koor_prodi']
        );

        $role_mitra = Role::updateOrCreate(
            ['name' => 'mitra'],
            ['name' => 'mitra']
        );

        $role_dospem = Role::updateOrCreate(
            ['name' => 'dosen_pembimbing'],
            ['name' => 'dosen_pembimbing']
        );

        $permission = Permission::updateOrCreate(
            ['name' => 'view_dashboard_kp'], //contoh permission
            ['name' => 'view_dashboard_kp']
        );

        $role_mahasiswa->givePermissionTo($permission); //contoh giving permission

    }
    
}
