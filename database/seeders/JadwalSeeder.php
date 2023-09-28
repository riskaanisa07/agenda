<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal')->insert([
            'nama_hari'=>'senin',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('jadwal')->insert([
            'nama_hari'=>'selasa',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('jadwal')->insert([
            'nama_hari'=>'rabu',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('jadwal')->insert([
            'nama_hari'=>'kamis',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('jadwal')->insert([
            'nama_hari'=>'jumat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
