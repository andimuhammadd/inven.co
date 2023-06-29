<!-- Modal -->
<div class="modal fade" id="password{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Ubah Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/password/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- User fields to be edited -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Password Sekarang</label>
                        <input type="password" class="form-control" id="password" name="password_sekarang" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="password" name="password_baru" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>