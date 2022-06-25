@section('title')
    Cart
@endsection

@extends('includes.spairpages')
@section('shop')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{url('/')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    
                      
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
               
                <tbody class="align-middle">
                @if (Session::has('cart'))
                    @foreach($products as $product)
                    <tr>
                        <td class="align-middle"><img src="{{asset('storage/productImages/'. $product['productImage'])}}" alt="" style="width: 50px;">{{$product['productName']}}</td>
                        <td class="align-middle">GH¢ {{$product['productPrice']}}</td>
                        <td class="align-middle">
                            <form action="{{url('update-cart/'.$product['productId'])}}" method="post">
                                    @csrf
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" name="quantity" value="{{$product['qty']}}" min="1" max="100">
                            {{-- <input type="submit" value="save" class="btn btn-primary">  --}}

                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-primary btn-plus" >
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>

                        </td>
                        {{-- <td class="align-middle">{{$product['qty']}}</td> --}}
                        <td class="align-middle">GH¢ {{$product['productPrice'] * $product['qty']}}</td>
                        <td class="align-middle"><a href="{{url('delete-cart/'.$product['productId'])}}"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                    </tr>
                   
                    @endforeach

                          
                    
                    
                </tbody>
                
            </table>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">GH¢ {{Session::get('cart')->totalPrice}}.00</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Delivery</h6>
                        <h6 class="font-weight-medium">GH¢ 0.00</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">GH¢ {{Session::get('cart')->totalPrice}}.00</h5>
                    </div>
                    <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endif

@endsection