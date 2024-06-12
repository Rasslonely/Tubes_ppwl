@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h1>All Orders</h1>
                @if($orders->isEmpty())
                    <p>No orders found.</p>
                @else
                    <table class="table table-striped">
                        <thead style="color: white">
                            <tr>
                                <th>Order ID</th>
                                <th>Game ID</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td style="color: white">{{ $order->id }}</td>
                                    <td style="color: white">{{ $order->game_id }}</td>
                                    <td style="color: white">{{ $order->total_price }}</td>
                                    <td style="color: white">{{ $order->status }}</td>
                                    <td style="color: white">{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
