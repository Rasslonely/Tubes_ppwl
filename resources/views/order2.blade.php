@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Order Details Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Order</em> Details</h4>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="featured-games header-text">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <img src="../../../assets/images/d3.png" alt="">
                                            <hr>
                                            <h6>{{ $product->package }}</h6>
                                            <p class="text-white">Rp {{ number_format($product->price, 0, ',', '.') }},-</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <form action="{{ route('checkout') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="game_id" style="color: white">Game ID</label>
                                                    <input type="text"
                                                        class="form-control @error('game_id') is-invalid @enderror"
                                                        id="game_id" name="game_id" required>
                                                    @error('game_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="quantity" style="color: white">Quantity</label>
                                                    <input type="number"
                                                        class="form-control @error('quantity') is-invalid @enderror"
                                                        id="quantity" name="quantity" value="1" min="1"
                                                        required>
                                                    @error('quantity')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="payment_method" style="color: white">Payment Method</label>
                                                    <select
                                                        class="form-control @error('payment_method') is-invalid @enderror"
                                                        id="payment_method" name="payment_method" required>
                                                        <option value="VISA">VISA</option>
                                                        <option value="Indomaret">Indomaret</option>
                                                        <option value="ShopeePay">ShopeePay</option>
                                                        <option value="GoPay">GoPay</option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="BNI">BNI</option>
                                                        <option value="Mandiri">Mandiri</option>
                                                        <option value="QRIS">QRIS</option>
                                                        <option value="Dana">Dana</option>
                                                    </select>
                                                    @error('payment_method')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <button type="submit" class="btn btn-primary mt-3">Purchase
                                                        Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="top-downloaded">
                                <div class="heading-section">
                                    <h4><em>Available</em> Payment Method</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/dana.jpg" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/spay.png" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/mandiri.jpeg" alt=""
                                            class="templatemo-item">
                                    </div>
                                    <hr>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/qris.png" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/gopay.jpg" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/bni.jpg" alt="" class="templatemo-item">
                                    </div>
                                    <hr>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/visa.png" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/bca.png" alt="" class="templatemo-item">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="../../../assets/images/indomaret.png" alt=""
                                            class="templatemo-item">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Order Details End ***** -->

                </div>
            </div>
        </div>
    </div>
@endsection
