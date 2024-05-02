<?php
namespace App\Http\Controllers;

use App\Models\Kategoriartikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    // Menampilkan daftar kategori artikel
    public function index()
    {
        $kategori = Kategoriartikel::all(); // Mengambil semua kategori dari model Category

        return view('admin.kategoriartikel.index', compact('kategori')); // Mengirim data kategori ke view index.blade.php
    }
    

    // Menampilkan halaman tambah kategori artikel
    public function create()
    {
        return view('admin.kategoriartikel.tambah');
    }

    // Menyimpan kategori artikel baru
    public function store(Request $request)
{
    // Validasi data input
    $request->validate([
        'kategoriartikel' => 'required|unique:kategori_artikels,kategoriartikel',
    ]);

    // Simpan kategori baru ke dalam database
    Kategoriartikel::insert([
        'kategoriartikel' => $request->kategoriartikel,
    ]);

    return redirect('/admin/kategoriartikel/index')->with('sukses', 'Kategori berhasil ditambahkan.');
}


    // Menampilkan halaman ubah kategori artikel
    public function edit($id)
    {
        $kategori = DB::table('kategori_artikels')->where('id', $id)->get();
        return view('admin.kategoriartikel.ubah',['kategori' => $kategori]);
    }

    // Menyimpan perubahan pada kategori artikel
    public function update(Request $request, $id)
    {
        DB::table('kategori_artikels')->where('id', $id)->update([
            'kategoriartikel' => $request->kategoriartikel,
        ]);

        return redirect('/admin/kategoriartikel/index')->with('sukses', 'Kategori berhasil diubah.');
    }

    // Menghapus kategori artikel
    public function destroy($id)
    {
        // Temukan kategori yang ingin dihapus berdasarkan ID
        $kategori  = Kategoriartikel::findOrFail($id);

        // Hapus kategori
        $kategori ->delete();

        return redirect('/admin/kategoriartikel/index')->with('sukses', 'Kategori berhasil dihapus.');
    }
}
