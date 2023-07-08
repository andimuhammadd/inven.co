<div id="modalContent">
    <form action="{{ route('databarang.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $kode_barang }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>

        <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <div class="input-group">
                <select class="form-control" id="jenis_barang" name="jenis_barang" required>
                    <option value="" disabled selected>Pilih Jenis Barang</option>
                    @if ($jenisbarangs->isEmpty())
                    <option value="" disabled>Data Jenis Barang tidak ada</option>
                    @else
                    @foreach ($jenisbarangs as $jenisbarang)
                    <option value="{{ $jenisbarang->id }}">{{ $jenisbarang->nama }}</option>
                    @endforeach
                    @endif
                </select>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="satuan_barang" class="form-label">Satuan Barang</label>
            <div class="input-group">
                <select class="form-control" id="satuan_barang" name="satuan_barang" required>
                    <option value="" disabled selected>Pilih Satuan Barang</option>
                    @if ($satuanbarangs->isEmpty())
                    <option value="" disabled>Data Satuan Barang tidak ada</option>
                    @else
                    @foreach ($satuanbarangs as $satuanbarang)
                    <option value="{{ $satuanbarang->id }}">{{ $satuanbarang->nama_satuan }}</option>
                    @endforeach
                    @endif
                </select>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <div class="input-group">
                <select class="form-control" id="supplier" name="supplier" required>
                    <option value="" disabled selected>Pilih Supplier</option>
                    @if ($suppliers->isEmpty())
                    <option value="" disabled>Data supplier tidak ada</option>
                    @else
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                    @endforeach
                    @endif
                </select>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
        </div>
        <input type="hidden" name="id_perusahaan" value="{{ Auth::user()->perusahaan_id }}">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>