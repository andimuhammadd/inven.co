<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\SatuanBarang;
use App\Models\JenisBarang;

class DataBarangController extends Controller
{
    public function create()
    {
        $jenisbarangs = JenisBarang::all();
        $satuanbarangs = SatuanBarang::all();
        $suppliers = Supplier::all();

        $modalContent = view('component.databarang.modal_tambah_barang', compact('jenisbarangs', 'satuanbarangs', 'suppliers'))->render();

        return response()->json(['modalContent' => $modalContent]);
    }
}
