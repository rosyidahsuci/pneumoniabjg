<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pneumonia;
use App\Models\Lingkungan;
use App\Models\Gizi;
use App\Models\Tahun;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class PneumoniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pneumonia = Pneumonia::with('tahun', 'kecamatan', 'lingkungan', 'gizi')->orderBy('id_pneumonia','ASC')->simplePaginate(10);
        // return response()->json( [$data] );
        return view('admin.data_pneumonia.index', compact('pneumonia'));
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
        $lingkungan = Lingkungan::all();
        $gizi = Gizi::all();
        return view('admin.data_pneumonia.create', compact('tahun','kecamatan','lingkungan','gizi'));
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
            'id_pneumonia' => 'required',
            'id_tahun' => 'required',
            'id_kecamatan' => 'required',
            'id_lingkungan' => 'required',
            'id_gizi' => 'required',
            'jumlah_balita' => 'required',
            'jumlah_penderita' => 'required',
            'penderita_ditangani' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $pneumonia = Pneumonia::create($data);
        return redirect('data_pneumonia')->with('toast_success', 'Data berhasil disimpan!');
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
        $lingkungan = Lingkungan::all();
        $gizi = Gizi::all();
        $pneumonia = Pneumonia::with('tahun','kecamatan','lingkungan','gizi')->findorfail($id);
        return view('admin.data_pneumonia.edit', compact('lingkungan','tahun','kecamatan','gizi','pneumonia'));
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
        $data = Pneumonia::findorfail($id);
        $data->update($request->all());
        return redirect('data_pneumonia')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pneumonia = Pneumonia::findorfail($id);
        $pneumonia->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
