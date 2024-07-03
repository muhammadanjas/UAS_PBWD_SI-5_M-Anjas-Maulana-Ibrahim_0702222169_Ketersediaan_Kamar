<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar_Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar', 'id_level'];

    public function level_kamar()
    {
        return $this->belongsTo(Level_Kamar::class);
    }

    public function pesan_kamar()
    {
        return $this->hasMany(Pesan_Kamar::class);
    }
}
