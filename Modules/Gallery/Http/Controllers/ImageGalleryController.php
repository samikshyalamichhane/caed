<?php

namespace Modules\Gallery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Gallery\Entities\Image as Img;
use Image;
use Modules\Gallery\Entities\ImageGallery;

class ImageGalleryController extends Controller
{

    public function index()
    {
        $details=ImageGallery::orderBy('created_at','desc')->paginate(100);
        return view('gallery::list',compact('details'));
    }

    public function create()
    {
        return view('gallery::create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            ]);
        if($request->hasfile('image')){
                    $filename = $request->image->getClientOriginalName();
                    $path = $request->image->storeAs('public/images', $filename);
                    $path = 'images/'.$filename;
                    $data=$path;
               }
               $imageGallery = new ImageGallery();
               $imageGallery->title = $request->title;
               $imageGallery->description = $request->description;
               $imageGallery->images = $data;
               $imageGallery->publish = $request->publish ? 1 : 0;
               $imageGallery->save();

        return redirect()->route('gallery.index')->with('success','Gallery Added Successfully');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $details=ImageGallery::findOrFail($id);
        return view('gallery::edit',compact('details'));
    }


    public function update(Request $request, $id)
    {
        $value=$request->except('publish','image');
        $value['publish']=is_null($request->publish) ? 0 : 1 ;;
        if($request->image){
            $filename = $request->image->getClientOriginalName();
            $path = $request->image->storeAs('public/images', $filename);

//             $oldimage = ImageGallery::findOrFail($id);
//             $thumbPath = public_path('storage');
//             unlink($thumbPath.'/'.$oldimage['images']);

            $path = 'images/'.$filename;
            $value['images']=$path;
        }
        $oldgallery = ImageGallery::findOrFail($id);
        $oldgallery->update($value);

        return redirect()->route('gallery.index')->with('success','Gallery updated Successfully');
    }


    public function destroy($id)
    {
        $images = Img::where('image_id',$id)->get();
        foreach ($images as $image){
//             $image->delete();
            unlink(storage_path('app/public/images/gallery/'.$image->image));
        }
        $galleryimage=ImageGallery::findOrFail($id);
        if($galleryimage['images']){
           unlink(storage_path('app/public/'.$galleryimage['images']));
        }
        $galleryimage->delete();


        return redirect()->route('gallery.index')->with('message','Gallery deleted successfully');

    }

}
