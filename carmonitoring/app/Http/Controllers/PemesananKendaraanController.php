<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Pemesanankendaraan;

class PemesananKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemesanan = Pemesanankendaraan::with('kendaraan')->get();

        return view('pemesanan.index', compact('pemesanan'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kendaraan = Kendaraan::all();
        return view('pemesanan.create', compact('kendaraan'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pemesanan = new Pemesanankendaraan();
        $pemesanan->kendaraan_id = $request->kendaraan;
        $pemesanan->driver = $request->driver;
        $pemesanan->jadwal_service = $request->jadwal;
        // $pemesanan->status = $request->statuspemesanan;
        $pemesanan->status = "diproses";
        $pemesanan->save();
        
        return redirect()->route('pemesanan.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function setuju($id)
    {
        //
        $setuju = Pemesanankendaraan::find($id);
        $setuju->status = "disetujui";
        $setuju->update();

        return redirect()->route('pemesanan.index');
    }
    public function tolak($id)
    {
        //
        $setuju = Pemesanankendaraan::find($id);
        $setuju->status = "ditolak";
        $setuju->update();

        return redirect()->route('pemesanan.index');
    }
}
