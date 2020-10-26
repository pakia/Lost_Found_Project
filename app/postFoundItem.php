<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postFoundItem extends Model
{
    protected $table="founditem";
      protected $primarykey="id";
      
       protected $fillable=['u_id',
       	'category',
       'f_i_description',
       'f_i_date',
           'f_location',   
              'f_image'];
}
