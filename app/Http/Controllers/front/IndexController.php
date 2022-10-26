<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Service;
use App\Models\Common\Projects;



class IndexController extends Controller
{
    public function index(){

    	$service = Service::limit(3)->where('min', 1)->get();
    	$projects = Projects::limit(4)->get();


        return view('front.index1', ["service"=> $service,"projects"=> $projects] );
    }

    public function contact()
    {
       return view('front.contact');
    }
}

