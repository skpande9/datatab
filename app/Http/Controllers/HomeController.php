<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        // $data = User::paginate(10);
        if ($request->ajax()) {
            // return $request;
            // return view('table')->with('data',$data);

            $data = User::where('id','>',10000)->get();
            // $data = DB::select
            // return $data1 = array(
            //     'draw' => 1,
            //     'recordsTotal' => 97782,
            //     'recordsFiltered' => 97782,
            //     'data' => $data,
            // );
    
            // return $data;
            return Datatables::of($data)
                    // ->addIndexColumn()
                    // ->addColumn('action', function($row){
   
                    //        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                    //         return $btn;
                    // })
                    // ->rawColumns(['action'])
                    ->make(true);
        }   
        return view('welcome');
    }

}
