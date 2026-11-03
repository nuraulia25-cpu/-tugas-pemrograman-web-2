<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use Illuminate\Http\Request;

class ApotekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('apotek.index', [
            'title' => 'Apotek',
            'apoteks' => Apotek::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apotek.create', [
            'title' => 'Tambah Data Apotek'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_obat' => 'required|min:3|max:255',
        'kategori' => 'required|in:Tablet,Kapsul,Sirup,Salep,Vitamin',
        'stok' => 'required|integer|min:0',
        'harga' => 'required|integer|min:100',
        'tanggal_expired' => 'required|date',
    ], [
        'nama_obat.required' => 'Nama obat wajib di input',
        'nama_obat.min' => 'Nama obat minimal 3 karakter',
        'nama_obat.max' => 'Nama obat maksimal 255 karakter',
        'kategori.required' => 'Kategori wajib dipilih',
        'kategori.in' => 'Kategori harus Tablet, Kapsul, Sirup, Salep, atau Vitamin',
        'stok.required' => 'Stok wajib di input',
        'stok.integer' => 'Stok wajib berupa angka bulat',
        'stok.min' => 'Stok tidak boleh kurang dari 0',
        'harga.required' => 'Harga wajib di input',
        'harga.integer' => 'Harga wajib berupa angka bulat',
        'harga.min' => 'Harga minimal Rp 100',
        'tanggal_expired.required' => 'Tanggal expired wajib di input',
        'tanggal_expired.date' => 'Format tanggal tidak valid',
    ]);

    Apotek::create($validated);
    return to_route('apotek.index')->with('success', 'Data Apotek berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Apotek $apotek)
    {
        return view('apotek.show', [
            'title' => 'Detail Apotek',
            'apotek' => $apotek
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apotek $apotek)
    {
        return view('apotek.edit', [
            'title' => 'Edit Data Apotek',
            'apotek'=> $apotek
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apotek $apotek)
    {
         $validated = $request->validate([
        'nama_obat' => 'required|min:3|max:255',
        'kategori' => 'required|in:Tablet,Kapsul,Sirup,Salep,Vitamin',
        'stok' => 'required|integer|min:0',
        'harga' => 'required|integer|min:100',
        'tanggal_expired' => 'required|date',
    ], [
        'nama_obat.required' => 'Nama obat wajib di input',
        'nama_obat.min' => 'Nama obat minimal 3 karakter',
        'nama_obat.max' => 'Nama obat maksimal 255 karakter',
        'kategori.required' => 'Kategori wajib dipilih',
        'kategori.in' => 'Kategori harus Tablet, Kapsul, Sirup, Salep, atau Vitamin',
        'stok.required' => 'Stok wajib di input',
        'stok.integer' => 'Stok wajib berupa angka bulat',
        'stok.min' => 'Stok tidak boleh kurang dari 0',
        'harga.required' => 'Harga wajib di input',
        'harga.integer' => 'Harga wajib berupa angka bulat',
        'harga.min' => 'Harga minimal Rp 100',
        'tanggal_expired.required' => 'Tanggal expired wajib di input',
        'tanggal_expired.date' => 'Format tanggal tidak valid',
    ]);

    $apotek->update($validated);

    return to_route('apotek.index')->with('success', 'Data Apotek berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apotek $apotek)
    {
        $apotek->delete();

        return to_route('apotek.index')->withSuccess('Data Berhasil Dihapus');
    }
}
