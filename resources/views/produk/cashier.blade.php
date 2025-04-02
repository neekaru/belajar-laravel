@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kasir POS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Kasir</li>
    </ol>
    
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-cash-register me-1"></i>
                Sales Transaction
            </div>
            <div>
                <a href="{{ route('cashier.create') }}" class="btn btn-success">
                    <i class="fas fa-plus me-1"></i>Add New Product
                </a>
                <form action="{{ route('cashier.destroy_all') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete all products?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-1"></i>Delete All
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kasir as $k)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $k->product_code }}</td>
                            <td>{{ $k->product_name }}</td>
                            <td>Rp {{ number_format($k->price, 0, ',', '.') }}</td>
                            <td>{{ $k->quantity }}</td>
                            <td>Rp {{ number_format($k->subtotal, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('cashier.edit', $k->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('cashier.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection