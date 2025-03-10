@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Kasir</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Products Management</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-box me-1"></i>
                Product List
            </div>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Add New Product
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Product data will go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection