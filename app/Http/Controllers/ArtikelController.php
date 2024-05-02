<?php

namespace App\Http\Controllers;

use App\Models\Artikel as ModelsArtikel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $artikel = ModelsArtikel::all();
        return view('admin.artikel.index', compact('artikel'));
    }

    // Menampilkan halaman tambah artikel
    public function create()
    {
        return view('admin.artikel.tambah');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:1000', // Sesuaikan dengan kebutuhan
            'isi' => 'required',
        ]);
      
        // Proses penyimpanan artikel
        $artikel = new ModelsArtikel();
        $artikel->judul = $request->judul;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->isi = $request->isi;

        // Upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('images/artikel'), $nama_foto);
            $artikel->foto = $nama_foto;
        }

        $artikel->save();

        return redirect('/admin/artikel/index')->with('success', 'Artikel berhasil ditambahkan');
    }

    // Menampilkan halaman ubah artikel
    public function edit($id)
    {
        $artikel = DB::table('artikels')->where('id', $id)->get();
        return view('admin.artikel.ubah',['artikel' => $artikel]);
    }

    // Menyimpan perubahan pada artikel
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:1000', // Sesuaikan dengan kebutuhan
            'isi' => 'required',
        ]);

        // Proses update artikel
        $artikel = ModelsArtikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->isi = $request->isi;

        // Upload foto baru jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('images/artikel'), $nama_foto);
            $artikel->foto = $nama_foto;
        }

        $artikel->save();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diubah');
    }

    // Menghapus artikel
    public function destroy($id)
    {
        $artikel = ModelsArtikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
}
