<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingkungan extends Model
{
    use HasFactory;

    protected $table = 'lingkungan';
    protected $primaryKey = 'id_lingkungan';
    protected $fillable = [
        'id_lingkungan',
        'id_tahun',
        'id_kecamatan',
        'rumah_sehat',
        'sumber_air_minum',
        'sanitasi',
        'tupm'   
    ];

    public function kecamatan() {
        
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function tahun() {
        
        return $this->belongsTo(Tahun::class, 'id_tahun');
    }
}
