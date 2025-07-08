<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlotParkirController extends Controller
{
    public function updateSlotStatus(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'slot_id' => 'required|integer',
            'status' => 'required|string|in:Terisi,Kosong',
        ]);

        try {
            // Update tabel baris_parkir berdasarkan slot_id
            DB::table('baris_parkir')
                ->where('id', $validatedData['slot_id'])
                ->update([
                    'keterangan' => $validatedData['status'],
                    'updated_at' => now(),
                ]);

            return response()->json(['message' => 'Slot status updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update slot status'], 500);
        }
    }
}
