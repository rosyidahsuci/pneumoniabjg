<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    use HasFactory;

    protected $table = 'gizi';
    protected $primaryKey = 'id_gizi';
    protected $fillable = [
        'id_gizi',
        'id_tahun',
        'id_kecamatan',
        'balita_ditimbang',
        'gizi_buruk',
    ];

    public function tahun() //relasi ke data tahun
    {
        return $this->belongsTo('App\Models\Tahun', 'id_tahun');
    }

    public function kecamatan() //relasi ke data kecamatan
    {
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }
}
