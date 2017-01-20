<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
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

class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index(Request $request, $id=null)
	{
		//print_r($request->input());
		print_r($request->input('check'));
		
		if($request->input('rowdata') == 20){
			$page = 20;
		}elseif($request->input('rowdata') == 50){
			$page = 50;
		}elseif($request->input('rowdata') == 100){
			$page = 100;
		}elseif($request->input('rowdata') == 'all'){
			$page = 1000000000;
		}else{
			$page = 20;
		}	
		$check = $request->input('check');
		$images = DB::table('table_image_products')->where('trush',0)->where('status',1);
		
		if($check !=""){
			foreach($check as $checkid){
				$checked = $checkid;;
			}
			//$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id', $checkid);
		}else{
			$checked ="";
		}
		if ($request->searchdata !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('title', 'LIKE', '%'.$request->searchdata.'%');
		}
		if ($request->input('searchhome') !="") {
			$search = $request->input('searchhome');
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('title', 'LIKE', '%'.$request->input('searchhome').'%');
		}else{
			$search = $request->input('searchhome');
		}
		if ($request->input('catogery')!="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id', $request->input('catogery'));
		}
		if ($id !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id',$id);
		}
		if ($request->input('catogery')!="" AND $request->input('searchhome') !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id', $request->input('catogery'))->where('title', 'LIKE', '%'.$request->input('searchhome').'%');;
		}
		$image = $images->orderBy('id','DESC')->paginate($page);
		$catshowid = $request->input('catogery');
		$tag = DB::table('table_tag_images')->where('trush',0)->get();
		$imageall = DB::table('table_images')->where('status',1)->where('trush',0)->get();
		$cat = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
	    $brand = DB::table('table_brands')->where('status',1)->where('trush',0)->get();
        //return view('admin.imageproducts.add')->with('datashow',$model);
		if ($request->ajax()) {
            return view('home', ['image' => $image])->render();  
        }
		return view('home', compact('cat','brand','image','tag','imageall','page','catshowid','search','checked'));
	}

	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);

		return redirect()->back();
	}
	public function FrmSearchHome(Request $data){
		//print_r($data->input());exit;
		$term = $data->input('searchhome');	
		$cat_id = $data->input('catogery');
		if($term !="" OR $cat_id !=""){
			$image = DB::table('table_image_products')->where('title','LIKE','%'.$term.'%')->where('cat_id',$cat_id)->where('status',1)->where('trush',0)->take(10)->paginate(20);
		}else{
			$image = DB::table('table_image_products')->where('status',1)->where('trush',0)->paginate(20);	
		}		
		//$image = DB::table('table_image_products')->where('trush',0)->get();
		$tag = DB::table('table_tag_images')->where('trush',0)->get();
		$imageall = DB::table('table_images')->where('status',1)->where('trush',0)->get();
		$cat = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
	    $brand = DB::table('table_brands')->where('status',1)->where('trush',0)->get();
        //return view('admin.imageproducts.add')->with('datashow',$model);
		return view('home', compact('cat','brand','image','tag','imageall'));
	}
	public function SearchAuto(Request $data){
		$term = $data->term;
		$datashow  = DB::table('table_image_products')->where('title','LIKE','%'.$term.'%')->orderBy('id','DESC')->take(10)->get();
		foreach($datashow as $key =>$val){
			$results[] = ['id'=>$val->id,'value'=>$val->title];
		}
		//print_r($results);exit;
		return response()->json($results);
	}
	public function DetialData(Request $request, $id){
		//print_r($id);exit;
		if($request->input('rowdata') == 20){
			$page = 20;
		}elseif($request->input('rowdata') == 50){
			$page = 50;
		}elseif($request->input('rowdata') == 100){
			$page = 100;
		}elseif($request->input('rowdata') == 'all'){
			$page = 1000000000;
		}else{
			$page = 20;
		}	
		$images = DB::table('table_image_products')->where('trush',0)->where('status',1);
		if ($request->input('searchhome') !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('title', 'LIKE', '%'.$request->input('searchhome').'%');
		}
		if ($request->input('catogery')!="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id', $request->input('catogery'));
		}
		if ($id !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id',$id);
		}
		if ($request->input('catogery')!="" AND $request->input('searchhome') !="") {
			$images = DB::table('table_image_products')->where('trush',0)->where('status',1)->where('cat_id', $request->input('catogery'))->where('title', 'LIKE', '%'.$request->input('searchhome').'%');;
		}
		$image = $images->paginate($page);
		$imagedetial = DB::table('table_image_products')->where('id',$id)->get();
		//$image = DB::table('table_image_products')->where('trush',0)->get();
		$tag = DB::table('table_tag_images')->where('trush',0)->get();
		$imageall = DB::table('table_images')->where('status',1)->where('trush',0)->get();
		$cat = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
	    $brand = DB::table('table_brands')->where('status',1)->where('trush',0)->get();
        //return view('admin.imageproducts.add')->with('datashow',$model);
		foreach($image as $name){
			$searchname = $name->title;
		}
		$catshowid = $request->input('catogery');
		$releated = DB::select('SELECT * FROM `table_image_products` WHERE id !='.$id.' OR title LIKE "%$searchname%" LIMIT 9');
		return view('detail', compact('cat','brand','image','tag','imageall','releated','page','catshowid','imagedetial'));
	}
}
