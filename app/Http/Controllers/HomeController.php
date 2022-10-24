<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Course;
use App\Models\Latest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $data = [
            'banners'  => Banner::orderBy('id','desc')->paginate(3),
            'latests'   => Latest::orderBy('date_publication','desc')->paginate(3),
            'courses'   => Course::orderBy('date_publication','desc')->paginate(3)
        ];
        // $this->middleware('home');
        return view('index',$data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'banners'  => Banner::orderBy('id','desc')->paginate(3),
            'latests'   => Latest::orderBy('date_publication','desc')->paginate(3),
            'courses'   => Course::orderBy('date_publication','desc')->paginate(3)
        ];
        return view('index',$data);
    }

    /**
     * Show the application dashboard admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $data = [
            'banners'  => Banner::orderBy('id','asc')->paginate(3),
            'latests'   => Latest::orderBy('id','asc')->paginate(3)
        ];
        return view('indexadmin');
    }
}
