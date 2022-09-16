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



        return view('dashboard', [
            'pagetitle' => 'Dashboard',
            'users' => $users,
            'admins' => $admins,
            'karyawans' => $karyawans,
            'tasks' => $tasks,
            'absensis' => $absensis,
            'financials' => $financials,
        ]);
    }
}
