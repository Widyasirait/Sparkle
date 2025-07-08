<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarisParkir; 

class barisParkirController extends Controller
{
    public function show($zona_id)
    {
        $slots = BarisParkir::where('zona_id', $zona_id)->get();

        return view('baris.show', compact('slots', 'zona_id'));
    }
}
