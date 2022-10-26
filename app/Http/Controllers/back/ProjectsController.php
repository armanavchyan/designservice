<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Projects;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Yajra\Datatables\Datatables;
use App\Models\Common\ImageProject;
use App\Helpers\Images_up;
use App\Models\Common\Language;

class ProjectsController extends Controller{

    public function index(){
        return view('back.projects.index',["type"=>null]);
    }    

    public function type($type){
        return view('back.projects.index',["type"=>$type]);
    }

    public function addEdit(Request $request, $id = false) {
        
    	if(!$id){
	    	  $projects = new Projects();
          $url = 'admin/projects/create';
    	}else{
          $projects = Projects::find($id);
          $url = 'admin/projects/edit/'.$id;
    	}
        if ($request->isMethod('post')) {


            $rules = Projects::rules();
            $rules['images.*'] = 'image|max:2000';
          $validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	            return redirect($url)->withErrors($validator,"addEdit")->withInput();
	        }else{
              if($request->images[0]){
                  $up =  new Images_up();
                  $images = $up->upload();
                }
                $projects->title           = $request->title;
                $projects->description     = $request->description;
                $projects->project_type    = $request->project_type;
                $projects->client          = $request->client;
                $projects->completion_date = $request->completion_date;
                $projects->save();

                  if($request->images[0]){
                    foreach ($images as $key => $value) {
                        $image_model = new ImageProject();
                        $image_model->project_id = $projects->id;
                        $image_model->image      = $value;
                        $image_model->order      =  $key;
                        $image_model->save();
                    }
                  }
	        }
	        return redirect('admin/projects');
        }
        return view('back.projects.addEdit',["projects"=>$projects]);
    }
    public function delete($id) {
        Projects::find($id)->delete();
         return redirect('admin/projects');
    }   



    public function getSubCat($id = false ) {
        $subcategory = array();
        if($id){
            $subcategory = Subcategory::getSubcategoryByCatIdForProjects($id);
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
            $anyData =  Datatables::of(Projects::select('*'));
        }else{
            $anyData =  Datatables::of(Projects::select('*')->where('status', '=',strtoupper($type)));
        }
        return $anyData->addColumn('action', function ($cat) {
                     return '<a href="/admin/projects/edit/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/admin/projects/delete/'.$cat->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</a>';
                 })->editColumn('id', 'ID: {{$id}}')
        ->make(true);
    }

    public function sortImages(Request $request) {
        if ($request->isMethod('get')) {
              $sort_array = $request->images;
              $image_model = new ImageProject();
              $image_model->sortImages($sort_array);
        }
      }
      public function setMainImages($id,$projects) {
          $image_model = new ImageProject();
          $image_model->setMainImages($id,$projects);
          echo "true";
      }
      
      public function deleteImages($id) {
          $image_model = ImageProject::find($id);
          $up =  new Images_up();
          $images = $up->deleteImages($image_model->image);
          ImageProject::find($id)->delete();
          echo "true";
      }

}
