<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ZonaParkir;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil status pengguna yang sedang login
        $status_pengguna = Auth::user()->status_pengguna;

        // Ambil data zona parkir
        $zonaParkir = ZonaParkir::all()->map(function ($zona) {
            $decodedKoordinat = json_decode($zona->koordinat, true);
            return (object) [
                'id' => $zona->id,
                'nama_zona' => $zona->nama_zona,
                'keterangan' => $zona->keterangan,
                'coords' => implode(',', $decodedKoordinat['coords']),
                'shape' => $decodedKoordinat['shape'],
            ];
        });

        return view('dashboard', compact('zonaParkir', 'status_pengguna'));
    }
}
