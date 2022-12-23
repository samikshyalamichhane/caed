<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Gallery\Entities\Image;
use Modules\Gallery\Entities\ImageGallery;
use SEOMeta;

class GalleryController extends Controller
{
    public function galleries(){
        $galleries = ImageGallery::where('publish',1)->get();
        SEOMeta::setTitle('Gallery List');
        SEOMeta::setDescription('Gallery List');
        SEOMeta::setCanonical(url()->current());
        // SEOMeta::addMeta('article:published_time', $page->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword('Gallery List');
        return view('frontend::gallerylist',compact('galleries'));

    }

    public function galleryInner($slug){
        $gallery = ImageGallery::where('slug',$slug)->first();
        SEOMeta::setTitle($gallery->meta_title);
        SEOMeta::setDescription($gallery->meta_description);
        SEOMeta::setCanonical(url()->current());
        SEOMeta::addMeta('article:published_time', $gallery->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($gallery->keyword);
        $images = Image::where('image_id',$gallery->id)->get();
        return view('frontend::galleryinner',compact('gallery','images'));
    }
}
