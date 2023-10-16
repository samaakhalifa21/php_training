<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //show all courses
    public function index(){
       // $courses=Course::all();
       $courses=Course::orderBy('id','desc')->simplePaginate(12);

        return view('pages.courses',compact('courses'));

    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:22',
            'price'=>'required',
            'instructor'=>'required',
            'desc'=>'required']);
            $course=new Course();
            $course->title=$request->title;
            $course->price=$request->price;
            $course->instructor=$request->instructor;
            $course->desc=$request->desc;
            $course->save();
            return redirect('/courses'); 

    }
    public function show($id){
        $course=Course::find($id);
        return view('pages.details',compact('course'));
    }
     public function create(){
        
            return view('pages.create');
        
     }

     public function edit($id){
        $course=course::find($id);
        return view('pages.edit', compact('course'));
     }
       
      public function update(Request $request , $id){
        $request->validate([
            'title'=>'required|max:22',
            'price'=>'required',
            'instructor'=>'required',
            'desc'=>'required']);
            $course=Course::find($id);
            $course->title=$request->title;
            $course->price=$request->price;
            $course->instructor=$request->instructor;
            $course->desc=$request->desc;
            $course->save();

            return redirect('/courses');
      }

      public function destroy($id){
        $course=course::find($id);
     $course->delete();
     return redirect('/courses');
     }
    
}
