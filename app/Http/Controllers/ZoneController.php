<?php

namespace App\Http\Controllers;

use App\Models\ZonaParkir;
use App\Models\BarisParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ZoneController extends Controller
{
    public function zona1()
    {
        return view('Zona.zona1');
    }

    public function zona2()
    {
        return view('Zona.zona2');
    }

    public function zona3()
    {
        return view('Zona.zona3');
    }

    public function zona4()
    {
        return view('Zona.zona4');
    }

    public function zona5()
    {
        return view('Zona.zona5');
    }

    public function zona6()
    {
        return view('Zona.zona6');
    }

    public function getSlotParkir()
    {
        $slots = BarisParkir::select('id', 'keterangan')->get();
        return response()->json($slots);
    }

    public function show($id)
    {
        $zona = ZonaParkir::findOrFail($id);

        return view('zona.show', compact('zona'));
    }
}
