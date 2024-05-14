@extends('layouts.layout') 
@section('content')
<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      <img src="assets/images/logo.png" alt="">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Search End ***** -->
                  <div class="search-input">
                    <form id="search" action="#">
                      <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                      <i class="fa fa-search"></i>
                    </form>
                  </div>
                  <!-- ***** Search End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="order.html" class="active">Order</a></li>
                      <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                  </ul>   
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
 <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          
          <!-- ***** Package ***** -->
          <div class="row">
          <div class="start-stream">
            <div class="col-lg-12">
              <div class="heading-section" style="margin-top: auto">
                <h4><em>Available</em> Package</h4>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="item text-center">
                    <img src="assets/images/d1.png" alt="">
                    <hr>
                    <h6>250 Diamonds (200 + 50 Bonus)</h6>
                    <p class="text-white">Rp 70.000,-</p>
                      <div class="main-button">
                        <a href="pktsatu.html">Buy</a>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item text-center">
                    <img src="assets/images/d2.png" alt="">
                    <hr>
                    <h6>450 Diamonds (400 + 50 Bonus)</h6>
                    <p class="text-white">Rp 120.000,-</p>
                      <div class="main-button">
                        <a href="pktdua.html">Buy</a>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item text-center">
                    <img src="assets/images/d2.png" alt="">
                    <hr>
                    <h6>550 Diamonds (500 + 50 Bonus)</h6>
                    <p class="text-white">Rp 145.000,-</p>
                      <div class="main-button">
                        <a href="pkttiga.html">Buy</a>
                      </div>
                  </div>
                </div>
                <hr>
                <div class="col-lg-4">
                  <div class="item text-center">
                    <img src="assets/images/d3.png" alt="">
                    <hr>
                    <h6>750 Diamonds (700 + 50 Bonus)</h6>
                    <p class="text-white">Rp 195.000,-</p>
                      <div class="main-button">
                        <a href="pktempt.html">Buy</a>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item text-center">
                    <img src="assets/images/d3.png" alt="">
                    <hr>
                    <h6>950 Diamonds (900 + 50 Bonus)</h6>
                    <p class="text-white">Rp 245.000,-</p>
                      <div class="main-button">
                        <a href="pktlim.html">Buy</a>
                      </div>
                  </div>
                </div>
                <hr><hr>
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