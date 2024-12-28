<?php

namespace App\Http\Controllers;

use App\Models\userftth;
use Illuminate\Http\Request;
use App\Models\Fat;
use App\Models\Odc;
use App\Models\Olt;
use App\Models\odp;
use App\Models\TransaksiFatClient;


class FatController extends Controller
{
    public function index(Request $request)
    {
        $fatId = $request->get('fat_id');
        $oltId = $request->get('olt_id');
        $odcId = $request->get('odc_id');
        $odpId = $request->get('odp_id');
        $search = $request->get('search');

        // Query data dari TransaksiFatClient dengan filter jika ada
        $transaksiFat = TransaksiFatClient::with(['userFtth', 'olt', 'odc', 'fat', 'odp'])
            ->when($fatId, function ($query, $fatId) {
                $query->where('id_fat', $fatId);
            })
            ->when($oltId, function ($query, $oltId) {
                $query->where('id_olt', $oltId);
            })
            ->when($odcId, function ($query, $odcId) {
                $query->where('id_odc', $odcId);
            })
            ->when($odpId, function ($query, $odpId) {
                $query->where('id_odp', $odpId);
            })
            ->when($search, function ($query, $search) {
                $query->whereHas('userFtth', function ($q) use ($search) {
                    $q->where('nama_user_ftth', 'like', "%$search%");
                });
            })
            ->paginate(10);

        // Data untuk combobox
        $fats = Fat::all();
        $olts = Olt::all();
        $odcs = Odc::all();
        $odps = Odp::all();

        // Total user info
        $totalUser = TransaksiFatClient::when($fatId, function ($query, $fatId) {
            $query->where('id_fat', $fatId);
        })->when($oltId, function ($query, $oltId) {
            $query->where('id_olt', $oltId);
        })->when($odcId, function ($query, $odcId) {
            $query->where('id_odc', $odcId);
        })->when($odpId, function ($query, $odpId) {
            $query->where('id_odp', $odpId);
        })->count();

        return view('fat.index', compact('transaksiFat', 'fats', 'olts', 'odcs', 'odps', 'totalUser'));
    }
}
