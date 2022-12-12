@extends('layouts.master')

@section('content')
<div class="container p-3">
    <div class="card p-5">
        <div class="text-center fw-bold h2">Pemesanan Kendaraan</div>
        <div class="justify-content-start">
            @role('admin')
            <a href="{{route('pemesanan.create')}}" class="btn btn-success">Tambah Pemesanan Kendaraan</a>
            <button onclick="exportTableToExcel('tblData')" class="btn btn-primary">Unduh (Exel)</button>
            @endrole
            <table class="table my-3 border border-dark" id="tblData">
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
                                @else
                                <div class="d-flex">
                                    <form action="{{route('pemesanan.setuju', $allpemesanan->id)}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-success">Setuju</button>
                                    </form>
                                    <form action="{{route('pemesanan.tolak', $allpemesanan->id)}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                                </div>
                                {{-- <a href="{{route('pemesanan.tolak', $allpemesanan->id)}}" class="btn btn-danger">Tolak</a> --}}
                                @endrole
                                @elseif($allpemesanan->status == "disetujui")
                                {{-- {{$allpemesanan->status}} --}}
                                <a class="btn btn-success disabled">Disetujui</a>
                                @else
                                <a class="btn btn-danger disabled">Ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function exportTableToExcel(tableID, filename = ''){
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
        
        // Specify file name
        var datenow = Date.now();
        filename = filename?filename+'.xls': 'monitoring'+ datenow +'.xls';
        
        // Create download link element
        downloadLink = document.createElement("a");
        
        document.body.appendChild(downloadLink);
        
        if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
        }else{
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
        
            // Setting the file name
            downloadLink.download = filename;
            
            //triggering the function
            downloadLink.click();
        }
    }
</script>
@endsection
