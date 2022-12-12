@extends('layouts.master')

@section('content')
<div class="container" >
    <div class="text-center h2 fw-bold">Daftar Kendaraan</div>
    <div class="justify-content-end">
        <div class="d-flex justify-content-between">
            <a href="{{route('kendaraan.create')}}" class="btn btn-success">Tambah Kendaraan</a>
            <a href="{{route('pemesanan.index')}}" class="btn btn-success">Pemesanan Kendaraan</a>
        </div>
        <table class="table my-3 border border-dark">
            <thead>
                <tr class="fw-bold">
                    <td>No</td>
                    <td>Nama Kendaraan</td>
                    <td>Plat Nomor</td>
                    <td>Kepemilikan</td>
                    <td>Jenis Kendaraan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan as $row => $allkendaraan)
                    <tr>
                        <td>{{1}}</td>
                        <td>{{$allkendaraan->nama_kendaraan}}</td>
                        <td>{{$allkendaraan->plat_nomor}}</td>
                        <td>{{$allkendaraan->kepemilikan}}</td>
                        <td>{{$allkendaraan->jenis_kendaraan}}</td>
                        <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
