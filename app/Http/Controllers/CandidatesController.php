<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Http\Requests\CandidateFormRequest;
use App\Http\Requests;


class CandidatesController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    
    public function index()
    {
        $candidates = Candidate::all();

        return view('candidates.candidate');
    }


    public function addCandidate(CandidateFormRequest $request)
    {

        $candidate = Candidate::create($request->all());

        $this->storeCandidateAvatar($candidate);

        return redirect('/candidate')->with('sucess', 'Updated successful');
    }

    public function create()
    {
        return view('candidate.create');
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
        $fileNameToStore = request()->file($file)->getClientOriginalName();

         //path to store file
             
        request()->file($file)->move(storage_path('app/public/images/'.$candidate->id.'/'), $fileNameToStore);

        $candidate->avatar = '/storage/images/'.$candidate->id.'/'.$fileNameToStore;
             
        
    }

}