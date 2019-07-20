<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courses;
use App\Http\Requests\SearchFormRequest;

class SearchController extends Controller
{
    public function searchCourse(SearchFormRequest $request)
    {
       // return $request->search;

        $search_value = $request->search;

        $course_id = Courses::where('course', 'like', $search_value.'%')->value('id');

        return redirect('/'.$course_id.'/materials');
        
    }
}
