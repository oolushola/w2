<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    function imageUpload($request, $object, $imageFor) {
        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = str_slug($request->headline).'.'.$photo->getClientOriginalExtension();
            $imageType = $imageFor == 1 ? 'sliders' : 'general';
            $destination_path = public_path('assets/img/'.$imageType.'');
            $photoPath = $destination_path."/".$name;
            $photo->move($destination_path, $name);
            $object->photo = $name;
            $object->save();
        }
    }

    function validator($request) {
        $validator = $request->validate([
            'image_for' => 'required|min:1|max:2',
            'headline' => 'string',
            'caption' => 'string',
            'photo' => 'required|file| mimes:png,jpg,jpeg| max:512'
        ]);
    }

    public function index() {
        return view('admin.gallery.gallery');
    }

    public function store(Request $request) {
        $validator = $this->validator($request);
        $checkImage = Gallery::WHERE('image_for', $request->image_for)->WHERE('headline', $request->headline)->exists();
        if($checkImage) {
            return back()->with('Record already exists.');
        }
        else{
            $galleryInfo = Gallery::CREATE($request->all());
            $this->imageUpload($request, $galleryInfo, $request->image_for);
            return back()->with('Record saved successfully');
        }
    }

    public function edit($id) {

    }

    public function update(Request $request) {

    }

    public function destroy($id) {

    }
}
