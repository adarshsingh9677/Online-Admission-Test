<?php

namespace App\Http\Controllers;

use App\model\AllResult;
use App\model\Document;
use App\model\EnglishQuestion;
use App\Model\ExamQuestion;
use App\model\Level;
use App\model\MathQuestion;
use App\model\Question;
use App\model\Review;
use App\model\Admin;
use App\model\Result;
use App\model\ScienceQuestion;
use App\model\Subject;
use Illuminate\Http\Request;
use App\model\Teacher;
use App\model\Student;
use App\model\Mark;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{

    public function teacherLoginForm(){
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return redirect('/teacherHome');
            }
        }
        return view('teacher.login');
    }

    public function login(Request $request){
        $email = $request['teacher_email'];
        $password = $request['teacher_password'];

        $check = DB::table('teacher')
            ->where(['teacher_email'=>$email,'teacher_password'=>$password])
            ->get();

        
        if (count($check) >0){
            foreach ($check as $check) {
                $valu = $check->id; 
            }

            $teacher = DB::table('teacher')
            ->where(['id'=>$valu])
            ->get();



            foreach ($teacher as $t) {
                $teacher_name = $t->teacher_name;
                $id = $t->id;
                $teacher_father_name = $t->teacher_father_name;
                $teacher_mother_name = $t->teacher_mother_name;
                $teacher_birth_date = $t->teacher_birth_date;
                $teacher_religion = $t->teacher_religion;
                $teacher_gender = $t->teacher_gender;
                $teacher_gender = $t->teacher_gender;
                $teacher_photo_link = $t->teacher_photo_link;
                $teacher_university = $t->teacher_university;
                $teacher_email = $t->teacher_email;
                $teacher_password = $t->teacher_password;
            }
            $uTeacher = Teacher::find($id);
            $uTeacher->teacher_name = $teacher_name;
            $uTeacher->teacher_father_name = $teacher_father_name;
            $uTeacher->teacher_mother_name = $teacher_mother_name;
            $uTeacher->teacher_birth_date = $teacher_birth_date;
            $uTeacher->teacher_religion = $teacher_religion;
            $uTeacher->teacher_gender = $teacher_gender;
            $uTeacher->teacher_photo_link = $teacher_photo_link;
            $uTeacher->teacher_university = $teacher_university;
            $uTeacher->teacher_email = $teacher_email;
            $uTeacher->teacher_password = $teacher_password;
            $uTeacher->log_in = '1';
            $uTeacher->save();


            return redirect('/teacherHome');
        }

        else
            session()->flash('save', 'Invalid Input');
        return redirect('/teacherLoginForm');
    }
    public function index(){
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return view ('teacher.index');
            }
        }
        return view('teacher.login');
    }
    public function setQuestions(){
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {         
                return view('teacher.set-question');
            }
        }
        return view('teacher.login');
    }

    public function postQuestion (Request $request){

        $request = $request->validate([
            'subject_id' => 'required',
            //'number_of_question' => 'required|max:2',
        ]);

        $subject_id = $request['subject_id'];
        $q_no = 1;//$request['number_of_question'];
        $info = Teacher::all();

        return view('teacher.submit-question')
            ->with('subject_id',$subject_id)
            ->with('q_no',$q_no)
            ->with('info',$info);

    }
    public function postSubmitQuestion(Request $request){
        $sub_id = $request['subject_id'];
        $n = $request['number_of_question'];
        $info = Teacher::all();
        if($sub_id==2){
            for ($a=1;$a<$n+1;$a++){
                $question = new EnglishQuestion();
                $question->question = $request['question'.$a];
                $question->choice_1 = $request['choice_1'.$a];
                $question->choice_2 = $request['choice_2'.$a];
                $question->choice_3 = $request['choice_3'.$a];
                $question->choice_4 = $request['choice_4'.$a];
                $question->right_ans = $request['right_ans'.$a];
                $question->level = $request['level'.$a];
                $question->save();
            }
            return view('teacher.index')->with('info',$info);
        }
        if($sub_id==7){
            for ($a=1;$a<$n+1;$a++){
                $question = new MathQuestion();
                $question->question = $request['question'.$a];
                $question->choice_1 = $request['choice_1'.$a];
                $question->choice_2 = $request['choice_2'.$a];
                $question->choice_3 = $request['choice_3'.$a];
                $question->choice_4 = $request['choice_4'.$a];
                $question->right_ans = $request['right_ans'.$a];
                $question->level = $request['level'.$a];
                $question->save();
            }
            return view('teacher.index')->with('info',$info);
        }
        if($sub_id==8){
            for ($a=1;$a<$n+1;$a++){
                $question = new ScienceQuestion();
                $question->question = $request['question'.$a];
                $question->choice_1 = $request['choice_1'.$a];
                $question->choice_2 = $request['choice_2'.$a];
                $question->choice_3 = $request['choice_3'.$a];
                $question->choice_4 = $request['choice_4'.$a];
                $question->right_ans = $request['right_ans'.$a];
                $question->level = $request['level'.$a];
                $question->save();
            }
            return view('teacher.index')->with('info',$info);
        }

    }

    public function startExam(Request $request)
    {

        ExamQuestion::truncate();
        //Result::truncate();

        $request = $request->validate([
            'level' => 'required',
            'hour' => 'required|max:2',
            'date' => 'required',
        ]);

        $level = $request['level'];
        $time = $request['hour'];
        $date = $request['date'];

        //return $date;
        if ($level == 1) {

            //For English
            $english1 = DB::table('english_questions')
                ->where('level', '=', 1)
                ->inRandomOrder()
                ->take(3)
                ->get();
            foreach ($english1 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->time = $time;
                $examQuestion->date = $date;
                $examQuestion->save();
            }
            //print_r($english1);

            $english2 = DB::table('english_questions')
                ->where('level', '=', 2)
                ->inRandomOrder()
                ->take(1)
                ->get();

            foreach ($english2 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
            //print_r($english2);

            $english3 = DB::table('english_questions')
                ->where('level', '=', 3)
                ->inRandomOrder()
                ->take(1)
                ->get();

            foreach ($english3 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
            //print_r($english3);

            //For Math
            $math1 = DB::table('math_questions')
                ->where('level', '=', 1)
                ->inRandomOrder()
                ->take(3)
                ->get();

            foreach ($math1 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
            //print_r($math1);

            $math2 = DB::table('math_questions')
                ->where('level', '=', 2)
                ->inRandomOrder()
                ->take(1)
                ->get();
            foreach ($math2 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
            //print_r($math2);

            $math3 = DB::table('math_questions')
                ->where('level', '=', 3)
                ->inRandomOrder()
                ->take(1)
                ->get();

            foreach ($math3 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
           // print_r($math3);
            //For Science
            $science1 = DB::table('science_questions')
                ->where('level', '=', 1)
                ->inRandomOrder()
                ->take(3)
                ->get();

            foreach ($science1 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
           // print_r($science1);

            $science2 = DB::table('science_questions')
                ->where('level', '=', 2)
                ->inRandomOrder()
                ->take(1)
                ->get();
            foreach ($science2 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
            //print_r($science2);

            $science3 = DB::table('science_questions')
                ->where('level', '=', 3)
                ->inRandomOrder()
                ->take(1)
                ->get();
            foreach ($science3 as $e){
                $id =  $e->id;
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $e->question;
                $examQuestion->choice_1 = $e->choice_1;
                $examQuestion->choice_2 = $e->choice_2;
                $examQuestion->choice_3 = $e->choice_3;
                $examQuestion->choice_4 = $e->choice_4;
                $examQuestion->right_ans = $e->right_ans;
                $examQuestion->save();
            }
           // print_r($science3);
        }

            if ($level == 2) {
                //For English
                $english1 = DB::table('english_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($english1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->time = $time;
                    $examQuestion->save();
                }
                //print_r($english1);

                $english2 = DB::table('english_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($english2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($english2);

                $english3 = DB::table('english_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($english3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($english3);

                //For Math
                $math1 = DB::table('math_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($math1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($math1);

                $math2 = DB::table('math_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($math2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($math2);

                $math3 = DB::table('math_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($math3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($math3);
                //For Science
                $science1 = DB::table('science_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($science1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($science1);

                $science2 = DB::table('science_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($science2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($science2);

                $science3 = DB::table('science_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($science3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //print_r($science3);
            }

            if ($level == 3) {
                //For English
                $english1 = DB::table('english_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($english1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->time = $time;
                    $examQuestion->save();
                }
                //print_r($english1);

                $english2 = DB::table('english_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($english2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                $english3 = DB::table('english_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($english3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                //For Math
                $math1 = DB::table('math_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($math1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                $math2 = DB::table('math_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($math2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                $math3 = DB::table('math_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($math3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }
                //For Science
                $science1 = DB::table('science_questions')
                    ->where('level', '=', 3)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                foreach ($science1 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                $science2 = DB::table('science_questions')
                    ->where('level', '=', 2)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($science2 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

                $science3 = DB::table('science_questions')
                    ->where('level', '=', 1)
                    ->inRandomOrder()
                    ->take(1)
                    ->get();
                foreach ($science3 as $e){
                    $id =  $e->id;
                    $examQuestion = new ExamQuestion();
                    $examQuestion->question = $e->question;
                    $examQuestion->choice_1 = $e->choice_1;
                    $examQuestion->choice_2 = $e->choice_2;
                    $examQuestion->choice_3 = $e->choice_3;
                    $examQuestion->choice_4 = $e->choice_4;
                    $examQuestion->right_ans = $e->right_ans;
                    $examQuestion->save();
                }

            }


            return redirect('teacherHome');
    }

    public function distance ($x1,$y1,$x2,$y2){
        $result = sqrt(pow(($x1-$x2),2)+pow(($y1-$y2),2));
        return $result;
    }

    public function accurecy(){
        $train = 0;
        $test = 0;
        $ka = 0;
        $trainData = AllResult::all();
        $testData = Result::all();

        $sscGpaTrain = array();
        $hscGpaTrain = array();
        $sscGpaTest = array();
        $hscGpaTest = array();
        $distance = array();
        $rank = array();
        $rankFinal = array();
        $mark = array();
        //$markTest = array();

        foreach ($trainData as $trainData){
            $sscGpaTrain[] = $trainData->ssc_gpa;
            $hscGpaTrain[] = $trainData->hsc_gpa;
            $mark[] = $trainData->mark;
            $train++;

        }

        foreach ($testData as $testData){
            $sscTest = $testData->ssc_gpa;
            $hscTest = $testData->hsc_gpa;
            $markTest = $testData->mark;
            $test++;

            for ($i=0;$i<$train;$i++){
                $distance[] = self::distance($sscGpaTrain[$i], $hscGpaTrain[$i],$sscTest,$hscTest);
                $rank[] = $i+1;
            }

            for($k=1; $k<=$train; $k++)
                for($l=0; $l<($train-$k); $l++)
                    if($distance[$l]>$distance[$l+1])
                    {
                        $temp=$distance[$l];
                        $distance[$l]=$distance[$l+1];
                        $distance[$l+1]=$temp;

                        $temp = $rank[$l];
                        $rank[$l] = $rank[$l+1];
                        $rank[$l+1] = $temp;
                    }

            for($k=0; $k<$train; $k++){
                if ($rank[$k]<=3)
                    $rankFinal[] = 1;
                else
                    $rankFinal[] = 0;
            }
            $result = 0;
            $result1 = 0;
            for($k=0; $k<$train; $k++){
                if ($rankFinal[$k]==1){
                    if ($mark[$k]>9){
                        $result++;
                    }
                    else
                        $result1++;
                }
            }

            if ($result<$result1){

                if ($markTest<9)
                    $k++;

            }
            else
                if ($markTest>9)
                    $ka++;

        }
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
            //return $ka;         
                return view('teacher.accuracy')
                ->with('no',$ka)
                ->with('test',$test);
            }
        }
        return view('teacher.login');
    }

    public function studentResult(){
        //$result = Result::all();


        $result = DB::table('result')
            ->orderBy('mark', 'desc')
            ->take(50)
            ->get();
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {         
                return view('teacher.student-result')
                ->with('result',$result);
            }
        }
        return view('teacher.login');
        
    }

    public function profileInfo(){
        $info = Teacher::all();
        return view('teacher.details')
            ->with('info',$info);
    }

    public function logOut(){
        $log = Teacher::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                $id = $log->id;
            }
        }

        $teacher = DB::table('teacher')
            ->where(['id'=>$id])
            ->get();

            foreach ($teacher as $t) {
                $teacher_name = $t->teacher_name;
                $id = $t->id;
                $teacher_father_name = $t->teacher_father_name;
                $teacher_mother_name = $t->teacher_mother_name;
                $teacher_birth_date = $t->teacher_birth_date;
                $teacher_religion = $t->teacher_religion;
                $teacher_gender = $t->teacher_gender;
                $teacher_gender = $t->teacher_gender;
                $teacher_photo_link = $t->teacher_photo_link;
                $teacher_university = $t->teacher_university;
                $teacher_email = $t->teacher_email;
                $teacher_password = $t->teacher_password;
            }
            $uTeacher = Teacher::find($id);
            $uTeacher->teacher_name = $teacher_name;
            $uTeacher->teacher_father_name = $teacher_father_name;
            $uTeacher->teacher_mother_name = $teacher_mother_name;
            $uTeacher->teacher_birth_date = $teacher_birth_date;
            $uTeacher->teacher_religion = $teacher_religion;
            $uTeacher->teacher_gender = $teacher_gender;
            $uTeacher->teacher_photo_link = $teacher_photo_link;
            $uTeacher->teacher_university = $teacher_university;
            $uTeacher->teacher_email = $teacher_email;
            $uTeacher->teacher_password = $teacher_password;
            $uTeacher->log_in = '0';
            $uTeacher->save();


        return view('teacher.login');
    }


}