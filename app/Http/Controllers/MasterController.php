<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function classifyByView ($view_name = '')
    {
    	switch ($view_name) {
    		case config('app.view.Home'):
    			return view('layouts.Home');
			case config('app.view.Projects'):
				return $this->getProjectContents();
			case config('app.view.OurService'):
				return $this->getServiceContents();
    		case config('app.view.ContactUs'):
				return view('layouts.ContactUs');
    		default:
    			return '404';
    	}
    }

    private function getProjectContents () 
    {
    	// $project['projects'] = Content::where('content_type', '=', 2)->take(4)->get();
    	$project['projects'] = Content::where('content_type', '=', config('app.content.project'))->get();

    	return view( 'layouts.Project',  $project);
    }

    private function getServiceContents ()
    {
    	$service['services'] = Content::where('content_type', '=', config('app.content.service'))->get();

    	return view( 'layouts.OurService',  $service);
    }
}
