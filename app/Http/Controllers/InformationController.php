<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class InformationController extends Controller
{

    public function index()
    {
        $data = Information::paginate(10);
        return view('admin.information.index',[
            'data'=>$data
        ]);
    }


    public function create()
    {
        return view('admin.information.create');
    }


    public function store(Request $request)
    {
        $data = new Information();

        $information = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>'required',
            'image'=>'required',
        ],[
            'title.required'=>"Iltimos ma'lumot sarlavhasini kiriting.",
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'image.required'=>"Iltimos ma'lumot haqida rasm yuklang.",
            'file.required'=>"Iltimos ma'lumot haqida fayl yuklang."

        ]);

        $data->title = $information['title'];
        $data->description = $information['description'];


        $imagename = $request->file('image')->getClientOriginalName();
        $request->image->move('information',$imagename);
        $data->image = $imagename;



        $filename = $request->file('file')->getClientOriginalName();
        $request->file->move('information', $filename);
        $data->file = $filename;


        $data->save();

        return redirect()->route('admin.information');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = Information::find($id);
        return view('admin.information.edit',[
            'information'=>$data
        ]);
    }


    public function update(Request $request, Information $information)
    {


        $information->title = $request->title;
        $information->description = $request->description;

        if ($request->image != null) {

            $image_path = public_path("information/{$information->image}");

            if (Information::exists($image_path)) {
                File::delete($image_path);
            }

            $imagename = $request->file('image')->getClientOriginalName();
            $request->image->move('information', $imagename);
            $information->image = $imagename;
        };

        if ($request->file != null) {

            $image_path = public_path("information/{$information->file}");

            if (Information::exists($image_path)) {
                File::delete($image_path);
            }

            $filename = $request->file('file')->getClientOriginalName();
            $request->file->move('information', $filename);
            $information->file = $filename;
        };

        $information->save();

        return redirect()->route('admin.information');
    }


    public function destroy(Information $information)
    {
        $image_path = public_path("information/{$information->image}");

        if (Information::exists($image_path)) {
            File::delete($image_path);
        }

        $file_path = public_path("information/{$information->file}");

        if (Information::exists($file_path)) {
            File::delete($file_path);
        }

        $information->delete();

        return redirect()->route('admin.information');
    }
}
