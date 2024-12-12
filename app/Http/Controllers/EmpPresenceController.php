<?php

namespace App\Http\Controllers;

use App\Models\EmpPresence;
use Illuminate\Http\Request;

class EmpPresenceController extends Controller
{
    public function index()
    {
        return EmpPresence::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'late_in' => 'nullable|integer',
            'early_out' => 'nullable|integer',
        ]);

        return EmpPresence::create($request->all());
    }

    public function show(EmpPresence $empPresence)
    {
        return $empPresence;
    }

    public function update(Request $request, EmpPresence $empPresence)
    {
        $empPresence->update($request->only(['employee_id', 'check_in', 'check_out', 'late_in', 'early_out']));
        return $empPresence;
    }

    public function destroy(EmpPresence $empPresence)
    {
        $empPresence->delete();
        return response()->json(null, 204);
    }
}
