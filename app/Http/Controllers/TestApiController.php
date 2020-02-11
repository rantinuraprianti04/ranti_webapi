<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Student;

class TestApiController extends Controller
{
    //
    public function test()
    {
    	/*$data = [
            'siswa' => \App\Student::all(),
        ];
    	return $data;*/
    	
    	
        /*$data = [
            'guru' => \App\Student::all(),
        ];
    	return $data;*/

        return \App\Student::paginate(1);
    }
}    

