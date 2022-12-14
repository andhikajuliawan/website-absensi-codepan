<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        // $user_query = User::with(['admin', 'karyawan']);

        // if ($request->user_id) {
        //     $user_query->where('id', 'LIKE', '%' . $request->user_id . '%');
        // }

        // $user = $user_query->get();

        // return response()->json([
        //     'status' => 'BERHASIL',
        //     'user' => $user
        // ], 200);

        $account = User::find($id);

        if ($account->level_id === 1) {

            $account = User::find($id);

            $admin = Admin::find($account->admin->id);

            // GET URL FOR THUMBNAIL
            $thumbnail = Storage::url('public/thumbnails' . $admin->encrypted_thumbnail);

            return response()->json([
                'status' => 'BERHASIL MASUK SEBAGAI ADMIN',
                'account' => $admin,
                'picture' => $thumbnail,
                'user_id' => $admin->user,
                'level' => $admin->statuspekerjaan,

            ], 200);
        } else {
            $karyawan = User::find($id);

            $karyawan = Karyawan::find($account->karyawan->id);

            // GET URL FOR THUMBNAIL
            $thumbnail = Storage::url('public/thumbnails' . $karyawan->encrypted_thumbnail);

            return response()->json([
                'status' => 'BERHASIL MASUK SEBAGAI KARYAWAN',
                'account' => $karyawan,
                'picture' => $thumbnail,
                'user_id' => $karyawan->user,
                'level' => $karyawan->statuspekerjaan
            ], 200);
        }
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
        //
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
        $account = User::find($id);

        if ($account->level_id === 1) {

            $account = User::find($id);

            $admin = Admin::find($account->admin->id);
            $admin->nama_lengkap = $request->nama_lengkap;
            $admin->nomor_hp = $request->nomor_hp;
            $admin->alamat = $request->alamat;
            $admin->divisi = $request->divisi;
            $admin->save();

            return response()->json([
                'status' => 'BERHASIL UPDATE SEBAGAI ADMIN',
                'account' => $admin,
            ], 200);
        } else {
            $karyawan = User::find($id);

            $karyawan = Karyawan::find($account->karyawan->id);
            $karyawan->nama_lengkap = $request->nama_lengkap;
            $karyawan->nomor_hp = $request->nomor_hp;
            $karyawan->alamat = $request->alamat;
            $karyawan->divisi = $request->divisi;

            $karyawan->save();


            return response()->json([
                'status' => 'BERHASIL UPDATE SEBAGAI KARYAWAN',
                'account' => $karyawan,
            ], 200);
        }
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
