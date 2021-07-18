<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumahsakit;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahsakit= Rumahsakit::with('kecamatan')->orderBy('id_rs','ASC')->get();
        // $rumahsakit = Rumahsakit::orderBy('id','ASC')->get();
        return view('admin/data_rumahsakit.index', compact('rumahsakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin/data_rumahsakit.create', compact('kecamatan'));
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
            'id_rs' => 'required',
            'id_kecamatan' => 'required',
            'nama_rs' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $rumahsakit = Rumahsakit::create($data);
        return redirect('data_rumahsakit')->with('toast_success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $kecamatan = Kecamatan::all();
        $rumahsakit = Rumahsakit::with('kecamatan')->findorfail($id);
        return view('admin/data_rumahsakit.edit', compact('rumahsakit','kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rumahsakit = Rumahsakit::findorfail($id);
        $rumahsakit->update($request->all());
        return redirect('data_rumahsakit')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumahsakit = Rumahsakit::findorfail($id);
        $rumahsakit->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
