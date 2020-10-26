<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table="admin_profile";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=[
        'f_name',
     'l_name',
       'about',
     
              'email',
              'image'
            
             ];
}
