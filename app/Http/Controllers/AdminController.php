<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semesters;
use App\Materials;
use App\Programs;
use App\Http\Requests\AdminFormRequest;
use App\Courses;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semesters::all();

        $programs = Programs::all();

       

        return view('pages.admin.create', \compact(['programs', 'semesters']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFormRequest $request)
    {
       $course_exists = Courses::where('course_code', $request->course_code)
            ->orWhere('course', $request->course)->first();

        if($course_exists)
        {
            return back()->with('info', 'Course already exists click on the existing course to add course materials');
        }

       if($request->has('existing'))
        {
            $course_id = $request->course;

        }else {

            if($request->has('combined')){
                $course_id = Courses::create([
                    'sem_id' => $request->semester,
                    'combined' => $request->combined,
                    'course_code' => $request->course_code,
                    'course' => $request->course
                ])->id;      
            }else{
                $course_id = Courses::create([
                    'sem_id' => $request->semester,
                    'course_code' => $request->course_code,
                    'course' => $request->course
                ])->id;
            }
        }
    
        if($request->hasFile('Book'))
        {
           $book = $this->fileSaver('Book', $course_id);
        }

      /*   if($request->hasFile('Slide'))
        {
           $slide = $this->fileSaver('Slide', $course_id);
        } */

        if($request->hasFile('Pasco'))
        {
           $pasco = $this->fileSaver('Pasco', $course_id);
        }

        //persist materials or null
        Materials::create([
          
            'course_id' => $course_id,
            'book' => $book ?? null,
            //'slide' => $slide ?? null,
            'pasco' => $pasco ?? null,
        ]);

        return back()->withSuccess('Course was successfully added');
    }

    
    public function fileSaver($file, $id)
    {

        //get file name
        $fileNameToStore = request()->file($file)->getClientOriginalName();

        //get course
        $course = Courses::find($id);

        $semester = Semesters::find($course->sem_id);

        //path to store file
        if($course->combined){
            
            request()->file($file)->move(storage_path('app/public/Combined/'.$semester->level->level.'/'.$file.'/'.$id.'/'), $fileNameToStore);
            
        
        }else{
        
       
          request()->file($file)->move(storage_path('app/public/'.$semester->program->program.'/'.$semester->level->level.'/'.$file.'/'.$id.'/'), $fileNameToStore);

        }
        
        return $fileNameToStore;
    }


    public function getexisting()
    {

        $courses = Courses::all();


        return view('pages.admin.exist', compact('courses'));
    }
}
