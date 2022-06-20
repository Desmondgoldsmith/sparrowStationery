@section('title')
    Home
@endsection
@extends('includes.app')
<!-- Featured Start -->
@section('content')
@include('includes.topbar')
@include('includes.navbar')
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div> --}}
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countPrintingProducts}} Items Available</p>
                    <a href="{{url('/paper-product')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/paperandprinting.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Paper & Printing Products</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countOfficeFurniture}} Items Available</p>
                    <a href="{{url('office-product')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/officefurniture.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Office Funiture And Decor Products</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countOfficeEquipments}} Items Available</p>
                    <a href="{{url('office-equipments')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/officeequipment.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Office Equipment Products</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countCleaningProducts}} Items Available</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/cleaning.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Cleaning & Janitorial Products</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countDesktopProducts}} Items Available</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/desktop.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Desktop & Deskdrawer Products</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;height: 300px">
                    <p class="text-right">{{$countKitchenProducts}} Items Available</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('storage/productImages/kitchen.PNG')}}"  alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Office & Kitchen Products</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

  <!-- Subscribe Start -->
  <div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                <p>Provide your email to suscribe to our services</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->
    


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">  
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="/storage/productImages/{{$product->productImage}}" style="height:200px" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>GH¢ {{$product->productPrice}}</h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{url('details/'.$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>     
        @endforeach

        </div> 

    </div>
    <!-- Products End -->



    <!-- Products Start -->
    {{-- <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        @foreach($products as $product)
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="/storage/productImages/{{$product->productImage}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$product->productName}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$product->productPrice}}</h6><h6 class="text-muted ml-2"><del>{{$product->productImage}}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            
        @endforeach
        </div>
    </div>
    <!-- Products End --> --}}


    

        
@endsection
</body>
</html>
