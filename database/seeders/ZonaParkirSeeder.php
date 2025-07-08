<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaParkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zona_parkir')->insert([
            [
                'nama_zona' => 'Zona 1',
                'keterangan' => 'Area utama dekat pintu masuk',
                'koordinat' => json_encode([
                    'shape' => 'poly',
                    'coords' => [211, 484, 214, 434, 517, 422, 571, 449, 562, 597, 504, 606, 504, 621, 482, 625, 461, 647, 442, 649, 318, 554, 329, 532, 313, 516, 311, 480, 295, 474, 269, 474, 264, 487],
                ]),
            ],
            [
                'nama_zona' => 'Zona 2',
                'keterangan' => 'Area parkir dekat area perkantoran',
                'koordinat' => json_encode([
                    'shape' => 'rect',
                    'coords' => [593, 648, 1052, 410],
                ]),
            ],
            [
                'nama_zona' => 'Zona 3',
                'keterangan' => 'Area parkir dekat taman',
                'koordinat' => json_encode([
                    'shape' => 'poly',
                    'coords' => [63, 57, 137, 57, 132, 391, 63, 394],
                ]),
            ],
            [
                'nama_zona' => 'Zona 4',
                'keterangan' => 'Area dekat gedung utama',
                'koordinat' => json_encode([
                    'shape' => 'poly',
                    'coords' => [181, 369, 175, 237, 340, 257, 414, 365, 421, 398, 201, 394],
                ]),
            ],
            [
                'nama_zona' => 'Zona 5',
                'keterangan' => 'Area parkir besar untuk kendaraan besar',
                'koordinat' => json_encode([
                    'shape' => 'poly',
                    'coords' => [900, 391, 850, 174, 1103, 221, 1121, 373],
                ]),
            ],
            [
                'nama_zona' => 'Zona 6',
                'keterangan' => 'Area tambahan',
                'koordinat' => json_encode([
                    'shape' => 'poly',
                    'coords' => [211, 484, 214, 434, 517, 422],
                ]),
            ],
        ]);
    }
}
