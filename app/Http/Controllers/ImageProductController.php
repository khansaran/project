<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\TableImage;
use App\Models\TableBrand;
use App\Models\TableTagImage;
use App\Models\TableCat;
use App\Models\TableImageProduct;
use App\Models\TableIdTagIdImage;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ImageProductController extends Controller
{
    public function FormAdd()
    {	
		$datatag = DB::table('table_tag_images')->where('trush',0)->get();
		$dataimage = DB::table('table_images')->where('status',1)->where('trush',0)->get();
		$datashow = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
	    $modelbrand = DB::table('table_brands')->where('status',1)->where('trush',0)->get();
        //return view('admin.imageproducts.add')->with('datashow',$model);
		return view('admin.imageproducts.add', compact('datashow','modelbrand','dataimage','datatag'));
        //$model = DB::table('categories') ->orderBy('menu_id', 'asc')->get();
        //return view('admin.imageproducts.add')->with('datashow');
    }
    public function getData()
    {
	$model =  DB::select('
		SELECT tip.*,tca.`name_kh`,tbr.`name` FROM 
		`table_image_products` AS tip,
		`table_cats` AS tca,
		`table_brands` AS tbr
		WHERE tip.`cat_id`= tca.`cat_id` AND tip.`brand_id` = tbr.`brand_id`
		');
	return view('admin.imageproducts.index')->with('datashow',$model);
    }
    public function addData(Request $data)
    {
		//print_r($data->Input());exit;
        //echo $user = Auth::user();        exit();  
		DB::beginTransaction();
		try {
			//print_r($data->Input());exit;
		    $table_image = new TableImage;
			$table_image_tag = new TableIdTagIdImage;
		    $table = new TableImageProduct ;
			$table_tag = new TableTagImage;
			$validation = Validator::make($data->all(), array(
				'name' => 'required ',
				)
			);
			if($validation->fails()){
				return Redirect::to('admin/imageproduct/add')->withErrors($validation);
			}else{

				$image = $data->file('one_image');
				$image_multi = $data->file('multiple_image');
				$image_tag = $data->Input('image_tag');
				//print_r($image_multi);exit;
				$upload = 'admin/kcfinder/upload/images';
				 if($image != ""){
					$filename = $image->getClientOriginalName();
					$success = $image->move($upload,$filename);                 
				}else{
					$filename = 'imge_file.png';
				} 
				$get_ids = $table->insertGetId(
					['title' => $data->Input('name'), 
					'cat_id' => $data->Input('cat_id'), 
					'brand_id' => $data->Input('brand_id'), 
					'image' => $filename, 
					'description' => $data->Input('description'), 
					'price' => $data->Input('price'), 
					'ordering' => 1, 
					'trush' => 0,
					'status'=>$data->Input('status')]
				);
				$get_id = $get_ids;
				if($data->Input('save') == 2){
					if($image_multi != ""){
						//print_r($image_multi);exit;
						foreach($image_multi as $multi_file){
							$filemultiname = $multi_file->getClientOriginalName();
							$multi_file->move($upload,$filemultiname);
							$table_image->insert([
								'name' => $filemultiname,
								'proimage_id' => $get_id,
								'descrption' => $filemultiname, 
								'status'=>$data->Input('status')]
							);
						}
					}else{
						$table_image->insert(
							['name' => $filename,
							'proimage_id' => $get_id,
							'descrption' => $filename, 
							'status'=>$data->Input('status')]
						);
					}
					if($image_tag != ""){
						foreach($image_tag as $image_tags){
							//print_r($image_tags);exit;
							$table_image_tag->insert([
								'tag_id' => $image_tags,
								'image_id' => $get_id]
							);
						}
					}
					
				}elseif($data->Input('save') == 3){					
					if($image_multi != ""){
						foreach($image_multi as $multi_file){
							$filemultiname = $multi_file->getClientOriginalName();
							$multi_file->move($upload,$filemultiname);
							$table_image->insert([
								'name' => $filemultiname,
								'proimage_id' => $get_id,
								'descrption' => $filemultiname, 
								'status'=>$data->Input('status')]
							);
						}
					}else{
						$table_image->insert(
							['name' => $filename,
							'proimage_id' => $get_id,
							'descrption' => $filemultiname, 
							'status'=>$data->Input('status')]
						);
					}
					if($image_tag != ""){
						foreach($image_tag as $image_tags){
							//print_r($image_tags);exit;
							$table_image_tag->insert([
								'tag_id' => $image_tags,
								'image_id' => $get_id]
							);
						}
					} 
				}
			}
			DB::commit();
			return Redirect::to('/admin/imageproduct')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
			} catch (\Exception $e) {
				DB::rollback();
				return Redirect::to('/admin/imageproduct')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
			}
	   
    }
    public function getEdit($id){
        $models = DB::table('table_image_products')->where('id',$id)->get();
        foreach($models as $show){
            $editdata = $show;
        }
		$dataimagetag = DB::table('table_tag_images')->where('trush',0)->get();
		$idimageidtag = DB::table('table_id_tag_id_images')->get();
		$dataimage = DB::table('table_images')->where('status',1)->where('trush',0)->get();
		$datashow = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
	    $modelbrand = DB::table('table_brands')->where('status',1)->where('trush',0)->get();
        //return view('admin.imageproducts.edit')->with('editdata',$model);
		return view('admin.imageproducts.edit', compact('datashow','modelbrand','dataimage','editdata','dataimagetag','idimageidtag'));
    }
    public function updateData(Request $data, $id){
        DB::beginTransaction();
		try {
			
			$table_image = new TableImage;
			$table_image_tag = new TableIdTagIdImage;
		    $table = new TableImageProduct ;
			$table_tag = new TableTagImage;
			$image = $data->file('one_image');
			$image_multi = $data->file('multiple_imageedit');
		    $image_tag = $data->Input('image_tageedit');
			$upload = 'admin/kcfinder/upload/images';
			//print_r($data->Input());exit;
			if($data->Input('save') == 2){
				//print_r($image);exit;
				if($image !=""){						
					$filename = $image->getClientOriginalName();
					$success = $image->move($upload,$filename);	
				}else{
					$tableimage = DB::table('table_image_products')->where('id',$id)->get();				
					foreach($tableimage as $editimages){
						//print_r($editimages->image); exit;
						$filename = $editimages->image;
					}
				}
				$table->where('id', $id)->update([
					'title' => $data->Input('name'), 
					'cat_id' => $data->Input('cat_id'), 
					'brand_id' => $data->Input('brand_id'), 
					'image' => $filename, 
					'description' => $data->Input('description'), 
					'price' => $data->Input('price'), 
					'ordering' => 1, 
					'trush' => 0,
					'status'=>$data->Input('status')]
				);
				//print_r($image_tag);exit;
				if($image_tag != ""){
					DB::table('table_id_tag_id_images')->where('image_id', $id)->delete();
					foreach($image_tag as $image_tags){
						//print_r($image_tags);exit;
						$table_image_tag->insert([
						'tag_id' => $image_tags,
						'image_id' => $id]
						);
					}
				}
				//print_r($image_multi);
				if($image_multi[0] !=""){
					//print_r($image_multi);
					foreach($image_multi as $multi_file){
						$uploads = 'admin/kcfinder/upload/images';
						$filemultiname = $multi_file->getClientOriginalName();
						$multi_file->move($uploads,$filemultiname);
						DB::table('table_images')->insert([
						'name' => $filemultiname,
						'proimage_id' => $id,
						'descrption' => $filemultiname, 
						'status'=>$data->Input('status')]
						);
					}
				}	
			}
			//print_r($data->Input());exit;
			if($data->Input('save') == 3){
				if($image !=""){						
					$filename = $image->getClientOriginalName();
					$success = $image->move($upload,$filename);	
				}else{
					$tableimage = DB::table('table_image_products')->where('id',$id)->get();				
					foreach($tableimage as $editimages){
						//print_r($editimages->image); exit;
						$filename = $editimages->image;
					}
				}
				$table->where('id', $id)->update([
					'title' => $data->Input('name'), 
					'cat_id' => $data->Input('cat_id'), 
					'brand_id' => $data->Input('brand_id'), 
					'image' => $filename, 
					'description' => $data->Input('description'), 
					'price' => $data->Input('price'), 
					'ordering' => 1, 
					'trush' => 0,
					'status'=>$data->Input('status')]
				);
				//print_r($image_tag);exit;
				if($image_tag != ""){
					DB::table('table_id_tag_id_images')->where('image_id', $id)->delete();
					foreach($image_tag as $image_tags){
						//print_r($image_tags);exit;
						$table_image_tag->insert([
						'tag_id' => $image_tags,
						'image_id' => $id]
						);
					}
				}
				//print_r($image_multi);
				if($image_multi[0] !=""){
					//print_r($image_multi);
					foreach($image_multi as $multi_file){
						$uploads = 'admin/kcfinder/upload/images';
						$filemultiname = $multi_file->getClientOriginalName();
						$multi_file->move($uploads,$filemultiname);
						DB::table('table_images')->insert([
						'name' => $filemultiname,
						'proimage_id' => $id,
						'descrption' => $filemultiname, 
						'status'=>$data->Input('status')]
						);
					}
				}
			}
			
		DB::commit();
		return Redirect::to('/admin/imageproduct')->with('message','ទិន្នន័យបានកែប្រែជោកជ័យ !');
		} catch (\Exception $e) {
			 return false;
			DB::rollback();
			return Redirect::to('/admin/imageproduct')->with('message','ទិន្នន័យបានកែប្រែមិនជោកជ័យ !');
		}
    }
    public function getDelete($id){
        DB::table('table_brands')->where('imageproduct', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/imageproduct')->with('message','លុបបានជោកជ័យ​ !');		
	}
	public function InsertCategory(Request $data){
		DB::beginTransaction();
		try {
			$table = new TableCat();
			$validation = Validator::make($data->all(), array(
				'name_kh' => 'required ',
				)
			);
			if($validation->fails()){
				return Redirect::to('admin/imageproduct/add')->withErrors($validation);
			}else{
				$sesstions = $data->session('');
				if(session('statut') == 'admin'){
					$user = 1;
				}
				$table->user_id = $user;
				//$table->name_en = $data->Input('name_en');
				$table->name_kh = $data->Input('name_kh');
				//$table->code = $data->Input('code');
				$table->parent = $data->Input('parent');
				$table->status = $data->Input('status');
				$table->ordering = $data->Input('ordering');
				$table->trush = 0;
				$table->save();
				$id = DB::getPdo()->lastInsertId();	
				//return response
				 return response()->json(['id'=>$id,'name'=>$data->Input('name_kh')]);
			}
		DB::commit();
		} catch (\Exception $e) {
				DB::rollback();
				return Redirect::to('/admin/imageproduct/add')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
		}
	}
	public function InsertBrand(Request $data){
		DB::beginTransaction();
		try {
			$table = new TableBrand();
			$validation = Validator::make($data->all(), array(
				'name' => 'required ',
				)
			);
			if($validation->fails()){
				return Redirect::to('admin/imageproduct/add')->withErrors($validation);
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
				$table->save();
				$id = DB::getPdo()->lastInsertId();	
				//return response
				 return response()->json(['id'=>$id,'name'=>$data->Input('name')]);
			}
		DB::commit();
		} catch (\Exception $e) {
				DB::rollback();
				return Redirect::to('/admin/imageproduct/add')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
		}
	}
	public function insertTag(Request $data){
	
		$table = new TableTagImage();
		$validation = Validator::make($data->all(), array(
				'name' => 'required ',
				)
		);
		if($validation->fails()){
			return Redirect::to('admin/imageproduct/add')->withErrors($validation);
		}else{
				
		$table->name = $data->Input('name');
		$table->trush = 0;
		$table->save();
		$id = DB::getPdo()->lastInsertId();	
				//return response
			return response()->json(['id'=>$id,'name'=>$data->Input('name')]);
		}
		return Redirect::to('/admin/imageproduct/add')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យ !');
	}
	public function DelectImagePro(Request $data){
		$id = $data->input('image_idshow');
		//echo $id;exit(0);
		DB::table('table_image_products')->where('id', $id)->update(['image' => ""]);
		//return $id;
	}
	public function DelectMulti(Request $data){
		$id = $data->input('image_idshow');
		$id = $data->input('image_multi');
		DB::table('table_images')->where('id', $id)->delete();
		return response()->json(['id'=>$id]);
	}
}
