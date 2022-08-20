<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Admin;
use App\Models\Financial;
use App\Models\Karyawan;
use App\Models\Task;
use App\Models\User;
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
        $absensis = Absensi::all();
        $financials = Financial::all();



        return view('home', [
            'users' => $users,
            'admins' => $admins,
            'karyawans' => $karyawans,
            'tasks' => $tasks,
            'absensis' => $absensis,
            'financials' => $financials,
        ]);
    }
}
