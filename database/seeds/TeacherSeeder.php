<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Teacher::create([
        	'nama' => 'Aisyah',
        	'jk' => 'P'
        ]);
         \App\Teacher::create([
        	'nama' => 'Dilan',
        	'jk' => 'L'
        ]);
    }
}
