                <div id="modalContent">
                    <form action="{{ route('databarang.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_barang" class="form-label">Jenis Barang</label>
                            <select class="form-control" id="jenis_barang" name="jenis_barang" required>
                                @foreach ($jenisbarangs as $jenisbarang)
                                <option value="{{ $jenisbarang->id }}">{{ $jenisbarang->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>

                        <div class="mb-3">
                            <label for="satuan_barang" class="form-label">Satuan Barang</label>
                            <select class="form-control" id="satuan_barang" name="satuan_barang" required>
                                @foreach ($satuanbarangs as $satuanbarang)
                                <option value="{{ $satuanbarang->id }}">{{ $satuanbarang->nama_satuan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-control" id="supplier" name="supplier" required>
                                @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>