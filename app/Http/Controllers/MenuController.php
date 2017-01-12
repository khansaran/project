<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Category;
use App\Models\TableMenuTab;
use App\Models\TableCat;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
  
    ///////////////////////////////////////////////////////// Menu  //////////////////////////////////////////////
    public function FormCat()
    {
        $model = DB::table('table_cats') ->orderBy('ordering', 'asc')->get();
        return view('admin.cat.add')->with('datashow',$model);
    }

    public function getCat()
    {
	$datashow = DB::table('table_cats')->where('trush',0)->orderBy('ordering', 'asc')->get();
	//$categories = $this->get_menu();
	//return view('admin.cat.index')->with('datashow',$model);
	return view('admin.cat.index', compact('datashow'));
    }
	
    public function addCat(Request $data)
    {
		//print_r($data->Input());exit;
        //echo $user = Auth::user();        exit();  
       $table = new TableCat;
        $validation = Validator::make($data->all(), array(
            'name_kh' => 'required ',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/cat/add')->withErrors($validation);
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
            if($data->Input('save') == 2){
                 $table->save();			
                return Redirect::to('/admin/cat')->with('message','ទិន្នន័យបានបញ្ចូលបានជោកជ័យ !');
            }elseif($data->Input('save') == 3){
                $table->save();
                return Redirect::to('/admin/cat/add')->with('message','ទិន្នន័យបានបញ្ចូលបានជោកជ័យ !');
            }else{
                return Redirect::to('/admin/cat')->with('message','ទិន្នន័យបានបញ្ចូលមិនបានជោកជ័យបានជោកជ័យ !');
            }
        }
    }
    public function getEditCat($id){
        $editdatas = DB::table('table_cats')->where('cat_id',$id)->get();
        $model = DB::table('table_cats')->get();
	$ids = $id;
	foreach($editdatas as $editdatashow){
            $editdata = $editdatashow;
            return view('admin.cat.edit', compact('editdata', 'model','ids'));
	}
    }
    public function updateDataCat(Request $data, $id){
        
        $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
            if(session('locale') == 'kh'){
                $locale = 1;
            }  else {
                 $locale = 2;
            }
	if($data->Input('save') == 2){
         //print_r($data->input());exit;
	DB::table('table_cats')->where('cat_id', $id)->update([
	'user_id' => $user,
	///'name_en' => $data->Input('name_en'),
        'name_kh' => $data->Input('name_kh'),
    //    'code' => $data->Input('code'),
        'parent' => $data->Input('parent'),
        'status' => $data->Input('status'),
        'ordering' => $data->Input('ordering'),
	]);			
	return Redirect::to('/admin/cat')->with('message','ទិន្នន័យបានបញ្ចូលហើយកែប្រែបានជោកជ័យ !');
	}elseif($data->Input('save') == 3){
	DB::table('table_cats')->where('cat_id', $id)->update([
	'user_id' => $user,
	//'name_en' => $data->Input('name_en'),
        'name_kh' => $data->Input('name_kh'),
    //    'code' => $data->Input('code'),
        'parent' => $data->Input('parent'),
        'status' => $data->Input('status'),
        'ordering' => $data->Input('ordering'),
	]);
            return Redirect::to('/admin/cat/add')->with('message','ទិន្នន័យបានបញ្ចូលហើយកែប្រែបានជោកជ័យ !');
	}else{
        return Redirect::to('/admin/cat')->with('message','ទិន្នន័យបានកែប្រែមិនបានជោកជ័យ  !');
	}
    }
    public function getDeleteCat($id){
        DB::table('table_cats')->where('cat_id', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/cat')->with('message','លុបបានជោកជ័យ  !');		
	}
	
	function get_menu($parent_id=0){

	//$CI =& get_instance();

	$query = DB::table('table_cats')->where('parent',$parent_id)->get();

	if(count($query)>0){

		echo '<tbody>';

			foreach($query as $row){

					echo '<tr class="current">';

						echo '<td>'.$row->name_kh.'</td>';

						$this->get_menu($row->cat_id);

					echo '</tr>';

			}

		echo '</tbody>';

	}

	}
}

