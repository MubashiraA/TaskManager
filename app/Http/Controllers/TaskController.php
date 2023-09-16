<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTask;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = DB::table('tasks')->get();
        $tasks=Task::all();
 
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.addtask');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTask $request)
    {
        // DB::table('tasks')->insert([
        //     'title' => $request->title ,
        //     'description' => $request->description ,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),

        // ]);
        // Task::create([
        //     'title' => $request->title ,
        //     'description' => $request->description ,
        // ]);
        Task::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view("tasks.taskview", ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("tasks.edittask",['task' =>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTask $request, Task $task)
    {
        $task->title=$request->title;
        $task->description=$request->description;
        $task->save();        
        return redirect("tasks");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('tasks');
    }
}
