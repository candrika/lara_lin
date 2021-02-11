<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $table="table_category";
	protected $primaryKey="category_id";

	protected $fillable = [
	  'category_id',
	  'category_type_id',
	  'category_name',
	  'category_description',
	  'created_at',
	  'updated_at',
	];

    use HasFactory;
}
