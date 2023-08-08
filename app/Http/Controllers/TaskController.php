<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index()
    {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Task 1',
                'start_date' => '25/07/2023',
                'end_date' => '26/07/2023',
                'status' => false
            ],
            [
                'id' => 2,
                'title' => 'Task 2',
                'start_date' => '25/07/2023',
                'end_date' => '26/07/2023',
                'status' => true
            ],
            [
                'id' => 3,
                'title' => 'Task 3',
                'start_date' => '25/07/2023',
                'end_date' => '26/07/2023',
                'status' => false
            ],
        ];
        return view('index', compact('tasks'));
    }
}
