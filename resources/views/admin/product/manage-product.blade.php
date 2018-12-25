@extends('admin.master')
@section('body')
 <div class="row"> 
  <div class="col-md-8 col-md-offset-1 pull-right"> 
    <div class="panel panel-heading"> 
      <h4 class="text-center text-success">Category heading </h4>
    </div>
    <div class="panel-body"> 
        {{ Session::get('message')}}
    <table class="table table-border"> 
      <tr> 
       <th>SL No</th>
       <th>Category Name</th>
       <th>Brand Name</th>
       <th>Product Name</th>
       <th>Product Image</th>
       <th>Product price</th>
       <th>Product Quintity</th>
       <th>Publication status</th>
       <th>Action</th>
      </tr>
      
        @php($i = 1)
        
        @foreach($products as $product)
      <tr> 
        
        <td>{{ $i++ }}</td>
        <td>{{ $product -> category_name }}</td>
        <td>{{ $product -> brand_name}}</td>
        <td>{{ $product -> product_name}}</td>
        <td>
          <img src="{{ asset($product -> product_image)}}" alt="">
        </td>
        <td>{{ $product -> product_price}}</td>
        <td>{{ $product -> product_quintity}}</td>
        <td>{{ $product -> publication_status}}</td>
        <td>
           @if($category ->publication_status == 1)
          <button class="btn-warning"><a href="{{ route('unpublished-category', ['id' =>$category->id]) }}">up</a></button> 
         @else  
         <button class="btn-success"><a href="{{route('publish-category', ['id' => $category-> id]) }}">down</a></button>
         @endif
         <button class="btn-info btn-button "><a href="{{route('edit-product', ['id' => $product-> id]) }}" >edit</a></button>
         <button class="btn-warning btn-button "><a href="{{route('delete-product', ['id' => $product-> id]) }}" >delete</a></button>
        </td>
        
      </tr>
      @endforeach
     
    </table>
    </div>
  </div>
 </div>
@endsection