@extends('layouts.master')

@section('content')
<div class="container p-3">
    <div class="card p-5">
        <div class="h3 fw-bold text-center">Menambah Pemesanan Kendaraan</div>
        <form action="{{route('pemesanan.store')}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="row m-3 col-md-6">
                    <label for="driver">Driver</label>
                    <input id="driver" class="form-control bg-white" name="driver" type="text" placeholder="Nama Driver">
                    <label for="kendaraan">Kendaraan</label>
                    {{-- <input id="kendaraan" maxlength="8" class="form-control bg-white" name="kendaraan" type="text"> --}}
                    <select name="kendaraan" class="form-control bg-white" id="kendaraan">
                        <option value="" hidden selected disabled>Pilih Kendaraan</option>
                        @foreach ($kendaraan as $allkendaraan)
                        <option value="{{$allkendaraan->id}}" class="form-control">{{$allkendaraan->nama_kendaraan}} - {{$allkendaraan->plat_nomor}}</option>
                        @endforeach
                    </select>
                    <label for="jadwal">Jadwal Service</label>
                    <input type="date" name="jadwal" id="jadwal" class="form-control bg-white">
                </div>
                <div class="row m-3 col-md-6">
                    <button type="submit" class="btn btn-primary">Tambah Kendaraan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection