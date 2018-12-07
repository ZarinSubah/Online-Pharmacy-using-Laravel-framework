<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ManufactureController extends Controller
{
    public function index()
    {
    	return view('admin.add_manufacture');
    }
    public function save_manufacture(Request $request)
    {
    	$data=array();
        $data['manufacture_id']=$request->manufacture_id;
        $data['manufacture_name']=$request->manufacture_name;
        $data['manufacture_description']=$request->manufacture_description;
        
        DB::table('tbl_manufacture')->insert($data);
        Session::put('message','Manufacture added successfully !! ');
        return Redirect::to('/add-manufacture');
    }

}
