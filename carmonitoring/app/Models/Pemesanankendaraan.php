<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanankendaraan extends Model
{
    use HasFactory;

    protected $fillable  = ['driver', 'jadwal_service', 'status'];
    public function Kendaraan(){
        return $this->belongsTo(Kendaraan::class);
    }
}
