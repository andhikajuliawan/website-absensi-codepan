<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task_query = Task::with(['user', 'statustask']);

        if ($request->user_id) {
            $task_query->where('user_id', 'LIKE', '%' . $request->user_id . '%');
        }

        $task = $task_query->get();


        return response()->json([
            'status' => "ANJAYY SELAMATT",
            'task_id' => $task

        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $task = new Task;
        $task->user_id = $id;
        $task->status_id = 2;
        $task->name = $request->name;
        $task->detail = $request->detail;
        $task->save();

        return response()->json([
            'status' => 'Berhasil',
            'task' => $task,
            'nama' => $task->user->name,
            'task_status' => $task->statustask->nama
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
        $task = Task::find($id);

        return response()->json([
            "status" => 'berhasil',
            "task" => $task,
            'user_id' => $task->statustask->nama
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

        $task = Task::find($id);

        $request->validate([
            'status_id' => 'required|numeric',
        ]);

        $task->status_id = $request->status_id;
        $task->name = $request->name;
        $task->detail = $request->detail;


        $task->save();

        return response()->json([
            'status' => 'Berhasil',
            'task' => $task,
            'status_task' => $task->statustask->nama
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
        $task = Task::find($id);

        $task->delete();

        return response()->json([
            'status' => 'Berhasil',
            'task' => $task
        ], 200);
    }
}
