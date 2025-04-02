<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = AdminUser::all();
        return view('produk.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admin_users',
            'email' => 'required|email|max:255|unique:admin_users',
            'password' => 'required|min:6',
            'nomor_telepon' => 'nullable|string|max:15',
            'role' => 'required|in:admin,super_admin,staff',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['terakhir_login'] = now();

        AdminUser::create($data);

        return redirect()->route('admin.index')
            ->with('success', 'Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = AdminUser::findOrFail($id);
        return view('produk.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = AdminUser::findOrFail($id);
        return view('produk.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = AdminUser::findOrFail($id);

        $rules = [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admin_users,username,' . $id,
            'email' => 'required|email|max:255|unique:admin_users,email,' . $id,
            'nomor_telepon' => 'nullable|string|max:15',
            'role' => 'required|in:admin,super_admin,staff',
            'status' => 'required|in:aktif,tidak aktif',
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|min:6';
        }

        $request->validate($rules);

        $data = $request->except('password');
        
        // Only update password if it's provided
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return redirect()->route('admin.index')
            ->with('success', 'Data admin berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = AdminUser::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Admin berhasil dihapus!');
    }
    
    /**
     * Remove all records from storage.
     */
    public function destroyAll()
    {
        AdminUser::truncate();
        
        return redirect()->route('admin.index')
            ->with('success', 'Semua data admin berhasil dihapus!');
    }
}
