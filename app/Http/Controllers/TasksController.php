<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;

use app\Task;

class TasksController extends Controller
{
  public function index()
  {
    $tasks = Task::all();

    return Response::json(['tasks' => $tasks]);
  }
}
