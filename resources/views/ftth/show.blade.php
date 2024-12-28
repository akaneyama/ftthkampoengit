@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-dark text-light mb-4">
        <div class="card-body">
        @foreach ($transaksiUsers as $transaksi)
            <h1 class="card-title">Detail FTTH User: {{ $userftth->nama_user_ftth }}</h1>
            <p><b>Alamat:</b> {{ $userftth->alamat_user_ftth }}</p>
            <p><b>IP Address:</b> {{ $userftth->ip_address }}</p>
            <p><b>Odp:</b> {{$transaksi->odp->nama_odp}}</p>
            <p><b>Warna Kabel:</b> {{$transaksi->warna_kabel}}</p>
            @endforeach
        </div>
    </div>

    <h2 class="mt-4 text-light">Transaksi FAT</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>OLT</th>
                <th>PON OLT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksiUsers as $transaksi)
                <tr>
                    <td>{{ $transaksi->olt->nama_olt ?? '-' }}</td>
                    <td>{{ $transaksi->olt->pon_olt ?? '-' }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ODC</th>
                <th>Port ODC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksiUsers as $transaksi)
                <tr>
                    <td>{{ $transaksi->odc->nama_odc ?? '-' }}</td>
                    <td>{{ $transaksi->odc->port_odc ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                
                <th>Fat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksiUsers as $transaksi)
                <tr>
                  
                    <td>{{ $transaksi->fat->nama_fat ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
