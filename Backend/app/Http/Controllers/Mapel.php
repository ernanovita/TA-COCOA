<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMapel;

class Mapel extends Controller
{
    function __construct()
    {
        $this->model = new ModelMapel();
    }

    public function _create(Request $request)
    {
        $this->model->create([
            "nama_mapel" => $request->mapel
        ]);

        return response([
            "catatan" => "Mata Pelajaran Berhasil Di Input",
            "aksi" => true
        ], 201);
    }

    public function _read()
    {
        $mapel = $this->model->all();

        return response([
            "mapel" => $mapel
        ], http_response_code());
    }

    public function _delete($id)
    {
        $mapel = $this->model->find($id);

        if (!$mapel) {
            return response([
                "catatan" => "Mata Pelajaran tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $mapel->delete();

        return response([
            "catatan" => "Mata Pelajaran Berhasil Dihapus",
            "aksi" => true
        ], 200);
    }

    public function _update(Request $request)
    {
        $mapel = $this->model->find($request->id);

        if (!$mapel) {
            return response([
                "catatan" => "Mata Pelajaran tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $mapel->nama_mapel = $request->mapel;
        $mapel->save();

        return response([
            "catatan" => "Mata Pelajaran Berhasil Diubah",
            "aksi" => true
        ], 200);

    }
}
