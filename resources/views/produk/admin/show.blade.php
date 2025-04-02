@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="breadcrumb-item active">Detail Admin</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-shield me-1"></i>
            Informasi Admin
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">ID Admin</div>
                <div class="col-md-9">{{ $admin->id }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Nama</div>
                <div class="col-md-9">{{ $admin->nama }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Username</div>
                <div class="col-md-9">{{ $admin->username }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Email</div>
                <div class="col-md-9">{{ $admin->email }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Nomor Telepon</div>
                <div class="col-md-9">{{ $admin->nomor_telepon ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Role</div>
                <div class="col-md-9">
                    @if($admin->role == 'super_admin')
                        <span class="badge bg-danger">Super Admin</span>
                    @elseif($admin->role == 'admin')
                        <span class="badge bg-primary">Admin</span>
                    @else
                        <span class="badge bg-secondary">Staff</span>
                    @endif
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Status</div>
                <div class="col-md-9">
                    @if($admin->status == 'aktif')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Tidak Aktif</span>
                    @endif
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Login Terakhir</div>
                <div class="col-md-9">{{ $admin->terakhir_login ? $admin->terakhir_login->format('d/m/Y H:i:s') : '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Dibuat Pada</div>
                <div class="col-md-9">{{ $admin->created_at->format('d/m/Y H:i:s') }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Diperbarui Pada</div>
                <div class="col-md-9">{{ $admin->updated_at->format('d/m/Y H:i:s') }}</div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit me-1"></i>Edit Admin
                </a>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 