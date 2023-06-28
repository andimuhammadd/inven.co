<!-- Modal -->
<div class="modal fade" id="modalAddSsatuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Satuan</h1>
            </div>
            <div class="modal-body">
                <form action="{{ route('satuanbarang.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Satuan</label>
                        <input type="text" class="form-control" id="nama_satuan" name="nama_satuan" required>
                    </div>
                    <input type="hidden" name="id_perusahaan" value="{{ Auth::user()->perusahaan_id }}">

                    <button type="submit" class="btn btn-primary">Tambah Satuan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->