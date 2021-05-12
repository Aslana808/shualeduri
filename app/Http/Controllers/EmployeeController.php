<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('surname')->paginate(5);
        return view('index', compact('employees'));
    }

    public function edit($id){
        $employee = Employee::findorfail($id);
        return view('edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::findorfail($id);
        $employee->update($request->all());
        return redirect()->back();
        //return view('edit', compact('employee'));
    }

    public function hired($id){
        $employee = Employee::findorfail($id);
        if($employee->is_hired==1){
            $employee->is_hired = 0;
        }
        else{
            $employee->is_hired = 1;
        }
        $employee->save();
        return redirect()->back();
    }

    public function destroy($id){
        $employee = Employee::findorfail($id);
        $employee->delete();
        return redirect()->back();
    }
}
