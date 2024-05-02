<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nama' => 'SD Mutiara Balige',
            'username' => "adminsd",
            'password' => Hash::make('sdmutiarabalige'),
            'Foto' => 'administrator.jpg',
        ]);
    }
}
