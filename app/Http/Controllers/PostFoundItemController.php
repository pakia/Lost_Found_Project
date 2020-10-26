<?php

namespace App\Http\Controllers;
use App\postLostItem;
use App\postFoundItem;
use Illuminate\Http\Request;
use Auth;

use App\Admin;

use App\User;
class PostFoundItemController extends Controller
{
    public function store(Request $request){

       

        $input=new postFoundItem;    
       $user_id = Auth::user()->id; 
       $user_name = Auth::user()->name; 
       $user_image = Auth::user()->image; 
        $input->u_id=$user_id; 
         $input->u_name=$user_name; 
          $input->u_image=$user_image; 
        $input->category=$request->category; 
        
       $input->f_i_description=$request->f_i_description; 
        $input->f_i_date=$request->f_i_date; 
         $input->f_location=$request->f_location; 
           
       $filename = time().'.'.request()->f_image->getClientOriginalExtension();
      request()->f_image->move(public_path('images'), $filename);

     $input->f_image=$filename;
       
       $input->save();
   return redirect('/project/index');
    }

     public function edit($id){
    $input=postFoundItem::find($id);

  return view('/project/editFoundItem')->with('input',$input);
}

 public function editFoundItem(Request $request,$id){
  
        $input=postFoundItem::find($id);
        $input->category=$request->category; 
        
       $input->f_i_description=$request->f_i_description; 
        $input->f_i_date=$request->f_i_date; 
         $input->f_location=$request->f_location; 
           
       $filename = time().'.'.request()->f_image->getClientOriginalExtension();
      request()->f_image->move(public_path('images'), $filename);

     $input->f_image=$filename;
       
       
       $input->save();
   return redirect('/project/index');
 }

public function adminIndex()
    {
      $input1=Admin::all();
       $founds=postFoundItem::where('status',1)->get();
       $input=postLostItem::where('status',1)->get();
      $count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
         $count9=User::where('status',0)->count();
          $memb=User::all();
        return view('/Admin/indexAdmin')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('founds', $founds)->with('input', $input)->with('input1', $input1)->with('memb', $memb); 
   }

public function delete($id){
 $input=postFoundItem::find($id);
 $input->delete();
 return redirect('/project/index')->with('msg','Post delete successfull!!');
}
public function remove($id){
 $input=postFoundItem::find($id);
 $input->delete();
 return redirect('/project/foundnotification');
}

public function removeMember($id){
 $input=User::find($id);
 $input->delete();
 return redirect('/project/memberrequest');
}


    public function viewFoundItem(){

        $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
         $input1=Admin::all();
        //$count=select 'founditem' as found, count(postFoundItem::where('category','Calculator')) FROM founditem UNION select 'lostitem' as lost, count(postLostItem::where('category','Calculator'));

       // $count=SELECT  (SELECT count(*) FROM founditem) + (SELECT count(*) FROM lostitem);
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
      return view('/Admin/foundNotification')->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6)->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('input1',$input1); 
      
    }

    public function foundnotification(){

        $input1=Admin::all();
       $founds=postFoundItem::where('status',0)->get();
      $count7=postFoundItem::where('status',0)->count();
     
      return view('/Admin/foundNotification')->with('count7',$count7)->with('founds', $founds)->with('input1',$input1);
    }

    public function viewMember(){

        $input1=Admin::all();
      
      $member=User::where('status',0)->get();
      $count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
        $count9=User::where('status',0)->count();
     
      return view('/Admin/memberRequest')->with('count7',$count7)->with('count8',$count8)->with('count9',$count9)->with('count9',$count9)->with('member', $member)->with('input1',$input1);
    }

      public function memberNotification(){

       $input1=Admin::all();
       $founds=postFoundItem::where('status',0)->get();
        $member=User::where('status',0)->get();
      $count7=postFoundItem::where('status',0)->count();
       $count8=postLostItem::where('status',0)->count();
        $count9=User::where('status',0)->count();
      return view('/Admin/memberRequest')->with('count7',$count7)->with('founds', $founds)->with('input1',$input1)->with('count8',$count8)->with('count9',$count9)->with('count9',$count9)->with('member',$member);
    }

      public function viewIndex(){

        $userid=Auth::user()->id;
      $founds=postFoundItem::where('status',1)->get();
       $input=postLostItem::where('status',1)->get();
        //$count=select 'founditem' as found, count(postFoundItem::where('category','Calculator')) FROM founditem UNION select 'lostitem' as lost, count(postLostItem::where('category','Calculator'));

       // $count=SELECT  (SELECT count(*) FROM founditem) + (SELECT count(*) FROM lostitem);
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
      return view('/project/index')->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6); 
      
    }
    public function approveMember($id){
      $input1=Admin::all();
       $input=postLostItem::find($id);
        $mem=User::find($id);
    $found=postFoundItem::find($id);
     User::where('id',$id)->update(['status'=>1]);

  return redirect('/project/index')->with('found',$found)->with('input',$input)->with('input1', $input1)->with('mem', $mem);
}

public function approve($id){
      $input1=Admin::all();
       $input=postLostItem::find($id);
       
    $found=postFoundItem::find($id);
     postFoundItem::where('id',$id)->update(['status'=>1]);

  return redirect('/project/index')->with('found',$found)->with('input',$input)->with('input1', $input1);
}

public function indexadminfound(){
   $input1=Admin::all();

       $userid=Auth::user()->id;
       
   $founds=postFoundItem::where('status',1)->get();
       $input=postLostItem::where('status',1)->get();
       $memb=User::all();
    
  

  return view('/Admin/indexAdmin')->with('founds',$founds)->with('input',$input)->with('input1', $input1)->with('memb', $memb);
}

}
