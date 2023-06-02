<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAdmin;

class Admin extends Controller
{
    function __construct()
    {
        $this->model = new ModelAdmin();
    }

    public function _login(Request $request)
    {
        $username = $request->user;
        $password = $request->pass;

        $login = $this->model->where('username_admin', $username)->first();

        if ($login && ($password == $login->password_admin)) {
            return response([
            "catatan" => "Anda Berhasil Login",
            "aksi" => true,
            "data" => $login
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
            "nama_admin" => $request->admin,
            "username_admin" => $request->user,
            "password_admin" => $request->pass
        ]);

        return response([
            "catatan" => "User Admin Berhasil Di Input",
            "aksi" => true
        ], 201);
    }

    public function _read()
    {
        $admin = $this->model->all();

        return response([
            "admin" => $admin
        ], http_response_code());
    }

    public function _delete($id)
    {
        $admin = $this->model->find($id);

        if (!$admin) {
            return response([
                "catatan" => "User Admin tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $admin->delete();

        return response([
            "catatan" => "User Admin Berhasil Dihapus",
            "aksi" => true
        ], 200);
    }

    public function _update(Request $request)
    {
        $admin = $this->model->find($request->id);

        if (!$admin) {
            return response([
                "catatan" => "User Admin tidak ditemukan",
                "aksi" => false
            ], 404);
        }

        $admin->nama_admin = $request->admin;
        $admin->username_admin = $request->user;
        $admin->password_admin = $request->pass;
        $admin->save();

        return response([
            "catatan" => "User Admin Berhasil Diubah",
            "aksi" => true
        ], 200);

    }
}
