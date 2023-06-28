<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Jenis Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($jenisbarang as $jenis)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $jenis->nama }}</td>
                    <td>
                        @include('component.jenisbarang.modal_edit_jenis')
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modaledit{{ $jenis->id }}">Edit</a>

                        @include('component.jenisbarang.modal_hapus_jenis')
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus{{ $jenis->id }}">Hapus</a>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($jenisbarang) === 0)
                <tr>
                    <td colspan="5">Data Jenis Barang kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @include('component.jenisbarang.modal_tambah_jenis')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddjenis">
        Tambah Jenis Barang
    </button>
</div>