<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            'nama' => "Eric Yoel",
            'tahun_masuk'=> 2022,
            'tgl_lahir' => '2020-02-02',
            'alamat' => 'Jalan Raya halo',
            'is_aktif'=> 1,
            'notelp'=> 08953349348
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
