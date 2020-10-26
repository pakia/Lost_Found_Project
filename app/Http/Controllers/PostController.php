<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postLostItem;
use App\postFoundItem;
use Auth;
use App\User;

class PostController extends Controller
{
    public function search(Request $request){

    	$search=$request->get('s');
    	$results=postFoundItem::where('category','Like','%'.$search.'%')->get();
    	$resultFound=postLostItem::where('category','Like','%'.$search.'%')->get();
    	

    	return view('/project/result')->with('results',$results)->with('resultFound',$resultFound);
    }
     public function catCalculator(Request $request){

    	
    	$results=postFoundItem::where('category','Calculator')->get();
    	$resultFound=postLostItem::where('category','Calculator')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
       
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
    	

    	return view('/project/calculator')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }
    public function catClearance(Request $request){

    	
    	$results=postFoundItem::where('category','Clearance')->get();
    	$resultFound=postLostItem::where('category','Clearance')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
        
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
    	

    	return view('/project/clearance')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }

    public function catIdcard(Request $request){

    	
    	$results=postFoundItem::where('category','Id Card')->get();
    	$resultFound=postLostItem::where('category','Id Card')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
       
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
    	

    	return view('/project/idcard')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }

     public function catMobile(Request $request){

    	
    	$results=postFoundItem::where('category','Mobile')->get();
    	$resultFound=postLostItem::where('category','Mobile')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
        
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
    	

    	return view('/project/mobile')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }


 


 public function catOthers(Request $request){

    	
    	$results=postFoundItem::where('category','Others')->get();
    	$resultFound=postLostItem::where('category','Others')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
        
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
    	

    	return view('/project/others')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }


 public function catPendrive(Request $request){

    	
    	$results=postFoundItem::where('category','Pendrive')->get();
    	$resultFound=postLostItem::where('category','Pendrive')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
        
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
    	

    	return view('/project/pendrive')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }


       
 public function catWalet(Request $request){

    	
    	$results=postFoundItem::where('category','Walet')->get();
    	$resultFound=postLostItem::where('category','Walet')->get();

    	 $userid=Auth::user()->id;
      $founds=postFoundItem::where('u_id',$userid)->get();
       $input=postLostItem::where('usr_id',$userid)->get();
      
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
    	

    	return view('/project/idcard')->with('results',$results)->with('resultFound',$resultFound)->with('founds', $founds)->with('input', $input)->with('count', $count)->with('count1', $count1)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with('count5', $count5)->with('count6', $count6);
    }


 


}
