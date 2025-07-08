<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nama_pengguna',
        'status_pengguna',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
