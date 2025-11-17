<div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-labelledby="modalTambahKategori" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahKategoriLabel">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="id" class="form-label">Kode Kategori <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="id" id="id" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
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
