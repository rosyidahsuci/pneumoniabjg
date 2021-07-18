<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahun;
use Illuminate\Support\Facades\Validator;

class TahunController extends Controller
{
    public function index()
    {
        $datathn = Tahun::orderBy('id_tahun')->get();
        return view('admin/data_tahun.index', compact('datathn'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/data_tahun.create');
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
            'id_tahun' => 'required',
            'tahun' => 'required'
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $tahun = Tahun::create($data);
        return redirect('data_tahun')->with('toast_success', 'Data berhasil disimpan!');
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
        $thn = Tahun::findOrFail($id);
        return view('admin/data_tahun.edit', compact('thn'));
        // return view('tahuns.create');
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
        $thn = Tahun::findOrFail($id);
        $thn->update($request->all());
        return redirect()->route('data_tahun.index')->with('toast_success', 'Data berhasil diupdate');
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thn = Tahun::findorfail($id);
        $thn->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
