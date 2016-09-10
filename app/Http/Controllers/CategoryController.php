<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	public function __construct()
	{
	    $this->middleware('auth');
	}
	public function getCategoryById($id){ 
		$cats=DB::select("select * from categories where pid=".$id); 
		return $cats;
	} 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{ 
		$data['categories']=DB::SELECT("SELECT distinct categories.id,categories.name,GROUP_CONCAT(t2.name) as child,GROUP_CONCAT(t2.id) as cid,created_at FROM `categories` LEFT JOIN (SELECT id,name,pid FROM categories ) t2 ON t2.pid=categories.id group by categories.name,categories.id");
		$data['result']="category";
		return view('admins.index',array('datas'=>$data));
	}

	public function getChild(Request $Request){
		// Getting all post data
		$data=array();
		if($Request->get('pid') > 0){
			$data=DB::SELECT("SELECT * FROM categories where pid=".$Request->get('pid')."");
		}
		echo json_encode($data);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{   
		$data['pid']=$this->getCategoryById(0); 
		$data['categories']=DB::SELECT("SELECT * FROM categories where pid > 0");
		$data['result']="catadd"; 
		return view('admins.index',array('datas'=>$data));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)
	{
		if ($Request->get('cboParrent') > 0 && $Request->get('cboChild') > 0){
			$pid=$Request->get('cboChild');
		}elseif($Request->get('cboParrent') > 0 && $Request->get('cboChild') == 0){
			$pid=$Request->get('cboParrent');
		}elseif($Request->get('cboParrent') == 0 && $Request->get('cboChild') == 0){
			$pid=0;
		}
		$category=Category::insert(array(
			'name'=>$Request->get('txtCategory'),
			'pid'=>$pid,  
			'created_at'=>date("Y-m-d H:m:s") 
			));
		 return redirect('category');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['category']=DB::SELECT("SELECT categories.id,categories.name,GROUP_CONCAT(t2.id) as cid FROM `categories` RIGHT JOIN(SELECT id,name,pid from categories where pid > 0 ) t2 on t2.pid=categories.id where categories.id=".$id."");
		// $data['category']=Category::find($id);
		$data['childs']=DB::SELECT("SELECT id,name FROM `categories`");
		$data['result']='catedit';
		return view('admins.index',array('datas'=>$data));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $Request)
	{ 
		$impl=implode(',', $Request->get('cbochild'));
		DB::update('UPDATE `categories` SET `pid`=0 WHERE pid='.$id.' and id not in('.$impl.')');
		foreach($Request->get('cbochild') as $result){
			//DB::table('categories')->where('id','<>', $result)->where('pid',$id)->update(['pid' => 0]);
			DB::table('categories')->where('id', $result)->update(['pid' => $id]);
		}
		
		$category=Category::find($id);
		$category->name = $Request->get('txtCategory'); 
		$category->updated_at = date("Y-m-d H:m:s");
		$category->save();
		return redirect('category');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category=Category::find($id);
		$category->delete();
		// return redirect('category');
	}

}
