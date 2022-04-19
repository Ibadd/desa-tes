<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identitas_desas')->insert([
            'namaDesa' => Str::random(10),
            'namaKecamatan' => Str::random(10),
            'namaKabupaten' => Str::random(10),
            'namaProvinsi' => Str::random(10),
            'logo' => 'logo.png',
        ]);
        DB::table('pemerintah_desas')->insert([
            'namaKepalaDesa' => Str::random(10),
            'kantor' => Str::random(10),
            'telp' => Str::random(10),
            'email' => Str::random(10),
        ]);
    }
}
