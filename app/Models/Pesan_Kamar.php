<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan_Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['id_kamar', 'id_pasien', 'tanggal_check_in', 'tanggal_check_out'];

    public function kamar_pasien()
    {
        return $this->belongsTo(Kamar_Pasien::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
