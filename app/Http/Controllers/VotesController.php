<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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

           // return $attributes->where('president');            

            return view('elections/election', \compact('attributes', 'candidates'));

        }else{

             return view('elections/election', compact('candidates'));
        }

    }


    public function store(){

        if(auth()->user()->vote)
        {
            return back()->with('error', 'Access Denied! You have already voted');
        }

        $attributes = request()->validate([

            'candidate' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();

        //return $attributes;

        Vote::create($attributes);

        return redirect('/elections')->withSuccess("Your vote has been added successfully");
    }


    public function VoteCounter($candidate)
    {
       $votes = Votes::where('candidate', $candidate)->count();

       //$votes = Votes::where('candidate', $candidate);

       return [$candidate => $votes];


    }


}
