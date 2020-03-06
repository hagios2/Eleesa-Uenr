<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Http\Requests\CandidateFormRequest;
use App\ToggleElection;
use App\Http\Requests;


class CandidatesController extends Controller
{

    public function __construct()
    {
         $this->middleware('isAdmin');
    }

    
    public function index()
    {
       $candidates = Candidate::all();

        return view('candidates.candidate', compact('candidates'));
    }


    public function addCandidate(CandidateFormRequest $request)
    {

        $candidate = $request->except('candidate_type');

        $candidate[$request->candidate_type] = true;

        $candidate = Candidate::create($candidate);

        $this->storeCandidateAvatar($candidate);

        return redirect('/candidate')->with('sucess', 'Updated successful');
    }

    public function create()
    {
        return view('candidates.create');
    }


    public function update(Request $request, Candidate $candidate)
    {
        $candidate->update($request->all());

        $this->storeCandidateAvatar($candidate);

        return redirect('/candidate')->with('sucess', 'Updated successful');
    }



    public function removeCandidate(Candidate $candidate)
    {
        $candidate->delete();
        
        return redirect('/candidate')->with('sucess', 'Deleted successful');
    }

    public function storeCandidateAvatar(Candidate $candidate)
    {
         //get file name
        $fileNameToStore = request()->file('avatar')->getClientOriginalName();

         //path to store file
             
        request()->file('avatar')->move(storage_path('app/public/images/candidates/'.$candidate->id.'/'), $fileNameToStore);

        $candidate->avatar = '/storage/images/candidates/'.$candidate->id.'/'.$fileNameToStore;

        $candidate->save();
        
    }

    public function toggleElection(Request $request)
    {
        $toggleapp = ToggleElection::find(1);

        //$appToggle->

        $request->has('toggle') && $toggleapp->toggle == false ? $toggleapp->update(['toggle' => true]) : $toggleapp->update(['toggle' => false]);
    }

}