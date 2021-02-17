<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyProfile;

class CompanyProfileController extends Controller
{
    function imageUpload($request, $object) {
        if($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $name = 'companyLogo'.'.'.$logo->getClientOriginalExtension();
            $destination_path = public_path('assets/img');
            $logoPath = $destination_path."/".$name;
            $logo->move($destination_path, $name);
            $object->logo = $name;
            $object->save();
        }
    }

    function validator($request) {
        $validator = $request->validate([
            'company_name' => 'required | string',
            'email_one' => 'required | email | string',
            'email_two' => 'required | email | string',
            'phone_no_one' => 'required | string | min: 11 | max: 19',
            'phone_no_two' => 'required | string | min: 11 | max: 19',
            'address' => 'required | string',
            'logo' => 'file| mimes:jpg,jpeg,png|max:512'
        ]);
    }

    public function index() {
        $companyProfile = CompanyProfile::GET()->FIRST();
        return view('admin.company-profile.basic', compact('companyProfile'));
    }

    public function store(Request $request) {
        return $request->all();
        $this->validator($request);
        $check = CompanyProfile::GET();
        if(count($check) >= 1) {
            return redirect()->back()->with('Record exists, Update Instead.');
        }
        else{
            $detail = CompanyProfile::CREATE($request->all());
            $this->imageUpload($request, $detail);
            return redirect()->back()->with('Record saved successfully');
        }
    }

    public function edit($id) {
        $recordInfo = CompanyProfile::findOrFail($id);
        $companyProfile = CompanyProfile::GET()->FIRST();
        return view('admin.company-profile.basic', compact('recordInfo', 'companyProfile'));
    }

    public function update(Request $request, $id) {
        $this->validator($request);
        $recordInfo = CompanyProfile::findOrFail($id);
        $recordInfo->UPDATE($request->all());
        $this->imageUpload($request, $recordInfo);
        return redirect()->back()->with('Record updated successfully');
    }

    public function destroy() {

    }
}
