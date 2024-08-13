<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Data::query();

    // Filter by dusun if the query parameter is present
    if ($request->has('dusun')) {
        $query->where('dusun', 'like', '%' . $request->query('dusun') . '%');
    }

    // Search functionality
    if ($request->has('search')) {
        $search = strtolower($request->query('search'));
        $query->where(function($q) use ($search) {
            $q->whereRaw('LOWER(nama) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(dusun) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(jenis_kelamin) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(agama) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(SUBSTRING(nama, 1, 1)) = ?', [$search]);
        });
    }

    $data = $query->get();

    $ngijoKulon = Data::where('dusun', 'NGIJO KULON')->count();
    $ngijoTengah = Data::where('dusun', 'NGIJO TENGAH')->count();
    $ngijoWetan = Data::where('dusun', 'NGIJO WETAN')->count();
    $nglanoWetan = Data::where('dusun', 'NGLANO WETAN')->count();
    $pokoh = Data::where('dusun', 'POKOH')->count();
    $belumKawin = Data::where('status_kawin', 'Belum Kawin')->count();
    $kawin = Data::where('status_kawin', 'Kawin')->count();
    $nonPelajar = Data::where('pekerjaan', '!=', 'Pelajar/ Mahasiswa')->count();
    $pelajar = Data::where('pekerjaan', 'Pelajar/ Mahasiswa')->count();
    
    return view('data', compact('data', 'ngijoKulon', 'ngijoTengah', 'ngijoWetan', 'nglanoWetan', 'pokoh', 'belumKawin', 'kawin', 'nonPelajar', 'pelajar'));
}


public function indexAdmin(Request $request)
{
    $query = Data::query();

    // Filter by dusun if the query parameter is present
    if ($request->has('dusun')) {
        $query->where('dusun', 'like', '%' . $request->query('dusun') . '%');
    }

    // Search functionality
    if ($request->has('search')) {
        $search = strtolower($request->query('search'));
        $query->where(function($q) use ($search) {
            $q->whereRaw('LOWER(nama) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(dusun) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(jenis_kelamin) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(agama) like ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(SUBSTRING(nama, 1, 1)) = ?', [$search]);
        });
    }

    $data = $query->get();

    $ngijoKulon = Data::where('dusun', 'NGIJO KULON')->count();
    $ngijoTengah = Data::where('dusun', 'NGIJO TENGAH')->count();
    $ngijoWetan = Data::where('dusun', 'NGIJO WETAN')->count();
    $nglanoWetan = Data::where('dusun', 'NGLANO WETAN')->count();
    $pokoh = Data::where('dusun', 'POKOH')->count();
    $belumKawin = Data::where('status_kawin', 'Belum Kawin')->count();
    $kawin = Data::where('status_kawin', 'Kawin')->count();
    $nonPelajar = Data::where('pekerjaan', '!=', 'Pelajar/ Mahasiswa')->count();
    $pelajar = Data::where('pekerjaan', 'Pelajar/ Mahasiswa')->count();
    
    return view('admin.data', compact('data', 'ngijoKulon', 'ngijoTengah', 'ngijoWetan', 'nglanoWetan', 'pokoh', 'belumKawin', 'kawin', 'nonPelajar', 'pelajar'));
}

    public function dataImport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataDesa', $namaFile);

        Excel::import(new DataImport, public_path('/DataDesa/'.$namaFile));
        return redirect('data-admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ngijoKulon(Request $request)
    {
        $data = Data::where('dusun', 'NGIJO KULON')->get();

        // Menampilkan data dalam bentuk view
        return view('data_ngijo_kulon', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ngijoTengah(Request $request)
    {
        $data = Data::where('dusun', 'NGIJO TENGAH')->get();

        // Menampilkan data dalam bentuk view
        return view('data_ngijo_tengah', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function ngijoWetan(Request $request)
    {
        $data = Data::where('dusun', 'NGIJO WETAN')->get();

        // Menampilkan data dalam bentuk view
        return view('data_ngijo_wetan', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function nglanoWetan(Request $request)
    {
        $data = Data::where('dusun', 'NGLANO WETAN')->get();

        // Menampilkan data dalam bentuk view
        return view('data_nglano_wetan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function pokoh(Request $request)
    {
        $data = Data::where('dusun', 'POKOH')->get();

        // Menampilkan data dalam bentuk view
        return view('data_pokoh', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function belumKawin(Request $request)
    {
        $data = Data::where('status_kawin', 'Belum Kawin')->get();

        // Menampilkan data dalam bentuk view
        return view('data_belum_kawin', compact('data'));
    }

    public function kawin(Request $request)
    {
        $data = Data::where('status_kawin', 'Kawin')->get();

        // Menampilkan data dalam bentuk view
        return view('data_kawin', compact('data'));
    }

    public function nonPelajar(Request $request)
    {
        $data = Data::where('pekerjaan', '!=', 'Pelajar/ Mahasiswa')->get();

        // Menampilkan data dalam bentuk view
        return view('data_non_pelajar', compact('data'));
    }

    public function pelajar(Request $request)
    {
        $data = Data::where('pekerjaan', 'Pelajar/ Mahasiswa')->get();

        // Menampilkan data dalam bentuk view
        return view('data_pelajar', compact('data'));
    }

}
