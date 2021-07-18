<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::orderBy('id_kecamatan')->simplePaginate(10);
        return view('admin/data_kecamatan.index', compact('kecamatan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/data_kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'id_kecamatan' => 'required',
            'nama_kecamatan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $kecamatan = Kecamatan::create($data);
        return redirect('admin/data_kecamatan.create')->with('toast_success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kecamatan)
    {
        $kecamatan = Kecamatan::findOrFail($id_kecamatan);
        return view('admin/data_kecamatan.edit', compact('kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kecamatan)
    {
        $kecamatan = Kecamatan::findOrFail($id_kecamatan);
        $kecamatan->update($request->all());
        return redirect()->route('data_kecamatan.index')->with('toast_success', 'Data berhasil diupdate');
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kecamatan)
    {
        $kecamatan = Kecamatan::findorfail($id_kecamatan);
        $kecamatan->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
