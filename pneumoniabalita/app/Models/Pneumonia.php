<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pneumonia extends Model
{
    use HasFactory;
    protected $table = 'pneumonia';
    protected $primaryKey = 'id_pneumonia';
    protected $fillable = [
        'id_pneumonia',
        'id_tahun',
        'id_kecamatan',
        'id_lingkungan',
        'id_gizi',
        'jumlah_balita',
        'jumlah_penderita',
        'penderita_ditangani', 
    ];

    public function kecamatan() {
        
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function tahun() {
        
        return $this->belongsTo(Tahun::class, 'id_tahun');
    }

    public function gizi() {
        
        return $this->belongsTo(Gizi::class, 'id_gizi');
    }

    public function lingkungan() {
        
        return $this->belongsTo(Lingkungan::class, 'id_lingkungan');
    }
}
