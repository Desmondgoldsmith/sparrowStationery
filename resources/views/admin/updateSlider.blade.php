@section('title')
    Update Category
@endsection
@extends('admin_layout.content')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Update Slider</h5>
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
               <form action="{{url('view-updateSlider')}}" method="POST" enctype = "multipart/form-data">
               {{csrf_field()}}
              <div class="col-12">
                <div class="form-group">
                    {{Form::hidden('id', $sliders->id)}}
               {{Form::label('', 'Input Slider Text', ['for'=>'sliderText','class'=>'form-lable'])}} 
               {{Form::text('sliderText',$sliders->sliderText,['class'=>'form-control','placeholder'=>'input slider text','id'=>'sliderText','style'=>'color:white'])}} 
                </div>
              </div>
    
        <div class="col-12">
        <div class="form-group">
            {{Form::Label('','Slider Image',['for'=>'sliderImage'])}}
            <div class="input-group">
              <div class="custom-file">
                  {{Form::file('sliderImage',['class'=>'custom-file-input','id'=>'sliderImage'])}}
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
           {{Form::submit('Update',['class'=>'btn btn-success btn-md "'])}}
    
            </div>
          </div>
    {{-- {!!Form::close()!!} --}}
               </form>
        </div>
            </div>
        </div>
    </div> 
@endsection