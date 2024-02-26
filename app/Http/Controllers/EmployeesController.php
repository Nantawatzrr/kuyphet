<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function createEmp(){
        return view('systemBook.createEmp');
    }

    public function Emp(Request $request){
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('photo'),$imageName);

        $employees = new Employees();
        $employees->firstName = $firstName;
        $employees->lastName = $lastName;
        $employees->profileEmp = $imageName;
        $employees->save();
        return back()->with('employee_add','เพิ่มข้อมูลสำเร็จ');
    }

    public function showEmp(){
        $employees = Employees::all();
        return view('systemBook.showEmp',compact('employees'));
    }
}
