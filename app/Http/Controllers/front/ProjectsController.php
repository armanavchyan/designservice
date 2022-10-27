<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Projects;

class ProjectsController extends Controller{

   
    public function index(){
        $projects = Projects::get();
        $data  = array(
                "projects"   => $projects,
            );
       return view("front.projects.index1",$data);
    }
    
    public function view(Request $request,$id){
        $project = Projects::find($id);
        $data  = array(
                "project"   => $project,
            );
       return view("front.projects.project",$data);
    }
}