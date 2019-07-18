<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semesters;
use App\Courses;

class CoursesController extends Controller
{
    public function getCourses(Request $request)
    {
        $this->validate($request, [
            'program' => 'required',
            'semester' => 'required',
            'level' => 'required'
        ]);

       //return $request->all();

        $sem = ($request->program === '1') ? 'CE '.$request->level. '00 '. $request->semester: 'EEE '.$request->level.'00 '.$request->semester ;

        $sem_id = Semesters::where([['prog_id', $request->program], 
            
            ['level_id', $request->level], ['sem', $sem]])->value('id');
      
        //get same sem for other course to query for combined courses

        $com_sem = ($sem_id <= 8) ? $sem_id + 8 : $sem_id - 8;

        $courses = Courses::where('sem_id' , $sem_id)
        
            ->orWhere([['sem_id', $com_sem], ['combined', 'true']])->get();     

        return view('pages.student.courses', ['courses' => $courses]);
    }
}
