<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job\Job;
use DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $duplicates = DB::table('searches')
        ->select('keyword', DB::raw('COUNT(*) as `count`'))
        ->groupBy('keyword')
        ->havingRaw('COUNT(*) > 1')
        ->take(3)
        ->orderBy('count', 'asc')
        ->get();




        $jobs = Job::select()->take(5)->orderby('id', 'desc')->get();
        $totalJobs = Job::all()->count();

        return view('home', compact('jobs', 'totalJobs', 'duplicates'));
    }

    public function jobs()
    {

        $duplicates = DB::table('searches')
        ->select('keyword', DB::raw('COUNT(*) as `count`'))
        ->groupBy('keyword')
        ->havingRaw('COUNT(*) > 1')
        ->take(3)
        ->orderBy('count', 'asc')
        ->get();




        $jobs = Job::select()->take(5)->orderby('id', 'desc')->get();
        $totalJobs = Job::all()->count();

        return view('jobs', compact('jobs', 'totalJobs', 'duplicates'));
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_title' => 'nullable|string|max:255',
            'job_region' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the search parameters from the request
        $jobTitle = $request->input('job_title');
        $jobRegion = $request->input('job_region');
        $jobType = $request->input('job_type');

        // Build the query
        $query = Job::query();

        if ($jobTitle) {
            $query->where('job_title', 'like', '%' . $jobTitle . '%');
        }

        if ($jobRegion) {
            $query->where('job_region', $jobRegion);
        }

        if ($jobType) {
            $query->where('job_type', $jobType);
        }

        // Get the filtered jobs
        $jobs = $query->get();
        $totalJobs = $jobs->count();

        // Return the view with the results
        return view('jobs', compact('jobs', 'totalJobs')); // Replace 'your_view_name' with your actual view
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function how_i_apply()
    {
        return view('how-i-apply');
    }

    public function my_journey()
    {
        return view('my-journey');
    }

    public function where_i_work()
    {
        return view('where-i-work');
    }
}
