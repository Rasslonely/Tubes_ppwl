@extends('layouts.layout')
@section('content')
    {{-- content --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome To Cyborg</h6>
                                    <h4><em>Browse</em> Our Popular Games Here</h4>
                                </div>
                            </div>
                        </div>
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
                                    <div class="col-lg-4 col-sm-6">
                                        <a href="/order/Nayla Cooking">
                                            <div class="item">
                                                <img src="assets/images/naylacooking.png" alt="">
                                                <h4>Nayla Cooking<br><span>Life Sim</span></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <a href="/order/Rass Simulator">
                                            <div class="item">
                                                <img src="assets/images/farasland.png" alt="">
                                                <h4>Farras Land<br><span>Simulation</span></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <a href="/order/Rayza World">
                                            <div class="item">
                                                <img src="assets/images/rayzacare.png" alt="">
                                                <h4>Rayza Care<br><span>Life Sim</span></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <a href="/order/Timo Racing">
                                            <div class="item">
                                                <img src="assets/images/popular-04.jpg" alt="">
                                                <h4>Timo Racing<br><span>Racing</span></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <a href="/order/Robert King">
                                        <div class="item">
                                                  <img src="assets/images/popular-01.jpg" alt="">
                                                  <h4>Robert King<br><span>Legendary</span></h4>
                                                </div>
                                        </a>
                                      </div>
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