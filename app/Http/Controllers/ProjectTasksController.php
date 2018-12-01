<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {

        request()->validate(
            [
                'description' => 'required',
            ]);

        $project->addTask(request('description'));
//        Task::create(
//            [
//                'project_id'  => $project->id,
//                'description' => request('description'),
//            ]
//        );

        return back();
    }

//    public function update(Task $task)
//    {
//
//        // option 1
////        if(request()->has('completed')){
////            $task->complete();
////        } else {
////            $task->incomplete();
////        }
//
//        // Option 2
//        $method = request()->has('completed') ? 'complete' : 'incomplete';
//        $task->$method();
//
//        // Option 3
////        $task->update(
////            [
////                'completed' => request()->has('completed'),
////            ]
////        );
//
//        // Option 4
//        //request()->has('completed') ? $task->complete() : $task->incomplete();
//
//
//        return back();
//    }
}
