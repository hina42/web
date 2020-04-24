<?php

namespace App;
use App\product;
use App\category;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $primaryKey='SubCatID';
    protected $fillable=['SubCatType','CategoryID'];

    public function product(){
        return $this->hasMany(product::class,'SubCatID','SubCatID');
    }

}