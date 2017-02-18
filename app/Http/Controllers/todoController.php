<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoController extends Controller
{
    //
    public function index() {
        return view('todo');
    }
    public function save(Request $request) {
        $todo = new todo;
        $todo->title=$request->title;
        $todo->save();
    }
    public function indexShow() {
        return view('show');
    }
    public function show() {
        $todo = new todo;
        $todos=$todo->where('title','Anju')->get();
        return view('show',['todos'=>$todos]);
    }
}
