<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job\Application;
use App\Models\Job\JobSaved;
use Auth;
use File;
use App\Models\Timesheet;

class UsersController extends Controller
{

    public function profile() {

        $profile = User::find(Auth::user()->id);

        return view('users.profile', compact('profile'));
    }


    public function applications() {

        $applications = Application::where('user_id', '=', Auth::user()->id)
         ->get();

        return view('users.applications', compact('applications'));
    }


    public function savedJobs() {

        $savedJobs = JobSaved::where('user_id', '=', Auth::user()->id)
         ->get();

        return view('users.savedjobs', compact('savedJobs'));
    }

    public function editDetails() {

        $userDetails = User::find(Auth::user()->id);

        return view('users.editdetails', compact('userDetails'));
    }


    public function updateDetails(Request $request) {


        Request()->validate([
            "name" => "required|max:40",
            "job_title" => "required|max:40",
            "bio" => "required",
            "facebook" => "required|max:140",
            "twitter" => "required|max:140",
            "linkedin" => "required|max:140",
        ]);

        $userDetailsUpdate = User::find(Auth::user()->id);
        $userDetailsUpdate->update([
            "name" => $request->name,
            "job_title" => $request->job_title,
            "bio" => $request->bio,
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "linkedin" => $request->linkedin,
        ]);



        if($userDetailsUpdate) {
                return redirect('/users/edit-details/')->with('update', 'User details updated successfully');

        }
    }

    public function editCV() {


        return view('users.editcv');
    }

    public function updateFiles(Request $request)
    {
        $request->validate([
            'cv' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'certified_id' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'employment_contract' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'timesheets.*' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        $user = $request->user();

        // Handle CV
        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $cvPath = $cvFile->storeAs('uploads/cv', $cvFile->getClientOriginalName());
            $user->update(['cv' => $cvPath]);
        }

        // Handle Certified ID
        if ($request->hasFile('certified_id')) {
            $certifiedIdFile = $request->file('certified_id');
            $certifiedIdPath = $certifiedIdFile->storeAs('uploads/certified_ids', $certifiedIdFile->getClientOriginalName());
            $user->update(['certified_id' => $certifiedIdPath]);
        }

        // Handle Employment Contract
        if ($request->hasFile('employment_contract')) {
            $employmentContractFile = $request->file('employment_contract');
            $employmentContractPath = $employmentContractFile->storeAs('uploads/employment_contracts', $employmentContractFile->getClientOriginalName());
            $user->update(['employment_contract' => $employmentContractPath]);
        }

        // Handle Timesheets
        if ($request->hasFile('timesheets')) {
            foreach ($request->file('timesheets') as $timesheet) {
                $timesheetPath = $timesheet->storeAs('uploads/timesheets', $timesheet->getClientOriginalName());
                Timesheet::create([
                    'user_id' => $user->id,
                    'file_path' => $timesheetPath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Files updated successfully!');
    }

}
