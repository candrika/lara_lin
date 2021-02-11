<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    
    protected $table="table_saldo";

    protected $fillable=[
      'pemasukan',
	  'pengeluaran',
	  'saldo_description',
	  'created_at',
	  'updated_at'
    ];

    protected $primaryKey = "saldo_id";

    use HasFactory;
}
