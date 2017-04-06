<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Note;
class NoteController extends Controller
{

   public function store(Request $request,Page $page)
   {
   		$this->validate($request,[
   			'text' => 'required|min:3'

   			]
   			// ,[
   			// 	'text.required' => 'add something ',
   			//	'text.min' =>'its shorrrt'
   			// ]
   			);

   		$note = new Note;
   		$note->text = $request ->text ;
   		$page->notes()->save($note); 
   		return back();
   }

   public function edit(Request $request, Note $note)
   {
   		if($request->isMethod('post')){
   			$note->update($request->all());

   			return redirect ('/pages/'.$note->page_id);
   		}
   		return view('notes.edit',compact('note'));
   }


   public function delete(Note $note)
   {
   		$note->delete();
   		return back();
   }


}
