<?php

namespace App;
use App\subcategory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $table='categories';
    protected $primaryKey = 'CategoryID';
    protected $fillable=["CategoryType","CatName","image"];

    public function subcategory()
    {
        return $this->hasMany(subcategory::class,'CategoryID',"CategoryID");
    }
}
/*class category extends Eloquent {
    public function maker(){
        return $this->belongs_to('productdetail');
    }
}*/