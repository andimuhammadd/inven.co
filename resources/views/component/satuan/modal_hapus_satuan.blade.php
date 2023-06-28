<!-- Modal Hapus Satuan -->
<div class="modal fade" id="modalhapus{{ $satuan->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Form Hapus Satuan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('satuanbarang.destroy', $satuan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <h5 class="modal-title" id="editUserModalLabel">Hapus Satuan {{ $satuan->nama_satuan }}?</h5>
                    <button type="submit" class="btn btn-primary">Hapus Satuan</button>
                </form>
            </div>
        </div>
    </div>
</div>