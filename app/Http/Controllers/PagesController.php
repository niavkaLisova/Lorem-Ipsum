<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	$title = 'Welcome to Iorem Ipsum';
    	return view('pages.index')->with('title', $title);
    }

    public function about() {
    	return view('pages.about');
    }

    public function services() {
    	$data = array(
    		'title' => 'Services',
    		'services' => [ 'write', 'read', 'like' ]
    	);
    	return view('pages.services')->with($data);
    }
}
