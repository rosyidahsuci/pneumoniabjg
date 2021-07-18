<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;

class RumahSakit extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = "rumahsakit";
    protected $primaryKey = 'id_rs';
    protected $fillable = [
        'id_rs',
        'id_kecamatan',
        'nama_rs',
        'alamat',
        'no_tlp'   
    ];

    public function kecamatan() {
        
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
