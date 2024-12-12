<?php

namespace App\Http\Controllers;

use App\Models\EmpSalary;
use Illuminate\Http\Request;

class EmpSalaryController extends Controller
{
    public function index()
    {
        return EmpSalary::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer',
            'year' => 'required|integer',
            'basic_salary' => 'required|numeric',
            'bonus' => 'nullable|numeric',
            'bpjs' => 'nullable|numeric',
            'jp' => 'nullable|numeric',
            'loan' => 'nullable|numeric',
            'total_salary' => 'required|numeric',
        ]);

        return EmpSalary::create($request->all());
    }

    public function show(EmpSalary $empSalary)
    {
        return $empSalary;
    }

    public function update(Request $request, EmpSalary $empSalary)
    {
        $empSalary->update($request->only(['employee_id', 'month', 'year', 'basic_salary', 'bonus', 'bpjs', 'jp', 'loan', 'total_salary']));
        return $empSalary;
    }

    public function destroy(EmpSalary $empSalary)
    {
        $empSalary->delete();
        return response()->json(null, 204);
    }
}
