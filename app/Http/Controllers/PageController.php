<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Page;
use App\Note;
use App\User;

class PageController extends Controller
{
    
	public function show()
	{
		$pages = Page::latest()->get();
		return view('pages.show',compact('pages'));

	}


	public function show1(Page $page)
	{
		
		return view('pages.onepage',compact('page'));



	}

	public function store(Request $request ,User $user)
	{
		$this->validate($request,[
			'title' => 'required|min:3'

			]);	

		$page = new Page;
		$page->title = $request->title;
		$page->user_id= Auth::user()->id;
		$page->save();
		return back();
	}
 



 	public function delete(Page $page)
 	{	if(count($page->notes))
 		{	
 			return view('pages.deleteall',compact('page'));

 		}
 		$page->delete();
 		return back();
 	}

 	public function deleteall(Page $page)
 	{
 		$page->delete();
 		$page->notes()->delete();
 		return redirect('/pages');

 	}
















}

