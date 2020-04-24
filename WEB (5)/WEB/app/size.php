<?php

namespace App;
use App\subcategory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    
		public $timestamps = false;
		protected $fillable = ['Size','SubCatID'];
		protected $primaryKey = 'SizeID';
}
