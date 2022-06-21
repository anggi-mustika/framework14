<?php

namespace App\Controllers;

class Blog extends BaseController
{
   public function index(){
 	$data['title'] = "This Is Title";
 	$data['content'] = "This Is The Contents";
 	return view('blog_view',$data);
 	}
}