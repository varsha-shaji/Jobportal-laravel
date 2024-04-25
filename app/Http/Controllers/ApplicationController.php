<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application(Jobpost $job, Request $request)
    {
        if (auth()->check()) {
            // Check if $job is a valid instance of Jobpost
            if (!$job) {
                return redirect('/jobs')->with('error', 'Job not found');
            }
    
            // Create a new application with the job_id
            Application::create([
                'user_id' => auth()->user()->id,
                'job_id' => $job->id,
                'status' => Application::STATUS_PENDING,
            ]);
    
            return redirect('/jobs'); // Assuming this is the intended redirect
        } else {
            return redirect('/loginpage');
        }
    }
    

    public function changeStatus(Application $application, Request $request)
    {
        $incomingFields = $request->validate([
            'status' => 'required|in:0,1,2',
        ]);
    
        $status = $incomingFields['status'];
    
        $application->update(['status' => $status]);
    
        return redirect('/applicants'); 
    }
    
}
