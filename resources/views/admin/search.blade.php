@section('title')
    Search Results
@endsection
@extends('admin_layout.content')
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
              <h4 class="card-title">Search Results</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th> Product ID </th>
                      <th> Product Image </th>
                      <th> Product Name </th>
                      <th> Product Price </th>
                      <th> Product Category </th>
                      <th> Action </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td> {{$product->id}}</td>
                      <td><img src="/storage/productImages/{{$product->productImage}}"style="height:60px;width:60px" class="img-circle elevation-2" alt="products"> </td>
                    
                      <td> {{$product->productName}} </td>
                      <td> GH¢ {{$product->productPrice}} </td>
                      <td> {{$product->productCategory}} </td>
                      <td>
                       <a href="{{url('')}}"> <div class="badge badge-outline-success">Update</div></a>
                       <a href="{{url('')}}" onclick="return confirm('Are You Sure You Want Delete?')"><div class="badge badge-outline-danger">Delete</div></a>
                    </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                  <tfoot>
                    
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</div>
<table>
    <td colspan="3" style="align:left">
    {{ $products->links() }}
    Total:{{$products->total()}}
Current page:{{$products->count()}}
    </td>
</table>
{{-- {{$products->links()}} --}}

@endsection
