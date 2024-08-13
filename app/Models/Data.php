<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "data";
    protected $fillable =[
        'nama',
        'dusun',
        'alamat',
        'rt',
        'rw',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'hubungan_keluarga',
        'status_kawin',
        'agama',
        'pekerjaan',
        'pendidikan',
        'suku',
        'tahun_lahir',
        'generasi',
    ];
}
