<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
public function index(){
    $tasks= Task::where('user_id',auth()->user()->id)->orderBy('completed_at')->get();
    return view('tasks.welcome', compact('tasks'));
}
     



public function create(){ 
    return view('tasks.create');
}

public function store(){ 
  request()->validate([
        'description' => 'required|max:255',
        ]);

    Task::create([
        'description'=>request('description'),
        'user_id'=>auth()->user()->id,
    ]);
    
    return redirect('/'); 
}

 

public function complete_task($id){
        $task=Task::find($id);
        // $task->update([
        //     'description'=>'edite',
        //     'completed_at'=>Date::now() ,
        //     ]);
        $task->completed_at = now();
        $task->save();

            return redirect('/');
    }

    public function delete($id){
        $task=Task::find($id);
        $task->delete();
        return redirect('/');
    }



}

