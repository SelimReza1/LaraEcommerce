@extends('admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="8" cols="80" class="form-control"
                                              placeholder="Enter description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="Enter price">
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control"
                                           placeholder="Enter quantity">
                                </div>

                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="file" name="product_image[]" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="product_image[]" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="product_image[]" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="product_image[]" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="product_image[]" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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