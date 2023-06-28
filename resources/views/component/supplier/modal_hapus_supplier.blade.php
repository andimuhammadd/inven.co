<!-- Modal Hapus Satuan -->
<div class="modal fade" id="modalHapus{{ $supplier->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Form Hapus Supplier</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <h5 class="modal-title" id="editUserModalLabel">Hapus Supplier {{ $supplier->nama }}?</h5>
                    <button type="submit" class="btn btn-danger">Hapus Supplier</button>
                </form>
            </div>
        </div>
    </div>
</div>