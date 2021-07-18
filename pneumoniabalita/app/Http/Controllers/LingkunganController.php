<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lingkungan;
use App\Models\Tahun;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class LingkunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lingkungan= Lingkungan::with('tahun', 'kecamatan')->orderBy('id_lingkungan','ASC')->simplePaginate(10);
        // return response()->json( [$data] );
        return view('admin.data_lingkungan.index', compact('lingkungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahun = Tahun::all();
        $kecamatan = Kecamatan::all();
        return view('admin.data_lingkungan.create', compact('tahun','kecamatan'));
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
            'id_lingkungan' => 'required',
            'id_tahun' => 'required',
            'id_kecamatan' => 'required',
            'rumah_sehat' => 'required',
            'sumber_air_minum' => 'required',
            'sanitasi' => 'required',
            'tupm' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $lingkungan = Lingkungan::create($data);
        return redirect('data_lingkungan')->with('toast_success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun = Tahun::all();
        $kecamatan = Kecamatan::all();
        $lingkungan = Lingkungan::with('tahun','kecamatan')->findorfail($id);
        return view('admin.data_lingkungan.edit', compact('lingkungan','tahun','kecamatan'));
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
        $data = Lingkungan::findorfail($id);
        $data->update($request->all());
        return redirect('data_lingkungan')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lingkungan = Lingkungan::findorfail($id);
        $lingkungan->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
