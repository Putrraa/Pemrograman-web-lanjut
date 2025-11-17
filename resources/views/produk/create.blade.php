<div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahProdukLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="id" class="form-label">Kode Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="id" id="id" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
                    </div>

                    <div class="form-group">
                        <label for = "nama">Kategori <span class="text-danger">*</span></label><br>
                        <select name="kategori" required>
                            @foreach ($kategori as $category)
                                <option value"{{ $category->id }}>{{ $category->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="harga" id="harga" required>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stok <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="stock" id="stock" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
