@section('title')
    View Category
@endsection
@extends('admin_layout.content')
@section('content')
<div class="main-panel">
    <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            {{-- displaying success message --}}
            @if(Session::has('status'))
              <div class="alert alert-success" >
                {{Session::get('status')}}
              </div>
            @endif  
            <div class="card-body">
              <h4 class="card-title">View Categories</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th> Category ID </th>
                      <th> Category Name </th>
                      <th> Action </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td> {{$category->id}}</td>
                      <td> {{$category->categoryName}} </td>
                      <td>
                       <a href="{{url('updateCategory-view/'.$category->id)}}"> <div class="badge badge-outline-success">Update</div></a>
                       <a href="{{url('delete-category/'.$category->id)}}" onclick="return confirm('Are You Sure You Want Delete?')"><div class="badge badge-outline-danger">Delete</div></a>
                    </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</div>
@endsection
