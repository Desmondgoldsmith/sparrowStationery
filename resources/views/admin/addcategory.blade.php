@section('title')
    Add Category
@endsection

@extends('admin_layout.content')

@section('content')

<div class="main-panel">
  <div class="container">
  
    
    <div class="card mb-3">
      <div class="card-body">
        <div class="pt-4 pb-2">
          <h5 class="card-title text-center pb-0 fs-4">Add Category</h5>
        </div>
          {{-- displaying success message --}}
          @if(Session::has('status'))
            <div class="alert alert-success" role="alert">
              {{Session::get('status')}}
            </div>
            @endif
          {{-- display error --}}
            @if(count($errors) > 0 )
              <div class="alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </div>
              @endif
            <form action="{{url('categoryAdd')}}" method="POST">
                @csrf
                <div class="col-12">
                <div class="form-group ">
                  <label for="category" class="form-label">Category Name</label>
                  <input class="form-control" type="text" style="color:whitesmoke" name="categoryName"  placeholder="Input category name">
                </div>
                </div>
                <div class="col-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                </div>
                </div>
              </form>
        </div>
    </div>
  </div>
</div>

@endsection
