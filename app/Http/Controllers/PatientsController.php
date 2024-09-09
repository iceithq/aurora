<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', ['patients' => $patients]);
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        Patient::validate($request);
        $patient = new Patient();
        $patient->name = $request->input('name');
        $patient->address = $request->input('address');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('email');
        $patient->save();
        return redirect()->route('patients.index')
            ->with('success', 'Patient saved successfully.');
    }

    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', ['patient' => $patient]);
    }

    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', ['patient' => $patient]);
    }

    public function update(Request $request, string $id)
    {
        Patient::validate($request);

        $patient = Patient::findOrFail($id);
        $patient->name = $request->input('name');
        $patient->address = $request->input('address');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('email');
        $patient->save();
        return redirect()->route('patients.index')
            ->with('success', 'Patient updated successfully.');
    }

    public function destroy(string $id)
    {
        Patient::destroy($id);
        return redirect()->route('patients.index')
            ->with('success', 'Patient deleted successfully.');
    }
}
