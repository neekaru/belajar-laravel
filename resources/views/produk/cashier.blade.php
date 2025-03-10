@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kasir POS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Kasir</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-cash-register me-1"></i>
                Sales Transaction
            </div>
            <button class="btn btn-success">
                <i class="fas fa-shopping-cart me-1"></i>New Transaction
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Transaction items will go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection