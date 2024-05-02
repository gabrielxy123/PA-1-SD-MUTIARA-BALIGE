<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Pengguna()
    {
        $pengguna = Admin::all();
        return view('admin.Pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Tambah()
    {
        return view('admin.Pengguna.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namaFoto = $request->file('foto')->store('public/images');
        DB::table('admins')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'foto' => $namaFoto,
        ]);
        return redirect('/admin/Pengguna/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna = DB::table('admins')->where('id', $id)->get();
        return view('admin.Pengguna.edit',['pengguna' => $pengguna]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $namaFoto = $request->file('foto')->store('public/images');
        DB::table('admins')->where('id', $id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'foto' => $namaFoto,
        ]);
        return redirect('/admin/Pengguna/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Hapus data dengan ID yang sesuai
    DB::table('admins')->where('id', $id)->delete();

    // Redirect ke halaman yang sesuai
    return redirect('/admin/Pengguna/index');
}

}
