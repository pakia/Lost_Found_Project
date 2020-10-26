<?php

namespace App\Http\Controllers;

use App\postLostItem;
use Illuminate\Http\Request;
use App\postFoundItem;
use Auth;
use App\User;

use App\Admin;
class PostLostItemController extends Controller
{
    public function store1(Request $request){

       

         $input=new postLostItem;    
       $user_id = Auth::user()->id; 
        $user_name = Auth::user()->name; 
       $user_image = Auth::user()->image; 
        $input->usr_id=$user_id; 
        $input->usr_name=$user_name; 
          $input->usr_image=$user_image; 
        $input->category=$request->category; 
       $input->l_description=$request->l_description; 
        $input->l_date=$request->l_date; 
         $input->l_location=$request->l_location; 
       
       $input->save();
   return redirect('/project/index');
    }
public function approve1($id){
         $founds=postFoundItem::find($id);
    $input=postLostItem::find($id);
     postLostItem::where('id',$id)->update(['status'=>1]);

  return redirect('/project/index')->with('input',$input)->with('founds', $founds);
}
public function remove($id){
 $input=postLostItem::find($id);
 $input->delete();
 return redirect('/project/lostnotification');
}
public function lostnotification(){
        $input1=Admin::all();

       $input=postLostItem::where('status',0)->get();
      
      $count8=postLostItem::where('status',0)->count();
     
      return view('/Admin/lostNotification')->with('count8',$count8)->with('count9',$count9)->with('input',$input) ->with('input1', $input1);
    }

  public function edit($id){
    $input=postLostItem::find($id);


  return view('/project/editLostItem')->with('input',$input);
}

 public function editLostItem(Request $request,$id){
  
        $input=postLostItem::find($id);
        $input->category=$request->category; 
        $input->l_description=$request->l_description; 
        $input->l_date=$request->l_date; 
         $input->l_location=$request->l_location; 
       
       $input->save();
   return redirect('/project/index');
 }

 public function delete($id){
 $input=postLostItem::find($id);
 $input->delete();
 return redirect('/project/index')->with('msg','Post delete successfull!!');
}


    public function viewLostItem(){
      $input1=Admin::all();
        $userid=Auth::user()->id;
         $founds=postFoundItem::where('u_id',$userid)->get();
      $input=postLostItem::where('usr_id',$userid)->get();
       //$count=SELECT  (SELECT count(*) FROM founditem) + (SELECT count(*) FROM lostitem);
       //$count=select 'founditem' as found, count(postFoundItem::where('category','Calculator')) FROM founditem UNION select 'lostitem' as lost, count(postLostItem::where('category','Calculator'));
       $count0=postFoundItem::where('category','Calculator')->count();
       $count00=postLostItem::where('category','Calculator')->count();
       $count=$count0 +  $count00;
      $count11=postFoundItem::where('category','Id Card')->count();
      $count111=postLostItem::where('category','Id Card')->count();
       $count1=$count11 + $count111;
      $count22=postFoundItem::where('category','Pendrive')->count();
       $count222=postLostItem::where('category','Pendrive')->count();
       $count2=$count22 + $count222;
      $count33=postFoundItem::where('category','Clearance')->count();
      $count333=postLostItem::where('category','Clearance')->count();
      $count3=$count33 +  $count333;
      $count44=postFoundItem::where('category','>Walet')->count();
       $count444=postLostItem::where('category','>Walet')->count();
       $count4=$count44 + $count444;
      $count55=postFoundItem::where('category','Mobile')->count();
      $count555=postLostItem::where('category','Mobile')->count();
      $count5=$count55 + $count555;
      $count66=postFoundItem::where('category','Others')->count();
      $count666=postLostItem::where('category','Others')->count();
       $count6= $count66 + $count666;
       $count7=postFoundItem::where('status',0)->count();
      $count8=postLostItem::where('status',0)->count();
        $count9=User::where('status',0)->count();
      return view('/Admin/lostNotification')->with('input', $input)->with('founds', $founds)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6)->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1', $input1); 
    }

    public function indexadminlost(){
       
   $userid=Auth::user()->id;
   $input1=Admin::all();
         $founds=postFoundItem::where('status',1)->get();
      $input=postLostItem::where('status',1)->get();

  return view('/Admin/indexAdmin')->with('founds',$founds)->with('input',$input)->with('input1', $input1);
}

}
