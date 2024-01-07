<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Psy\CodeCleaner\ReturnTypePass;

class dosenController extends Controller
{

    public function index()
    {
        $dosen = dosen::get();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nip'    => 'required',
                'nama'   => 'required',
                'telepon' => 'required',

            ],
            [
                'dosen.required' => 'Nip harus di isi.',
            ]
        );

        $validator->validate();

        dosen::create([
            'nip'    => $request->nip,
            'nama'   => $request->nama,
            'telepon' => $request->telepon,
        ]);

        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }
    public function update($id, Request $request)
    {
        $dosen = dosen::find($id);
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->telepon = $request->telepon;
        $dosen->save();
        return redirect('/dosen')->with('succes', 'Data dosen berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $dosen = dosen::find($id);
        if ($dosen) {
            $dosen->delete();
            return redirect('/dosen')->with('succes', 'Data dosen berhasil didelete.');
        } else {
            return redirect('/dosen')->with('succes', 'Data dosen gagal didelete.');
        }
    }
}
