@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('kendaraan.store')}}" method="post">
        @csrf
        <label for="driver">driver</label>
        <input id="driver" type="text">
        <label for="namakendaraan">nama kendaraan</label>
        <input id="namakendaraan" type="text">
        <label for="platnomor">plat nomor</label>
        <input id="platnomor" type="text">
        <label for="pihakmenyetujui">pihak yang menyetujui</label>
        <input id="pihakmenyetujui" type="text">
        <button type="submit" class="btn btn-primary">Buat pemesanan</button>
    </form>
</div>
@endsection