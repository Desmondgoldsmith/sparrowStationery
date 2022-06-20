<body>
    {{-- sidebar starts --}}
      <div class="container-scroller">
         {{-- end of header --}}
         {{-- sidebar here --}}
   
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
         <a class="sidebar-brand brand-logo" href="{{url('admin')}}"><img src="{{asset('backend/images/sparrowStationery.png')}}" alt="logo" /></a>
         <a class="sidebar-brand brand-logo-mini" href="{{url('admin')}}"><img src="{{asset('backend/images/sparrowStationery.png')}}" alt="logo" /></a>
       </div>
       <ul class="nav">
         <li class="nav-item profile">
           <div class="profile-desc">
             <div class="profile-pic">
               <div class="count-indicator">
                 <img class="img-xs rounded-circle " src="{{asset('backend/images/faces/face15.jpg')}}" alt="">
                 <span class="count bg-success"></span>
               </div>
               <div class="profile-name">
                 <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                 <span>Gold Member</span>
               </div>
             </div>
             <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
             <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
               <a href="#" class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-settings text-primary"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-onepassword  text-info"></i>
                   </div>
                 </div>
                 <div class="preview-item-content">
                   <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                 </div>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item preview-item">
                 <div class="preview-thumbnail">
                   <div class="preview-icon bg-dark rounded-circle">
                     <i class="mdi mdi-calendar-today text-success"></i>
                   </div>
                 </div>
                 
               </a>
             </div>
           </div>
         </li>
         <li class="nav-item nav-category">
           <span class="nav-link">Navigation</span>
         </li>
         <li class="nav-item menu-items">
           <a class="nav-link" href="{{url('/admin')}}">
             <span class="menu-icon">
               <i class="mdi mdi-speedometer"></i>
             </span>
             <span class="menu-title">Dashboard</span>
           </a>
         </li>
         <li class="nav-item menu-items">
           <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
             <span class="menu-icon">
               <i class="mdi mdi-laptop"></i>
             </span>
             <span class="menu-title">Categories</span>
             <i class="menu-arrow"></i>
           </a>
           <div class="collapse" id="categories">
             <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="{{url('category-create')}}  {{Request::is('category-create') ? 'active' : ''}}">Add Category</a></li>
               <li class="nav-item"> <a class="nav-link" href="{{url('view-category')}}  {{Request::is('view-category' ? 'active' : '')}}">View Category</a></li>
             </ul>
           </div>
         </li>
         <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Sliders</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="slider">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('view-sliderForm')}}  {{Request::is('view-sliderForm') ? 'active' : ''}} ">Add Slider</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('view-allSlider')}}  {{Request::is('view-allSlider' ? 'active' : '')}}">View Slider</a></li>
            </ul>
          </div>
        </li>
         <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="product">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('view-addProduct')}}  {{Request::is('view-addProduct') ? 'active' : ''}} ">Add Product</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('view-products')}}  {{Request::is('view-products' ? 'active' : '')}}">View product</a></li>
            </ul>
          </div>
        </li>
         <li class="nav-item menu-items">
           <a class="nav-link" href="pages/charts/chartjs.html">
             <span class="menu-icon">
               <i class="mdi mdi-chart-bar"></i>
             </span>
             <span class="menu-title">Orders</span>
           </a>
         </li>
       </ul>
     </nav>
   {{-- sidebar ends --}}
   