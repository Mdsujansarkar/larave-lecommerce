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
      
      <tr> 
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
      </tr>
     
    </table>
    </div>
  </div>
 </div>
@endsection