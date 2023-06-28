<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($satuanbarang as $satuan)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $satuan->nama_satuan }}</td>
                    <td>
                        @include('component.satuan.modal_edit_satuan')
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modaledit{{ $satuan->id }}">Edit</a>

                        @include('component.satuan.modal_hapus_satuan')
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus{{ $satuan->id }}">Hapus</a>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($satuanbarang) === 0)
                <tr>
                    <td colspan="5">Data Satuan Barang kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @include('component.satuan.modal_tambah_satuan')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSsatuan">
        Tambah Satuan
    </button>
</div>