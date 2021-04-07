<?php

use App\Attendance;
use App\Department;
use \DateTime as DateTime;
use App\Role;
use App\User;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('employees')->truncate();
        DB::table('attendances')->truncate();
        $employeeRole = Role::where('name', 'employee')->first();
        $adminRole =  Role::where('name', 'admin')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $employee = User::create([
            'name' => 'Alif Arigin',
            'email' => 'arifintripto@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        //
        $employee->roles()->attach($employeeRole);
        $join = new DateTime('2020-01-15');
        $admin->roles()->attach($adminRole);
        $employee = Employee::create([
            'user_id' => $employee->id,
            'first_name' => 'Alif',
            'last_name' => 'Arifin',
            'join_date' => $join->format('Y-m-d'),
        ]);


        // Attendance seeder
        $create = Carbon::create(2020, 8, 17, 10, 00, 23, 'Asia/Kolkata');
        $update = Carbon::create(2020, 8, 17, 17, 00, 23, 'Asia/Kolkata');
        for ($i=0; $i < 6; $i++) {
            $attendance = Attendance::create([
                'employee_id' => $employee->id,
                'created_at' => $create
            ]);
            $attendance->registered = 'yes';
            $attendance->updated_at = $update;
            $attendance->save();
            $create->addDay();
            $update->addDay();
        }
    }
}
