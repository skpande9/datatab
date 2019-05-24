<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        //find total number of records in datatable
        $recordsTotal = User::all()->count();
        //define start and limit index
        $startIndex = 0;
        $limitIndex = 0;
        if ($request->ajax()) {
            $startIndex = $request->start;
            $limitIndex = $request->length;
            $data = DB::select("select * from users LIMIT $startIndex,$limitIndex");
            $data1 = array(
                'draw' => $request->draw,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsTotal,
                'data' => $data,
            );
    
            return json_encode($data1);
            $jsonData =  Datatables::of($data)
                    // ->addIndexColumn()
                    // ->addColumn('action', function($row){
   
                    //        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                    //         return $btn;
                    // })
                    // ->rawColumns(['action'])
                    ->make(true);
            return $jsonData;
        }   
        return view('welcome');
    }

}
