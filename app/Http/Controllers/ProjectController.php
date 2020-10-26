<?php

namespace App\Http\Controllers;
Use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index(){
        
        return view('/project/index');
    }

     public function createAccount(){
        
        return view('/project/createAccount');
    }

     public function editimage(){
        
        return view('/project/editImage');
    }
    
    
}
