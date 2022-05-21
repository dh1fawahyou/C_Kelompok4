<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_induk', 'nama', 'no_ijazah', 'no_skhun', 'tahun_lulus', 'tgl_pengambilan', 'vcd_foto', 'nama_sekolah_lanjutan', 'status',
    ];
}
