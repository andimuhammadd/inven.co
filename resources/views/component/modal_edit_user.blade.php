<!-- Modal -->
<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- User fields to be edited -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>

                        <input type="text" class="form-control" id="name" name="nama" value="{{ $user->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Profile Photo</label>
                        <input type="file" class="form-control" id="photo" name="foto_profile">
                    </div>
                    <!-- Additional fields and inputs for editing other user information -->

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>

        </div>
    </div>
</div>