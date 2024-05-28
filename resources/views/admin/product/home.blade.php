@extends('layouts.layout_admin')
@section('admin')
    <section id="content">
        <!-- MAIN -->
        <main>
            <!-- HEAD TITLE -->
            <div class="head-title">
                <div class="left">
                    <h1>Product</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">{{ $title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- HEAD TITLE END-->
            <div class="container">
                <div class="header">
                    <h1>List Product</h1>
                    <div>
                        <a class="btn" href="{{ Route('admin.product.create') }}">Add Product</a>
                    </div>
                </div>
                <hr>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Package</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $product->title }}</td>
                                <td class="align-middle">{{ $product->category }}</td>
                                <td class="align-middle">{{ $product->package }}</td>
                                <td class="align-middle">{{ $product->price }}</td>
                                <td class="align-middle">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}"
                                            class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6">Product not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </section>
@endsection
