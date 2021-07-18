<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $fillable = [
        'id_kecamatan',
        'nama_kecamatan',
        'latitude',
        'longitude'
    ];

    public function rumahsakit() {
        return $this->hasMany(Rumahsakit::class);
    }

    public function lingkungan() {
        return $this->hasMany(Lingkungan::class);
    }

}
