@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active">Detail Pelanggan</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user me-1"></i>
            Informasi Pelanggan
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">ID Pelanggan</div>
                <div class="col-md-9">{{ $customer->id }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Nama Pelanggan</div>
                <div class="col-md-9">{{ $customer->nama_pelanggan }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Nomor Telepon</div>
                <div class="col-md-9">{{ $customer->nomor_telepon ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Email</div>
                <div class="col-md-9">{{ $customer->email ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Alamat</div>
                <div class="col-md-9">{{ $customer->alamat ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Kota</div>
                <div class="col-md-9">{{ $customer->kota ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Provinsi</div>
                <div class="col-md-9">{{ $customer->provinsi ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Kode Pos</div>
                <div class="col-md-9">{{ $customer->kode_pos ?? '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Status</div>
                <div class="col-md-9">
                    @if($customer->status == 'aktif')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Tidak Aktif</span>
                    @endif
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Tanggal Registrasi</div>
                <div class="col-md-9">{{ $customer->tanggal_registrasi ? $customer->tanggal_registrasi->format('d/m/Y') : '-' }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Dibuat Pada</div>
                <div class="col-md-9">{{ $customer->created_at->format('d/m/Y H:i:s') }}</div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Diperbarui Pada</div>
                <div class="col-md-9">{{ $customer->updated_at->format('d/m/Y H:i:s') }}</div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit me-1"></i>Edit Pelanggan
                </a>
                <a href="{{ route('customer.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 