<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $supplier->nama }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->telepon }}</td>
                    <td>

                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal{{ $supplier->id }}">Edit</a>

                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusUser{{ $supplier->id }}">Hapus</a>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($suppliers) === 0)
                <tr>
                    <td colspan="5">Data Supplier kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @include('component.modal_tambah_supplier')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSupplier">
        Tambah Supplier
    </button>
</div>