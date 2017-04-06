@extends('layouts.master')

@section('content')
<hr>
<div><span><b><a href="/pages">Back to Pages List</a></b></span>

<hr>
<div class="form-group">
@include('layouts.errors')

{{$page->title}}
</div>

@foreach($page->notes as $note)
<div class="row list-group-item">


	<div class="col-lg-6 form-control" >
    <strong>
         	{{$note->created_at->diffForHumans()}} :&nbsp
  	</strong>
	{{$note->text}}
		
	</div>
	<div class="col-lg-1">
	
		<a href="/notes/{{$note->id}}/delete"><button type="button" class="btn btn-danger pull-right">Delete</button></a>
		</div>
		<div class="col-lg-1">

	<a href="/notes/{{$note->id}}/edit"><button type="button" class="btn btn-default pull-right">Edit</button></a>	
		

	</div>
</div>
@endforeach


<div class="row list-group-item">
	<form method="POST" action="/pages/{{$page->id}}/notesstore">
	{{csrf_field( )}}
		<div class="input-group">
			<input type="text" name="text" value="{{ old('text') }}" class="form-control" placeholder="Add Note ...">
			<input type="submit" name="Add" value="Add" class="btn btn-primary">
		</div>
	</form>
</div>


@endsection