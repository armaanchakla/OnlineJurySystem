<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontentController extends Controller
{
    public function homecontent(){
    	return view ('frontView.homecontent.homecontent');
    }
}
