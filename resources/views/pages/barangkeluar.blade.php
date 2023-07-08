<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>keterangan</th>
                    <th>Tanggal Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($barangKeluars as $barangKeluar)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $barangKeluar->databarang->kode_barang }}</td>
                    <td>{{ $barangKeluar->databarang->nama_barang }}</td>
                    <td>{{ $barangKeluar->jumlah }}</td>
                    <td>{{ $barangKeluar->keterangan }}</td>
                    <td>{{ $barangKeluar->created_at }}</td>
                    <td>
                        @include('component.barangkeluar.modalhapus')
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus{{ $barangKeluar->id }}">
                            Hapus
                        </button>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($barangKeluars) === 0)
                <tr>
                    <td colspan="6">Data Transaksi Barang keluar kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <button id="btnModal2" type="button" class="btn btn-primary">Tambah Transaksi</button>

    @include('component.barangkeluar.templateModal')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnModal2').click(function() {
                // Menggunakan AJAX untuk memuat konten modal
                $.ajax({
                    url: "{{ route('barangkeluar.create') }}",
                    method: "GET",
                    dataType: "html",
                    success: function(response) {
                        $('#modalContent2').html(response);

                        // Menampilkan modal setelah konten dimuat
                        var modal = new bootstrap.Modal(document.getElementById('modalAddBarangKeluar'));
                        modal.show();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</div>