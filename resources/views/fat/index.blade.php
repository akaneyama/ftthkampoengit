@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-4">
        <form action="{{ route('fat.index') }}" method="GET" class="row g-2">
            <div class="col-12 col-md-3">
                <select name="fat_id" class="form-select bg-dark text-light border-secondary">
                    <option value="">Pilih FAT</option>
                    @foreach($fats as $fat)
                        <option value="{{ $fat->id_fat }}" {{ request('fat_id') == $fat->id_fat ? 'selected' : '' }}>{{ $fat->nama_fat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-3">
                <select name="olt_id" class="form-select bg-dark text-light border-secondary">
                    <option value="">Pilih OLT</option>
                    @foreach($olts as $olt)
                        <option value="{{ $olt->id_olt }}" {{ request('olt_id') == $olt->id_olt ? 'selected' : '' }}>{{ $olt->nama_olt }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-3">
                <select name="odc_id" class="form-select bg-dark text-light border-secondary">
                    <option value="">Pilih ODC</option>
                    @foreach($odcs as $odc)
                        <option value="{{ $odc->id_odc }}" {{ request('odc_id') == $odc->id_odc ? 'selected' : '' }}>{{ $odc->nama_odc }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-3">
                <select name="odp_id" class="form-select bg-dark text-light border-secondary">
                    <option value="">Pilih ODP</option>
                    @foreach($odps as $odp)
                        <option value="{{ $odp->id_odp }}" {{ request('odp_id') == $odp->id_odp ? 'selected' : '' }}>{{ $odp->nama_odp }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6 mt-2">
                <input 
                    type="text" 
                    name="search" 
                    class="form-control bg-dark text-light border-secondary" 
                    placeholder="Cari pengguna..."
                    value="{{ request('search') }}">
            </div>

            <div class="col-12 col-md-6 mt-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>
    </div>

    <div class="mb-4">
        <h5>Total Pengguna: {{ $totalUser }}</h5>
    </div>

    <div class="card bg-dark text-light">
        <div class="card-header">
            <h2 class="mb-0 text-center text-md-start">Daftar Transaksi FAT</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>FAT</th>
                        <th>OLT</th>
                        <th>ODC</th>
                        <th>ODP</th>
                        <th>Nama Pengguna</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksiFat as $transaksi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaksi->fat->nama_fat ?? 'Tidak diketahui' }}</td>
                            <td>{{ $transaksi->olt->nama_olt ?? 'Tidak diketahui' }}</td>
                            <td>{{ $transaksi->odc->nama_odc ?? 'Tidak diketahui' }}</td>
                            <td>{{ $transaksi->odp->nama_odp ?? 'Tidak diketahui' }}</td>
                            <td>{{ $transaksi->userFtth->nama_user_ftth ?? 'Tidak diketahui' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data transaksi FAT.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <style>
.pagination .page-link {
    background-color: #343a40; /* Warna latar belakang */
    color: #ffffff; /* Warna teks */
    border-color: #6c757d; /* Warna border */
}

.pagination .page-item.active .page-link {
    background-color: #007bff; /* Warna latar untuk halaman aktif */
    color: #ffffff; /* Warna teks halaman aktif */
    border-color: #0056b3; /* Warna border halaman aktif */
}

.pagination .page-link:hover {
    background-color: #495057; /* Warna latar saat hover */
    color: #ffffff; /* Warna teks saat hover */
}
</style>
    <div class="d-flex justify-content-center mt-4">
        {{ $transaksiFat->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection