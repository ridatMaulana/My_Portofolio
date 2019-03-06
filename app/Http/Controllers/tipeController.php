<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipeController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Tipe::all();
    	return view('tipe/index')->with($data);
    }

    public function create()
    {
    	return view('tipe/form');
    }

    public function store(Request $request)
    {
    	$rulers = [
    		'nama_tipe'=> 'required|max:100',
    		'foto'     => 'required|mimes:jpeg,png|max:512'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();

    	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
    		$filename = $input['nama_tipe'].".".$request->file('foto')->getClientOriginalExtension();
    		$request->file('foto')->storeAs('', $filename);
    		$input['foto'] = $filename;
    	}

    	$status = \App\Tipe::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Tipe::where('id_tipe', $id)->first();
    	return view('tipe/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rulers = [
    		'nama_tipe'=> 'required|max:100',
    		'foto'     => 'required|mimes:jpeg,png|max:512'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();
    	$result = \App\Tipe::where('id_tipe', $id)->first();
    	
    	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
    		$filename = $input['nama_tipe'] . "." . $request->file('foto')->getClientOriginalExtension();
    		$request->file('foto')->storeAs('', $filename);
    		$input['foto'] = $filename;
    	}

    	$status = $result->update($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil diubah');
    	else return redirect('/')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Tipe::where('id_tipe', $id)->first();
    	$status = $result->delete();

    	if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
    	else return redirect('/')->with('error', 'Data gagal dihapus');
    }
}
