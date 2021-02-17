<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class FeedbackController extends Controller
{
    function imageUpload($request, $object) {
        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = str_slug($request->full_name).'.'.$photo->getClientOriginalExtension();
            $destination_path = public_path('assets/img/testimonial');
            $photoPath = $destination_path."/".$name;
            $photo->move($destination_path, $name);
            $object->photo = $name;
            $object->save();
        }
    }

    function validator($request) {
        $validator = $request->validate([
            'full_name' => 'required | string',
            'designation' => 'required | string',
            'comment' => 'required |  string',
            'photo' => 'file| mimes:jpg,jpeg,png|max:512'
        ]);
    }

    public function index() {
        $testimonials = Testimonial::GET();
        return view('admin.testimonial.feedback', compact('testimonials'));
    }

    public function store(Request $request) {
        $this->validator($request);
        $check = Testimonial::WHERE('full_name', $request->full_name)->exists();
        if($check) {
            return redirect()->back()->with('Record already exists.');
        }
        else{
            $testimonial = Testimonial::CREATE($request->all());
            $this->imageUpload($request, $testimonial);
            return redirect()->back()->with('Record saved successfully.');
        }
    }

    public function edit($id) {
        $testimonials = Testimonial::GET();
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.feedback', compact('testimonials', 'testimonial'));
    }

    public function update(Request $request, $id) {
        $this->validator($request);
        $check = Testimonial::WHERE('full_name', $request->full_name)->WHERE('id', '!=', $id)->exists();
        if($check) {
            return redirect()->back()->with('Record already exists.');
        }
        else{
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->UPDATE($request->all());
            $this->imageUpload($request, $testimonial);
            return redirect()->back()->with('Record updated successfully.');
        }
    }
}
