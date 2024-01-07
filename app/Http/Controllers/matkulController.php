<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matkul;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Psy\CodeCleaner\ReturnTypePass;

class matkulController extends Controller
{

    public function index()
    {
        $matkul = matkul::get();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'kode_mk' => 'required',
                'nama_mk'   => 'required',
                'sks'   => 'required',

            ],
            [
                'matkul.required' => 'kode harus di isi.',
            ]
        );

        $validator->validate();

        matkul::create([
            'kode_mk'  => $request->kode_mk,
            'nama_mk'   => $request->nama_mk,
            'sks'   => $request->sks,
        ]);

        return redirect('/matkul');
    }

    public function edit($id)
    {
        $matkul = matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }
    public function update($id, Request $request)
    {
        $matkul = matkul::find($id);
        $matkul->kode_mk = $request->kode_mk;
        $matkul->nama_mk = $request->nama_mk;
        $matkul->sks = $request->sks;
        $matkul->save();
        return redirect('/matkul')->with('succes', 'Data matkul berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $matkul = matkul::find($id);
        if ($matkul) {
            $matkul->delete();
            return redirect('/matkul')->with('succes', 'Data matkul berhasil didelete.');
        } else {
            return redirect('/matkul')->with('succes', 'Data matkul gagal didelete.');
        }
    }
}
