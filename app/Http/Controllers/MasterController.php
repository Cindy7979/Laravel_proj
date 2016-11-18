<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function classifyByView ($view_name = '')
    {
    	switch ($view_name) {
    		case config('app.view.Home'):
    			return view('layouts.Home');
			case config('app.view.Projects'):
				return view('layouts.Project');
			case config('app.view.OurService'):
				return view('layouts.OurService');
    		case config('app.view.ContactUs'):
				return view('layouts.ContactUs');
    		default:
    			return '404';
    	}
    }

    public function getProjectContents () 
    {


    	return 'layouts.Project';
    }
}
