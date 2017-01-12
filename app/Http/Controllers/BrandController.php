<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\TableBrand;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function FormAdd()
    {
        //$model = DB::table('categories') ->orderBy('menu_id', 'asc')->get();
        return view('admin.brand.add')->with('datashow');
    }
    public function getData()
    {
	$model = DB::table('table_brands')->where('trush',0)->orderBy('ordering', 'asc')->paginate(10);
	return view('admin.brand.index')->with('datashow',$model);
    }
    public function addData(Request $data)
    {
		///print_r($data->Input());exit;
        //echo $user = Auth::user();        exit();  
       $table = new TableBrand;
        $validation = Validator::make($data->all(), array(
            'name' => 'required ',
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
            $table->status = $data->Input('status');
			 $table->ordering = $data->Input('ordering');
            $table->trush = 0;
			$check = DB::table('table_brands')->where('name');
            if($data->Input('save') == 2){
				
                 $table->save();			
                return Redirect::to('/admin/brand')->with('message','ទិន្នន័យបានបញ្ចូលបានជោកជ័យ !');
            }elseif($data->Input('save') == 3){
                $table->save();
                return Redirect::to('/admin/brand/add')->with('message','ទិន្នន័យបានបញ្ចូលបានជោកជ័យ !');
            }else{
                return Redirect::to('/admin/brand')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
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
    'ordering' => $data->Input('ordering'),
    'status' => $data->Input('status'),        
	]);			
	return Redirect::to('/admin/brand')->with('message','ទិន្នន័យបានបញ្ចូលហើយកែប្រែបានជោកជ័យ');
	}elseif($data->Input('save') == 3){
	DB::table('table_brands')->where('brand_id', $id)->update([
	'user_id' => $user,
	'name' => $data->Input('name'),
    'ordering' => $data->Input('ordering'),
    'status' => $data->Input('status'),  
	]);
            return Redirect::to('/admin/brand/add')->with('message','ទិន្នន័យបានបញ្ចូលហើយកែប្រែបានជោកជ័យ');
	}else{
        return Redirect::to('/admin/brand')->with('message','ទិន្នន័យបានបញ្ចូលហើយកែប្រែមិនបានជោកជ័យ');
	}
    }
    public function getDelete($id){
        DB::table('table_brands')->where('brand_id', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/brand')->with('message','លុបបានជោកជ័យ​ !');		
	}
}
