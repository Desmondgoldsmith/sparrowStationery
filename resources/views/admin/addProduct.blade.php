@section('title')
    Add Product
@endsection

@extends('admin_layout.content')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Add Product</h5>
              </div>
              
              {{-- success message --}}
              @if(Session::has('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
                </div>
             @endif

             {{-- error messages --}}
             @if(count($errors) > 0 )
             <div class="alert-warning">
               @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
               @endforeach
             </div>
             @endif

              {{-- form starts --}}
              {{-- {!!Form::open(['url'=>'add_product','method'=>'POST','enctype'=>'multipart/form-data' ])!!} --}}
               <form action="{{url('add_product')}}" method="POST" enctype = "multipart/form-data">
               {{csrf_field()}}
              <div class="col-12">
                <div class="form-group">
               {{Form::label('', 'Product Name', ['for'=>'productName','class'=>'form-lable'])}} 
               {{Form::text('productName','',['class'=>'form-control','placeholder'=>'input category name','id'=>'productName','style'=>'color:white'])}} 
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
               {{Form::label('', 'Product Price', ['for'=>'productPrice','class'=>'form-lable'])}} 
               {{Form::text('productPrice','', ['class'=>'form-control','placeholder'=>'eg: GHc 4.00','name'=>'productPrice', 'id'=>'productPrice','style'=>'color:white'])}}
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  {{Form::label('', 'Product Description', ['for'=>'productDescription','class'=>'form-lable'])}} 
                  {{Form::textarea('productDescription', '', ['class'=>'form-control','name'=>'productDescription','style'=>'color:white']) }}
                </div>
              </div>
                  <div class="col-12">
                <div class="form-group">
               {{Form::label('', 'Product Category', ['for'=>'productCategory','class'=>'form-lable'])}} 
                <select class="form-control" name="productCategory" style="color:white" id="productCategory">
                    <option selected="sel">select category</option>
                    @foreach($categories as $category)
                    <option>{{$category->categoryName}}</option>
                    @endforeach
                </select>
            </div> 
        </div> 
        <div class="col-12">
        <div class="form-group">
            {{Form::Label('','Product Image',['for'=>'productImage'])}}
            <div class="input-group">
              <div class="custom-file">
                  {{Form::file('productImage',['class'=>'custom-file-input','id'=>'productImage'])}}
                {{-- <input type="file" class="custom-file-input" id="pImage">  --}}
                {{-- <label class="custom-file-label" for="productImage">Choose file</label> --}}
              </div>
              {{-- <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div> --}}
            </div>
          </div>
        </div>
          <div class="card-footer">
            <div class="col-12">
           {{Form::submit('Save',['class'=>'btn btn-success btn-lg btn-block"'])}}

            </div>
          </div>
    {{-- {!!Form::close()!!} --}}
               </form>
        </div>
            </div>
        </div>
    </div> 

@endsection