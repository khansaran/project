<?php namespace App\Http\Controllers;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Repositories\ContactRepository;
use App\Repositories\UserRepository;
use App\Repositories\BlogRepository;
use App\Repositories\CommentRepository;

class AdminController extends Controller {

    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\UserRepository
     */
    protected $user_gestion;

    /**
     * Create a new AdminController instance.
     *
     * @param  App\Repositories\UserRepository $user_gestion
     * @return void
     */
    public function __construct(UserRepository $user_gestion)
    {
		$this->user_gestion = $user_gestion;
    }

	/**
	* Show the admin panel.
	*
	* @param  App\Repositories\ContactRepository $contact_gestion
	* @param  App\Repositories\BlogRepository $blog_gestion
	* @param  App\Repositories\CommentRepository $comment_gestion
	* @return Response
	*/
	public function admin( ContactRepository $contact_gestion, BlogRepository $blog_gestion,
		CommentRepository $comment_gestion)
	{	
		$nbrMessages = $contact_gestion->getNumber();
		$nbrUsers = $this->user_gestion->getNumber();
		$nbrPosts = $blog_gestion->getNumber();
		$nbrComments = $comment_gestion->getNumber();

		return view('back.index', compact('nbrMessages', 'nbrUsers', 'nbrPosts', 'nbrComments'));
	}

	/**
	 * Show the media panel.
	 *
     * @return Response
	 */
	public function filemanager()
	{
		$url = config('medias.url') . '?langCode=' . config('app.locale');
		
		return view('back.filemanager', compact('url'));

	}
        public function adminpingit(){
            return view('admin.index');
        }
        public function ViewAdmin(){
            return view('admin.index');
        }
        
    ///////////////////////////////////User ////////////////////////////////////    
    public function FormAdd()
    {
        $model = DB::table('roles') ->orderBy('id', 'asc')->get();
        return view('admin.user.add')->with('datashow',$model);
    }
    public function getData()
    {
	$model = DB::table('users')->where('trush',0)->orderBy('id', 'desc')->paginate(10);
	return view('admin.user.index')->with('datashow',$model);
    }
    public function addData(Request $data)
    {
       $table = new User;
        $validation = Validator::make($data->all(), array(
            'username' => 'required ',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
            )
	);
	if($validation->fails()){
		return Redirect::to('admin/user/add')->withErrors($validation);
        }else{
            
            $table->username = $data->Input('username');
            $table->email = $data->Input('email');
            $table->password =  bcrypt($data->Input('password'));
            $table->role_id = $data->Input('role_id');
            $table->confirmed = $data->Input('confirmed');
            $table->trush = 0;
            if($data->Input('save') == 2){
                 $table->save();			
                return Redirect::to('/admin/user')->with('message','Data has been Insert Successfully !');
            }elseif($data->Input('save') == 3){
                $table->save();
                return Redirect::to('/admin/user/add')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('/admin/user')->with('message','Data has been Insert Successfully !');
            }
        }
    }
    public function getEdit($id){
        $models = DB::table('users')->where('id',$id)->get();
        foreach($models as $show){
            $model = $show;
        }
        return view('admin.user.edit')->with('editdata',$model);
    }
    public function updateData(Request $data, $id){
        
        $sesstions = $data->session('');
            if(session('statut') == 'admin'){
                $user = 1;
            }
	if($data->Input('save') == 2){
	DB::table('locations')->where('location_id', $id)->update([
	'user_id' => $user,
	'name' => $data->Input('name'),
        'code' => $data->Input('code'),
        'email' => $data->Input('email'),
        'phone' => $data->Input('phone'),
        'address' => $data->Input('address'),
        'description' => $data->Input('description'),
        'status' => $data->Input('status'),        
	]);			
	return Redirect::to('/admin/location')->with('message','Data has been Updated Successfully !');
	}elseif($data->Input('save') == 3){
	DB::table('locations')->where('location_id', $id)->update([
	'user_id' => $user,
	'name' => $data->Input('name'),
        'code' => $data->Input('code'),
        'email' => $data->Input('email'),
        'phone' => $data->Input('phone'),
        'address' => $data->Input('address'),
        'description' => $data->Input('description'),
        'status' => $data->Input('status'),
	]);
            return Redirect::to('/admin/location/add')->with('message','Data has been Updated Successfully !');
	}else{
        return Redirect::to('/admin/location')->with('message','Data has been Updated Successfully !');
	}
    }
    public function getDelete($id){
        DB::table('users')->where('id', $id)->update(['trush' => 1, ]);
            return Redirect::to('/admin/user')->with('message','Delete Successfully !');		
    }

}
