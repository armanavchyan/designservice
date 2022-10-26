<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Categorie;
use App\Models\Common\Subcategory;
use App\Models\Common\Service;
use Session;

class ServiceController extends Controller{
    
    public function index(Request $request){

        $service = Service::get();
        $serviceI = Service::where('title', '=', $request->title)->first();

        if(!$serviceI){
            $serviceI = $service[0];
        }
        $data  = array(
                "serviceI"   => $serviceI,
                "service"   => $service,
            );
       return view("front.service.servcies-detail",$data);
    }
}
// servcies-detail  index