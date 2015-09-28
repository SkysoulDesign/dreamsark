<?php

namespace DreamsArk\Http\Controllers\Home;

use Illuminate\Http\Request;

use DreamsArk\Http\Requests;
use DreamsArk\Http\Controllers\Controller;
use Illuminate\Http\Response;

class HomeController extends Controller
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
}
