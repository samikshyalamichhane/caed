<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Gallery\Entities\Image;
use Modules\Gallery\Entities\ImageGallery;

class GalleryController extends Controller
{
    public function galleries(){
        $galleries = ImageGallery::where('publish',1)->get();
        return view('frontend::gallerylist',compact('galleries'));

    }

    public function galleryInner($slug){
        $gallery = ImageGallery::where('slug',$slug)->first();
        $images = Image::where('image_id',$gallery->id)->get();
        return view('frontend::galleryinner',compact('gallery','images'));
    }
}
