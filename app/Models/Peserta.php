<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    public $incrementing = true;
    protected $fillable = [
        'id_siswa', 
        'id_ujian', 
        'status_peserta',
        'nilai',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'id_ujian', 'id_ujian');
    }
}
