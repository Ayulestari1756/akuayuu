<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Psy\CodeCleaner\ReturnTypePass;

class prodiController extends Controller
{

    public function index()
    {
        $prodi = prodi::get();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'fakultas' => 'required',
                'prodi'   => 'required',

            ],
            [
                'prodi.required' => 'fakultas harus di isi.',
            ]
        );

        $validator->validate();

        prodi::create([
            'fakultas'  => $request->fakultas,
            'prodi'   => $request->prodi,
        ]);

        return redirect('/prodi');
    }

    public function edit($id)
    {
        $prodi = prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }
    public function update($id, Request $request)
    {
        $prodi = prodi::find($id);
        $prodi->fakultas = $request->fakultas;
        $prodi->prodi = $request->prodi;
        $prodi->save();
        return redirect('/prodi')->with('succes', 'Data prodi berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $prodi = prodi::find($id);
        if ($prodi) {
            $prodi->delete();
            return redirect('/prodi')->with('succes', 'Data prodi berhasil didelete.');
        } else {
            return redirect('/prodi')->with('succes', 'Data prodi gagal didelete.');
        }
    }
}
