<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.student.index');
    } 

    public function getNews()
    {
        return view('pages.student.news');
    } 

    public function getHistory()
    {
        return view('pages.student.history');
    } 

    public function getConstitution()
    {
        response()->download('storage/constitution/eleesa constitutioin.pdf');
    }
}
