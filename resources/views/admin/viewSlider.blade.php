@section('title')
    View Slider
@endsection
@extends('admin_layout.content');
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
              <h4 class="card-title">View Sliders</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th> Slider ID </th>
                      <th> Slider Name </th>
                      <th> Slider Image </th>
                      <th> Action </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                      <td> {{$slider->id}}</td>
                      <td> {{$slider->sliderText}} </td>
                      <td><img src="storage/sliderImages/{{$slider->sliderImage}}" style="height:60px;width:60px" class="img-circle elevation-2" alt="{{$slider->sliderName}}"></td>
                      <td>
                       <a href="{{url('view-updateSlider/'.$slider->id)}}"> <div class="badge badge-outline-success">Update</div></a>
                       <a href="{{url('delete-slider/'.$slider->id)}}" onclick="return confirm('Are You Sure You Want Delete?')"><div class="badge badge-outline-danger">Delete</div></a>
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
      <div class="text-center">
        {!!$sliders->links()!!}
      </div>
</div>
@endsection