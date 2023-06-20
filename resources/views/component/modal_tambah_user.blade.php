<!-- Modal -->
@php
use App\Models\User;

$users = User::all();
@endphp

@foreach($users as $user)
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah User</h1>
            </div>
            <div class="modal-body">
                <form action="tambahuser" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Default : admin123</label>
                        <input type="password" class="form-control" id="password" name="password" value="admin123" required disabled>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="staf">Staf</option>
                        </select>
                    </div>
                    <input type="hidden" name="perusahaan_id" value="{{ Auth::user()->perusahaan_id }}">
                    <input type="hidden" name="foto_profile" value="profile_default.jpg">

                    <button type="submit" class="btn btn-primary">Tambah User</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Modal -->