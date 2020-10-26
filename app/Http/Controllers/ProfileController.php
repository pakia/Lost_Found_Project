<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;

class ProfileController extends Controller
{
      public function store(Request $request){

       

     	 $input=new Profile;    
     	$user_id = Auth::user()->id; 
        $input->user_id=$user_id; 
        $input->first_name=$request->first_name; 
        $input->last_name=$request->last_name; 
       $input->department=$request->department; 
        $input->batch=$request->batch; 
         $input->section=$request->section; 
          $input->email=$request->email; 
   $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
   return redirect('project/showProfile');
    }
    public function viewProfile(){
      $userid=Auth::user()->id;
      $input['input']=Profile::where('user_id',$userid)->first();
      return view('/project/showProfile')->with('input', $input); 
    }
    public function edit($id){
     
    return view('/project/editImage');
  }

    public function editImage(Request $request,$id){
$input=User::find($id) ;    
   $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
  return redirect('/project/showProfile');

}
public function edit1($id){
     
    return view('/project/editProfile');
  }

    public function editProfile(Request $request,$id){
$input=User::find($id) ;   
       $input->first_name=$request->first_name; 
        $input->last_name=$request->last_name; 
       $input->department=$request->department; 
        $input->batch=$request->batch; 
         $input->section=$request->section; 
          $input->email=$request->email;  
   $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
  return redirect('/project/showProfile');

}
}
