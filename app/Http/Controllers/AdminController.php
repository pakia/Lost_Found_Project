<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\postLostItem;
use App\postFoundItem;
use Auth;
use App\User;

class AdminController extends Controller
{
    public function store3(Request $request){

       

     	 $input=new Admin;    
        $input->f_name=$request->f_name; 
        $input->l_name=$request->l_name; 
       $input->about=$request->about;
          $input->email=$request->email; 
 $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
   return redirect('/admin/showadminprofile');
    }

     public function viewProfile(){
       $input1=Admin::all();
      $input=Admin::all();

    	$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
      return view('/Admin/adminProfile')->with('input', $input)->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1',$input1); 
    }

    public function createProfile()
    {
       $input1=Admin::all();
    	$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
        return view('/Admin/createProfile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1',$input1); 
   }



public function showAdminProfile()
    {
       $input1=Admin::all();
    	$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
        return view('/Admin/adminProfile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1',$input1) ;
   }
   public function editProfile()
    {
       $input1=Admin::all();
      $count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
        return view('/Admin/editAdminProfile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1',$input1);
   }


   public function edit2($id)
    {
       $input1=Admin::all();
       $input=Admin::find($id);
    	$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
        return view('/Admin/editAdminProfile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input',$input)->with('input1',$input1); 
   }
	

 public function editAdminProfile(Request $request,$id){
   $input1=Admin::all();
  
$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
       $input=Admin::find($id) ; 
       $input->f_name=$request->f_name; 
        $input->l_name=$request->l_name; 
       $input->about=$request->about;
          $input->email=$request->email; 
 $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
   return redirect('/admin/showadminprofile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input',$input)->with('input1',$input1);

}

public function edit($id)
    {
       $input1=Admin::all();
       $input=Admin::find($id);
      $count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
        return view('/Admin/editAdminImage')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input',$input)->with('input1',$input1); 
   }
  public function editImage(Request $request,$id){
     $input1=Admin::all();
  
$count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
       $input=Admin::find($id) ; 
      
 $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
       
       $input->save();
   return redirect('/admin/showadminprofile')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input',$input)->with('input1',$input1);

}

    
    

    
}
