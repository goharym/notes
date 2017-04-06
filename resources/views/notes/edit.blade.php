@extends('layouts.master')

@section('content')


<div class="row list-group-item-info page-title">
	<div class="col-xs-12">
		Edit Note . . .
	</div>
</div>

<div class="row list-group-item">
	<form method="POST" action="/notes/{{$note->id}}/edit">
		{{csrf_field()}}
	<div class="input-group">
		<input type="text" name="text"  class="form-control" placeholder="{{$note->text}}">
		<input type="submit" value="Edit" class="btn btn-default" >	
	</div>	
	</form>
</div>


















@endsection