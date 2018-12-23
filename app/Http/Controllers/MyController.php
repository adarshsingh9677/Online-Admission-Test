<?php

namespace App\Http\Controllers;

use App\model\Level;
use App\model\Review;
use App\model\Admin;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        return view('virtual-school');
    }

    // public function adminLogin(){
    //     return view('super-admin.login');
    // }

    public function searchStudent(){
        $admin = admin::all();
        $review = Review::all();
        $class = Level::all();
        return view('super-admin.search-student')
            ->with('review',$review)
            ->with('class',$class);
        //return view('super-admin.search-student');
    }

    public function postReview(Request $request){
        $review = new Review();
        $review->name = $request['name'];
        $review->email = $request['email'];
        $review->number = $request['number'];
        $review->massage = $request['massage'];
        $review->save();
        return redirect('/vs');
    }

    public function demo(){
        date_default_timezone_set('Asia/Dhaka');
       $hour =  date("H");
       $sec =  date("i");
//       if ($hour>12)
//       return $hour."  ".$sec;
//       else
           return $hour;
    }


    
}
