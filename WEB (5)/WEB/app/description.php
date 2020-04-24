<?php

namespace App;
use App\Subcategory;
use Illuminate\Database\Eloquent\Model;

class description extends Model
{
    protected $hidden = ['created_at','updated_at','remember_token'];
		public $timestamps = false;
		protected $fillable = ['Description','SubCatID'];
		protected $primaryKey = 'DescriptionID';
}
