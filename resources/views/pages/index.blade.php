@extends('layouts.master')

@section('content')
{{--start sidebar + content--}}
<div class="container margin-top-2">
    <div class="row">
        <div class="col-md-4">
            @include('partials.sidebar')
        </div>
        <div class="col-md-8">
            <div class="widget">
                <h2>Feature Product</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature" src="{{asset('1.jpg')}}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Price - 50000</p>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature" src="{{asset('image/samsung.jpg')}}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Price - 50000</p>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature" src="{{asset('image/samsung.jpg')}}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Price - 50000</p>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature" src="{{asset('1.jpg')}}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Price - 50000</p>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--end sidebar + content--}}
@endsection