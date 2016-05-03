<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;

use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todos::all();

        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $todo = new Todos();
        $todo->name = $request->get('name');
        $todo->text = $request->get('text');
        $todo->save();
        
        return $this->redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = $this->getTodo($id);

        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = $this->getTodo($id);
        
        return view('todos.edit', compact('todo'));
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
        $todo = $this->getTodo($id);
        $todo->name = $request->get('name');
        $todo->text = $request->get('text');
        $todo->save();
        
        return $this->redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = $this->getTodo($id);
        $todo->delete();
        
        return $this->redirect();
    }

    /**
     * @param $id
     * @return mixed
     */
    private function getTodo($id)
    {
        $todo = Todos::find($id);
        return $todo;
    }

    /**
     * @return mixed
     */
    private function redirect()
    {
        return redirect()->route('todos.index');
    }
}
