<div id="modalContent">
    <form action="{{ route('barangmasuk.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <select class="form-control" id="id_data_barang" name="id_data_barang" required>
                    <option value="" disabled selected>Pilih Jenis Barang</option>
                    @if ($databarangs->isEmpty())
                    <option value="" disabled>Data Barang tidak ada</option>
                    @else
                    @foreach ($databarangs as $databarang)
                    <option value="{{ $databarang->id }}" data-id="{{ $databarang->kode_barang }}">{{ $databarang->kode_barang }}</option>
                    @endforeach
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Total di inventaris</label>
                <input type="number" class="form-control" id="jumlahtotal" name="jumlahtotal" required readonly>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Barang Masuk</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <input type="hidden" name="id_perusahaan" value="{{ Auth::user()->perusahaan_id }}">

            <script>
                // Menggunakan jQuery untuk menangani perubahan pada select box
                $(document).ready(function() {
                    $('#id_data_barang').on('change', function() {
                        var kodeBarang = $(this).find('option:selected').data('id');

                        // Cari data barang berdasarkan kode barang yang dipilih
                        var dataBarang = @json($databarangs);

                        // Temukan data barang dengan kode barang yang dipilih
                        var selectedBarang = dataBarang.find(function(barang) {
                            return barang.kode_barang === kodeBarang;
                        });

                        // Jika data barang ditemukan, isi nama barang
                        if (selectedBarang) {
                            $('#jumlahtotal').val(selectedBarang.jumlah);
                        } else {
                            $('#jumlahtotal').val('');
                        }
                    });
                });
            </script>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>