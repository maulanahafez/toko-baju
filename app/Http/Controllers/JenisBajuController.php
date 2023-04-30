<?php

namespace App\Http\Controllers;

use App\Models\JenisBaju;
use Illuminate\Http\Request;

class JenisBajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'jenis_bajus' => JenisBaju::latest()->get(),
        ];

        return view('jenisbaju.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisbaju.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'jenis_baju' => ['required', 'string'],
        ]);

        JenisBaju::create($val);

        return redirect()->route('jenisbaju.index')->with('storesuccess', 'Jenis Baju Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisBaju $jenisBaju)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisBaju $jenisBaju)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisBaju $jenisBaju)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisBaju $jenisBaju)
    {
        // dd($jenisBaju);
        $jenisBaju->delete();

        return redirect()->route('jenisbaju.index')->with('deletesuccess', 'Jenis Baju Berhasil dihapus!');
    }
}
