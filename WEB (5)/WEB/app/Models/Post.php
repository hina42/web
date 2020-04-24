<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
   public function getdata()
   {
    return ['name'=>'hina','fname'=>'lilaram'];
   }

}