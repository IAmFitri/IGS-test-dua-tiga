<?php

namespace App\Http\Controllers;

use App\Models\MasterSTNK;
use App\Models\JenisKendaraan;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class MasterSTNKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $stnk = MasterSTNK::all();

        return view('stnk.index', compact('stnk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisKendaraan = JenisKendaraan::all();
        $status = Status::all();

        return view('stnk.create', compact('jenisKendaraan', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stnk = $request->all();
        
        $validasi = Validator::make($stnk, [
            'no_stnk' => 'required',
            'no_polisi' => 'required',
            'merk' => 'required',
            'jenis_kendaraan_id' => 'required',
            'model' => 'required',
            'no_rangka' => 'required',
            'silinder' => 'required',
            'no_mesin' => 'required',
            'masa_berlaku' => 'required',
            'tnkb' => 'required',
            'swdkllj' => 'required',
            'jasa_perpanjangan' => 'nullable',
            'pkb' => 'required',
            'bahan_bakar' => 'required',
            'tahun_kendaraan' => 'required',
            'nama_stnk' => 'required',
            'warna' => 'required',
            'no_bpkb' => 'nullable',
            'nilai_pajak_stnk' => 'nullable',
            'pajak_jasa' => 'nullable',
            'pajak_stnk' => 'required'
        ]);

        if ($validasi->fails()) {
            return redirect()->route('stnk.create')->withErrors($validasi)->withInput();
        }

        MasterSTNK::create($stnk);

        return redirect()->route('stnk.index')->with('status', 'Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stnk = MasterSTNK::findOrFail($id);
        
        return view('stnk.show', compact('stnk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = MasterSTNK::findOrFail($id);
        $jenisKendaraan = JenisKendaraan::all();
        $status = Status::all();

        return view('stnk.edit', compact('edit', 'jenisKendaraan', 'status'));
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
        $stnk   = MasterSTNK::findOrFail($id);
        $stnk_update   = $request->all();

        $validasi   = Validator::make($stnk_update, [
            'no_stnk' => 'required',
            'no_polisi' => 'required',
            'merk' => 'required',
            'jenis_kendaraan_id' => 'required',
            'model' => 'required',
            'no_rangka' => 'required',
            'silinder' => 'required',
            'no_mesin' => 'required',
            'masa_berlaku' => 'required',
            'tnkb' => 'required',
            'swdkllj' => 'required',
            'jasa_perpanjangan' => 'nullable',
            'pkb' => 'required',
            'bahan_bakar' => 'required',
            'tahun_kendaraan' => 'required',
            'nama_stnk' => 'required',
            'warna' => 'required',
            'no_bpkb' => 'nullable',
            'nilai_pajak_stnk' => 'nullable',
            'pajak_jasa' => 'nullable',
            'pajak_stnk' => 'required'
        ]);

        if ($validasi->fails()) {
            return redirect()->route('stnk.edit', $id)->withErrors($validasi)->withInput();
        }

        $stnk->update($stnk_update);
        return redirect()->route('stnk.index')->with('status', 'Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = MasterSTNK::findOrFail($id);
        $delete->delete();

        return redirect()->route('stnk.index')->with('status', 'Berhasil Dihapus');
    }
}
