@extends('admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Product
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                           <table class="table table-hover table-striped">
                               <tr>
                                   <th>#</th>
                                   <th>Product Title</th>
                                   <th>Price</th>
                                   <th>Quantity</th>
                                   <th>Action</th>
                               </tr>
                               @foreach($products as $product)
                                   <tr>
                                       <td>#</td>
                                       <td>{{$product->title}}</td>
                                       <td>{{$product->price}}</td>
                                       <td>{{$product->quantity}}</td>
                                       <td><a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-success">Edit</a></td>
                                   </tr>
                                   @endforeach
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a
                            href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection