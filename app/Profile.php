<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $table="show_profile";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=['user_id',
        'first_name',
     'last_name',
       'department',
     'batch',
       'section',
              'email'
              ,
              'image'
             ];
}
