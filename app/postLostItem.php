<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postLostItem extends Model
{
  protected $table="lostitem";
      protected $primarykey="id";
      
       protected $fillable=['usr_id',
       	'category',
       'l_description',
       'l_date',
           'l_location'];
}
