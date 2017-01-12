<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\TableArticle;
use App\Models\Category;
use App\Models\TableCat;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function FormArticle(){
        $model = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
        return view('admin.article.add')->with('datashow',$model);
    }
    public function GetArticle(){
        $model = DB::table('table_articles')
        ->join('table_cats', function ($join) {
        $join->on('table_articles.cat_id', '=', 'table_cats.cat_id')  
	->where('table_articles.article_id', '!=', 0);
        })->where('table_articles.trush',0)->where('table_cats.trush',0)->orderBy('table_articles.article_id', 'desc')->paginate(10);
        //print_r($model);exit;
        //$model = DB::table('table_articles')->where('trush',0)->orderBy('article_id', 'desc')->paginate(10);
	return view('admin.article.index')->with('datashow',$model);
    }

    public function addArticle(Request $data){
        //print_r($data->input());exit;
        $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
        $table = new TableArticle;
        $validation = Validator::make($data->all(), array(
            'title_en' => 'required ',
            'title_kh' => 'required ',
            'cat_id' => 'required ',
            'status' => 'required ',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/article/add')->withErrors($validation);
        }else{
            $image = $data->file('images');
            $upload = 'admin/kcfinder/upload/images';
             if($image != ""){
                $filename = $image->getClientOriginalName();
                $success = $image->move($upload,$filename);                 
            }else{
                $filename = 'imge_file.png';
            }         
            if($success){
            $table->user_id = $user ;	
            $table->cat_id = $data->Input('cat_id');
            $table->title_en = $data->Input('title_en');
            $table->title_kh = $data->Input('title_kh');
            $table->images = $filename;
            $table->description_en = $data->Input('description_en');
            $table->description_kh = $data->Input('description_kh');  
            $table->status = $data->Input('status');
            $table->ordering = $data->Input('ordering');
            $table->trush = 0;
            if($data->Input('save') == 2){
            $table->save();			
                return Redirect::to('/admin/article')->with('message','Data has been Insert Successfully !');
            }elseif($data->Input('save') == 3){
            $table->save();
                return Redirect::to('/admin/article/add')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('/admin/article')->with('message','Data has been Insert Successfully !');
            }
            }
        }
    }
    public function getEdit($id){
        $model = DB::table('table_cats')->where('status',1)->where('trush',0)->get();
        $editdatas = DB::table('table_articles')->where('article_id',$id)->get();
        foreach($editdatas as $editdatashow){
            $editdata = $editdatashow;
            return view('admin.article.edit', compact('editdata', 'model'));
        }
    }
    public function updateData(Request $data, $id){
        //print_r($data->input());exit;
        $sesstions = $data->session('');
        if(session('statut') == 'admin'){
            $user = 1;
        }
        if(session('locale') == 'kh'){
            $locale = 1;
        }  else {
            $locale = 2;
        }
        $image = $data->file('images');	
	if($image !=''){
	$upload = 'admin/kcfinder/upload/images';							
	$filename = $image->getClientOriginalName();
	$success = $image->move($upload,$filename);	
	if($success){
            if($data->Input('save') == 2){
                DB::table('table_articles')->where('article_id', $id)->update([
                'user_id' => $user,
                'title_en' => $data->Input('title_en'),
                'title_kh' => $data->Input('title_kh'),
                'cat_id' => $data->Input('cat_id'),
                'images' => $filename,
                'description_en' => $data->Input('description_en'),
                'description_kh' => $data->Input('description_kh'),
                'status' => $data->Input('status'),
                'ordering' => $data->Input('ordering'),
                ]);
                return Redirect::to('/admin/article')->with('message','Data has been Updated Successfully !');
            }elseif($data->Input('save') == 3){
                DB::table('table_articles')->where('article_id', $id)->update([
                'user_id' => $user,
                'title_en' => $data->Input('title_en'),
                'title_kh' => $data->Input('title_kh'),
                'cat_id' => $data->Input('cat_id'),
                'images' => $filename,
                'description_en' => $data->Input('description_en'),
                'description_kh' => $data->Input('description_kh'),
                'status' => $data->Input('status'),
                'ordering' => $data->Input('ordering'),
                ]);
                return Redirect::to('/admin/article/add')->with('message','Data has been Updated Successfully !');
            }else{
            return Redirect::to('/admin/article')->with('message','Data has been Updated Successfully !');
            }
        }
	}else{
            $editimage = DB::table('table_articles')->where('article_id',$id)->get();					
            foreach($editimage as $editimages){
                $file = $editimages->images;
            }
            if($data->Input('save') == 2){
                DB::table('table_articles')->where('article_id', $id)->update([
                'user_id' => $user,
                'title_en' => $data->Input('title_en'),
                'title_kh' => $data->Input('title_kh'),
                'cat_id' => $data->Input('cat_id'),
                'images' => $file,
                'description_en' => $data->Input('description_en'),
                'description_kh' => $data->Input('description_kh'),
                'status' => $data->Input('status'),
                'ordering' => $data->Input('ordering'),
                ]);
                return Redirect::to('/admin/article')->with('message','Data has been Updated Successfully !');
            }elseif($data->Input('save') == 3){
                DB::table('table_articles')->where('article_id', $id)->update([
                'user_id' => $user,
                'title_en' => $data->Input('title_en'),
                'title_kh' => $data->Input('title_kh'),
                'cat_id' => $data->Input('cat_id'),
                'images' => $file,
                'description_en' => $data->Input('description_en'),
                'description_kh' => $data->Input('description_kh'),
                'status' => $data->Input('status'),
                'ordering' => $data->Input('ordering'),
                ]);
                return Redirect::to('/admin/article/add')->with('message','Data has been Updated Successfully !');
            }else{
            return Redirect::to('/admin/article')->with('message','Data has been Updated Successfully !');
            }
            
        }
    }
    public function getDelete($id){
        DB::table('table_articles')->where('article_id', $id)->update(['trush' => 1, ]);
        return Redirect::to('/admin/article')->with('message','Delete Successfully !');		
    }
}
