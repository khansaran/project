<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Redirect;
use App\Jobs\SendMail;
use Auth;
use App\Models\User;
class AuthController extends Controller
{

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  App\Http\Requests\LoginRequest  $request
	 * @param  Guard  $auth
	 * @return Response
	 */
	public function postLogin(Request $request,Guard $auth)
	{
            $logValue = $request->input('email');
	   $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            $throttles = in_array(
                ThrottlesLogins::class, class_uses_recursive(get_class($this))
            );
            if ($throttles && $this->hasTooManyLoginAttempts($request)) {
                            return redirect('/auth/login')
                                    ->with('error', trans('front/login.maxattempt'))
                                    ->withInput($request->only('email'));
            }
            $credentials = [$logAccess  => $logValue,'password'  => $request->input('password')];
            if(!$auth->validate($credentials)) {
                if ($throttles) {
                   $this->incrementLoginAttempts($request);
                }
                return redirect('/auth/login')
                ->with('error', trans('front/login.credentials'))
                ->withInput($request->only('email'));
            }
            $user = $auth->getLastAttempted();
            if($user->confirmed == 1) {
                if ($throttles) {
                    $this->clearLoginAttempts($request);
                }                
            }
            
            //$auth->login($user,true);
	    if($request->session()->has('user_id'))	{
                $request->session()->forget('user_id');
            }
            //print_r($user->role_id);exit;
            $sesstions = $request->session('');
            //print_r(session::attributes);
            Session::set('statut', 'admin');
            //print_r($shwo);
            //dd($sesstions); 
            //print_r(statut);
            //dd(Session::set('status','admin'));
             return Redirect::to('/admin/home');   		
	}


	/**
	 * Handle a registration request for the application.
	 *
	 * @param  App\Http\Requests\RegisterRequest  $request
	 * @param  App\Repositories\UserRepository $user_gestion
	 * @return Response
	 */
	public function postRegister(
		RegisterRequest $request,
		UserRepository $user_gestion)
	{
		$user = $user_gestion->store(
			$request->all(), 
			$confirmation_code = str_random(30)
		);

		$this->dispatch(new SendMail($user));

		return redirect('/')->with('ok', trans('front/verify.message'));
	}

	/**
	 * Handle a confirmation request.
	 *
	 * @param  App\Repositories\UserRepository $user_gestion
	 * @param  string  $confirmation_code
	 * @return Response
	 */
	public function getConfirm(
		UserRepository $user_gestion,
		$confirmation_code)
	{
		$user = $user_gestion->confirm($confirmation_code);

        return redirect('/')->with('ok', trans('front/verify.success'));
	}

	/**
	 * Handle a resend request.
	 *
	 * @param  App\Repositories\UserRepository $user_gestion
	 * @param  Illuminate\Http\Request $request
	 * @return Response
	 */
	public function getResend(
		UserRepository $user_gestion,
		Request $request)
	{
		if($request->session()->has('user_id'))	{
			$user = $user_gestion->getById($request->session()->get('user_id'));

			$this->dispatch(new SendMail($user));

			return redirect('/')->with('ok', trans('front/verify.resend'));
		}

		return redirect('/');        
	}
        public function getLogin(){
            return view('auth.loginadmin');
        }
}
