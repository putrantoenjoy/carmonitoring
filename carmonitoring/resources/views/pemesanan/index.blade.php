@extends('layouts.app')


@section('content')
<div class="container">
    <div class="justify-content-end">
        <div class="text-center fw-bold h2">Pemesanan Kendaraan</div>
        <a href="{{route('pemesanan.create')}}" class="btn btn-success">Tambah Pemesanan Kendaraan</a>
        <table class="table my-3 border border-dark">
            <thead>
                <tr class="fw-bold">
                    <td>No</td>
                    <td>Driver</td>
                    <td>Nama Kendaraan</td>
                    <td>Plat Nomor</td>
                    <td>Status Pemesanan</td>
                    <td>Pihak Yang Menyetujui</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Bagus</td>
                    <td>Marcedes</td>
                    <td>P 1029</td>
                    <td>Disetujui</td>
                    <td>Hasan</td>
                    <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
