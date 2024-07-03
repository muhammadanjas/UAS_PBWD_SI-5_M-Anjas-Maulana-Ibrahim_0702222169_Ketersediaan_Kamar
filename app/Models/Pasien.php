<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'nomor_hp'];

    public function pesan_kamar()
    {
        return $this->hasMany(Pesan_Kamar::class);
    }
}
