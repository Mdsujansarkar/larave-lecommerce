@extends('admin.master')
@section('body')
 <div class="row"> 
  <div class="col-md-8 col-md-offset-1 pull-right"> 
    <div class="panel panel-heading"> 
      <h4 class="text-center text-success">Category heading </h4>
    </div>
    <div class="panel-body"> 
    	{{ Session::get('message') }}
     {{ Form::open(['route' =>'new-brand', 'method'=>'POST', 'class'=>'form-horizontal'])}}
     {{Form::label('email', 'E-Mail Address')}}
       {{ Form::text('user_name','', ['class' => 'from-control'])}}
     {{ Form::close()}}
    </div>
  </div>
 </div>
@endsection