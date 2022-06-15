@extends('admin_layout.app')

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
       {{-- {!!Form::Close()!!} --}}
  </div>
</div>




{{-- footer starts --}}

  <!-- partial -->
</div>

<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div> 
<!-- container-scroller -->
<!-- plugins:js -->
<script src="backend/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="backend/vendors/chart.js/Chart.min.js"></script>
<script src="backend/vendors/progressbar.js/progressbar.min.js"></script>
<script src="backend/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="backend/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="backend/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="backend/js/off-canvas.js"></script>
<script src="backend/js/hoverable-collapse.js"></script>
<script src="backend/js/misc.js"></script>
<script src="backend/js/settings.js"></script>
<script src="backend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="backend/js/dashboard.js"></script>
<!-- End custom js for this page -->

@endsection
</body>
</html>