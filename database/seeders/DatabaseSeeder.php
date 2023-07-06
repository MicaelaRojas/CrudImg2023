<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crear un usuario de ejemplo
        User::create([
            'name' => 'Usuario Ejemplo',
            'email' => 'ejemplo@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
