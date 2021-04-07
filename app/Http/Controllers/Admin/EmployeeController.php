<?php

namespace App\Http\Controllers\Admin;

use App\Attendance;
use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class EmployeeController extends Controller
{
    public function index() {
        $data = [
            'employees' => Employee::all()
        ];
        return view('admin.employees.index')->with($data);
    }
    public function create() {
        return view('admin.employees.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $employeeRole = Role::where('name', 'employee')->first();
        $user->roles()->attach($employeeRole);
        $employeeDetails = [
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'join_date' => $request->join_date,
        ];

        Employee::create($employeeDetails);

        $request->session()->flash('success', 'Employee has been successfully added');
        return back();
    }

    public function attendance(Request $request) {
        $data = [
            'date' => null
        ];
        if($request->all()) {
            $date = Carbon::create($request->date);
            $employees = $this->attendanceByDate($date);
            $data['date'] = $date->format('d M, Y');
        } else {
            $employees = $this->attendanceByDate(Carbon::now());
        }
        $data['employees'] = $employees;
        return view('admin.employees.attendance')->with($data);
    }

    public function attendanceByDate($date) {
        $employees = DB::table('employees')->select('id', 'first_name', 'last_name')->get();
        $attendances = Attendance::all()->filter(function($attendance, $key) use ($date){
            return $attendance->created_at->dayOfYear == $date->dayOfYear;
        });
        return $employees->map(function($employee, $key) use($attendances) {
            $attendance = $attendances->where('employee_id', $employee->id)->first();
            $employee->attendanceToday = $attendance;
            return $employee;
        });
    }

    public function destroy($employee_id) {
        $employee = Employee::findOrFail($employee_id);
        $user = User::findOrFail($employee->user_id);
        // detaches all the roles
        DB::table('leaves')->where('employee_id', '=', $employee_id)->delete();
        DB::table('attendances')->where('employee_id', '=', $employee_id)->delete();
        DB::table('expenses')->where('employee_id', '=', $employee_id)->delete();
        $employee->delete();
        $user->roles()->detach();
        $user->delete();
        request()->session()->flash('success', 'Employee record has been successfully deleted');
        return back();
    }

    public function attendanceDelete($attendance_id) {
        $attendance = Attendance::findOrFail($attendance_id);
        $attendance->delete();
        request()->session()->flash('success', 'Attendance record has been successfully deleted!');
        return back();
    }

    public function employeeProfile($employee_id) {
        $employee = Employee::findOrFail($employee_id);
        return view('admin.employees.profile')->with('employee', $employee);
    }
}
