<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job\Job;
use App\Models\Category\Category;
use App\Models\Job\JobSaved;
use App\Models\Job\Application;
use App\Models\Job\Search;
use App\Notifications\JobApplicationNotification;
use Illuminate\Support\Facades\Notification;

use Auth;
use DB;


class JobsController extends Controller
{



    public function single($id) {

        $job = Job::find($id);


        //getting related jobs

        $relatedJobs = Job::where('category', $job->category)
         ->where('id', '!=',  $id)
         ->take(5)
         ->get();

        $relatedJobsCount = Job::where('category', $job->category)
         ->where('id', '!=',  $id)
         ->take(5)
         ->count();

         $categories = DB::table('categories')
         ->join('jobs', 'jobs.category', '=', 'categories.name')
         ->select('categories.name AS name', 'categories.id AS id', DB::raw('COUNT(jobs.category) AS total'))
         ->groupBy('jobs.category')
         ->get();

        //save job
        if(auth()->user()) {
            $savedJob = JobSaved::where('job_id', $id)
            ->where('user_id', Auth::user()->id)
            ->count();


           //verfining if user applied to job

           $appliedJob = Application::where('user_id', Auth::user()->id)
            ->where('job_id', $id)
            ->count();
     //categories



            return view('jobs.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'savedJob', 'appliedJob', 'categories'));
        } else {
            return view('jobs.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'categories'));

        }



    }


    public function saveJob(Request $request) {

        $saveJob = JobSaved::create([
            'job_id' => $request->job_id,
            'user_id' => $request->user_id,
            'job_image' => $request->job_image,
            'job_title' => $request->job_title,
            'job_region' => $request->job_region,
            'job_type' => $request->job_type,
            'company' => $request->company
        ]);

        if($saveJob) {
            return redirect('/jobs/single/'.$request->job_id.'')->with('save', 'job saved successfully');

        }

    }


    public function jobApply(Request $request) {


        if(Auth::user()->cv == 'No cv')
        {
            return redirect('/jobs/single/'.$request->job_id.'')->with('apply', 'upload your CV first in the profile page');
        }
        else
        {
            $applyJob = Application::create([
                'cv' => Auth::user()->cv,
                'certified_id' => Auth::user()->certified_id,
                'employment_contract' => Auth::user()->employment_contract,
                'job_id' => $request->job_id,
                'user_id' => Auth::user()->id,
                'email' => Auth::user()->email,
                'job_image' => $request->job_image,
                'job_title' => $request->job_title,
                'job_region' => $request->job_region,
                'job_type' => $request->job_type,
                'company' => $request->company
            ]);

            if($applyJob)
            {
                Notification::route('mail', 'info@workingforgreen.co.za')->notify(new JobApplicationNotification($applyJob));
                return redirect('/jobs/single/'.$request->job_id.'')->with('applied', 'you applied to this job successfully');
            }
        }
    }

    public function search(Request $request)
    {
        $request->validate([
            "job_title" => "nullable|string",
            "job_region" => "nullable|string",
            "job_type" => "nullable|string",
        ]);

        $query = Job::query();

        if ($request->filled('job_title')) {
            $query->where('job_title', 'like', '%' . $request->job_title . '%');
        }
        if ($request->filled('job_region'))
        {
            $query->where('job_region', $request->job_region);
        }
        if ($request->filled('job_type')) {
            $query->where('job_type', $request->job_type);
        }

        $searches = $query->get();

        return view('jobs.search', compact('searches'));
    }

    public function about()
    {


        return view('pages.about');
    }

    public function contact()
    {


        return view('pages.contact');
    }



}
