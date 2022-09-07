<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi_query = Absensi::with(['user', 'statusabsensi']);
        $absensi = $absensi_query->get();

        // dd($absensi);

        return response()->json([
            'absensi' => $absensi

        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $absensi = new Absensi;
        $absensi->user_id = $id;
        $absensi->status_id = 1;
        $absensi->tanggal = Carbon::today();
        $absensi->masuk = Carbon::now();
        $absensi->validate = true;


        $absensi->save();

        return response()->json([
            'status' => 'ANJAYYY anda berhasil',
            'absensi' => $absensi,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi = Absensi::find($id);

        return response()->json([
            "status" => 'berhasil',
            "detail-absensi" => $absensi,
            "detail-status" => $absensi->statusabsensi->nama
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $absensi = Absensi::find($id);

        $absensi->keluar = Carbon::now();
        $absensi->save();

        return response()->json([
            "status" => "ANJAYYY anda berhasil",
            'absensi' => $absensi
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
