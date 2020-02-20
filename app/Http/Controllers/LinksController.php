<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function show(Request $request, $link)
    {
    	$link = Link::findOrFail($link);
    	$link->countViews();
    	return view('show', ['link' => $link ?? null]);
    }

    public function create(Request $request)
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	if($request->get('access') == 'private'){
			$this->validate($request,[
	    		'captcha' => 'required|captcha',
	    		'title' => 'required',
	    		'site' => 'required',
	    		'password' => 'required'
    		]);
		} else {
			$this->validate($request,[
	    		'captcha' => 'required|captcha',
	    		'title' => 'required',
	    		'site' => 'required'
    		]);
		}
		$new_link = Link::add($request->all());

    	return view('create_complete', ['link' => $new_link]);
    }

    public function redirectAjax(Request $request)
    {
    	$link = Link::findOrFail($request->get('link'));
    	if($link->password) {
    		return ['error' => 'Error! Refresh this page!'];
    	}
    	return ['link' => $link->site];
    }

    public function redirect(Request $request, $link = null) 
    {

    	$link = Link::findOrFail($link);
    	if($link->password != $request->get('password')) {
    		return redirect()->back()->with('message', 'Invalid password');
    	} else {
    		return redirect($link->site);
    	}
    }
}
