  @extends('layouts.master')

  @section('content')



<h2>All Pages</h2>
<hr>

@include('layouts.errors')
@foreach ($pages as $page)
<div class="row list-group-item">
<div class="col-lg-6">
	<a href="/pages/{{$page->id}}">
	     

{{ $page->title }}</a> 
<p class="blog-post-meta">



            {{ $page->user->name }} on
            
             {{ $page->created_at->toFormattedDateString() }}
            
            

            </p>

</div>

<div class="col-lg-2">
	 <a href="/pages/{{$page->id}}/delete"><button type="button" class="btn btn-danger">Delete</button></a>


</div>




</div>

@endforeach

<div class="row list-group-item">
	<form method="POST" action="/pagesstore">
	{{csrf_field( )}}
		<div class="input-group">
			<input type="text" name="title" class="form-control" placeholder="Add page ...">
			<input type="submit" name="Add" value="Add" class="btn btn-default">
		</div>
	</form>
</div>














  @endsection