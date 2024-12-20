<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Job\Timesheet;
use App\Models\Job\Job;
use App\Models\Category\Category;
use App\Models\Job\Application;
use Illuminate\Support\Facades\Hash;
use File;
use Auth;
use DB;
use App\Models\Job\JobSaved;

class AdminsController extends Controller
{



    public function viewLogin() {

        return view("admins.view-login");
    }

    public function checkLogin(Request $request) {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }

    public function index() {


        $jobs = Job::select()->count();

        $categories = Category::select()->count();

        $admins = Admin::select()->count();

        $applications = Application::select()->count();

        return view("admins.index", compact('jobs', 'categories', 'admins', 'applications'));
    }


    public function admins() {


        $admins = Admin::all();


        return view("admins.all-admins", compact('admins'));

    }

    public function createAdmins() {




        return view("admins.create-admins");

    }

    public function storeAdmins(Request $request) {


        Request()->validate([
            "name" => "required|max:40",
            "email" => "required|max:40",
            "password" => "required",
        ]);

        $createAdmins = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        if($createAdmins) {
            return redirect('admin/all-admins/')->with('create', 'Admin created successfully');

        }
    }


    public function displayCategories() {

        $categories = Category::all();


        return view("admins.display-categories", compact('categories'));

    }

    public function createCategories() {




        return view("admins.create-categories");

    }

    public function storeCategories(Request $request) {


        Request()->validate([
            "name" => "required|max:40",

        ]);

        $createCategry = Category::create([
            'name' => $request->name,

        ]);


        if($createCategry) {
            return redirect('admin/display-categories')->with('create', 'Category created successfully');

        }
    }

    public function editCategories($id) {

        $category = Category::find($id);


        return view("admins.edit-categories", compact('category'));

    }



    public function updateCategories(Request $request, $id) {

        Request()->validate([
            "name" => "required|max:40",

        ]);

        $categoryUpdate = Category::find($id);
        $categoryUpdate->update([
            "name" => $request->name,
        ]);



        if($categoryUpdate) {
                return redirect('/admin/display-categories/')->with('update', 'Category updated successfully');

        }

    }

    public function deleteCategories($id) {

        $deleteCategory = Category::find($id);
        $deleteCategory->delete();

        if($deleteCategory) {
            return redirect('/admin/display-categories/')->with('delete', 'Category deleted successfully');

        }

    }



    //jobs

    public function allJobs() {

        $jobs = Job::all();
        $regions = Job::select('job_region')->distinct()->pluck('job_region');

        return view('admins.all-jobs', compact('jobs','regions'));

    }


    public function createJobs() {


        $categories = Category::all();
        return view('admins.create-jobs', compact('categories'));

    }





    public function storeJobs(Request $request) {


        Request()->validate([
            "job_title" => "required|max:40",
            "job_region" => "required|max:40",
            "company" => "required",
            "job_type" => "required",
            "vacancy" => "required",
            "experience" => "required",
            "salary" => "required",
            "gender" => "required",
            "application_deadline" => "required",
            "jobdescription" => "required",
            "responsibilities" => "required",
            "education_experience" => "required",
            "responsibilities" => "required",
            "otherbenifits" => "required",
            "category" => "required",
            "image" => "image",
        ]);




        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $createJobs = Job::create([
            'job_title' => $request->job_title,
            'job_region' => $request->job_region,
            'company' => $request->company,
            'job_type' => $request->job_type,
            'vacancy' => $request->vacancy,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'application_deadline' => $request->application_deadline,
            'jobdescription' => $request->jobdescription,
            'responsibilities' => $request->responsibilities,
            'education_experience' => $request->education_experience,
            'otherbenifits' => $request->otherbenifits,
            'category' => $request->category,
            'image' => $myimage,

        ]);


        if($createJobs) {
            return redirect('admin/display-jobs/')->with('create', 'Job created successfully');

        }
    }



    public function deleteJobs($id) {


        $deleteJob = Job::find($id);


        if(File::exists(public_path('assets/images/' . $deleteJob->image))){
            File::delete(public_path('assets/images/' . $deleteJob->image));
        }else{
            //dd('File does not exists.');
        }

        $deleteJob->delete();

        if($deleteJob) {
            return redirect('admin/display-jobs/')->with('delete', 'Job deleted successfully');

        }

    }


    //apps

    public function displayApps()
    {
        $apps = Application::with('timesheets')->with('user')->get();
        $regions = Application::select('job_region')->distinct()->pluck('job_region');
        //dd($apps);
        return view('admins.all-apps', compact('apps', 'regions'));
    }



    public function deleteApps($id) {


        $deleteApp = Application::find($id);

        $deleteApp->delete();

        if($deleteApp) {
            return redirect('admin/display-apps/')->with('delete', 'Application deleted successfully');

        }

    }
    public function single($id) {

        $job = Job::find($id);


        //getting related jobs
        if ($job) {
        $relatedJobs = Job::where('category', $job->category)
         ->where('id', '!=',  $id)
         ->take(5)
         ->get();

        $relatedJobsCount = Job::where('category', $job->category)
         ->where('id', '!=',  $id)
         ->take(5)
         ->count();
        } else {
            // Handle case when $job is null, e.g. job not found
            $relatedJobs = collect(); // Return an empty collection or handle accordingly
            $relatedJobsCount = 0;
        }
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



            return view('admins.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'savedJob', 'appliedJob', 'categories'));
        } else {
            return view('admins.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'categories'));

        }



    }


}
