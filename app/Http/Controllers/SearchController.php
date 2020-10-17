<?php

namespace App\Http\Controllers;
use App\Model\Search;
use Session;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('public.home.index');
    }
    function search(Request $request)
    {

       $number = Search::where('phone_number','like','%'. $request->searchQuery .'%')->take(3)->orderBy('id','DESC')->get();
       $number_found =Search::where('phone_number','like','%'. $request->searchQuery .'%')->get()->count();
       $number_all =Search::where('phone_number','like','%'. $request->searchQuery .'%')->orderBy('id','DESC')->get();

//       session::flash('number_found',$number_found);
       return json_encode([
           'number'=> $number,
           'number_found'=> $number_found,
           'number_all'=>$number_all,
       ]);

    }
}
