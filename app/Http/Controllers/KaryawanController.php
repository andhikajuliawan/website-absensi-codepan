<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Karyawan;
use App\Models\LevelUser;
use App\Models\StatusPekerjaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('list-karyawan.index', [
            'pagetitle' => 'List Karyawan',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = LevelUser::all();
        $status = StatusPekerjaan::all();
        return view('list-karyawan.add', [
            'pagetitle' => 'Create karyawan',
            'levels' => $levels,
            'status' => $status

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
            'fullname' => 'required',
            'username' => 'required',
            'phone' => 'required|numeric|min:6',
            'level' => 'required',
            'status' => 'required',
            'divisi' => 'required',
            'address' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->level_id = $request->input('level');
        $user->save();

        if ($request->input('level') == 1) {
            $admin = new Admin();
            $admin->user_id = $user->id;
            $admin->status_id = $request->input('status');
            $admin->nama_lengkap = $request->input('fullname');
            $admin->nomor_hp = $request->input('phone');
            $admin->alamat = $request->input('address');
            $admin->divisi = $request->input('divisi');
            $admin->save();
        } else {
            $karyawan = new Karyawan();
            $karyawan->user_id = $user->id;
            $karyawan->status_id = $request->input('status');
            $karyawan->nama_lengkap = $request->input('fullname');
            $karyawan->nomor_hp = $request->input('phone');
            $karyawan->alamat = $request->input('address');
            $karyawan->divisi = $request->input('divisi');
            $karyawan->save();
        }

        return redirect()->route('karyawans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('list-karyawan.view', [
            'pagetitle' => 'List Karyawan',
            'user' => $user
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
        $levels = LevelUser::all();
        $status = StatusPekerjaan::all();
        $user = User::findOrFail($id);
        return view('list-karyawan.edit', [
            'pagetitle' => 'List Karyawan',
            'users' => $user,
            'levels' => $levels,
            'status' => $status
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

        // CHECK FILL PASSWORD OR NOT
        $jmlhPassword = strlen($request->input('password'));

        // VALIDATION
        if ($jmlhPassword === 0) {
            $request->validate(
                [
                    'email' => 'required|email',
                    'fullname' => 'required',
                    'username' => 'required',
                    'phone' => 'required|min:6|numeric',
                    'level' => 'required',
                    'status' => 'required',
                    'divisi' => 'required',
                    'address' => 'required'
                ]
            );
        } else {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
                'fullname' => 'required',
                'username' => 'required',
                'phone' => 'required|min:6|numeric',
                'level' => 'required',
                'status' => 'required',
                'divisi' => 'required',
                'address' => 'required'
            ]);
        }

        // UPDATE DATA FOR USER
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        if ($jmlhPassword != 0) {
            $user->password = $request->input('password');
        }


        if ($user->level_id == 1) {

            if ($request->input('level') == 1) {
                $admin->nama_lengkap = $request->input('fullname');
                $admin->nomor_hp = $request->input('phone');
                $admin->alamat = $request->input('address');
                $admin->status_id = $request->input('status');
                $admin->divisi = $request->input('divisi');

                $admin->save();
            } else {

                $admin->delete();

                $karyawan = new Karyawan();
                $karyawan->user_id = $user->id;
                $karyawan->status_id = $request->input('status');
                $karyawan->nama_lengkap = $request->input('fullname');
                $karyawan->nomor_hp = $request->input('phone');
                $karyawan->alamat = $request->input('address');
                $karyawan->divisi = $request->input('divisi');
                $karyawan->save();
            }
        } else {
            if ($request->input('level') == 2) {
                $karyawan->nama_lengkap = $request->input('fullname');
                $karyawan->nomor_hp = $request->input('phone');
                $karyawan->alamat = $request->input('address');
                $karyawan->status_id = $request->input('status');
                $karyawan->divisi = $request->input('divisi');

                $karyawan->save();
            } else {

                $karyawan->delete();

                $admin = new Admin();
                $admin->user_id = $user->id;
                $admin->status_id = $request->input('status');
                $admin->nama_lengkap = $request->input('fullname');
                $admin->nomor_hp = $request->input('phone');
                $admin->alamat = $request->input('address');
                $admin->divisi = $request->input('divisi');
                $admin->save();
            }
        }
        $user->level_id = $request->input('level');
        $user->save();
        return redirect()->route('karyawans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->level_id == 1) {
            $admin = Admin::findOrFail($user->admin->id);
            $admin->delete();
        } else {
            $karyawan = Karyawan::findOrFail($user->karyawan->id);
            $karyawan->delete();
        }
        $user->delete();
        return redirect()->route('karyawans.index');
    }
}
