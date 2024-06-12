@extends('layouts.layout_admin')
@section('admin')
    <section id="content">
        <main>

            <div class="create-container">
                <div class="create">
                    <h1 style="color: rgb(87, 95, 95)">Add Category</h1>
                    <hr>

                    @if (session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="button">
                        <a href="{{ Route('admin.category.home') }}">Back</a>
                    </div>

                    {{-- Menyimpan data category ke route admin.category.save yang nantinya akan di redirect --}}
                    <form action="{{ route('admin.category.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-container">
                            <input type="text" name="category" id="category" placeholder="Category" class="form-control">
                            @error('category')
                                <span class="text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                            @error('image')
                                <span class="text-error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button-add">
                            <button>Add category</button>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
        </main>
    </section>
@endsection
