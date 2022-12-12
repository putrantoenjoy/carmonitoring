@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h3 fw-bold text-center">Menambah Kendaraan</div>
    <form action="{{route('kendaraan.store')}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="row m-3 col-md-6">
                <label for="namakendaraan">Nama Kendaraan</label>
                <input id="namakendaraan" class="form-control bg-white" name="namakendaraan" type="text">
                <label for="platnomor">Plat Nomor</label>
                <input id="platnomor" maxlength="8" class="form-control bg-white" name="platnomor" type="text">
                <label for="kepemilikan">Kepemilikan</label>
                <select class="form-control bg-white" name="kepemilikan" id="kepemilikan">
                    <option value="" selected hidden disabled>Pilih Kepemilikan</option>
                    <option value="1">perusahaan sendiri</option>
                    <option value="2">bukan perusahaan sendiri</option>
                </select>
            </div>
            <div class="row m-3 col-md-6">
                <button type="submit" class="btn btn-primary">Tambah Kendaraan</button>
            </div>
        </div>
    </form>
</div>
@endsection