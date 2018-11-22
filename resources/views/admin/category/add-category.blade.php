@extends('admin.master')
@section('body')
 <div class="row"> 
  <div class="col-md-10 col-md-offset-1"> 
    <div class="panel panel-heading"> 
      <h4 class="text-center text-success">Category heading </h4>
    </div>
    <div class="panel-body"> 
    	{{ Session::get('message') }}
     <form action="{{ route('new-category') }}" method="POST" class="form-horizontal">
     {{ csrf_field() }} 
     <div class="form-group">
     	<label for="" class="control-label col-md-4">category name</label>
     	<div class="col-md-8"> 
            <input type="text" name="category_name" class="from-control">
            </div>
     </div>
     <div class="form-group">
     	<label for="" class="control-label col-md-4">category description</label>
     	<div class="col-md-8"> 
            <textarea type="text" name="category_description" class="from-control"></textarea> 
        </div>
     </div>
     <div class="form-group">
     	<label for="" class="control-label col-md-4">Publication status</label>
     	<div class="col-md-8 radio"> 
           <label><input type="radio" name="publication_status" checkd value="1">publish</label> 
           <label><input type="radio" name="publication_status"  value="0">unpublish</label> 
            </div>
     </div>
     <div class="form-group">
     	<label for="" class="control-label col-md-4">category description</label>
     	<div class="col-md-8"> 
            <input type="submit" name="btn" class="btn btn-success" value="save info">
        </div>
     </div>
     </form>
    </div>
  </div>
 </div>
@endsection