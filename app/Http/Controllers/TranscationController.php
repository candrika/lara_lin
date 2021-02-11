<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\MOdels\Transaction;

class TranscationController extends Controller
{
    //
    public function index(){
    	$transaction = Transaction::Select(
    							 'table_category.category_name',
    							 'table_transaction.transaction_description',
    							 DB::raw('(CASE WHEN table_category.category_type_id = 1 THEN'."'Pemasukan'".
    							 'WHEN table_category.category_type_id = 2 THEN'."'Pengeluaran'".' 
    							 END) AS jenis_transaksi'))
    							 ->join('table_category','table_category.category_id','=','table_transaction.category_id')
    							 ->get();

    	return view('transaksi/content',['title_content'=>'Pemasukan','data_tables'=>$transaction]);
    }

    public function input(){

    	//get data category for category dropdown
    	$category = DB::table('table_category')->get();
    	return view('transaksi/add',['title_content'=>'Input','category_name'=>$category]);
    }

    public function add(Request $request){

    	$this->validate($request,[
    		'name'=>'required',
    		'description'=>'required'
    	]);

    	$data = new Transaction;

    	$data->category_id=$request->category_id;
    	$data->amount=$request->nominal;
    	$data->transaction_description=$request->description;
    	$data->created_at=date('Y-m-d H:m');
    	$data->save();

    	//get category_type_id from table category
    	$get_cat = DB::table('table_category')
    			   ->select('category_type_id')
    			   ->where('category_id',$request->category_id)
    			   ->first();

    	#insert saldo pemasukan
    	if($get_cat->category_type_id==1){
    		
    		DB::table('table_saldo')->insert([
    			'pemasukan'=>$request->nominal,
    			'transaction_id'=>$data->transaction_id,
    			'created_at'=>date('Y-m-d H:m')
    		]);	
    	}

    	#insert saldo pengeluaran
    	if($get_cat->category_type_id==2){

   			DB::table('table_saldo')->insert([
    			'pengeluaran'=>$request->nominal,
    			'transaction_id'=>$data->transaction_id,
    			'created_at'=>date('Y-m-d H:m')
    		]);
    	}

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
