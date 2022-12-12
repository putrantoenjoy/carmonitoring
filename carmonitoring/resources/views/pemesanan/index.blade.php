@extends('layouts.master')

@section('content')
<div class="container p-3">
    <div class="card p-5">
        <div class="text-center fw-bold h2">Pemesanan Kendaraan</div>
        <div class="justify-content-start">
            @role('admin')
            <a href="{{route('pemesanan.create')}}" class="btn btn-success">Tambah Pemesanan Kendaraan</a>
            @endrole
            <table class="table my-3 border border-dark">
                <thead>
                    <tr class="fw-bold">
                        <td>No</td>
                        <td>Driver</td>
                        <td>Nama Kendaraan</td>
                        <td>Plat Nomor</td>
                        <td>Jadwal</td>
                        <td>Status Pemesanan</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{-- <td>1.</td>
                        <td>Bagus</td>
                        <td>Marcedes</td>
                        <td>P 1029</td>
                        <td>Diproses</td>
                        <td>Hasan</td>
                        <td><a href="" class="btn btn-primary">Setujui</a><a href="" class="btn btn-danger">Jangan Setujui</a></td>
                    </tr> --}}
                    @foreach ($pemesanan as $row => $allpemesanan)
                        <tr>
                            <td>{{++$row}}</td>
                            <td>{{$allpemesanan->driver}}</td>
                            <td>{{$allpemesanan->kendaraan->nama_kendaraan}}</td>
                            <td>{{$allpemesanan->kendaraan->plat_nomor}}</td>
                            <td>{{$allpemesanan->jadwal_service}}</td>
                            <td>
                                @if($allpemesanan->status == "diproses")
                                {{-- @role('penyetuju')
                                <a href="" class="btn btn-success">Setuju</a><a href="" class="btn btn-danger">Tolak</a>
                                @endrole --}}
                                @role('admin')
                                <a href="" class="btn btn-secondary">Diproses</a>
                                @endrole
                                @elseif($allpemesanan->status == "disetujui")
                                {{-- {{$allpemesanan->status}} --}}
                                <a class="btn btn-success disabled">Disetujui</a>
                                @else
                                <a class="btn btn-success disabled">Ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
