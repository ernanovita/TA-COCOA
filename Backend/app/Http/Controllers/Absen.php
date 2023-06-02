<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAbsen;
use Illuminate\Support\Facades\DB;
use Illuminate\Session\Store;

class Absen extends Controller
{
    function __construct()
    {
        $this->model = new ModelAbsen();
    }

    public function _create(Request $request)
    {
        $tanggal = date('d');
        $bulan = date('m');
        $tahun = date('Y');

        $absen = $this->model->where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->get();

        if (!$absen) {
            return response([
                "catatan" => "Anda sudah absen hari ini",
                "aksi" => false
            ], 404);
        }

        $this->model->create([
            "id_kelas" => $request->id_k,
            "id_guru" => $request->id_g,
            "tanggal" => $tanggal,
            "bulan" => $bulan,
            "tahun" => $tahun
        ]);

        return response([
            "catatan" => "Absen Hari Ini Berhasil Di Input",
            "aksi" => true
        ], 201);
    }

    public function _read()
    {
        $absen = DB::table('model_absens')
            ->join('model_gurus', 'model_gurus.id', '=', 'model_absens.id_guru')
            ->join('model_kelas', 'model_kelas.id', '=', 'model_absens.id_kelas')
            ->select('model_absens.id','model_absens.tanggal','model_absens.bulan','model_absens.tahun', 'model_gurus.nama_guru', 'model_kelas.nama_kelas')
            ->orderByDesc('model_absens.created_at')
            ->get();

        return response([
            "absen" => $absen
        ], http_response_code());
    }

    public function _delete($id)
    {
        $absen = $this->model->find($id);

        if (!$absen) {
            return response([
                "catatan" => "Absen tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $absen->delete();

        return response([
            "catatan" => "Absen Berhasil Dihapus",
            "aksi" => true
        ], 200);
    }
}
