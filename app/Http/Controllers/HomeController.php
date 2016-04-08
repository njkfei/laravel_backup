<?php namespace App\Http\Controllers;

use Redis;
use App\Theme;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
//		return view('home');
//		Redis::set('hello','world');
//		return "hello world";
//		return Redis::get('hello');
		$data = array(
			'22'=>'jdfhgjfd',
            '33'=>'jdfhgjfd',
            '11'=>'jrtyrjfd',
            '55'=>'jrtydairjfd',
            '77'=>'jopo',
            '99'=>'jrtasajfd',
            '44'=>'jopasdwo',
            '88'=>'hdgatyuyuiuy'
		);

		Redis::set('ar',json_encode($data));
		$id=1;
		$theme = Redis::get('theme'.$id);

		if(is_null($theme)){
                	$theme = Theme::find(1);
			Redis::set('theme'.$id,$theme);
		}else{
			return $theme;
		}
//		return Redis::get('ar');
		//return Theme::all();

                return $theme;
	}

}
