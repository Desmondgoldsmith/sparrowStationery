@section('title')
    View Category
@endsection
@extends('admin_layout.app')
@section('content')
<div class="main-panel">
    <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
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
                        <div class="badge badge-outline-success">Update</div>
                        <div class="badge badge-outline-danger">Delete</div> 
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