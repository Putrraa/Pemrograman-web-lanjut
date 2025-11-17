<div class="modal fade" id="modalEditProduk{{ $data->id }}" tabindex="-1"
    aria-labelledby="modalEditProduk{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalEditProdukLabel{{ $data->id }}">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss></button>
            </div>
            
            <form action="{{ route('produk.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" name="id" value="{{ $data->id }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="{{ $data->nama_produk }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori_id" class="form-select">
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}" {{$kat->id == $data->kategori_id ? 'selected' : ''}}>
                                    {{ $kat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{ $data->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stock" value="{{ $data->stock }}" required>                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>