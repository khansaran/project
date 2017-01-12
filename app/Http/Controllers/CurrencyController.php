<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\TableCurrency;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function FormAdd()
    {
        //$model = DB::table('categories') ->orderBy('menu_id', 'asc')->get();
        return view('admin.brand.add')->with('datashow');
    }
    public function getData()
    {
	$model = DB::table('table_brands')->where('trush',0)->orderBy('brand_id', 'desc')->paginate(10);
	return view('admin.brand.index')->with('datashow',$model);
    }
    public function addData(Request $data)
    {
        //echo $user = Auth::user();        exit();  
       $table = new TableBrand;
        $validation = Validator::make($data->all(), array(
            'name' => 'required ',
            'code' => 'required ',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/brand/add')->withErrors($validation);
        }else{
            $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
            $table->user_id = $user;
            $table->name = $data->Input('name');
            $table->code = $data->Input('code');
            $table->status = $data->Input('status');
            $table->trush = 0;
            if($data->Input('save') == 2){
                 $table->save();			
                return Redirect::to('/admin/brand')->with('message','Data has been Insert Successfully !');
            }elseif($data->Input('save') == 3){
                $table->save();
                return Redirect::to('/admin/brand/add')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('/admin/brand')->with('message','Data has been Insert Successfully !');
            }
        }
    }
    public function getEdit($id){
        $models = DB::table('table_brands')->where('brand_id',$id)->get();
        foreach($models as $show){
            $model = $show;
        }
        return view('admin.brand.edit')->with('editdata',$model);
    }
    public function updateData(Request $data, $id){
        
        $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
	if($data->Input('save') == 2){
	DB::table('table_brands')->where('brand_id', $id)->update([
	'user_id' => $user,
	'name' => $data->Input('name'),
        'code' => $data->Input('code'),
        'status' => $data->Input('status'),        
	]);			
	return Redirect::to('/admin/brand')->with('message','Data has been Updated Successfully !');
	}elseif($data->Input('save') == 3){
	DB::table('table_brands')->where('brand_id', $id)->update([
	'user_id' => $user,
	'name' => $data->Input('name'),
        'code' => $data->Input('code'),
        'status' => $data->Input('status'),
	]);
            return Redirect::to('/admin/brand/add')->with('message','Data has been Updated Successfully !');
	}else{
        return Redirect::to('/admin/brand')->with('message','Data has been Updated Successfully !');
	}
    }
    public function getDelete($id){
        DB::table('table_brands')->where('brand_id', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/brand')->with('message','Delete Successfully !');		
	}
}
