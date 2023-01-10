<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{

    public function index()
    {
        $data = Course::paginate(10);
        return view('admin.courses.index',[
            'courses'=>$data
        ]);
    }



    public function create()
    {
        return view('admin.courses.create');
    }


    public function store(Request $request)
    {
        $data = new Course();

        $course = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>'required'
        ],[
            'title.required'=>'Iltimos kurs nomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'file.required'=>'Iltimos kurs faylini yuklang.'
        ]);

        $data->category = $request->category;
        $data->title_uz = $course['title'];
        $data->description = $course['description'];

        $filename = $request->file('file')->getClientOriginalName();
        $request->file->move('courses', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.course');
    }



    public function edit(Request $request, Course $course)
    {
        return view('admin.courses.edit',[
            'course'=>$course,
        ]);
    }


    public function update(Request $request, Course $course)
    {
        $course->title_uz= $request->title;
        $course->description = $request->description;
        $course->category = $request->category;

        if ($request->file != null) {

            $image_path = public_path("courses/{$course->file}");

            if (Course::exists($image_path)) {
                File::delete($image_path);
            }

            $filename = $request->file('file')->getClientOriginalName();
            $request->file->move('courses', $filename);
            $course->file = $filename;
        }

        $course->save();

        return redirect()->route('admin.course');
    }


    public function destroy(Course $course)
    {
        $image_path = public_path("courses/{$course->file}");

        if (Course::exists($image_path)) {
            File::delete($image_path);
        }

        $course->delete();
        return redirect()->route('admin.course');
    }
}
