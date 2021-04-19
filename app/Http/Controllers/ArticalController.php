<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\Models\Artical;
use Illuminate\Support\Facades\Storage;
use Session;

class ArticalController extends Controller
{
    function index(){
    	$artical = DB::table('articals')->get();
    	return view('artical.index',compact('artical'));
    }

    function add_artical(){
    	return view('artical.add');
    }

    function store_artical(Request $request){
		$Validator = $request->validate([
    		'title' =>'required',
    		'body' =>'required|max:60',
    		'category' =>'required',
    		'image' =>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);

		$artical = new Artical();
		$artical->title = $request->title;
		$artical->body = $request->body;
		$artical->category = $request->category;
		$path = Storage::disk('public')->put('/artical', $request->image);
		$artical->image = $path;
		$artical->save();
		return redirect('artical')->with('success','New artical added');
    }

    function edit_artical(Request $request,$articalId){
    	$artical = Artical::where('id',decrypt($articalId))->first();
    	return view('artical.edit',compact('artical'));
    }

     function update_artical(Request $request){
		$Validator = $request->validate([
    		'title' =>'required',
    		'body' =>'required|max:60',
    		'category' =>'required',
    		'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);
		$artical = Artical::where('id',$articalId)->first();
		$artical->title = $request->title;
		$artical->body = $request->body;
		$artical->category = $request->category;
		if($request->image){
			Storage::disk('public')->delete($artical->image);
			$path = Storage::disk('public')->put('/artical', $request->image);
			$artical->image = $path;
		}
		$artical->save();
		return redirect('edit_artical/'.$request->articalId)->with('success','Artical updated successfully ');
    }

}
