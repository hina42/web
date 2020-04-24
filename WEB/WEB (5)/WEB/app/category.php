<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table='categories';
    protected $fillable=['category','productid'];

}
/*class category extends Eloquent {
    public function maker(){
        return $this->belongs_to('productdetail');
    }
}*/