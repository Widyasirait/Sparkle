<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlotParkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('baris_parkir')->insert([
            ['zona_id' => 6, 'nomor_slot' => 1, 'keterangan' => 'Terisi', 'created_at' => now(), 'updated_at' => now()],
            ['zona_id' => 6, 'nomor_slot' => 2, 'keterangan' => 'Kosong', 'created_at' => now(), 'updated_at' => now()],
            ['zona_id' => 6, 'nomor_slot' => 3, 'keterangan' => 'Terisi', 'created_at' => now(), 'updated_at' => now()],
            ['zona_id' => 6, 'nomor_slot' => 4, 'keterangan' => 'Kosong', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
