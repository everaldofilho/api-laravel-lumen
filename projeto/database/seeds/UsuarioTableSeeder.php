<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nome' => Str::random(45),
            'email' => 'email@email.com',
            'senha' => Hash::make('123'),
            'token' => Hash::make(Str::random(50))
        ]);
    }
}
