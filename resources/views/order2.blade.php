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

          <!-- ***** Orderm Form Start ***** -->
          <div class="row">
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4><em>Available</em> Payment Method</h4>
                </div><hr>
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/dana.jpg" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/spay.png" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/mandiri.jpeg" alt="" class="templatemo-item">
                  </div><hr>
                  <div class="col-lg-4">
                    <img src="assets/images/qris.png" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/gopay.jpg" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/bni.jpg" alt="" class="templatemo-item">
                  </div><hr>
                  <div class="col-lg-4">
                    <img src="assets/images/visa.png" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/bca.png" alt="" class="templatemo-item">
                  </div>
                  <div class="col-lg-4">
                    <img src="assets/images/indomaret.png" alt="" class="templatemo-item">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Input</em> User ID</h4>
                </div>
                <div class="col-md-12">
                  <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
                      <div class="form-group">
                          <div class="col-xs-12">		            
                            <div class="control-wrapper">
                              <label for="game-user" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                              <input type="text" class="form-control" id="game-user" placeholder="User ID">
                            </div>		            	            
                          </div>              
                      </div>
                    <hr>
                  </form>
                </div>
              </div> <hr>
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Total</em> Package</h4>
                </div>
                <div class="col-md-12">
                  <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
                      <div class="form-group">
                          <div class="col-xs-12">		            
                            <div class="control-wrapper">
                              <label for="jlh-paket" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                              <input type="text" class="form-control" id="jlh-paket" placeholder="Example: 1">
                            </div>		            	            
                          </div>              
                      </div>
                    <hr>
                  </form>
                </div>
              </div> <hr>
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Payment</em> Method</h4>
                </div>
                <div class="col-md-12">
                  <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
                      <div class="form-group">
                          <div class="col-xs-12">		            
                            <div class="control-wrapper">
                              <label for="payment-method" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                              <input type="text" class="form-control" id="payment-method" placeholder="VISA / Indomaret / ShopeePay / GoPay / BCA / BNI / Mandiri / QRIS / Dana">
                            </div>		            	            
                          </div>              
                      </div>
                    <hr>
                    <div class="form-group">
                      <div class="col-md-12" style="margin-top: 20px;">
                        <div class="control-wrapper">
                          <input type="submit" value="Purchase Now" class="btn btn-info btn-block">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div> <hr>
            </div>
          </div>
          <!-- ***** Order Form End ***** -->

        </div>
      </div>
    </div>
  </div>
  @endsection