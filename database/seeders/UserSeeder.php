<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario=new User();
        $usuario->name=('Bryan Inostroza');
        $usuario->email=('bryan@gmail.com');
        $usuario->password=bcrypt('a1b2c3d4');
        $usuario->save();

        $usuario2=new User();
        $usuario2->name=('Ignacio Salazar');
        $usuario2->email=('ignacio@gmail.com');
        $usuario2->password=bcrypt('d4c3d2a1');
        $usuario2->save();
    }
}