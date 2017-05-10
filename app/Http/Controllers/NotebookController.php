<?php

namespace App\Http\Controllers;

use App\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{

    public function index()
    {
        return Notebook::with('User')->get();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
