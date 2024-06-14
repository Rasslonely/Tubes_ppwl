@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Package ***** -->
                    <div class="row">
                        <div class="start-stream">
                            <div class="col-lg-12">
                                <div class="heading-section" style="margin-top: auto">
                                    <h4><em>Available</em> Package for {{ $category }}</h4>
                                </div>
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-lg-4">
                                            <div class="item text-center">
                                                <img src="../../../assets/images/d3.png" alt="">
                                                <hr>
                                                <h6>{{ $product->package }}</h6>
                                                <p class="text-white">Rp {{ number_format($product->price, 0, ',', '.') }},-
                                                </p>
                                                <div class="main-button">
                                                    <a href="/order2/{{ $product->id }}">Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @if ($products->isEmpty())
                                        <div class="col-lg-12">
                                            <p>No products available in this category</p>
                                        </div>
                                    @endif
                                    <hr>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Package End ***** -->
                </div>
            </div>
        </div>
    </div>
@endsection
