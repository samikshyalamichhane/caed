<?php

namespace Modules\Gallery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Gallery\Entities\Image;

class ImageController extends Controller
{

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create($id)
    {
        $images = Image::where('image_id',$id)->get();
        return view('gallery::addimages',['id'=>$id, 'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
        ]);

        if($request->has('image')){
            foreach($request->image as $img){
                $file = $img;
                $images = new Image();
                $filename = $file->getClientOriginalName();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/images/gallery', $filename);
                $images->image = $filename;
                $images->image_id = $request->id;
                $images->publish = $request->publish ? 1 : 0;
                $images->save();
            }
        }
        return redirect()->route('gallery.index')->with('success','Gallery Images Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('gallery::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('gallery::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        unlink(storage_path('app/public/images/gallery/'.$image->image));
        return redirect()->back()->with('success','Gallery image deleted successfully');
    }
}
