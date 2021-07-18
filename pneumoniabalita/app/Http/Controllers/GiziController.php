<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gizi;
use App\Models\Tahun;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class GiziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $gizi = Gizi::with('tahun', 'kecamatan')->orderBy('id_gizi','ASC')->get();
        $gizi = Gizi::with('tahun', 'kecamatan')->orderBy('id_gizi','ASC')->simplePaginate(10);
        // return response()->json( [$data] );
        return view('admin.data_gizi.index', compact('gizi'));
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
        return view('admin.data_gizi.create', compact('tahun','kecamatan'));
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
            'id_gizi' => 'required',
            'id_tahun' => 'required',
            'id_kecamatan' => 'required',
            'balita_ditimbang' => 'required',
            'gizi_buruk' => 'required'
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $gizi = Gizi::create($data);
        return redirect('data_gizi')->with('toast_success', 'Data berhasil disimpan!');
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
        $gizi = Gizi::with('tahun','kecamatan')->findorfail($id);
        return view('admin.data_gizi.edit', compact('gizi','tahun','kecamatan'));
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
        $data = Gizi::findorfail($id);
        $data->update($request->all());
        return redirect('data_gizi')->with('toast_success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gizi = Gizi::findorfail($id);
        $gizi->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
