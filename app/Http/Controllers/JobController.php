<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        if(auth()->check()) {
            $jobs = Job::all();
            return view('jobs.index', ['jobs' => $jobs]);
        } else return redirect()->route('login');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show', ['job' => $job]);
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit', ['job' => $job]);
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

    public function update(JobRequest $request)
    {
        dd("hey");
    }

    public function destroy($id)
    {
        Job::destroy($id);

        return redirect()->route('jobs.index');
    }
}
