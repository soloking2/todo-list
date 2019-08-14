<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$todos = Todo::all();
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('todos.index', ['todos'=>$todos]);
        //return view('todos')->with('todos', $todos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('todos.create');
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
        $this->validate($request, [
          'text' => 'required'
        ]);

        $post = new Todo();
        $post->text = $request->input('text');
        $post->body = $request->input('body');
        $post->due = $request->input('due');

        $post->save();
        return redirect('/')->with('success', 'Todo created');
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
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $todoEdit = Todo::find($id);
        return view('todos.edit', ['todo'=>$todoEdit]);
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
        //
        $this->validate($request, ['text'=>'required']);
        $todoUpdate = Todo::where('id', $id)->update([
                          'text' =>$request->input('text'),
                          'body' =>$request->input('body'),
                          'due' =>$request->input('due'),
        ]);
        if($todoUpdate){
          return redirect('/')->with('success', 'Todo List updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $todoDelete = Todo::find($id);
        if($todoDelete->delete()){
          return redirect('/')->with('success', 'Todo Deleted successfully');
        }
    }
}
