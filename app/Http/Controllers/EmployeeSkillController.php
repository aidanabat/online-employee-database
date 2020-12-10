<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeSkill;
use App\Models\Employee;

class EmployeeSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeSkill = EmployeeSkill::all();
        $employee = Employee::all();
        return view('EmployeeSkills/index', compact('employeeSkill'), compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmployeeSkills/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'employee_id' => 'required|numeric',
            'skill_id' => 'required|numeric'
            
        ]);
        $employeeSkill = EmployeeSkill::create($storeData);

        return redirect('/employeeSkills')->with('completed', 'Employee Skill has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeeSkill = EmployeeSkill::findOrFail($id);
        return view('EmployeeSkills/edit', compact('employeeSkill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'employee_id' => 'required|numeric',
            'skill_id' => 'required|numeric'
        ]);
        EmployeeSkill::whereId($id)->update($updateData);
        return redirect('/employeeSkills')->with('completed', 'Employee Skill has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeSkill = EmployeeSkill::findOrFail($id);
        $employeeSkill->delete();

        return redirect('/employeeSkills')->with('completed', 'Employee Skill has been deleted');
    }
}
