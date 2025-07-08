<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlotParkirController;


Route::post('/update-slot-status', [SlotParkirController::class, 'updateSlotStatus']);
Route::get('/test', function () {
    return response()->json(['message' => 'API works!'], 200);
});
