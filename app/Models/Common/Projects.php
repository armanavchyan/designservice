<?php

namespace App\Models\common;

use Illuminate\Database\Eloquent\Model;
use App\Models\Common\ImageProject;

use App\Models\Common\User;
use App\Models\Common\Categorie;
use App\Models\Common\Subcategory;

class Projects extends Model{

    protected $table = 'projects';
	protected $hidden = ['created_at', 'updated_at'];

	public static function rules()
	{
		return [
			'title'       => 'required|max:50|min:2',
			'description' => 'required|min:10',
		];
	}
	public function getServiceImages(){
	  return ImageProject::where('project_id', '=', $this->id)->orderBy('order')->get();
	}
	public static function getServiceMineImages($id){
	   $image = ImageProject::where('project_id', '=', $id)->where('mine', '=', "1")->first();
	   if(empty($image)){
		   $image = ImageProject::where('project_id', '=', $id)->first();
	   }
	   if(empty($image)){
	 	  return $image  = new ImageProject;
	   }
	   return $image;
	}
}