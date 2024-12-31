<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;
    protected $table = 'ujian';
    protected $primaryKey = 'id_ujian';
    public $incrementing = true;
    protected $fillable = [
        'nama_ujian', 
        'id_mapel', 
        'tanggal'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id_mapel');
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class, 'id_ujian');
    }
}
