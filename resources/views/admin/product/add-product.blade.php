@extends('admin.master')
@section('body')
 <div class="row"> 
  <div class="col-md-8 col-md-offset-1 pull-right" > 
    <div class="panel panel-heading"> 
      <h4 class="text-center text-success">Category heading </h4>
    </div>
    <div class="panel-body"> 
    	{{ Session::get('message') }}
     {{ Form::open(['route' =>'new-product', 'method'=>'POST', 'class'=>'form-horizontal'])}}
       <div class="form-group">
        <label for="" class="control-label col-md-4">Category name</label>
        <div class="col-md-8"> 
            <select name="category_id"  class="from-control">
            <option value="">Select category</option>
            @foreach($categories as $category)
            <option value="{{ $category->category_id}}">{{ $category->category_name}}</option>
            @endforeach
            
            </select>
            <span>{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' '}}</span>
        </div>
     </div>

     <div class="form-group">
        <label for="" class="control-label col-md-4">Brand name</label>
        <div class="col-md-8"> 
            <select name="brand_id"  class="from-control">
            <option value="">Select Brand Name</option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id}}">{{ $brand->brand_name}}</option>
            @endforeach
            </select>
            <span>{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' '}}</span>
        </div>
     </div>
    <div class="form-group row">
        <label for="" class="control-label col-md-3">Product Name</label>
        <div class="col-md-9"> 
            <input type="text" name="product_name" class="from-control" placeholder="Product Name"></input> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>
     <div class="form-group">
        <label for="" class="control-label col-md-3">Product price</label>
        <div class="col-md-9"> 
            <input type="number" name="product_price" id="editor" class="from-control" placeholder="Product price"></input> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>
        <div class="form-group row">
        <label for="" class="control-label col-md-3">Product quantity</label>
        <div class="col-md-8"> 
            <input type="number" name="product_quantity" class="from-control" placeholder="Product quantity"></input> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>
        <div class="form-group row">
        <label for="" class="control-label col-md-4">Product long description</label>
        <div class="col-md-8"> 
            <textarea type="number" name="product_long_desc" class="from-control" placeholder="long description"></textarea> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>

     <div class="form-group row">
        <label for="" class="control-label col-md-4">Product short description</label>
        <div class="col-md-8"> 
            <textarea type="text" name="product_short_desc" class="from-control" placeholder="short description"></textarea> 
            <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>
        <div class="form-group row">
        <label for="" class="control-label col-md-4">Product Image</label>
        <div class="col-md-8"> 
            <input type="file" accept="image/*" name="product_image" class="from-control" />
             <span>{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>

        </div>

     </div>
     <div class="form-group row">
        <label for="" class="control-label col-md-4">Publication status</label>
        <div class="col-md-8 radio"> 
           <label><input type="radio" name="publication_status" checkd value="1">publish</label> 
           <label><input type="radio" name="publication_status"  value="0">unpublish</label>
            <span>{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' '}}</span>
            </div>
     </div>
     <div class="form-group row">
        <div class="col-md-8"> 
            <input type="submit" name="btn" class="btn btn-success" value="save info">
        </div>
     </div>
     
     {{ Form::close()}}
    </div>
  </div>
 </div>
@endsection