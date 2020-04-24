<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $primaryKey = 'OrderDetailID';
    public function product(){
        return $this->hasMany(product::class, 'ProductID','ProductID');
    }
}
