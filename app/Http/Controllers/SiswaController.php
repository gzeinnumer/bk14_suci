<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //redi - 4
    public function index()
    {
        $name = "suci bala";
        $umur = 22 + 2;
        $consume = [
            "name" => $name,
            "umur" => $umur
        ];
        return view('siswa.index', $consume);
    }

    //redi 2
    public function redi()
    {
        # != return view
        return redirect('/siswa');
    }

    //dari url akan diolah oleh 
    //controller/fun lalu di lempar lagi ke view
    public function params($id)
    {
        $consume = [
            "id" => $id,
        ];
        return view('siswa.params', $consume);
    }

    public function params2($id, $nama)
    {
        $consume = [
            "id" => $id + 3,
            "nama" => $nama
        ];
        return view('siswa.params2', $consume);
    }

    //http://127.0.0.1:8000/siswa/params3?id=1&nama=suci
    public function params3(Request $r)
    {
        $consume = [
            "id" => $r->id,
            "nama" => $r->nama
        ];
        return view('siswa.params3', $consume);
    }
}
