@extends('layouts.app')

<div class="container">
            <div class="col-lg-9">
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{$product->name}}
                                </h4>
                                <h5>{{number_format($product->price/100,2)}} zł</h5>
                                <p class="card-text">{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
