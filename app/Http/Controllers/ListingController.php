<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $jobs = Job::join('listings', 'jobs.id', '=', 'listings.job_id')
            ->where('listings.user_id', $userId)
            ->select('jobs.*')
            ->distinct()
            ->get();

        return view('listings.index', ["jobs" => $jobs]);
    }

    public function enlist($id)
    {
        $userId = auth()->id();
        $jobId = $id;

        $listing = Listing::where(function ($query) use ($userId, $jobId) {
            $query->where('user_id', $userId)
                  ->where('job_id', $jobId);
        })->first();

        if ($listing)
        {
            return redirect()->route('jobs.show', ['job' => $id])->withErrors(['error' => "You are already enlisted for this job."]);
        } else {
            Listing::create([
                'user_id' => auth()->id(),
                'job_id' => $id,
            ]);

            return redirect()->route('jobs.index');
        }
    }
}