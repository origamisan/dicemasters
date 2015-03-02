<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
        $name = "Jason Criss";
        return view('pages.about')->with('name',$name);
    }

    public function index(){
        return view('pages.index');
    }
}
