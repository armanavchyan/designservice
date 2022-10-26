<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Yajra\Datatables\Datatables;
use App\Models\Common\Language;

class PagesController extends Controller{
    public $leng;
    public function index(){
        return view('back.pages.index');
    }
    public function addEditContent(Request $request, $id = false, $leng = 'en') {
        $language = Language::getLanguages(Language::STATUS_ACTIVE);
            if(!$id){
             return redirect('admin/pages');
            }else{
                $pages = Pages::find($id);
                $url = 'admin/pages/edit/'.$id;
            }
            if ($request->isMethod('post')) {
              $validator = Validator::make($request->all(),['html'  => 'required|min:10']);
               if ($validator->fails()) {
                    return redirect($url)->withErrors($validator,'addEdit')->withInput();
                }else{         
                     $pages->html = $request->html;
                     $pages->save();
                     return redirect('admin/pages');
                }
            }
            $html = $pages->html;
            return view('back.pages.addEditContent',["pages"=>$pages,"html"=>$html,"language"=>$language,"leng"=>$leng]);
    }
    public function addEdit(Request $request, $id = false) {
        if(!$id){
            $pages = new Pages();
            $url = 'admin/pages/create';
        }else{
            $pages = Pages::find($id);
            $url = 'admin/pages/edit/'.$id;
                // 'slug'  => 'required|max:10|unique:pages',
        }
        $image_model = DB::table('page_image');
        $images = $image_model->get();
        if ($request->isMethod('post')) {
          $validator = Validator::make($request->all(),Pages::rules());
           if ($validator->fails()) {
                return redirect($url)->withErrors($validator,'addEdit')->withInput();
            }else{         
                 $pages->title     = $request->title;
                 $pages->slug      = $request->slug;
                 $pages->order     = $request->order;
                 $pages->html      = $request->html;
                 $pages->save();
            }
            return redirect('admin/pages');
        }
        return view('back.pages.addEdit',["pages"=>$pages,"images"=>$images]);
    }
    public function delete($id) {
        Pages::find($id)->delete();
         return redirect('admin/pages');
    }
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(){
        return Datatables::of(Pages::select('*')->orderBy('order'))
        ->addColumn('action', function ($cat) {
                     return '<a href="/admin/pages/edit/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/admin/pages/edit_content/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit content</a><a href="/admin/pages/delete/'.$cat->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</a>';
                 })->editColumn('id', '{{$id}}')
        ->make(true);
    }
     public function sortTable(Request $request){
         if ($request->isMethod('get')) {
               $sort_array = $request->sort;
               $Categorie = new Pages();
               $Categorie->sortTable($sort_array);
         }
     }   
}
