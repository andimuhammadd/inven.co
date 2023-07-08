<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Masuk</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($barangMasuks as $barangMasuk)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $barangMasuk->databarang->kode_barang }}</td>
                    <td>{{ $barangMasuk->databarang->nama_barang }}</td>
                    <td>{{ $barangMasuk->jumlah }}</td>
                    <td>{{ $barangMasuk->created_at }}</td>
                    <td>
                        @include('component.barangmasuk.modalhapus')
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus{{ $barangMasuk->id }}">
                            Hapus
                        </button>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($barangMasuks) === 0)
                <tr>
                    <td colspan="6">Data Transaksi Barang Masuk kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal -->
    <button id="btnModal" type="button" class="btn btn-primary">Tambah Transaksi</button>

    <!-- Modal -->
    @include('component.barangmasuk.templateModal')
    <!-- Modal -->

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnModal').click(function() {
                // Menggunakan AJAX untuk memuat konten modal
                $.ajax({
                    url: "{{ route('barangmasuk.create') }}",
                    method: "GET",
                    dataType: "html",
                    success: function(response) {
                        $('#modalContent').html(response);

                        // Menampilkan modal setelah konten dimuat
                        var modal = new bootstrap.Modal(document.getElementById('modalAddBarangMasuk'));
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