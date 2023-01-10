<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slide::paginate(10);
        return view('admin.slides.index',[
            'slides'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Slide();

        $slide = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'file'=>'required',
        ],[
            'title.required'=>'Iltimos slayd nomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'image.required'=>'Iltimos rasm yuklang.',
            'file.required'=>'Iltimos slayd faylini yuklang.'
        ]);

        $data->title = $slide['title'];
        $data->description = $slide['description'];
        $data->category = $request->category;

        $imagename = $request->file('image')->getClientOriginalName();
        $request->image->move('slides', $imagename);
        $data->image = $imagename;

        $filename = $request->file('file')->getClientOriginalName();
        $request->file->move('slides', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.slides');

    }



    public function show(Slide $slide)
    {
        //
    }



    public function edit(Slide $slide)
    {
        return view('admin.slides.edit',[
            'slide'=>$slide
        ]);
    }



    public function update(Request $request, Slide $slide)
    {
        $slide->title = $request->title;
        $slide->description = $request->description;

        if ($request->image != null) {

            $image_path = public_path("slides/{$slide->image}");

            if (Slide::exists($image_path)) {
                File::delete($image_path);
            }

            $imagename = $request->file('image')->getClientOriginalName();
            $request->image->move('slides', $imagename);
            $slide->image = $imagename;
        };

        if ($request->file != null) {

            $image_path = public_path("slides/{$slide->file}");

            if (Slide::exists($image_path)) {
                File::delete($image_path);
            }

            $filename = $request->file('file')->getClientOriginalName();
            $request->file->move('slides', $filename);
            $slide->file = $filename;
        };

        $slide->save();
        return redirect()->route('admin.slides');
    }


    public function destroy(Slide $slide)
    {
        $image_path = public_path("slides/{$slide->file}");
        $file_path = public_path("slides/{$slide->image}");

        if (Slide::exists($image_path)) {
            File::delete($image_path);
        }
        if (Slide::exists($file_path)) {
            File::delete($file_path);
        }

        $slide->delete();
        return redirect()->route('admin.slides');
    }
}
