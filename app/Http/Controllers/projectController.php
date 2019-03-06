<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Project::all();
    	return view('project/index')->with($data);
    }

    public function home()
    {
        $data['result'] = \App\Project::all();
        return view('home/index')->with($data);
    }


    public function create()
    {
    	return view('project/form');
    }

    public function store(Request $request)
    {
    	$rulers = [
    		'nama_project'=> 'required|max:100',
    		'bahasa'      => 'required|max:200',
    		'desc'        => 'required',
    		'id_tipe'     => 'required|exists:table_tipe',
    		'foto'        => 'required|mimes:jpeg,png|max:512'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();

    	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
    		$filename = $input['nama_project'].".".$request->file('foto')->getClientOriginalExtension();
    		$request->file('foto')->storeAs('', $filename);
    		$input['foto'] = $filename;
    	}

    	$status = \App\Project::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Project::where('id_project', $id)->first();
        return view('project/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rulers = [
    		'nama_project'=> 'required|max:100',
    		'bahasa'      => 'required|max:200',
    		'desc'        => 'required',
    		'id_tipe'     => 'required|exists:table_tipe',
    		'foto'        => 'required|mimes:jpeg,png|max:512'
    	];
    	$this->validate($request, $rulers);

    	$input = $request->all();

        $result = \App\Project::where('id_project', $id)->first();

    	if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
    		$filename = $input['nama_project'].".".$request->file('foto')->getClientOriginalExtension();
    		$request->file('foto')->storeAs('', $filename);
    		$input['foto'] = $filename;
    	}

        $status = $result->update($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil diubah');
    	else return redirect('/')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Project::where('id_project', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
        else return redirect('siswa')->with('error', 'Data tidak berhasil dihapus');
    }

    public function detail($id)
    {
        $data['result'] = \App\Project::where('id_project', $id)->first();
        return view('home/form')->with($data);
    }
}