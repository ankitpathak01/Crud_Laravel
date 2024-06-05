<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
// use Illuminate\Support\Facades\File;


class StudentSeeder extends Seeder
{
   
    public function run(): void
    {
        // $json=File::get(path:'database/json/student.json');
        // $students=collect(json_decode($json));
        
        //  $students->each(function($value){
        //     Student::create([
        //         'name'=>$value->name,
        //         'email'=>$value->email,
        //         'address'=>$value->address
        //     ]);
        // });

         for ($i=1; $i<=10;$i++){
            student ::create([
                'name'=>fake()->name,
                'email'=>fake()->email,
                'city'=>fake()->city,
                'country'=>fake()->country
               
            ]);
         }

    }
}
