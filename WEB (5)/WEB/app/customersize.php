<?php

namespace App;
use App\customerdetail;

use Illuminate\Database\Eloquent\Model;

class customersize extends Model
{
    protected $hidden = ['created_at','updated_at','remember_token'];
    
    public $timestamps=false;
    public $primaryKey='CustSizeID';
    protected $fillable = ['SizeName','	Height','	Weight', 'CustomerID'];

public  function customerdetail()
{
    return $this->belongsTo(customerdetail::class,'CustomerID','CustomerID');
}

// public  function customersize()
// {
//     return $this->belongsTo(customersize::class,'CustSizeID','CustSizeID');
// }
}