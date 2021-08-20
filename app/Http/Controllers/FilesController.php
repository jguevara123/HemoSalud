<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function get($id)
    {
        $files=Files::where('patient_id',$id)->get();

        return $files;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $file=$request->file('file');
        $nameFile = rand() .''.$request->id.'' . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage'), $nameFile);


        $file=new Files;
        $file->name = $nameFile;
        $file->extension = 'pdf';
        $file->patient_id = $request->id;
        $file->save();

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function delete(Files $files, $id)
    {
        $file = Files::find($id);

        if ($file->delete()) {
            return response()->json(['message' => 'Archivo Eliminado Exitosamente!']);
        }else{
            return response()->json(['message' => 'Ocurrió un error'],422);
        }
    }
}
