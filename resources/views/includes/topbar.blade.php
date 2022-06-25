<body>
<!-- Topbar Start -->
 <div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5" style="background-color:#00A4B4">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href=""></a>
                <span class="text-muted px-2"></span>
                <a class="text-dark" href=""></a>
                <span class="text-muted px-2"></span>
                <a class="text-dark" href=""></a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        
            <img src="{{asset('/frontend/img/spa.PNG')}}" style="width:240px" alt="">

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
            <a href="" class="btn border">
                <i class="fas fa-heart" style="color:#00A4B4"></i>
                <span class="badge">0</span>
            </a>
            <a href="{{url('cart')}}" class="btn border">
                <i class="fas fa-shopping-cart" style="color:#00A4B4"></i>
                <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQuantity : 0}}</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->
