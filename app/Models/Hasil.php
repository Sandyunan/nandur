<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable  = [
        'nama_hasil', 'tanggal_panen', 'jumlah', 'asal_sawah'
    ];
    protected $guarded = [];
}
