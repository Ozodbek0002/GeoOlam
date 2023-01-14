<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $data = Video::paginate(4);
        return view('admin.videos.index',[ 'data' => $data ]);
    }


    public function create()
    {
        return view('admin.videos.create');
    }


    public function store(Request $request)
    {
        $data = new Video();
        $data->name = $request->name;

        $url = $request->url;
        $ss="";
        $youtube = "https://www.youtube.com/embed/";
        for ( $i = strlen($url)-1; $i>0; $i-- ){
            if ($url[$i]=='/'){
                break;
            }
            $ss=$url[$i].$ss;

        }
        $youtube.=$ss;

        $data->url = $youtube;

        $data->save();

        return redirect()->route('admin.videos');
    }


    public function show(Video $video)
    {
        //
    }


    public function edit(Video $video)
    {
        return view('admin.videos.edit', [
            'data' => $video,
        ]);
    }


    public function update(Request $request, Video $video)
    {

        $video->name = $request->name;
        if ($request->url != null) {

            $url = $request->url;
            $ss="";
            $youtube = "https://www.youtube.com/embed/";
            for ( $i = strlen($url)-1; $i>0; $i-- ){
                if ($url[$i]=='/'){
                    break;
                }
                $ss=$url[$i].$ss;

            }
            $youtube.=$ss;

            $video->url = $youtube;

        }
        $video->save();

        return redirect()->route('admin.videos');
    }


    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos');
    }
}
