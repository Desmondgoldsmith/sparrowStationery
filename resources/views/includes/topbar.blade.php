<body>
<!-- Topbar Start -->
 <div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="{{asset('">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{asset('">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{asset('">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="{{asset('">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="{{asset('">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="{{asset('">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="{{asset('">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="{{asset('">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        {{-- <div class="col-lg-3 d-none d-lg-block"> --}}
            {{-- <a href="{{asset('" class="text-decoration-none">
                <h4 class="m-0 display-5 font-weight-semi-bold" >Sparrow Stationery & More</h4>
            </a> --}}
            <img src="/frontend/img/spa.PNG" style="width:240px" alt="">

        {{-- </div> --}}
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent" style="color:#00A4B4">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="{{asset('" class="btn border">
                <i class="fas fa-heart" style="color:#00A4B4"></i>
                <span class="badge">0</span>
            </a>
            <a href="{{asset('" class="btn border">
                <i class="fas fa-shopping-cart" style="color:#00A4B4"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->
