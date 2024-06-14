@extends('layouts.layout_admin')
@section('admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Product') }}
        </h2>
    </x-slot>

    <section id="content">
        <main>

            <div class="create-container">
                <div class="create">
                    <h1 style="color: rgb(87, 95, 95)">Add Product</h1>
                    <hr>

                    @if (session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="button">
                        <a href="{{ Route('admin.product.home') }}">Back</a>
                    </div>

                    {{-- Menyimpan data product ke route admin.product.save yang nantinya akan di redirect --}}
                    <form action="{{ route('admin.product.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-container">
                            <input type="text" name="title" placeholder="Title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <select class="form-control" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="text" name="package" placeholder="Package" class="form-control" value="{{ old('package') }}">
                            @error('package')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="number" min="10000" max="any" step="10000" name="price"
                                placeholder="Price" class="form-control" value="{{ old('price') }}">
                            @error('price')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button-add">
                            <button>Add Product</button>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
        </main>
    </section>
@endsection
