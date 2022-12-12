<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanankendaraan extends Model
{
    use HasFactory;

    protected $fillable  = ['nama_kendaraan','plat_nomor', 'kepemilikan', 'jenis_kendaraan'];
    public function Kendaraan(){
        return $this->belongsTo(Kendaraan::class);
    }
}
