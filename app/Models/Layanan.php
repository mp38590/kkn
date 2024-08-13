<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "layanan";
    protected $fillable =[
        'nama',
        'nomer_telepon',
        'alamat_email',
        'keperluan',
        'nama_dokumen',
    ];
}
