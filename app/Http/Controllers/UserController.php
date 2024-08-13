<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Kritik;
use App\Models\Layanan;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function pelayanan()
    {
        return view('pelayanan_publik');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomer_telepon' => 'required|min:10|max:12',
            'alamat_email' => 'required|email',
            'keperluan' => 'required',
            'file' => 'required|array',
            'file.*' => 'mimes:pdf',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nomer_telepon.required' => 'Nomer telepon tidak boleh kosong',
            'alamat_email.required' => 'Alamat email tidak boleh kosong',
            'alamat_email.email' => 'Alamat email harus valid',
            'keperluan.required' => 'Keperluan tidak boleh kosong',
            'file.required' => 'File tidak boleh kosong',
            'file.*.mimes' => 'Dokumen harus dalam format pdf',
        ]);

        $layanan = new Layanan();
        $layanan->nama = $request->nama;
        $layanan->nomer_telepon = $request->nomer_telepon;
        $layanan->alamat_email = $request->alamat_email;
        $layanan->keperluan = $request->keperluan;
        $layanan->save();

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $pdf) {
                $pdfName = time() . '-' . $pdf->getClientOriginalName();
                $pdf->move(public_path('uploads/file'), $pdfName);

                // Jika Anda perlu menyimpan nama dokumen dalam tabel layanan
                $layanan->nama_dokumen = $pdfName;
                $layanan->save();
            }
        }

        return redirect()->route('pelayanan_publik')->with('success', 'Data berhasil disimpan.');
    }


    public function kritik()
    {
        return view('welcome');
    }

    public function simpanKritik(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat_email' => 'required|email',
            'kritik' => 'required',
            'saran' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat_email.required' => 'Alamat email tidak boleh kosong',
            'alamat_email.email' => 'Alamat email harus berupa email yang valid',
            'kritik.required' => 'Kritik tidak boleh kosong',
            'saran.required' => 'Saran tidak boleh kosong',
        ]);

        $kritik = new Kritik();
        $kritik->nama = $request->nama;
        $kritik->alamat_email = $request->alamat_email;
        $kritik->kritik = $request->kritik;
        $kritik->saran = $request->saran;

        $kritik->save();

        return redirect()->route('beranda')->with('success', 'Data berhasil disimpan.');
    }
}
