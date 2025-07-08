<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaParkir extends Model
{
    use HasFactory;

    protected $table = 'zona_parkir';

    protected $fillable = [
        'nama_zona',
        'keterangan',
        'koordinat',
    ];

    public function barisParkir()
    {
        return $this->hasMany(BarisParkir::class, 'zona_id');
    }
}
