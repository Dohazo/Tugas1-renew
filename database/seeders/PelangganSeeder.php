<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pelanggan')->insert([
            'nama' => "Eric Yoel",
            'tahun_masuk'=> 2022,
            'tgl_lahir' => "2020-02-02",
            'alamat' => "Jalan Raya halo",
            'is_aktif'=> 1,
            'notelp'=> "08953349348"
        ]);
    }
}
