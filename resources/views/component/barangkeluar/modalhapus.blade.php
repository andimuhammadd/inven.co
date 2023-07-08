<!-- Modal -->
<div class="modal fade" id="ModalHapus{{ $barangKeluar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Transaksi Barang Keluar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('barangkeluar.destroy', $barangKeluar->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">ID Transaksi</label>
                        <input type="text" class="form-control" value="{{ $barangKeluar->id }}" id="nama_barang" name="nama_barang" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="nama_barang" value="{{ $barangKeluar->databarang->kode_barang }}" name="nama_barang" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barangKeluar->databarang->nama_barang }}" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $barangKeluar->jumlah }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-danger">Hapus Transaksi</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>