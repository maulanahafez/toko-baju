<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\JenisBaju;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'bajus' => Baju::with('jenis_baju')->latest()->get(),
        ];

        return view('baju.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'jenis_bajus' => JenisBaju::all(),
            'ukuran' => ['S', 'M', 'L', 'XL', 'XXL']
        ];
        return view('baju.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => ['required', 'string'],
            'harga' => ['required', 'numeric'],
            'ukuran' => ['required'],
            'jenis_baju' => ['required'],
        ]);

        $jenis_baju = JenisBaju::where('jenis_baju', $val['jenis_baju'])->first();

        $newBaju = Baju::create([
            'nama' => $val['nama'],
            'harga' => $val['harga'],
            'ukuran' => $val['ukuran'],
            'jenis_baju_id' => $jenis_baju->id,
        ]);

        return redirect()->route('baju.index')->with('storesuccess', 'Baju Berhasil ditambahkan!');
        // dd($val, $jenis_baju);
    }

    /**
     * Display the specified resource.
     */
    public function show(Baju $baju)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Baju $baju)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Baju $baju)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Baju $baju)
    {
        $baju->delete();

        return redirect()->route('baju.index')->with('deletesuccess', 'Baju Berhasil dihapus');
        dd($baju);
    }
}
