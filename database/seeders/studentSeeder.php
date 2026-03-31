<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;
class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     //Method 3
      $json =File::get(path:'database/json/students.json');
      $students = collect(json_decode($json));

      $students->each(function($student){
        student::create([
        'name' => $student->name,
        'email' => $student -> email
        ]);
      });


      //Method 1
        // student::create([
        //     'name'=>'chandan Thakur',
        //     'email'=>'chandan@gmail.com'
        // 
        // ]);


    //method 2
    //   $students =collect([
    //     [
    //          'name'=>'chandan Thakur',
    //          'email'=>'chandan@gmail.com'
    //     ],
    //     [
    //          'name'=>'Mohit Thakur',
    //          'email'=>'mohit@gmail.com'

    //     ],
    //     [
    //          'name'=>'kundan Thakur',
    //          'email'=>'kundan@gmail.com'
    //     ]    
       
    // ]);
    //   $students->each(function($student){
    //     student::insert($student);

    //   });
    }
}
