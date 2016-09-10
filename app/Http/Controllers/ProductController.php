<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Gallery;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\UploadedFile;
class ProductController extends Controller {
	public function __construct()
	{
	    $this->middleware('auth');
	}
	public function getCategoryById($id){ 
		$cats=DB::select("select * from categories where pid=".$id); 
		return $cats;
	} 
	public function getCategories(){
		$data['country']=$this->getCategoryById(20); 
		$data['brand']=$this->getCategoryById(42); 
		$data['size']=$this->getCategoryById(14); 
		$data['type']=$this->getCategoryById(0); 
		$data['cat']=$this->getCategoryById(39); 
		$data['all']=DB::SELECT("SELECT * FROM categories where pid >0 ");
		$data['galleries']=DB::table('galleries')->get();
		return $data;
	}
	// get child
	public function getChild(Request $Request){
		// Getting all post data
		$data=array();
		if($Request->get('pid') > 0){
			$data=DB::SELECT("SELECT * FROM categories where pid=".$Request->get('pid')."");
		}
		echo json_encode($data);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{   
		$data['categories']=$this->getCategories(); 
		$data['result']='product'; 
		$data['products']=Product::get(); 
		return view('admins.index',array('datas'=>$data)); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{  	 
		$data['categories']=$this->getCategories();
		$data['result']='productadd'; 
		return view('admins.index',array('datas'=>$data)); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)
	{     
		/*explode id pro check box*/
		if($Request->get('cbsize') !=""){
			$expl=implode(",",$Request->get('cbsize'));  	
		}else{
			$expl="";	
		}  
		//upload multi image 
		$files = $Request->file('proImage');  
		if( count($files) > 0){
			$upload_success=array();
			foreach($files as $file){
				$id = Str::random(14); 
		        $destinationPath ='webs/products/'. $id;  
		        $filename = $file->getClientOriginalName();  
		        $extension = $file->getClientOriginalExtension();
		        $upload_success[]= $file->move($destinationPath, $filename);
			}
		}else{
			$upload_success='';
		}
		$lastid=array();
		if ($upload_success!=''){
			foreach($upload_success as $path){
				#push image id to array | insert with get last_id
				$lastid[]= DB::table('galleries')->insertGetId(['name'=>$path,'created_at'=>date("Y-m-d H:m:s")]);
				#insert only
				// Gallery::insert(array('name'=>$path, 'created_at'=>date("Y-m-d H:m:s") )); 
			}
			$idimg=implode(',', $lastid);
		}else{
			$idimg='';
		}
		Product::insert(array('name'=>$Request->get('txtName'),
			'price'=>$Request->get('txtPrice'),
			'color'=>$Request->get('txtColor'),
			'brand'=>$Request->get('cboBrand'),
			'made'=>$Request->get('cboMade'),
			'type'=>$Request->get('cboType'),
			'ptype'=>$Request->get('cboPrduct'),
			'category'=>$Request->get('cboCategory'),
			'size'=>$expl,
			'image'=>$idimg,
			'created_at'=>date("Y-m-d H:m:s"),
			//'description'=>$Request->get('txaDecription')
		));
		return Redirect('product');
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
		$data['categories']=$this->getCategories(); 
		$data['product'] = Product::find($id); 
		$data['result']='productedit';  
		return view('admins.index',array('datas'=>$data)); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $Request)
	{ 
		/*// Delete a single file
		File::delete($filename);

		// Delete multiple files
		File::delete($file1, $file2, $file3);

		// Delete an array of files
		$files = array($file1, $file2);
		File::delete($files);*/
		$product=Product::find($id);
		/*explode id pro check box*/
		$expl=implode(",",$Request->get('cbsize'));
		//upload image 
		$files = $Request->file('proImage'); 
		$imgid = $Request->get('gid');
		// remove empty array
		$files = array_filter( $files );
		$imgids = array_filter( $imgid ); 
		// print_r($files);
		// print_r($imgids);
		// exit(); 
		$product->name=$Request->get('txtName');
		$product->price=$Request->get('txtPrice');
		$product->color=$Request->get('txtColor');
		$product->brand=$Request->get('cboBrand');
		$product->made=$Request->get('cboMade');
		$product->type=$Request->get('cboType');
		$product->category=$Request->get('cboCategory');
		$product->size=$expl;
		if(count($files) > 0){
			foreach($files as $key => $file){
				if($file!=''){
					// Select to delete image
					$data=DB::SELECT("SELECT name FROM galleries where id=".$imgids[$key]."");
					$del = asset($data[0]->name);
					// Delete single file
					File::delete($del);
					$gallery=Gallery::find($imgids[$key]);
			        $destinationPath ='webs/products/'. $id;  
			        $filename = $file->getClientOriginalName();  
			        $extension = $file->getClientOriginalExtension();
			        $upload_success = $file->move($destinationPath, $filename); 
					$gallery->name=$upload_success;
					$gallery->save();
				}
			}
		}
		//$product->description=$Request->get('txaDecription');
		$product->updated_at=date("Y-m-d H:m:s");
		$product->save();
		return redirect('product');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product=Product::find($id);
		$product->delete();
		return redirect('product');
	}

}
