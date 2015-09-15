<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }
 
    public function reviews()
    {
        return view('reviews');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
