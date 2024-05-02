<?php

namespace App\Http\Controllers;

use App\Models\TentangWebsite as ModelsTentangWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangWebsite extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangwebsite = ModelsTentangWebsite::orderBy('id', 'desc')->first();
        return view('admin.TentangWebsite.index', compact('tentangwebsite'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function usertentang()
    {
        $tentangwebsite = ModelsTentangWebsite::orderBy('id', 'desc')->first();
        return view('tentangwebsite', compact('tentangwebsite'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tentangwebsites')->insert([
            'tentangwebsite' => $request->tentangwebsite,
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
