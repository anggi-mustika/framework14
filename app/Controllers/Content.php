<?php

namespace App\Controllers;

class Content extends BaseController
{
    public function index()
    {
    	$request = \Config\Services::request();
    	echo "First Content Is:" .$request->uri->getSegment('1')."<br/>";
    	echo "First Content Is:" .$request->uri->getSegment('2')."<br/>";
    	echo "First Content Is:" .$request->uri->getSegment('3')."<br/>";
    	echo "First Content Is:" .$request->uri->getSegment('4')."<br/>";
    }
}