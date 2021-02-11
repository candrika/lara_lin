<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class TranscationController extends Controller
{
    //
    public function index(){
    	$transaction = Transaction::Select(
    							 'table_transaction.transaction_id','table_category.category_name',
    							 'table_transaction.transaction_description',
    							 DB::raw('(CASE WHEN table_category.category_type_id = 1 THEN'."'Pemasukan'".
    							 'WHEN table_category.category_type_id = 2 THEN'."'Pengeluaran'".' 
    							 END) AS jenis_transaksi'))
    							 ->join('table_category','table_category.category_id','=','table_transaction.category_id')
    							 ->get();
        // print_r($transaction);                         
    	return view('transaksi/content',['title_content'=>'Pemasukan','data_tables'=>$transaction]);
    }

    public function input(){

    	//get data category for category dropdown
    	$category = DB::table('table_category')->get();
    	return view('transaksi/add',['title_content'=>'Input','category_name'=>$category]);
    }

    public function add(Request $request){

    	$this->validate($request,[
            'category_id'=>'required',
    		'category_type_id'=>'required',
            'amount'=>'required',
    		'description'=>'required'
    	]);

    	$data = new Transaction;

    	$data->category_id=$request->category_id;
    	$data->amount=$request->amount;
    	$data->transaction_description=$request->description;
    	$data->created_at=date('Y-m-d H:m');
    	$data->save();

        //get category_type_id from table category
    	$get_name = DB::table('table_category')
    			   ->select('category_name')
    			   ->where('category_id',$request->category_id)
    			   ->first();

    	#insert saldo pemasukan
    	if($request->category_type_id==1){
    		
    		DB::table('table_saldo')->insert([
                'pemasukan'=>$request->amount,
    			'pengeluaran'=>0,
    			'transaction_id'=>$data->transaction_id,
                'created_at'=>date('Y-m-d H:m'),
    			'saldo_description'=>'Penambahan saldo dari transaksi '.$get_name->category_name.' pada tgl '.date('Y-m-d H:m')
    		]);	
    	}

    	#insert saldo pengeluaran
    	if($request->category_type_id==2){

   			DB::table('table_saldo')->insert([
                'pemasukan'=>0,
    			'pengeluaran'=>$request->amount,
    			'transaction_id'=>$data->transaction_id,
    			'created_at'=>date('Y-m-d H:m'),
                'saldo_description'=>'Pengurangan saldo  dari '.$get_name->category_name.' pada tgl '.date('Y-m-d H:m')
    		]);
    	}

    	return response()->json(['status'=>true,'message'=>'Data berhasil disimpan']);
    }

    public function edit($id){
    	
    	$category    = DB::table('table_category')->get();
    	$array_trx = [];
        $transaction = Transaction::Select(
                                 'table_transaction.category_id as category_id',
                                 'table_category.category_name',
                                 'table_transaction.transaction_id',
                                 'table_transaction.amount',
                                 'table_category.category_name',
                                 'table_transaction.transaction_description',
                                 DB::raw('(CASE WHEN table_category.category_type_id = 1 THEN'."'Pemasukan'".
                                 'WHEN table_category.category_type_id = 2 THEN'."'Pengeluaran'".' 
                                 END) AS jenis_transaksi','table_category.category_type_id'))
                                 ->join('table_category','table_category.category_id','=','table_transaction.category_id')
                                 ->where('table_transaction.transaction_id',$id)
                                 ->first();
        // print_r($transaction['attributes:protected']);                         
        return view('transaksi/edit',['title_content'=>'Edit','transaction'=>$transaction,'category'=>$category]);
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

    	Transaction::Where('transaction_id',$id)->delete();

    	return response()->json(['status'=>200,'message'=>'Data berhasil dihapus']);
    }

    public function category_type(Request $request){
        $category_type = DB::table('table_category')
                        ->Select('category_type_id',
                         DB::raw('(CASE WHEN category_type_id = 1 THEN'."'Pemasukan'".
                         'WHEN category_type_id = 2 THEN'."'Pengeluaran'".' 
                         END) AS jenis_transaksi'))
                         ->where('category_id',$request->id)->get();

        return response()->json(['status'=>200,'data'=>$category_type]);
    }
}
