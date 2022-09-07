<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = User::findOrFail($id);


        return view('akun.edit', [
            'pagetitle' => 'akun',
            'user' => $user
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
        $user = User::findOrFail($id);
        if ($user->level_id == 1) {
            $admin = Admin::findOrFail($user->admin->id);
        } else {
            $karyawan = Karyawan::findOrFail($user->karyawan->id);
        }



        // VALIDATE DATA
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'namalengkap' => 'required',
            'alamat' => 'required',
        ]);

        // UPDATE DATA
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        if ($user->level_id == 1) {
            $admin->nama_lengkap = $request->input('namalengkap');
        } else {
            $karyawan->nama_lengkap = $request->input('namalengkap');
        }
        if ($user->level_id == 1) {
            $admin->alamat = $request->input('alamat');
            $admin->save();
        } else {
            $karyawan->alamat = $request->input('alamat');
            $karyawan->save();
        }
        $user->save();

        return redirect()->route('akuns.edit', ['akun' => $user->id]);
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
