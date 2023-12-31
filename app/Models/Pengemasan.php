<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengemasan extends Model
{
    use HasFactory;
    protected $table = 'pengemasanhistory';
    protected $fillable = [
        'kode_barang',
        'created_by',
        'kuantitas'
    ];
}
