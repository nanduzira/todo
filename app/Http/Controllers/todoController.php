<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use App\remind;

class todoController extends Controller
{
    //
    public function index() {
        return view('todo');
    }
    public function save(Request $request) {
        $todo = new todo;
        $todo->title=$request->title;
        $todo->desc=$request->desc;
        $todo->save();
    }
    public function indexShow() {
        return view('show');
    }
    public function show() {
        $todo = new todo;
        $todos=$todo->All();
        return view('show',['todos'=>$todos]);
    }
    public function delete($id) {
        $todos = todo::find($id);
        $todos->delete();
        return back();
    }
    public function update($id) {
        $todos = todo::find($id);
        return view('update',['todos'=>$todos]);
    }
    public function edit(Request $request) {
        $todos = new todo;
        // $todo =$todos->find($request->id);
        // $todo->title=$request->title;
        // $todo->desc=$request->desc;  
        // $todo->save();  
        $todos->where('id','=',$request->id)->update(['title'=>$request->title,'desc'=>$request->desc]); 
        return back();   
    }
    public function remindV() {
        return view('remind');
    }
    public function remind(Request $request) {
        $re = new remind;
        $re->remind=$request->remind;
        $re->date=$request->date;
        $re->save();
    }

}
