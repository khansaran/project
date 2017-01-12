<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Location;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function FormAdd()
    {
        //$model = DB::table('categories') ->orderBy('menu_id', 'asc')->get();
        return view('admin.location.add')->with('datashow');
    }
    public function getData()
    {
	$model = DB::table('locations')->where('trush',0)->orderBy('location_id', 'desc')->paginate(10);
	return view('admin.location.index')->with('datashow',$model);
    }
    public function addData(Request $data)
    {
        //echo $user = Auth::user();        exit();  
       $table = new Location;
        $validation = Validator::make($data->all(), array(
            'name_en' => 'required ',
            'code' => 'required ',
            'name_kh' => 'required ',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/location/add')->withErrors($validation);
        }else{
            $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
            $table->user_id = $user;
            $table->name_en = $data->Input('name_en');
            $table->name_kh = $data->Input('name_kh');
            $table->code = $data->Input('code');
            $table->status = $data->Input('status');
            $table->trush = 0;
            if($data->Input('save') == 2){
                 $table->save();			
                return Redirect::to('/admin/location')->with('message','Data has been Insert Successfully !');
            }elseif($data->Input('save') == 3){
                $table->save();
                return Redirect::to('/admin/location/add')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('/admin/location')->with('message','Data has been Insert Successfully !');
            }
        }
    }
    public function getEdit($id){
        $models = DB::table('locations')->where('location_id',$id)->get();
        foreach($models as $show){
            $model = $show;
        }
        return view('admin.location.edit')->with('editdata',$model);
    }
    public function updateData(Request $data, $id){
        
        $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
	if($data->Input('save') == 2){
	DB::table('locations')->where('location_id', $id)->update([
	'user_id' => $user,
	'name_en' => $data->Input('name_en'),
        'name_kh' => $data->Input('name_kh'),
        'code' => $data->Input('code'),
        'status' => $data->Input('status'),        
	]);			
	return Redirect::to('/admin/location')->with('message','Data has been Updated Successfully !');
	}elseif($data->Input('save') == 3){
	DB::table('locations')->where('location_id', $id)->update([
	'user_id' => $user,
	'name_en' => $data->Input('name_en'),
        'name_kh' => $data->Input('name_kh'),
        'code' => $data->Input('code'),
        'status' => $data->Input('status'), 
	]);
            return Redirect::to('/admin/location/add')->with('message','Data has been Updated Successfully !');
	}else{
        return Redirect::to('/admin/location')->with('message','Data has been Updated Successfully !');
	}
    }
    public function getDelete($id){
        DB::table('locations')->where('location_id', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/location')->with('message','Delete Successfully !');		
	}
}
