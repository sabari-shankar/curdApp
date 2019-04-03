<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $data=DB::table('employees')
            ->select(
                    DB::raw('gender as gender'),
                    DB::raw('count(*) as value'))
            ->groupBy('gender')
            ->get();
        $array[]=['Gender','Value'];
        foreach ($data as $key => $value) {
                $array[++$key]=[$value->gender,$value->value];
        }
            
       return view('home')->with('gender',json_encode($array));
    }
}
