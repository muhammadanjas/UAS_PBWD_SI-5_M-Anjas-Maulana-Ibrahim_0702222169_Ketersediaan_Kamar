<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level_Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nama_level', 'deskripsi'];

    public function kamar_pasien()
    {
        return $this->hasMany(Kamar_Pasien::class);
    }
}
