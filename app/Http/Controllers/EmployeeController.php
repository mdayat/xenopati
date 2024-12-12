<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'user_picture' => 'required',
            'password' => 'required',
        ]);

        return Employee::create($request->all());
    }

    public function show(Employee $employee)
    {
        return $employee;
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:50',
            'address' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:25',
            'user_picture' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
        ]);

        $employee->update($validatedData);
        return response()->json($employee, 200);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(null, 204);
    }
}
