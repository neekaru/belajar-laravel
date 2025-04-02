@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('produk_kasir') }}">Kasir</a></li>
        <li class="breadcrumb-item active">Edit Product</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-edit me-1"></i>
            Edit Product
        </div>
        <div class="card-body">
            <form action="{{ route('cashier.update', $kasir->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="product_code" class="form-label">Product Code</label>
                    <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" value="{{ old('product_code', $kasir->product_code) }}" required>
                    @error('product_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name', $kasir->product_name) }}" required>
                    @error('product_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $kasir->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $kasir->quantity) }}" required>
                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <a href="{{ route('produk_kasir') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 