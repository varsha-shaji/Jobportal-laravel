<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addJob(Request $request){
        $incomingFields=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'salary'=>'required',
            'location'=>'required'
        ]);
        
        Jobpost::create($incomingFields);
        
        return redirect('/adminHome');
            }
}
