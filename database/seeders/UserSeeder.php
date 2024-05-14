<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Cahya Galur Permana',
                'email' => '10221057@student.itk.ac.id',
                'password' => bcrypt('12345678'),
                'role' => 'mahasiswa',
            ],
            [
                'name' => 'Tendik ITK',
                'email' => 'tendik@staff.itk.ac.id',
                'password' => bcrypt('12345678'),
                'role' => 'tendik',
            ],
            [
                'name' => 'Dosen ITK',
                'email' => 'dosen@lecturer.itk.ac.id',
                'password' => bcrypt('12345678'),
                'role' => 'dosen_pembimbing',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                ]
            );

            // Assign the role if the user is newly created
            if ($user->wasRecentlyCreated) {
                $user->assignRole($userData['role']);
            }
        }
    }
}