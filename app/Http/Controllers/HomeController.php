<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saldo;
class HomeController extends Controller
{
    //
    public $current_time;

	public function __constroct(){

		$now = new DateTime();
		$this->current_time = $now->date_format('Y-m-d H:m:s');
	}

    public function index(){
    	return view('master',['title'=>'Dashboard']);
    }

    public function saldo(){

    	//menghitung total saldo, pengeluaran dan pemasukan
    	$balance = Saldo::All();
    	
    	$arr = [];
    	$data_saldo = [];

    	$hari = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];

    	$total_pengeluaran = 0;
    	$total_pemasukan  = 0;

    	$total_pemasukan_perminggu = 0;
    	$total_pengeluaran_perminggu = 0;

    	$saldo_update =0;
    	$i = 0;

    	if(count($balance) >0){

    		foreach ($balance as $key => $value) {
    			# code...
    			$total_pemasukan +=$value->pemasukan;
    			$total_pengeluaran +=$value->pengluaran;
    			
    			$saldo_update = $total_pemasukan+$total_pengeluaran;

                // echo $this
    			// $diff_time = date_diff($value->created_at,$this->current_time);
    			// $day_count = $diff_time->format("%a");
    			if($value->created_at!=null){
                    
                    $created_at     = date_create($value->created_at); 
                    $current_time   = date_create($this->current_time);

                    
                    $diff_time  = date_diff($created_at,$current_time);
                    // echo $diff_time->days;
                    $day_count  = $diff_time->format("%a");
                    // echo $day_count;

                    if($day_count <= 7){
                        $total_pemasukan_perminggu +=$value->pemasukan;
                        $total_pengeluaran_perminggu +=$value->pengluaran;
                        // 
                        $data_saldo[$i] = $value['pemasukan'];
                        $data_saldo[$i] = $value['pengeluaran'];
                    }
                }
    			

    			$i++;
    			// 
    		}

    		$arr = [
    			'total_pemasukan_perminggu'=>number_format($total_pemasukan_perminggu),
    			'total_pengeluaran_perminggu'=>number_format($total_pengeluaran_perminggu),
    			'total_pemasukan'=>number_format($total_pemasukan),
    			'total_pengeluaran'=>number_format($total_pengeluaran),
    			'saldo_update'=>number_format($saldo_update),
				// 'total_pemasukan_prosentage'=>($total_pemasukan/100),
				// 'total_pengeluaran_prosentage'=>($total_pengeluaran/100)
    		];

    	}else{
    		$arr;
    	}


        // print_r($arr);
    	
    	
    	return view('home/content',['saldo'=>$arr,'data'=>$data_saldo,'labels'=>$hari]);
    }
}
