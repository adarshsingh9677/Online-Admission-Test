<?php

namespace App\Http\Controllers;

use App\Model\ExamQuestion;
use Illuminate\Http\Request;
use App\model\Student;
use App\model\Admin;
use App\model\Result;
use App\model\AllResult;
use App\model\Review;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function index(){

    }

    public function store(Request $request){


//        $pic = $request->input('student_name').rand().'.'.$request->file('student_photo')->getClientOriginalExtension();
//        $folder = "image/Student photo/";
//        $request->file('student_photo')->move($folder,$pic);
//        $des= $folder.$pic;


        $student = new Student();
        if(Input::hasFile('image')) {
            $image = Input::file('image')->store('MyImage');
            $student->student_photo_link=$image;
        }
        $student->student_name = $request->input('student_name');
        $student->student_class = $request->input('student_class');
        $student->student_roll = $request->input('student_roll');
        $student->student_email = $request->input('student_email');
        $student->student_password = $request->input('student_password');
        $student->student_father_name = $request->input('student_father_name');
        $student->student_mother_name = $request->input('student_mother_name');
        $student->student_birth_date = $request->input('student_birth_date');
        $student->student_religion = $request->input('student_religion');
        $student->student_gender = $request->input('student_gender');
        //$student->student_photo_link = $des;
        $student->save();
        session()->flash('save', 'Profile has been saved');
        $admin = admin::all();
        $review = Review::all();
        return view('super-admin.index')
            ->with('review',$review);
    }

    public function findStudent(Request $request){
        $class = $request['student_class'];
        $roll = $request['student_roll'];
        $student = DB::table('student')
            ->select('*')
            ->where('student_class','=',$class)
            ->where('student_roll','=',$roll)
            ->get();
        $admin = admin::all();
        $review = Review::all();
        return view('super-admin.view-student')
            ->with('student',$student)
            ->with('review',$review)
            ->with('admin',$admin);
    }

    public function delete($id){
    	
        $student = student::find($id);
        $student->delete();
        session()->flash('save', 'Profile has been Deleted!!');
        return redirect('/adminHome');
    }


    public function register(){
        return view('student.register');
    }

    public function postRegister(Request $request){

        $request = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'sscGpa' => 'required',
            'sscYear' => 'required',
            'hscGpa' => 'required',
            'hscYear' => 'required',
            'photo' => 'required',
        ]);
        $sscYear = $request['sscYear'];
        $hscYear = $request['hscYear'];
        $sscGpa = $request['sscGpa'];
        $hscGpa = $request['hscGpa'];
        $yearGape = $hscYear-$sscYear;
        $e = $request['email'];
        $em = DB::table('student')
        ->where(['email'=>$e])
        ->get();

        if(count($em) >0){
            return view('student.registered');
        }
        else{
            $pwd = bin2hex(openssl_random_pseudo_bytes(4));
            if($sscGpa>=2 && $hscGpa>=2){
                $student = new Student();
                $student->name = $request['name'];
                $student->email = $request['email'];
                $student->password = $pwd;
                $student->ssc_year = $request['sscYear'];
                $student->hsc_year = $request['hscYear'];
                $student->ssc_gpa = $request['sscGpa'];
                $student->hsc_gpa = $request['hscGpa'];
                $student->save();
                return view('student.success')->with('pwd',$pwd);
            }
            else{
                return view('student.sorry-massage');
            }
        }
    }

    public function exam(){
        return view('student.login');
    }

    public function postLogin(Request $request){
        $password = $request->input('tocken');

        $check = DB::table('student')->where(['password'=>$password])->get();

        if (count($check) >0){

            $questions = ExamQuestion::orderBy('id','desc')
                ->take(15)
                ->get();

            $times = DB::table('exam_question')->first();
            $time = $times->time;
            $date = $times->date;

            // $da = DB::table('exam_question')
            // ->SELECT Month('date') AS Month;
            // ->first();

            // return $da;
            //return $time;
            date_default_timezone_set('Asia/Dhaka');
            $hour =  date("H");
            $min =  date("i");

            $time = $time-$hour;

            // $date = date('m/d/Y h:i:s a', time());

            // return $date;

            if ($time>0)
                return view('student.not-started')->with('time',$time);
            else if ($time==00)
                return view('student.exam')->with('questions',$questions)->with('check',$check);
            else if ($time<0)
                return view('student.exam-end')->with('time',$time);
//            else
//                return view('student.exam')->with('questions',$questions)->with('check',$check);

            // return view('admin.home')->with('admin',$admin);
        }

        else
            return redirect('/exam');
    }

    public function postAns(Request $request){
        $mark = 0;
        $email = $request['email'];
        $questions = ExamQuestion::orderBy('id','desc')
            ->take(15)
            ->get();
        //return $questions->right_ans;

        $ans = array();

        foreach ($questions as $question){
            $ans[] = $question->right_ans;
        }
       // return $ans;

        for($i=1;$i<=15;$i++){
            if($ans[$i-1] == $request['ans'.$i]){
                $mark++;
            }
        }

        $student = DB::table('student')
            ->select('*')
            ->where('email','=',$email)
            ->get();

        foreach ($student as $student) {
            $ssc_gpa = $student->ssc_gpa;
            $hsc_gpa = $student->hsc_gpa;
            $name = $student->name;
            $ssc_year = $student->ssc_year;
            $hsc_year = $student->hsc_year;
        }

        $result = new Result();
        $result->email = $email;
        $result->mark = $mark;
        $result->ssc_gpa = $ssc_gpa;
        $result->hsc_gpa = $hsc_gpa;
        $result->name = $name;
        $result->hsc_year = $hsc_year;
        $result->ssc_year = $ssc_year;
        $result->save();

        $student = DB::table('student')
            ->select('*')
            ->where('email','=',$email)
            ->get();

            foreach ($student as $student) {
                $ssc_gpa = $student->ssc_gpa;
                $hsc_gpa = $student->hsc_gpa;
            }

        $allResult = new AllResult();
        $allResult->mark = $mark;
        $allResult->email = $email;
        $allResult->ssc_gpa = $ssc_gpa;
        $allResult->hsc_gpa = $hsc_gpa;
        //$allResult->save();

        return view('student.end-massage')->with('mark',$mark);
    }
}
