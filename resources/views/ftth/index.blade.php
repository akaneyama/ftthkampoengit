@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-4">
        <form action="{{ route('ftth.index') }}" method="GET" class="d-flex">
            <input 
                type="text" 
                name="search" 
                class="form-control me-2 bg-dark text-light border-secondary" 
                placeholder="Cari pengguna..." 
                value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>

    <div class="card bg-dark text-light">
        <div class="card-header">
            <h2 class="mb-0">Daftar FTTH User</h2>
        </div>
        <ul class="list-group list-group-flush">
            @forelse ($userftth as $userftthlist)
                <li class="list-group-item bg-dark text-light">
                    <h5 class="mb-1">
                       <a href="{{ route('ftth.show', $userftthlist) }}" style="text-decoration: none; " class="text-primary">
                            {{ $userftthlist->nama_user_ftth }}
                        </a>
                       {{--<p>{{$userftthlist->nama_user_ftth}}</p>--}} 
                    </h5>
                    <p>{{ $userftthlist->nomor_telp }} - {{ $userftthlist->alamat_user_ftth }}</p>
                    <p class="badge bg-primary">{{ $userftthlist->ip_address }}</p>
                    <div class="mt-2">
                        <a class="btn btn-danger btn-sm" target="_blank" href="http://{{ $userftthlist->ip_address }}">
                            Remote Router
                        </a>
                        <a class="btn btn-warning btn-sm" href="{{ route('ftth.show', $userftthlist) }}">
                            Detail Pelanggan
                        </a>
                        <a class="btn btn-sm text-white" style="background-color: #25D366; border-color: #25D366;" target="_blank" href="http://wa.me/{{ $userftthlist->nomor_telp }}">
                        Kirim Pesan
                        </a>
                    </div>
                </li>
            @empty
                <li class="list-group-item bg-dark text-light text-center">
                    Tidak ada data pengguna.
                </li>
            @endforelse
        </ul>
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
    {{ $userftth->links('pagination::bootstrap-5') }}
</div>
</div>
@endsection
