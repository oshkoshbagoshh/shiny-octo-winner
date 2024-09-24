<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\File;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // manual entry
        Employee::create([
            'name ' => 'Nathan Scott',
            'email' => 'hello@tfnms.co',
            'role' => 'CEO',
            'phone' => null,
            'department' => null,
            'hire_date' => null,
            'salary' => null,

        ]);
        Employee::create([
            'name' => 'AJ Javadi',
            'email' => 'aj@tfnms.co',
            'role' => 'Junior Developer',
            'phone' => '773-485-2507',
            'department' => 'IT',
            'hire_date' => null,
            'salary' => null,
        ]);

        Employee::create([
            'name' => 'Dan Spivak',
            'email' => 'dan@tfnms.co',
            'role' => 'Senior Developer',
            'phone' => null,
            'department' => 'IT',
            'hire_date' => null,
            'salary' => null,
        ]);

        Employee::create([
            'name' => 'Kiki B',
            'email' => 'kiki@tfnms.co',
            'role' => 'Marketing',
            'phone' => null,
            'department' => 'Marketing',
            'hire_date' => null,
            'salary' => null,
        ]);

        Employee::create([
            'name' => 'Sam Crowley',
            'email' => 'sam@tfnms.co',
            'role' => 'Legal',
            'phone' => null,
            'department' => 'Legal',
            'hire_date' => null,
            'salary' => null,
        ]);





    }


//     add more as you go



}

