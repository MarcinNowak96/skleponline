@extends('layouts.app')
<div class="container">
            <div class="col-lg-12">
                <div class="row mt-12">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                    <img height="400" src="/uploads/product/{{$product->image}}">
                                    {{$product->description}}
                                    <h4 class="card-title">
                                        {{$product->name}}
                                    </h4>
                                <h5>{{number_format($product->price/100,2)}} zł</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('layouts.footer')



