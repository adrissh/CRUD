<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    // public function create()
    // {
    //     return view('mahasiswa.index');
    // }

    public function store(Request $request) //Insert Data
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8|unique:mahasiswas',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required',
            'alamat' => '',
        ]);
        // dump($validateData);

        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        $request->session()->flash('pesan', "Penambahan data {$validateData['nama']} berhasil"); //penggunaan flash data
        return redirect()->route('mahasiswa.index');
    }


    public function index()  //menampilkan semua data mahasiswa
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswa]);
    }

    public function show(Mahasiswa $mahasiswa) //Route Model Bindings
    {
        // $result = Mahasiswa::findOrFail($mahasiswa);
        // dump($result);
        // return view('index', ["mahasiswas" => [$result]]);
        return view('/mahasiswa/show', ["mahasiswa" => $mahasiswa]); // Magic punya laravel keren
    }
    public function create() // Cretae data
    {
        return view('/mahasiswa/create');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('/mahasiswa.edit', ['mahasiswa' => $mahasiswa]);

        // dump($mahasiswa);
    }

    public function update(Request $request, Mahasiswa $mahasiswa) //update data
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);
        Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
        return redirect()->route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id])
            ->with('pesan', "Update data {$validateData['nama']} berhasil");
    }

    public function destroy(Mahasiswa $mahasiswa)
    { // delete data
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('pesan', "Hapus data $mahasiswa->nama berhasil");
    }
}
