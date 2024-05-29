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
                    <form action="{{ route('admin.product.update', $products->id
                    ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-container">
                            <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $products->title }}">
                            @error('title')
                            <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <select class="select-container rounded-lg" name="category" class="form-control" value="{{ $products->category }}">
                                <option disabled selected class="">Category</option>
                                <option>Nayla Cooking</option>
                                <option>Rass Simulator</option>
                                <option>Robert King</option>
                                <option>Timo Racing</option>
                                <option>Rayza World</option>
                            </select>
                        @error('category')
                            <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="text" name="package" placeholder="Package" class="form-control" value="{{ $products->package }}">
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
                        <button> Product</button>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </main>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0 font-semibold text-xl text-gray-800 leading-tight">Edit Product</h1>
                    <hr>
                    <form action="{{ route('admin.product.update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-container">
                            <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $products->title }}">
                            @error('title')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <select class="select-container rounded-lg" name="category" class="form-control">
                                <option disabled selected class="">Category</option>
                                <option>Nayla Cooking</option>
                                <option>Rass Simulator</option>
                                <option>Robert King</option>
                                <option>Timo Racing</option>
                                <option>Rayza World</option>
                            </select>
                            @error('category')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <input type="text" name="package" placeholder="Package" class="form-control" value="{{ $products->package }}">
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
                            <button>Edit Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection