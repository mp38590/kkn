<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'nama' => $row[1],
            'dusun' => $row[2],
            'alamat' => $row[3],
            'rt' => $row[4],
            'rw' => $row[5],
            'tempat_lahir' => $row[6],
            'tanggal_lahir' => $row[7],
            'jenis_kelamin' => $row[8],
            'hubungan_keluarga' => $row[9],
            'status_kawin' => $row[10],
            'agama' => $row[11],
            'pekerjaan' => $row[12],
            'pendidikan' => $row[13],
            'suku' => $row[14],
            'tahun_lahir'=> $row[15],
            'generasi'=> $row[16],
        ]);
    }
}
