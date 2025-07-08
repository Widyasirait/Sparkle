<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarisParkir extends Model
{
    use HasFactory;

    protected $table = 'baris_parkir';

    protected $guarded = [
    ];

    public function zona()
    {
        return $this->belongsTo(ZonaParkir::class, 'zona_id');
    }
}
