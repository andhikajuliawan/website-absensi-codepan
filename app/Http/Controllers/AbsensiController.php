<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
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
        $absensis = Absensi::all();

        return view('absensi.index', [
            'pagetitle' => 'Absensi',
            'absensis' => $absensis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $absensi = Absensi::findOrFail($id);
        return view('absensi.view', [
            'pagetitle' => 'Absensi',
            'absensi' => $absensi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', [
            'pagetitle' => 'Absensi',
            'absensi' => $absensi
        ]);
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


        $absensi = Absensi::findOrFail($id);

        $request->validate([
            'validate' => 'numeric'
        ]);

        // dd($request->input('validate'));

        if ($request->input('validate') == "1") {
            $absensi->status_id = $absensi->status_id;
        } else {
            $absensi->status_id = 4;
        }
        $absensi->validate = true;
        $absensi->save();



        return redirect()->route('absensis.index');
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
