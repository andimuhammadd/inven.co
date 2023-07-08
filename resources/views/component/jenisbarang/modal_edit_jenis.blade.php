<!-- Modal -->
<div class="modal fade" id="modaledit{{ $jenis->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Form Edit Jenis Barang</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jenisbarang.update', $jenis->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- User fields to be edited -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Jenis Barang</label>
                        <input type="text" class="form-control" id="name" name="nama" value="{{ $jenis->nama }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>