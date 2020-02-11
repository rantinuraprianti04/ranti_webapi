<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         \App\Student::create([
        	'nama' => 'Ranti',
        	'jk' => 'P'
        ]);
         \App\Student::create([
        	'nama' => 'Rizky',
        	'jk' => 'L'
        ]);
    }
}
