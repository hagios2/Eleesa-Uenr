<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courses;
use App\Materials;
use App\Semesters;
use App\Programs;
use App\Level;

class MaterialsDownloadController extends Controller
{
    public function downloadMaterial($id, $materialType)
    {
        /**
         * materialtypes => Book, Slide, Pasco
         * 
         * convert materialtype to lowercase 
         * 
         * to get specified column from the model instancw
         * 
         * find course for that material
         * 
         * get level for that course
         * 
         * get program for that course
         * 
         * check if course is combined
         * 
         * and specify file path based on the
         * 
         * either combined or specific program,
         * 
         * level, course_id and filenameStored
         * 
         */

         
        $materials = Materials::find($id);

        ////get course
        $course = $materials->course;

        //convert materialtype to lower
        $convert_to_lower = strtolower($materialType);

        //get filename(or specified column) from model instance
        $filename = $materials->$convert_to_lower;

        //get semester for that course 
        $semester = Semesters::find($course->sem_id);

        //get level
        $level = $semester->level->level;

        //get program
        $program = $semester->program->program;

        
        //file path
        if($course->combined)
        {
            $path = 'storage/Combined/'.$level.'/'.$materialType.'/'.$course->id.'/'.$filename;

        }else{
            $path = 'storage/'.$program.'/'.$level.'/'.$materialType.'/'.$course->id.'/'.$filename;
        }
       
        return $this->download($path, $filename);

        return back();
        
    }

    
    public function downloadConstitution()
    {
        $path = 'storage/Constitution/eleesa_constitution.pdf';

        return $this->download($path, 'Eleesa Constitution.pdf');

        return back();
    }


    public function download($path, $filename)
    {
         //headers
         $headers = array(
        
            'Content-Type: application/pdf',
            
        );

        return response()->download($path, $filename, $headers);
    }
}
