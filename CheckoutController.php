<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
class CheckoutController extends Controller
{
    public function login_check()
    {
    	return view('pages.login');
    }
     public function checkout()
    {
    	
      return view('pages.checkout');
    }
}    