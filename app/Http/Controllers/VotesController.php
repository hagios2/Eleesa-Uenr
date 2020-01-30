<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ElectionFormRequest;
use App\User;
use App\Vote;
use App\Candidate;

class VotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $candidates = Candidate::all();

        if(auth()->user()->vote)
        {

            $attributes = Vote::all();    

            return view('elections/election', \compact('attributes', 'candidates'));

        }else{

             return view('elections/election', compact('candidates'));
        }

    }


    public function store(ElectionFormRequest $request){

        if(auth()->user()->vote)
        {
            return back()->with('error', 'Access Denied! You have already voted');
        }

        $attributes = $request->all();

        $attributes['user_id'] = auth()->id();

        Vote::create($attributes);

        return redirect('/elections')->withSuccess("Your vote has been added successfully");
    }


}
