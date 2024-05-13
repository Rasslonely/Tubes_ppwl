@extends('layouts.layout')
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile">
                <div class="row justify-content-center">
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text text-center">
                      <span><h2>SIGN UP</h2></span>
                      <div class="col-md-12">
                        <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
                            <div class="form-group">
                                <div class="col-xs-12">		            
                                  <div class="control-wrapper">
                                    <label for="nohp" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                                    <input type="text" class="form-control" id="nohp" placeholder="Phone Number">
                                  </div>		            	            
                                </div>              
                              </div>
                            <div class="form-group">
                            <div class="col-xs-12">		            
                              <div class="control-wrapper">
                                <label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                                <input type="text" class="form-control" id="username" placeholder="Username">
                              </div>		            	            
                            </div>              
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="control-wrapper">
                                <label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12" style="margin-top: 20px;">
                              <div class="control-wrapper">
                                <input type="submit" value="Sign Up" class="btn btn-info btn-block">
                              </div>
                            </div>
                          </div>
                          <hr>
                        </form>
                        <div class="text-center">
                            <h5>Have an account?</h5>
                            <a href="signin.html" class="templatemo-create-new">Sign In <i class="fa fa-arrow-circle-o-right"></i></a>	
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
        </div>
      </div>
    </div>
  </div>
@endsection