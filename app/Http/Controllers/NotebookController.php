<?php

namespace App\Http\Controllers;

use App\Notebook;
use App\User;
use Illuminate\Http\Request;

class NotebookController extends Controller
{

    public function index()
    {
        return Notebook::latest()->with('user')->get();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {   $this->validate($request,[
            'name'=>'required',
            'body'=>'required',
        ]);
        $user = User::find(1);
        $user->notebooks()->create($request->all());
        return "success";
    }


    public function show(Notebook $notebook)
    {
        //
    }


    public function edit(Notebook $notebook)
    {
        //
    }


    public function update(Request $request, Notebook $notebook)
    {
        $notebook->update($request->all());
        return "success";
    }


    public function destroy(Notebook $notebook)
    {
        $notebook->delete();
        return "deleted";
    }
}
