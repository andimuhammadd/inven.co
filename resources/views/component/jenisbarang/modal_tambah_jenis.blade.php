<!-- Modal -->
<div class="modal fade" id="modalAddjenis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Jenis Barang</h1>
            </div>
            <div class="modal-body">
                <form action="{{ route('jenisbarang.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Jenis Barang</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <input type="hidden" name="id_perusahaan" value="{{ Auth::user()->perusahaan_id }}">

                    <button type="submit" class="btn btn-primary">Tambah Jenis Barang</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->