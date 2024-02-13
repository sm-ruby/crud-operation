<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function index(){
        return view('Student.createStudent');
    }

    public function store_student(Request $request){
        $data_insert= Student :: create([
            "name" => $request->name,
            "roll" => $request->roll,
            "age" => $request->age,
            "gender" => $request->gender,
            "phone" => $request->phone,
            "district" => $request->district,
            "created_by" => Auth::user()->id,
        ]);
        return redirect()->route('student.list');
    }

    public function student_list(){
        $students=Student::all();
        return view('Student.studentList',compact('students'));
    }

    public function student_edit($id){
        $student=Student::find($id);
        return view('Student.studentEdit',compact('student','id'));
    }

    public function student_update(Request $request,$id){
        $data=Student::find($id);
        $data->name=$request->name;
        $data->roll=$request->roll;
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->phone=$request->phone;
        $data->district=$request->district;
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('student.list',$id);
    }

    public function student_delete($id){
        $data=Student::find($id);
        $data->delete();
        return redirect()->route('student.list',$id);
    }
}
