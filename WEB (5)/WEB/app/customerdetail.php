<?php

namespace App;
use App\customersize;
use Illuminate\Database\Eloquent\Model;

class customerdetail extends Model
{
    protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps=false;
    public $primaryKey='CustomerID';
    protected $fillable = ['CustomerFirstName','CustomerLastName','CustomerEmail','CustomerPassword'];



   
}
