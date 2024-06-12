@extends('layouts.layout_admin')
@section('admin')
    <section id="content">
        <main>
            <!-- HEAD TITLE -->
            <div class="head-title">
                <div class="left">
                    <h1>Category</h1>
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
                    <h1>List Category</h1>
                    <div>
                        <a class="btn" href="{{ Route('admin.category.create') }}">Add category</a>
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
                            <th style="width: 50px">#</th>
                            <th style="width: 750px">Category</th>
                            <th style="width: 200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $category->category }}</td>
                                <td class="align-middle">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.category.delete', ['id' => $category->id]) }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6">category not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="card">
                    <div class="header">
                        <h4 class="mb-0">Category Details</h4>
                    </div>
                    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: flex-start;">
                        @foreach ($categories as $category)
                            <div class="container" style="width: 280px;">
                                <div class="card-body">
                                    <h5>{{ $category->category }}</h5>
                                    <div class="container">
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image"
                                            class="img-fluid" style="width: 200px">
                                    </div>
                                </div>
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
        </main>
    </section>
@endsection
