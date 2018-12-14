@extends('admin.master')
@section('body')
 <div class="row"> 
  <div class="col-md-10 col-md-offset-1 pull-right"> 
    <div class="panel panel-heading"> 
      <h4 class="text-center text-success">Category heading </h4>
    </div>
    <div class="panel-body"> 
    	{{ Session::get('message') }}
     {{ Form::open(['route' =>'new-brand', 'method'=>'POST', 'class'=>'form-horizontal'])}}
       <div class="form-group">
        <label for="" class="control-label col-md-4">Brand name</label>
        <div class="col-md-8"> 
            <input type="text" name="brand_name" class="from-control">
            <span>{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' '}}</span>
            </div>
     </div>
     <div class="form-group">
        <label for="" class="control-label col-md-4">Brand description</label>
        <div class="col-md-8"> 
            <textarea type="text" name="brand_description" class="from-control"></textarea> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>
     </div>
     <div class="form-group">
        <label for="" class="control-label col-md-4">Publication status</label>
        <div class="col-md-8 radio"> 
           <label><input type="radio" name="publication_status" checkd value="1">publish</label> 
           <label><input type="radio" name="publication_status"  value="0">unpublish</label>
            <span>{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' '}}</span>
            </div>
     </div>
     <div class="form-group">
        <label for="" class="control-label col-md-4">category description</label>
        <div class="col-md-8"> 
            <input type="submit" name="btn" class="btn btn-success" value="save info">
        </div>
     </div>
     
     {{ Form::close()}}
    </div>
  </div>
 </div>
@endsection