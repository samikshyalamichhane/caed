<?php

namespace Modules\Gallery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\Gallery\Entities\VideoGallery;
use Illuminate\Support\Facades\Storage;
use Modules\Gallery\Entities\Video;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class VideoGalleryController extends Controller
{
    public function index()
    {
        $details=VideoGallery::orderBy('created_at','desc')->paginate(100);
        return view('gallery::video.list',compact('details'));
    }

    public function create()
    {
        return view('gallery::video.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'video'=>'required',
            ]);
           $videoGallery = new VideoGallery();
           $videoGallery->title = $request->title;
           $videoGallery->description = $request->description;
           $videoGallery->thumbnail_video = $this->getYoutubeEmbedUrl($request->video);;
           $videoGallery->publish = $request->publish ? 1 : 0;
           $videoGallery->save();

        return redirect()->route('video.index')->with('success','Video Gallery Added Successfully');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $details=VideoGallery::findOrFail($id);
        return view('gallery::video.edit',compact('details'));
    }


    public function update(Request $request, $id)
    {
        $value=$request->except('publish','video');
        $value['publish']=is_null($request->publish) ? 0 : 1 ;
        $value['thumbnail_video']= $this->getYoutubeEmbedUrl($request->video);
        $oldgallery = VideoGallery::findOrFail($id);
        $oldgallery->update($value);

        return redirect()->route('video.index')->with('success','Video Gallery updated Successfully');
    }


    public function destroy($id)
    {
;
        $galleryvideo=VideoGallery::findOrFail($id);
        $galleryvideo->delete();
        return redirect()->route('video.index')->with('message','Video Gallery deleted successfully');

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
