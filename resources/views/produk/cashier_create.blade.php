@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add New Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('produk_kasir') }}">Kasir</a></li>
        <li class="breadcrumb-item active">Add New Product</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
            Create New Product
        </div>
        <div class="card-body">
            <form action="{{ route('cashier.store') }}" method="POST" id="createProductForm">
                @csrf
                
                <div class="mb-3">
                    <label for="product_code" class="form-label">Product Code</label>
                    <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" value="{{ old('product_code') }}" required>
                    @error('product_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name') }}" required>
                    @error('product_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="price_display" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price_display" required>
                        <input type="hidden" id="price" name="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                    <a href="{{ route('produk_kasir') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const priceDisplay = document.getElementById('price_display');
        const priceField = document.getElementById('price');
        const createForm = document.getElementById('createProductForm');
        
        // Format initial value if it exists
        if (priceField.value) {
            priceDisplay.value = formatNumber(priceField.value);
        }
        
        // Format price when user inputs
        priceDisplay.addEventListener('input', function(e) {
            let value = this.value.replace(/[^\d.]/g, '');
            
            // Store the raw value in the hidden field
            priceField.value = value;
            
            this.value = formatNumber(value);
        });
        
        // Before form submission, ensure raw value is stored
        createForm.addEventListener('submit', function(e) {
            let rawValue = priceDisplay.value.replace(/[^\d.]/g, '');
            
            // Ensure it's a valid number and handle decimal properly
            rawValue = parseFloat(rawValue);
            if (isNaN(rawValue)) {
                rawValue = 0;
            }
            
            priceField.value = rawValue;
        });
        
        // Function to format number with thousand separators
        function formatNumber(num) {
            if (!num) return '';
            
            const parts = num.toString().split('.');
            const wholePart = parts[0];
            
            // Add thousand separators to whole part
            const formattedWhole = wholePart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            
            if (parts.length > 1) {
                const decimalPart = parts[1].substring(0, 2); // Limit to 2 decimal places
                return formattedWhole + ',' + decimalPart;
            }
            
            return formattedWhole;
        }
    });
</script>
@endsection 