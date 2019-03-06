<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Contact::all();
    	return view('contact/index')->with($data);
    }

    public function create()
    {
    	return view('contact/form');
    }

    public function store(Request $request)
    {
    	$rulers = [
    		'nama'   => 'required|max:50',
    		'email'  => 'required|max:100',
    		'notelp' => 'required|max:20',
    		'pesan'  => 'required'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();
    	$status = \App\Contact::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Contact::where('id_contact', $id)->first();
        return view('contact/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rulers = [
    		'nama'   => 'required|max:50',
    		'email'  => 'required|max:100',
    		'notelp' => 'required|max:20',
    		'pesan'  => 'required'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();

        $result = \App\Contact::where('id_contact', $id)->first();
        $status = $result->update($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil diubah');
    	else return redirect('/')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Contact::where('id_contact', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
        else return redirect('siswa')->with('error', 'Data tidak berhasil dihapus');
    }
}
