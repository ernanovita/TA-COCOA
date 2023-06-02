<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKelas;

class Kelas extends Controller
{
    function __construct()
    {
        $this->model = new ModelKelas();
    }

    public function _create(Request $request)
    {
        $this->model->create([
            "nama_kelas" => $request->kelas
        ]);

        return response([
            "catatan" => "Kelas Berhasil Di Input",
            "aksi" => true
        ], 201);
    }

    public function _read()
    {
        $kelas = $this->model->all();

        return response([
            "kelas" => $kelas
        ], http_response_code());
    }

    public function _delete($id)
    {
        $kelas = $this->model->find($id);

        if (!$kelas) {
            return response([
                "catatan" => "Kelas tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $kelas->delete();

        return response([
            "catatan" => "Kelas Berhasil Dihapus",
            "aksi" => true
        ], 200);
    }

    public function _update(Request $request)
    {
        $kelas = $this->model->find($request->id);

        if (!$kelas) {
            return response([
                "catatan" => "Kelas tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        return response([
            "catatan" => "Kelas Berhasil Diubah",
            "aksi" => true
        ], 200);

    }
}
