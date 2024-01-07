<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Psy\CodeCleaner\ReturnTypePass;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nim' => 'required',
                'nama'   => 'required',
                'jurusan'   => 'required',

            ],
            [
                'mahasiwa.required' => 'Nim harus di isi.',
            ]
        );

        $validator->validate();

        mahasiswa::create([
            'nim'  => $request->nim,
            'nama'   => $request->nama,
            'jurusan'   => $request->jurusan,
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update($id, Request $request)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('succes', 'Data mahasiwa berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        if ($mahasiswa) {
            $mahasiswa->delete();
            return redirect('/mahasiswa')->with('succes', 'Data mahasiswa berhasil didelete.');
        } else {
            return redirect('/mahasiswa')->with('succes', 'Data mahasiswa gagal didelete.');
        }
    }
}
