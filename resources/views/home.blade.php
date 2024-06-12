@extends('layouts.layout')
@section('content')
    {{-- content --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Available</em> Cool Games</h4>
                                </div>
                                <div class="row">
                                    @foreach ($categories as $category)
                                        <div class="col-lg-4 col-sm-6">
                                            <a href="/order/Nayla Cooking">
                                                <div class="item">
                                                    <img src={{ asset('storage/' . $category->image) }} alt="">
                                                    <h4>{{ $category->category }}<br></h4>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                    @if ($categories->isEmpty())
                                        <div class="col-lg-12">
                                            <p>Category not found</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->

                </div>
            </div>
        </div>
    </div>
@endsection
