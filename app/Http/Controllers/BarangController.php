<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $role = auth()->user()->role;
        $base = "$role/barang";
        $suppliers = Supplier::all();
        $kategorys = Category::all();
        return view('admin.barang.index', compact('barangs', 'role', 'base', 'suppliers', 'kategorys'));

    }

    public function create()
    {
        $suppliers = Supplier::all();
        $kategorys = Category::all();
        return view('admin.barang.create', compact('suppliers', 'kategorys'));
    }

    public function store(Request $request)
    {

            $request->validate([
                'category_id' => 'required|integer',
                'supplier_id' => 'required|integer',
                'kode_barang' => 'required|string',
                'harga_jual' => 'required|numeric',
                'harga_pokok' => 'required|numeric',
                'stok' => 'required|integer',
                'judul' => 'required|string',
                'status' => 'required|string',
            ]);

            $uuid = Uuid::uuid4()->toString();
            $requestData = $request->all();
            $requestData['uuid'] = $uuid;

            Barang::create($requestData);

            return redirect()->route('barang.index')->with('success', 'Barang berhasil disimpan.');

    }

    public function show($id)
    {
        $barang = Barang::find($id);
        $suppliers = Supplier::all();
        $kategorys = Category::all();
        return view('admin.barang.show', compact('barang', 'suppliers', 'kategorys'));
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $suppliers = Supplier::all();
        $kategorys = Category::all();
        return view('admin.barang.edit', compact('barang', 'suppliers', 'kategorys'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'kode_barang' => 'required|string',
            'harga_jual' => 'required|numeric',
            'harga_pokok' => 'required|numeric',
            'stok' => 'required|integer',
            'judul' => 'required|string',
            'status' => 'required|string',
        ]);

        $barang = Barang::find($id);
        $barang->update($request->except('_token'));

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}