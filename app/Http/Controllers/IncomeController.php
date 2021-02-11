<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;

class IncomeController extends Controller
{
    //
    public function index(){
    	$category = Category::Where('category_type_id',1)->get();
    	return view('pemasukan/content',['title_content'=>'Pemasukan','data_tables'=>$category]);
    }

    public function input(){

    	return view('pemasukan/add',['title_content'=>'Input']);
    }

    public function add(Request $request){

    	$this->validate($request,[
    		'name'=>'required',
    		'description'=>'required'
    	]);

    	$data = new Category;

    	$data->category_name=$request->name;
    	$data->category_description=$request->description;
    	$data->category_type_id=1;
    	$data->created_at=date('Y-m-d H:m');
    	$data->save();

    	return response()->json(['status'=>true,'message'=>'Data berhasil disimpan']);
    }

    public function edit($id){
    	
    	$category = Category::Where('category_id',$id)->first();
    	
    	return view('pemasukan/edit',['title_content'=>'Edit','data'=>$category]);
    }

    public function update(Request $request){

    	$this->validate($request,[
    		'id'=>'required',
    		'name'=>'required',
    		'description'=>'required'
    	]);
    	
    	$category =Category::Where('category_id',$request->id)
    	->update([
    		"category_name"=>$request->name,
	    	"category_description"=>$request->description,
    		"updated_at"=>date('Y-m-d H:m')
    	]);

    	return response()->json(['status'=>true,'message'=>'Data berhasil diupate']);
    }

    public function delete($id){

    	Category::Where('category_id',$id)->delete();

    	return response()->json(['status'=>200,'message'=>'Data berhasil dihapus']);
    }
}
