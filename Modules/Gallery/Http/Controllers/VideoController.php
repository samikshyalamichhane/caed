<?php

namespace Modules\Gallery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Gallery\Entities\Video;

class VideoController extends Controller
{
        public function index()
    {

    }

    public function create($id)
    {
        $videos = Video::where('video_id',$id)->get();
        return view('gallery::video.addvideos',['id'=>$id, 'videos'=>$videos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'video'=>'required',
        ]);
        $videos = new Video();
        $videos->video_id = $request->video_id;
        $video_link = $this->getYoutubeEmbedUrl($request->video);
        $videos->video = $video_link;
        $videos->publish = $request->publish ? 1 : 0;
        $videos->save();
        return redirect()->back()->with('success','Gallery Images Added Successfully');
    }

    public function show($id)
    {
        return view('gallery::show');
    }

    public function edit($id)
    {
        return view('gallery::edit');
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()->back()->with('success','Gallery image deleted successfully');
    }

    function getYoutubeEmbedUrl($url){
     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
    }
}
