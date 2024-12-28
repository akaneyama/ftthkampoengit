<?php

namespace App\Http\Controllers;

use App\Models\UserFtth;
use Illuminate\Http\Request;

class userftthController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $userftth = UserFtth::query()
            ->when($search, function ($query, $search) {
                $query->where('nama_user_ftth', 'like', '%' . $search . '%')
                    ->orWhere('ip_address', 'like', '%' . $search . '%')
                    ->orWhere('nomor_telp', 'like', '%' . $search . '%')
                    ->orWhere('alamat_user_ftth', 'like', '%' . $search . '%');
            })
            ->paginate(10)
            ->withQueryString();

        return view('ftth.index', compact('userftth'));
    }

    public function show(UserFtth $userftth)
    {
        $transaksiUsers = $userftth->transaksiUsers()
            ->with(['olt', 'odc', 'fat', 'odp']) // Memastikan semua relasi dimuat
            ->get();

        return view('ftth.show', compact('userftth', 'transaksiUsers'));
    }
}
