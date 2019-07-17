<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semesters;
use App\Materials;
use App\Programs;
use App\Http\Requests\AdminFormRequest;

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
   
        if($request->hasFile('Book'))
        {
            $book = $this->fileSaver('Book', $course_id);
        }

        if($request->hasFile('Slide'))
        {
            $slide = $this->fileSaver('Slide', $course_id);
        }

        if($request->hasFile('Pasco'))
        {
            $pasco = $this->fileSaver('Pasco', $course_id);
        }

        Materials::create([
          
            'course_id' => $course_id,
            'book' => $book,
            'slide' => $slide,
            'pasco' => $pasco,
        ]);

        return redirect('/admin/create')->withSuccess('Course was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fileSaver($file, $id)
    {
        //get file name
        $fileNameToStore = request()->file($file)->getClientOriginalName();

        //path to store file

        if(request()->has('combined')){
            request()->file($file)->move('storage/Combined/'.request()->level.'/'.$file.'/'.$id.'/', $fileNameToStore);
        }else{
            request()->file($file)->move('storage/'.request()->program.'/'.request()->level.'/'.$file.'/'.$id.'/', $fileNameToStore);
        }
        
        return $fileNameToStore;
    }
}
