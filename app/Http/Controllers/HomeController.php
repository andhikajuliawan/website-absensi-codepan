<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Admin;
use App\Models\Financial;
use App\Models\Karyawan;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::all();
        $admins = Admin::all();
        $karyawans = Karyawan::all();
        $tasks = Task::all();
        $date = Carbon::today();
        $absensis = Absensi::where('tanggal', $date)->get();
        $financials = Financial::all();
        $jumlahKaryawans = count($users);
        $gethadirs = Absensi::where([['status_id', '1'], ['tanggal', $date]])->get();
        $hadirs = count($gethadirs);
        $getizins = Absensi::where([['status_id', '2'], ['tanggal', $date]])->get();
        $izins = count($getizins);
        $getalfas = Absensi::where([['status_id', '3'], ['tanggal', $date]])->get();
        $alfas = count($getalfas);



        return view('dashboard', [
            'pagetitle' => 'Dashboard',
            'users' => $users,
            'admins' => $admins,
            'karyawans' => $karyawans,
            'tasks' => $tasks,
            'absensis' => $absensis,
            'financials' => $financials,
            'jumlahKaryawans' => $jumlahKaryawans,
            'hadirs' => $hadirs,
            'izins' => $izins,
            'alfas' => $alfas
        ]);
    }
}
