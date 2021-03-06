@section('title')
Paper & Printing Products
@endsection
@extends('includes.spairpages')

@section('shop')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Paper & Printing Products</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{url('/')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Paper & Printing Products</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
{{-- products --}}
<div class="row px-xl-5 pb-3">  
    @foreach($paperProducts as $paperProduct)
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card product-item border-0">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="/storage/productImages/{{$paperProduct->productImage}}" style="height:200px" alt="">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">{{$paperProduct->productName}}</h6>
                <div class="d-flex justify-content-center">
                    <h6>GH¢ {{$paperProduct->productPrice}}</h6><h6 class="text-muted ml-2"></h6>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="{{url('details/'.$paperProduct->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="{{url('addCart/'.$paperProduct->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
        </div>
     
    </div>     
@endforeach

</div> 
<div class="align-center">
        {!! $paperProducts->links()!!}
     </div>
@endsection