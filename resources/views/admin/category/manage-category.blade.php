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
       <th>Category Description</th>
       <th>Publication status</th>
       <th>Action</th>
      </tr>
      @php($i = 1)
      @foreach($categories as $category)
      <tr> 
       <td>{{ $i++ }}</td>
       <td>{{$category -> category_name }}</td>
       <td>{{$category -> category_description }}</td>
       <td>{{$category -> publication_status == 1 ? 'published' : 'Unpublished'}}</td>
       <td>
        @if($category ->publication_status == 1)
          <button class="btn-warning"><a href="{{ route('unpublished-category', ['id' =>$category->id]) }}">up</a></button> 
         @else  
         <button class="btn-success"><a href="{{route('publish-category', ['id' => $category-> id]) }}">down</a></button>
         @endif
         <button class="btn-info btn-button "><a href="{{route('edit-category', ['id' => $category-> id]) }}" >edit</a></button>
         <button class="btn-warning btn-button "><a href="{{route('delete-category', ['id' => $category-> id]) }}" >delete</a></button>
       </td>
      </tr>
      @endforeach
    </table>
    </div>
  </div>
 </div>
@endsection