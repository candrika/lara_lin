<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{	
	protected $table      = "table_transaction";
	protected $primaryKey = "transaction_id";

	protected $fillable   =[
		'category_id',
  		'transaction_description',
  		'created_at',
  		'updated_at',
	];

    use HasFactory;
}
