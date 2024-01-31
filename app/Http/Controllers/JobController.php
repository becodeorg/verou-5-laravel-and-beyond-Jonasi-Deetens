<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show()
    {
        return "hey";
    }

    public function edit()
    {
        return "hey";
    }

    public function store(JobRequest $request)
    {
        $job = Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id()
        ]);

        
        return redirect()->route('jobs.index');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
