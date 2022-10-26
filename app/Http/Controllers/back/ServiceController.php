<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Service;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Yajra\Datatables\Datatables;
use App\Models\Common\Image;
use App\Helpers\Images_up;
use App\Models\Common\Language;

class ServiceController extends Controller{
    public function index(){
        return view('back.service.index',["type"=>null]);
    }    
    public function type($type){
        return view('back.service.index',["type"=>$type]);
    }

    public function addEdit(Request $request, $id = false) {
        
    	if(!$id){
	    	  $services = new Service();
          $url = 'admin/service/create';
    	}else{
          $services = Service::find($id);
          $url = 'admin/service/edit/'.$id;
    	}
        if ($request->isMethod('post')) {
            $rules = Service::rules();
            $rules['images.*'] = 'image|max:2000';
          $validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	            return redirect($url)->withErrors($validator,"addEdit")->withInput();
	        }else{
              if($request->images[0]){
                  $up =  new Images_up();
                  $images = $up->upload();
                }
                $services->title       = $request->title;
                $services->min_description = $request->min_description;
                $services->description = $request->html;
                $services->min = $request->min;
                $services->save();

                  if($request->images[0]){
                    foreach ($images as $key => $value) {
                        $image_model = new Image();
                        $image_model->service_id = $services->id;
                        $image_model->image      = $value;
                        $image_model->order      =  $key;
                        $image_model->save();
                    }
                  }
	        }
	        return redirect('admin/service');
        }
        return view('back.service.addEdit',["services"=>$services]);
    }
    public function delete($id) {
        Service::find($id)->delete();
         return redirect('admin/service');
    }   



    public function getSubCat($id = false ) {
        $subcategory = array();
        if($id){
            $subcategory = Subcategory::getSubcategoryByCatIdForService($id);
        }
        echo json_encode($subcategory);die;
    }    
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData($type = null){

        if(!$type){
            $anyData =  Datatables::of(Service::select('*'));
        }else{
            $anyData =  Datatables::of(Service::select('*')->where('status', '=',strtoupper($type)));
        }
        return $anyData->addColumn('action', function ($cat) {
                     return '<a href="/admin/service/edit/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/admin/service/delete/'.$cat->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</a>';
                 })->editColumn('id', 'ID: {{$id}}')
        ->make(true);
    }

    public function sortImages(Request $request) {
        if ($request->isMethod('get')) {
              $sort_array = $request->images;
              $image_model = new Image();
              $image_model->sortImages($sort_array);
        }
      }
      public function setMainImages($id,$services) {
          $image_model = new Image();
          $image_model->setMainImages($id,$services);
          echo "true";
      }
      
      public function deleteImages($id) {
          $image_model = Image::find($id);
          $up =  new Images_up();
          $images = $up->deleteImages($image_model->image);
          Image::find($id)->delete();
          echo "true";
      }

}
