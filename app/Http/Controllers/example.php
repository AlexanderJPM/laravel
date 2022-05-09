<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class example extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = ["Ana", "Alexander", "Alexander"];
        return view("galeria", compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact");
    }


    public function show($id)
    {
        return "Hola desde show" . $id;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
