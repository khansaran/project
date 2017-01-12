<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Category;
use App\Models\Tableproduct;
use App\Models\TableArticle;
use App\Models\Slid;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function FormProduct(){
        $model = DB::table('categories')->get();
        return view('admin.product.add')->with('datashow',$model);
    }
    public function GetProduct(){
        $model = DB::table('tableproducts')->where('trush',0)->paginate(10);
	return view('admin.product.index')->with('datashow',$model);
    }

    public function addProduct(Request $data){
        $table = new Tableproduct;
        $validation = Validator::make($data->all(), array(
            'p_name' => 'required ',
            'p_url' => 'required ',
            'p_code' => 'required ',
            'p_image' => 'required ',
            //'parent_menu' => 'required ',
            //'translate' => 'required ',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/product/add')->withErrors($validation);
        }else{
            $image = $data->file('p_image');
            $upload = 'admin/kcfinder/upload/images';
            $filename = $image->getClientOriginalName();
            $success = $image->move($upload,$filename);
            if($success){
            $table->p_name = $data->Input('p_name');
            $table->p_url = $data->Input('p_url');
            $table->p_code = $data->Input('p_code');
            $table->p_image = $filename;
            $table->p_description = $data->Input('p_description');            
            $table->p_status = $data->Input('p_status');
            $table->p_ordering = $data->Input('p_ordering');
            if($data->Input('save') == 2){
            $table->save();			
                return Redirect::to('/admin/product')->with('message','Data has been Insert Successfully !');
            }elseif($data->Input('save') == 3){
            $table->save();
                return Redirect::to('/admin/product/add')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('/admin/product')->with('message','Data has been Insert Successfully !');
            }
            }
        }
    }
    public function getEdit($id){
        $editdatas = DB::table('tableproducts')->where('p_id',$id)->get();
        foreach($editdatas as $editdatashow){
            $editdata = $editdatashow;
            return view('admin.product.edit', compact('editdata', ''));
        }
    }
    public function updateData(Request $data, $id){
        //print_r($data->input());exit;

        $image = $data->file('p_image');	
	if($image !=''){
	$upload = 'admin/kcfinder/upload/images';							
	$filename = $image->getClientOriginalName();
	$success = $image->move($upload,$filename);	
	if($success){
            if($data->Input('save') == 2){
                DB::table('tableproducts')->where('p_id', $id)->update([
                'p_name' => $data->Input('p_name'),
                'p_url' => $data->Input('p_url'),
                'p_code' => $data->Input('p_code'),
                'p_image' => $filename,
                'p_description' => $data->Input('description'),
                'p_status' => $data->Input('p_status'),
                'p_ordering' => $data->Input('p_ordering'),
                ]);
                return Redirect::to('/admin/product')->with('message','Data has been Updated Successfully !');
            }elseif($data->Input('save') == 3){
                DB::table('tableproducts')->where('p_id', $id)->update([
                'p_name' => $data->Input('p_name'),
                'p_url' => $data->Input('p_url'),
                'p_code' => $data->Input('p_code'),
                'p_image' => $filename,
                'p_description' => $data->Input('description'),
                'p_status' => $data->Input('p_status'),
                'p_ordering' => $data->Input('p_ordering'),
                ]);
                return Redirect::to('/admin/product/add')->with('message','Data has been Updated Successfully !');
            }else{
            return Redirect::to('/admin/product')->with('message','Data has been Updated Successfully !');
            }
        }
	}else{
            $editimage = DB::table('tableproducts')->where('p_id',$id)->get();					
            foreach($editimage as $editimages){
                $file = $editimages->p_image;
            }
            if($data->Input('save') == 2){
                DB::table('tableproducts')->where('p_id', $id)->update([
                'p_name' => $data->Input('p_name'),
                'p_url' => $data->Input('p_url'),
                'p_code' => $data->Input('p_code'),
                'p_image' => $file,
                'p_description' => $data->Input('description'),
                'p_status' => $data->Input('p_status'),
                'p_ordering' => $data->Input('p_ordering'),
                ]);
                return Redirect::to('/admin/product')->with('message','Data has been Updated Successfully !');
            }elseif($data->Input('save') == 3){
                DB::table('tableproducts')->where('article_id', $id)->update([
                'p_name' => $data->Input('p_name'),
                'p_url' => $data->Input('p_url'),
                'p_code' => $data->Input('p_code'),
                'p_image' => $file,
                'p_description' => $data->Input('description'),
                'p_status' => $data->Input('p_status'),
                'p_ordering' => $data->Input('p_ordering'),
                ]);
                return Redirect::to('/admin/product/add')->with('message','Data has been Updated Successfully !');
            }else{
            return Redirect::to('/admin/product')->with('message','Data has been Updated Successfully !');
            }
            
        }
    }
    public function getDelete($id){
        DB::table('tableproducts')->where('p_id', $id)->update(['trush' => 1, ]);
        return Redirect::to('/admin/product')->with('message','Delete Successfully !');		
    }
}
