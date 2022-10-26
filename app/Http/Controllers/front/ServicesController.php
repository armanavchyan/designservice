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


class ServicesController extends Controller{

    public function index($lg,$cat=null){
        $categorie = new Categorie();
        $subcategory = new Subcategory();
        $service = new Service();
        $categorie = new Categorie();


        $catLIst   = $categorie->getCategorieByActiv()->toArray(); 
        // $categorie = Categorie::find($cat);
        $categorie = Categorie::where('codeTitle', '=', $cat)->first();


        $view        = 'front.services.servicesList';
        $serviceList = $service->getServiceForCat($categorie->id);
        
        $data        = array(
                "serviceList" => $serviceList,
                "categorie"   => $categorie,
                "subcategory" => $subcategory,
                "service"     => $service,
                "catLIst"     => $catLIst,
            );


       return view($view,$data);
    }
}

