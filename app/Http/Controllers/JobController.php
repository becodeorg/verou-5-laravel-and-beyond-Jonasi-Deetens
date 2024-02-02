<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Models\Listing;

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
        $userId = auth()->id();
        $jobId = $id;

        $listing = Listing::where(function ($query) use ($userId, $jobId) {
            $query->where('user_id', $userId)
                  ->where('job_id', $jobId);
        })->first();

        $enlisted = false;
        if($listing) $enlisted = true;

        $job = Job::find($id);
        return view('jobs.show', ['job' => $job, 'enlisted' => $enlisted]);
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

    public function update(JobRequest $request, $id)
    {
        $job = Job::find($id);

        if ($job) {
            $job->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('jobs.index');
    }

    public function destroy($id)
    {
        Job::destroy($id);

        return redirect()->route('jobs.index');
    }
}
