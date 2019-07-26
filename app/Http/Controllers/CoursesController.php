<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semesters;
use App\Courses;
use App\Materials;

class CoursesController extends Controller
{

    public function getCourse(Request $request)
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
      
        return redirect('/'.$sem_id.'/courses');
    }


    public function redirectCoursesWithId($sem_id)
    {
         //get same sem for other course to query for combined courses

         $com_sem = ($sem_id <= 8) ? $sem_id + 8 : $sem_id - 8;

         $courses = Courses::where('sem_id' , $sem_id)
         
             ->orWhere([['sem_id', $com_sem], ['combined', '1']])->get();
 
             return view('pages.student.courses',  compact('courses'));

    }


    public function getCourseMaterials($id)
    {

        $course = Courses::find($id);

        $course_name = $course->course;
        
        $materials = $course->material;

        static $book = 0;
        static $slide = 0;
        static $pasco = 0;

        foreach($materials as $material)
        {
            if($material->book != null)
            {
                $book++;
            }

            if($material->slide != null)
            {
                $slide++;
            }

            if($material->pasco != null)
            {
                $pasco++;
            }

        }

       return view('pages.student.c_materials', \compact(['materials' , 'book', 'slide', 'pasco', 'course_name']));
    } 
}
