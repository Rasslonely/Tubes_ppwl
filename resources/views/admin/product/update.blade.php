@extends('layouts.layout_admin')
@section('admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <section id="content">
        <main>

            <div class="create-container">
                <div class="create">
                    <h1 style="color: rgb(87, 95, 95)">Edit Product</h1>
                    <hr>

                    @if (session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="button">
                        <a href="{{ Route('admin.product.home') }}">Back</a>
                    </div>

                    {{-- Menyimpan data product edit ke route admin.product.update yang nantinya akan di redirect --}}
                    <form action="{{ route('admin.product.update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-container">
                            <input type="text" name="title" placeholder="Title" class="form-control"
                                value="{{ $products->title }}">
                            @error('title')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <select class="select-container rounded-lg form-control" name="category">
                                <option disabled {{ old('category', $products->category) ? '' : 'selected' }}>Category
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category }}"
                                        {{ old('category', $products->category) == $category->category ? 'selected' : '' }}>
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="text" name="package" placeholder="Package" class="form-control"
                                value="{{ $products->package }}">
                            @error('package')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="number" min="10000" max="any" step="10000" name="price"
                                placeholder="Price" class="form-control" value="{{ $products->price }}">
                            @error('price')
                                <span class="text-error">{{ $message }}</span>
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
