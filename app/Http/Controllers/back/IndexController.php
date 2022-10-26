<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Models\Common\Categorie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use DB;

class IndexController extends Controller{
    public function index(){
        $settings = DB::table('settings')->first();
        return view('back.index.index',["settings"=>$settings]);
    }
    public function getIndex()
    {

        return view('back.index.index');
    }
    public function post(Request $request)
    {
        DB::table('settings')
            ->where('id', 1)
            ->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'fb_link' => $request->fb_link,
                'addres' => $request->addres,
            ]);
        return redirect('admin');

    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(DB::table('settings')->select('*'))->make(true);
    }

}
