<?php namespace App\Http\Controllers;

use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home.welcome');
	}
	public function show_news_list(){
		$data['news'] = DB::table('news_beauty_tb')->get();
		return view('pages.home.news_list',$data);
	}
	public function show_news_detail($id){
		$list = DB::table('news_beauty_tb')->where('id', $id)->get();
		if($list>0){
			$data['news'] = $list[0];
		}
		return view('pages.home.news_detail',$data);
	}
	/*video*/
	public function show_video_list(){
		$data['news'] = DB::table('video_tb')->get();
		return view('pages.home.video_list',$data);
	}
	public function show_video_detail($id){
		$list = DB::table('video_tb')->where('id', $id)->get();
		if($list>0){
			$data['news'] = $list[0];
		}
		return view('pages.home.video_detail',$data);
	}
	
	private static $category_list = [
		'sao'			=> [1,3],
		'khoedep'		=> [101,102,103,104,105],
		'giadinh'		=> [201,202,203],
		'babau'			=> [301,302,303,304,305],
		'daycon'		=> [401],
	];

	public function show_trangchu(){
		foreach(self::$category_list as $key => $value){
			$data[$key] = DB::table('news_beauty_tb')
		            ->join('news_cate_permission_tb', 'news_beauty_tb.key', '=', 'news_cate_permission_tb.key_news')
		            ->whereIn('news_cate_permission_tb.id_cate', $value)
		            ->select('news_beauty_tb.*', 'news_cate_permission_tb.id_cate')
		            ->skip(7)->take(7)->get();
			
		}
		return view('pages.home.Mazaya',$data);
	} 
	public function show_tranglist($category_name){
		/*select group*/
		$category = self::$category_list[$category_name];
		/*get data*/ 
		$data['news'] = DB::table('news_beauty_tb')
            ->join('news_cate_permission_tb', 'news_beauty_tb.key', '=', 'news_cate_permission_tb.key_news')
	            ->whereIn('news_cate_permission_tb.id_cate', $category)
	            ->select('news_beauty_tb.*', 'news_cate_permission_tb.id_cate')
	            ->skip(10)->take(10)->get();
		return view('pages.home.Mazaya-List',$data);
	}
	public function show_trangdetail($id){
		$list = DB::table('news_beauty_tb')->where('id', $id)->get();
		if($list>0){
			$data['news'] = $list[0];
		}
		return view('pages.home.Mazaya-Detail',$data);
	}
}
