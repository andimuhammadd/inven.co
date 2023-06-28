<!-- Modal Hapus Satuan -->
<div class="modal fade" id="modalhapus{{ $jenis->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Form Hapus Jenis Barang</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jenisbarang.destroy', $jenis->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <h5 class="modal-title" id="editUserModalLabel">Hapus Jenis Barang {{ $jenis->nama }}?</h5>
                    <button type="submit" class="btn btn-primary">Hapus Jenis Barang</button>
                </form>
            </div>
        </div>
    </div>
</div>