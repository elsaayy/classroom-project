<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

use function PHPUnit\Framework\returnSelf;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([

            'nama' => 'string|required',
            'nim' => 'string|required|max:10|unique:mahasiswas',
            'telepon' => 'string|required|max:13',
            'alamat' => 'string|required'
        ]);

        $mahasiswa = Mahasiswa::create($validateData);

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('mahasiswa.index')->with('failed', 'Gagal Menambah Data');
        }
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        // $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request , Mahasiswa $mahasiswa)
    {
       // $data = new Mahasiswa();
       // $data->name = $request->
        $validateData = $request->validate([

            'nama' => 'string|required',
            'nim' => 'string|required|max:10|unique:mahasiswas,nim,' . $mahasiswa->id,
            'telepon' => 'string|required|max:13',
            'alamat' => 'string|required'
        ]);

        $mahasiswa->update($validateData);

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('mahasiswa.index')->with('failed', 'Gagal Menambah Data');
        }
    }
}
