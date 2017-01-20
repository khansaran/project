<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\TableBrand;
use App\Models\TableTagImage;
use App\Models\TableCat;
use App\Models\TableImageProduct;
use App\Models\TableIdTagIdImage;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class UserShowController extends Controller
{
    public function getData()
    {
		$model = DB::table('users')->get();
		return view('admin.user.index')->with('datashow',$model);
    }
}
