<?php

namespace App\Http\Controllers;

use App\Exports\FinancialExport;
use App\Models\Financial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financials = Financial::orderBy('id', 'DESC')->paginate(2);

        if (request('search')) {
            // dd(request('search'));

            $financials = Financial::where('tanggal', 'like', '%' . request('search') . '%')->orderBy('id', 'DESC')->paginate(10);
        }

        return view('financial.index', [
            'pagetitle' => 'Financial',
            'financials' => $financials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial.add', [
            'pagetitle' => 'Financial'
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

        // VALIDATION
        $request->validate(
            [
                'name' => 'required',
                'detail' => 'required',
                'nominal' => 'required|numeric',
                'tanggal' => 'required'

            ]
        );
        $financial = new Financial();
        $financial->user_id = Auth::user()->id;
        $financial->name  = $request->input('name');
        $financial->detail  = $request->input('detail');
        if ($request->input('status') == "Pemasukan") {
            $financial->pemasukan  = $request->input('nominal');
            $financial->pengeluaran  = 0;
        } else {
            $financial->pengeluaran  = $request->input('nominal');
            $financial->pemasukan  = 0;
        }
        $financial->tanggal = $request->input('tanggal');

        $financial->save();
        return redirect()->route('financials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $financial = Financial::findOrFail($id);
        return view("financial.view", [
            'pagetitle' => 'Financial',
            'financial' => $financial
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
        $financial = Financial::findOrFail($id);
        return view('financial.edit', [
            'pagetitle' => 'Financial',
            'financial' => $financial
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

        $financial = Financial::findOrFail($id);

        // VALIDATION
        $request->validate(
            [
                'name' => 'required',
                'detail' => 'required',
                'nominal' => 'required',
                'tanggal' => 'required'

            ]
        );
        $financial->user_id = Auth::user()->id;
        $financial->name  = $request->input('name');
        $financial->detail  = $request->input('detail');
        if ($request->input('status') == "Pemasukan") {
            $financial->pemasukan  = $request->input('nominal');
            $financial->pengeluaran  = 0;
        } else {
            $financial->pengeluaran  = $request->input('nominal');
            $financial->pemasukan  = 0;
        }
        $financial->tanggal = $request->input('tanggal');

        // dd($financial);

        $financial->save();
        // return redirect()->route('financials.show', ['financial' => $financial->id]);
        return redirect()->route('financials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financial = Financial::find($id);
        $financial->delete();
        return redirect()->route('financials.index');
    }

    public function exportFinancialExcel()
    {
        return Excel::download(new FinancialExport, 'financial.xlsx');
    }
}
