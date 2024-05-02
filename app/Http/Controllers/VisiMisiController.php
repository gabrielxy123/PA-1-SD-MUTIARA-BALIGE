<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = VisiMisi::orderBy('id', 'desc')->first();
        return view('admin.VisiMisi.index', compact('visimisi'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function uservisimisi()
    {
        $visimisi = VisiMisi::orderBy('id', 'desc')->first();
        return view('visimisi', compact('visimisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('visimisis')->insert([
            'VisiMisi' => $request->VisiMisi,
        ]);
        return redirect('/admin/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
