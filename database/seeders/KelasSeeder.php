<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            'nama_kelas'=>'10',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('kelas')->insert([
            'nama_kelas'=>'11',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('kelas')->insert([
            'nama_kelas'=>'12',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
