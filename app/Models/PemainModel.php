<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemainModel extends Model
{
    use HasFactory;
    protected $table = 'pemain';
    protected $fillable = [
        'id',
        'nama_pemain',
        'no_punggung',
        'posisi',
    ];

}
