<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    //
    protected $table='subcategories';
    protected $fillable=['subcategory','categoryid'];

}
/*class category extends Eloquent {
    public function maker(){
        return $this->belongs_to('productdetail');
    }
}*/