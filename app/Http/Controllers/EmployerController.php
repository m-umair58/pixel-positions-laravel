<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::latest()->get();


        return view('companies.index', [
            'employers' => $employers
        ]);
    }

    public function show($id)
    {
        $employer = Employer::where('id',$id)->firstOrFail();
        $myJobs = Job::latest()
        ->where('employer_id', $id)        
        ->with(['employer', 'tags']) // Eager load employer and tags
        ->get();

        return view('companies.show', [
            'company' => $employer,
            'jobs' => $myJobs
        ]);
    }
}
