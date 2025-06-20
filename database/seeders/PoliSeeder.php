<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('polis')->insert([
            ['nama' => 'Gigi', 'deskripsi' => 'Pelayanan kesehatan gigi', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Anak', 'deskripsi' => 'Pelayanan kesehatan anak', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Penyakit Dalam', 'deskripsi' => 'Pelayanan penyakit dalam', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
