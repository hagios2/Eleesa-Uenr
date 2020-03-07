<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ElectionFormRequest;
use App\User;
use App\Vote;
use App\Candidate;
use App\ElectionPolicy;

class VotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if(!auth()->user()->policy)
        {
            return back()->with('error', 'Access Denied! Agree to binding document and click next');
        }


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

    public function electionPolicy()
    {
        if(auth()->user()->policy && auth()->user()->policy->agree == 1)
        {
            return back()->with('info', 'Policy accepted already!');
        }

        ElectionPolicy::create([

            'user_id' => auth()->id(),

            'agree' => true
        ]);

        return back()->with('success', 'Agreement saved! click next for the election page');
    }

    public function getElectionPolicy()
    {

        return view('elections.policy');
    
    }
}
