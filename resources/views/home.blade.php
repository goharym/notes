@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in <b><h2>{{Auth::user()->name}}</h2></b>
                     <a href="/pages"><button class="btn btn-primary pull-right">Go to Pages</button></a>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
