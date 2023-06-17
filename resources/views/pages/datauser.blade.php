<div class="col">
    <div class="table-responsive">
        <table class="table">
            <!-- Tambahkan kode tabel seperti yang Anda berikan sebelumnya -->
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="5">Data user kosong</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <!-- Tambahkan tombol aksi sesuai kebutuhan -->
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    @include('component.modal_tambah_user')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah User
    </button>

</div>