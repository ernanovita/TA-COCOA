<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelGuru;
use Illuminate\Session\Store;

class Guru extends Controller
{
    function __construct()
    {
        $this->model = new ModelGuru();
    }

    public function _login(Request $request)
    {
        $username = $request->user;
        $password = $request->pass;

        $login = $this->model->where('username_guru', $username)->first();

        if ($login && ($password == $login->password_guru)) {       
            return response([
            "catatan" => "Anda Berhasil Login",
            "aksi" => true,
            "id" => $login->id,
            "nama" => $login->nama_guru
            ], 200);
        } else {
            return response([
            "catatan" => "Username atau password yang anda input salah.",
            "aksi" => false,
            "data" => $request
            ], 200);
        }
    }

    public function _create(Request $request)
    {
        $this->model->create([
            "nama_guru" => $request->nama,
            "id_mapel" => $request->id,
            "username_guru" => $request->user,
            "password_guru" => $request->pass
        ]);

        return response([
            "catatan" => "User Guru Berhasil Di Input",
            "aksi" => true
        ], 201);
    }

    public function _read()
    {
        $guru = $this->model->all();

        return response([
            "guru" => $guru
        ], http_response_code());
    }

    public function _delete($id)
    {
        $guru = $this->model->find($id);

        if (!$guru) {
            return response([
                "catatan" => "User Guru tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $guru->delete();

        return response([
            "catatan" => "User Guru Berhasil Dihapus",
            "aksi" => true
        ], 200);
    }

    public function _update(Request $request)
    {
        $guru = $this->model->find($request->id);

        if (!$guru) {
            return response([
                "catatan" => "User Guru tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $guru->nama_guru = $request->nama;
        $guru->id_mapel = $request->id_mapel;
        $guru->username_guru = $request->user;
        $guru->password_guru = $request->pass;
        $guru->save();

        return response([
            "catatan" => "User Guru Berhasil Diubah",
            "aksi" => true
        ], 200);
    }
}
