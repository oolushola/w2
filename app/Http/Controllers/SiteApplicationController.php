<?php

namespace App\Http\Controllers;
use App\SiteApplication;
use validate;

use Illuminate\Http\Request;

class SiteApplicationController extends Controller
{
    public function index() {
        $siteApplications = SiteApplication::GET();
        return view('admin.site-application.main', compact('siteApplications'));
    }

    public function store(Request $request) {
        $validator = $request->validate([
            'application_name' => 'required ',
            'url_path' => 'required',
        ]);
        
        $menuLinkStatus = $request->menu_link == 'on' ? TRUE : FALSE;
        $footerLinkStatus = $request->footer_link == 'on' ? TRUE : FALSE;
        
        $checker = SiteApplication::WHERE('application_name', $request->application_name)->exists();
        if($checker) {
            return 'exists';
        }
        else{
            $addNewSiteApplication = SiteApplication::CREATE([
                'application_name' => $request->application_name,
                'url_path' => $request->url_path,
                'menu_link' => $menuLinkStatus,
                'footer_link' => $footerLinkStatus
            ]);
            return 'saved';
        }
    }

    public function edit($id) {
        $siteApplications = SiteApplication::GET();
        $recordInfo = SiteApplication::findOrFail($id);
        return view('admin.site-application.main', compact('siteApplications', 'recordInfo'));
    }

    public function update(Request $request, $id) {
        $validator = $request->validate([
            'application_name' => 'required ',
            'url_path' => 'required',
        ]);
        
        $menuLinkStatus = $request->menu_link == 'on' ? TRUE : FALSE;
        $footerLinkStatus = $request->footer_link == 'on' ? TRUE : FALSE;
        
        $checker = SiteApplication::WHERE('application_name', $request->application_name)->WHERE('id', '!=', $id)->exists();
        if($checker) {
            return 'exists';
        }
        else{
            $recordInfo = SiteApplication::findOrFail($id);
            $recordInfo->UPDATE([
                'application_name' => $request->application_name,
                'url_path' => $request->url_path,
                'menu_link' => $menuLinkStatus,
                'footer_link' => $footerLinkStatus
            ]);
            return 'updated';
        }
    }
}
