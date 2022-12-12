@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h3 fw-bold text-center">Menambah Pemesanan Kendaraan</div>
    <form action="{{route('pemesanan.store')}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="row m-3 col-md-6">
                <label for="driver">Driver</label>
                <input id="driver" class="form-control bg-white" name="driver" type="text">
                <label for="kendaraan">Kendaraan</label>
                <input id="kendaraan" maxlength="8" class="form-control bg-white" name="kendaraan" type="text">
                <label for="jadwal">Jadwal Service</label>
                <input type="date" name="jadwal" id="jadwal" class="form-control bg-white">
                {{-- <select class="form-control bg-white" name="jadwal" id="jadwal">
                    <option value="" selected hidden disabled>Pilih Kepemilikan</option>
                    <option value="perusahaan sendiri">perusahaan sendiri</option>
                    <option value="bukan perusahaan sendiri">bukan perusahaan sendiri</option>
                </select> --}}
                <label for="statuspemesanan">Status Pemesanan</label>
                <select class="form-control bg-white" name="jenis_kendaraan" id="jeniskendaraan">
                    <option value="" selected hidden disabled>Pilih Status Pemesanan</option>
                    <option value="disetujui">Disetujui</option>
                    <option value="tidakdisetujui">Tidak Disetujui</option>
                </select>
            </div>
            <div class="row m-3 col-md-6">
                <button type="submit" class="btn btn-primary">Tambah Kendaraan</button>
            </div>
        </div>
    </form>
</div>
@endsection