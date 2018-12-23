<?php

namespace App\Http\Controllers;

use App\model\admin;
use App\model\Level;
use App\model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\Teacher;

class AdminController extends Controller
{

    public function adminLogin(){
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return redirect('/adminHome');
            }
        }
        return view('super-admin.login');
    }

    public function viewHome(){
        $admin = admin::all();
        $review = Review::all();
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return view('super-admin.index')
                ->with('review',$review)
                ->with('admin',$admin);
            }
        }
        return view('super-admin.login');
    }


    public function login (request $request)
    {
        $email = $request->input('adminEmail');
        $password = $request->input('adminPassword');

        $check = DB::table('admins')->where(['admin_email'=>$email,'admin_password'=>$password])->get();

        if (count($check) >0){

           foreach ($check as $check) {
                $valu = $check->id; 
            }

            $admin = DB::table('admins')
            ->where(['id'=>$valu])
            ->get();

            foreach ($admin as $t) {
                $admin_name = $t->admin_name;
                $id = $t->id;
                $admin_email = $t->admin_email;
                $admin_password = $t->admin_password;
            }
            $uTeacher = Admin::find($id);
            $uTeacher->admin_name = $admin_name;
            $uTeacher->admin_email = $admin_email;
            $uTeacher->admin_password = $admin_password;
            $uTeacher->log_in = '1';
            $uTeacher->save();
            return redirect('/adminHome');

           // return view('admin.home')->with('admin',$admin);
        }

        else
            return redirect('/super');
    }

    public function addTeacher(){
        $admin = admin::all();
        $review = Review::all();
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return view('super-admin.add-teacher')
                ->with('review',$review)
                ->with('admin',$admin);
            }
        }
        return view('super-admin.login');
        //return view('super-admin.add-teacher');
    }
    /////////////////////////////
    ///
    public function store(Request $request)
    {

        $request->validate([
            'teacher_name' => 'required',
            'teacher_father_name' => 'required',
            'teacher_mother_name' => 'required',
            'teacher_birth_date' => 'required',
            'teacher_religion' => 'required',
            'teacher_gender' => 'required',
            'teacher_university' => 'required',
            'teacher_email' => 'required',
            'teacher_password' => 'required',
        ]);

        $pic = $request->input('teacher_name') . rand() . '.' . $request->file('teacher_photo_link')->getClientOriginalExtension();
        $folder = "image/Teacher photo/";
        $request->file('teacher_photo_link')->move($folder, $pic);
        $des = $folder . $pic;
        $teacher = new Teacher();
        $teacher->teacher_name = $request->input('teacher_name');
        $teacher->teacher_cgpa = $request->input('teacher_cgpa');
        $teacher->teacher_university = $request->input('teacher_university');
        $teacher->teacher_email = $request->input('teacher_email');
        $teacher->teacher_password = $request->input('teacher_password');
        $teacher->teacher_father_name = $request->input('teacher_father_name');
        $teacher->teacher_mother_name = $request->input('teacher_mother_name');
        $teacher->teacher_birth_date = $request->input('teacher_birth_date');
        $teacher->teacher_religion = $request->input('teacher_religion');
        $teacher->teacher_gender = $request->input('teacher_gender');
        $teacher->teacher_photo_link = $des;
        $teacher->save();
        session()->flash('save', 'Profile has been saved');
        return redirect('/adminHome');
    }
    public function viewTeachers(){
        $teachers = Teacher::all();
        $admin = admin::all();
        $review = Review::all();
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return view('super-admin.view-teaches')
                 ->with('teachers',$teachers)
                ->with('review',$review)
                ->with('admin',$admin);
                }
            }
            return view('super-admin.login');
        }

    public function detailsTeacher($id){
        $teacher = Teacher::find($id);
        $admin = admin::all();
        $review = Review::all();
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                return view('super-admin.details-teacher')
                ->with('teacher',$teacher)
                ->with('review',$review)
                ->with('admin',$admin);
                }
            }
            return view('super-admin.login');
    }

    public function updateTeacher(Request $request){
        $id = $request['id'];
        $teacher = Teacher::find($id);
        $teacher->teacher_name = $request->input('teacher_name');
        $teacher->teacher_cgpa = $request->input('teacher_cgpa');
        $teacher->teacher_university = $request->input('teacher_university');
        $teacher->teacher_email = $request->input('teacher_email');
        $teacher->teacher_password = $request->input('teacher_password');
        $teacher->teacher_father_name = $request->input('teacher_father_name');
        $teacher->teacher_mother_name = $request->input('teacher_mother_name');
        $teacher->teacher_birth_date = $request->input('teacher_birth_date');
        $teacher->teacher_religion = $request->input('teacher_religion');
        $teacher->teacher_gender = $request->input('teacher_gender');
        $teacher->save();
        session()->flash('save', 'Teacher Updated!!');
        return redirect('adminHome');
    }

    public function deleteTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->delete();
        $admin = admin::all();
        $review = Review::all();
        session()->flash('save', 'Teacher Deleted!!');
        return view('super-admin.index')
            ->with('review',$review)
            ->with('admin',$admin);
    }

    public function adminLogOut(){
        $log = Admin::all();
        foreach ($log as $log) {
            $data = $log->log_in;
            if ($data=='1') {
                $id = $log->id;

            $admin = DB::table('admins')
            ->where(['id'=>$id])
            ->get();

            foreach ($admin as $t) {
                $admin_name = $t->admin_name;
                $id = $t->id;
                $admin_email = $t->admin_email;
                $admin_password = $t->admin_password;
            }
            $uTeacher = Admin::find($id);
            $uTeacher->admin_name = $admin_name;
            $uTeacher->admin_email = $admin_email;
            $uTeacher->admin_password = $admin_password;
            $uTeacher->log_in = '0';
            $uTeacher->save();
            return redirect('/super');
            }
        }
    }
}
