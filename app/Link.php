<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Http\Request;
use Request;


class Link extends Model
{
    protected $guarded = [];

    public static function add($request) 
    {
    	$link = new Link();
		$link->site = $request['site'];
		$link->title = $request['title'];
		$link->password = $request['password'];
		$link->access = $request['access'];
		$link->creator_ip = $_SERVER['REMOTE_ADDR'];

		$link->save();

		return $link->id;
    }

    public function countViews()
    {
    	$this->views += 1;

    	$this->save();
    }
}
