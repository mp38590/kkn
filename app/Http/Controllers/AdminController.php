<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Kritik;

class AdminController extends Controller
{   
    public function layanan(Request $request)
    {
        $data = Layanan::all(); // Misalnya, mengambil semua data Layanan

        if ($data->isEmpty()) {
            return view('admin.layanan', compact('data'))->with('error', 'Tidak Ada Data yang ditampilkan');
        }

        return view('admin.layanan', compact('data'));
    }

    public function delete($id)
    {
        $data = Layanan::find($id);
        
        if (is_null($data)) {
            return redirect()->route('layanan')->with('error', 'Data tidak ditemukan');
        }

        $data->delete();
        return redirect()->route('layanan')->with('success', 'Data berhasil dihapus');
    }

    public function kritik(Request $request)
    {
        $data = Kritik::all();

        if ($data->isEmpty()) {
            return view('admin.kritik', compact('data'))->with('error', 'Tidak Ada Data yang ditampilkan');
        }

        return view('admin.kritik', compact('data'));
    }
}
