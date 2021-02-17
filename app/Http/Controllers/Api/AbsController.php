<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\absensi;
 
class AbsController extends Controller
{
    public function index()
    {
    
        $absensis = absensi::latest()->paginate(5);
        
        return response()->json([
            'success' => true,
            'message' => 'Daftar data Absensi',
            'data' => $absensis
        ], 200);
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',

        ]);
 
        $absensis = Absensis::create([
            'waktu_absen' => $request ->waktu_absen,
            'mahasiswa_id' => $request ->mahasiswa_id,
            'matakuliah_id' => $request ->matakuliah_id,
            'keterangan' => $request ->keterangan,
        ]);
         if($absensis)
    {
        return response()->json([
            'success' => true,
            'message' => 'Absen berhasil ditambahkan',
            'data' => $absensis
        ], 200);
    }else{
        return response()->json([
            'success' => false,
            'message' => 'Absen gagal ditambahkan',
            'data' => $absensis
        ], 409);
    }
}
    public function show(int $id)
    {
        
        $absensi = Absensi::findOrFail($id); 
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Absen',
            'data'    => $absensis
        ], 200);
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',
        ]);
 
        $absensi = absensi::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $absensi->update($dataResult);

        return response()->json([
            'success'=>true,
            'message'=>'Post Updated',
            'data'=> $a
        ],200);
    }
 
    public function destroy($id)
    {
        $cek = Absensi::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
}
}