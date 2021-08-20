<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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

    public function get(Request $request)
    {
        $patients= Patient::all();

        return $patients;
    }

    public function getPatient(Request $request, $id)
    {
        $patients= Patient::find($id);

        return $patients;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patient= Patient::where('ci', $request->ci)->count();
        if ($patient > 0) {
            return response()->json(['message' => 'Esta cédula ya se encuentra registrada'],422);
        }

        $patient= new Patient;
        $patient->name = $request->name;
        $patient->nacionality = 'V';
        $patient->ci = $request->ci;
        $patient->birth = $request->birth;

        if ($patient->save()) {
            return response()->json(['message' => 'Paciente Registrado Exitosamente!']);
        }else{
            return response()->json(['message' => 'Ocurrió un error'],422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $patient= Patient::find($request->id);
        $patient->name = $request->name;
        $patient->nacionality = 'V';
        $patient->ci = $request->ci;
        $patient->birth = $request->birth;

        if ($patient->save()) {
            return response()->json(['message' => 'Paciente Editado Exitosamente!']);
        }else{
            return response()->json(['message' => 'Ocurrió un error'],422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function delete(Patient $patient, $id)
    {
        $patient = Patient::find($id);

        if ($patient->delete()) {
            return response()->json(['message' => 'Paciente Eliminado Exitosamente!']);
        }else{
            return response()->json(['message' => 'Ocurrió un error'],422);
        }
    }
}
