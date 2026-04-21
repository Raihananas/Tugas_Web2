<div class="card">
    <h1>☕ Edit Menu Kopi</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nama Kopi</label>
        <input type="text" name="nama_kopi" value="{{ $produk->nama_kopi }}" required>

        <label>Harga (Rp)</label>
        <input type="number" name="harga" value="{{ $produk->harga }}" required>

        <label>Stok</label>
        <input type="number" name="stok" value="{{ $produk->stok }}" required>

        <button type="submit" class="btn-simpan" style="background-color: #f39c12;">Update Menu</button>
        <a href="{{ route('produk.index') }}" class="kembali">← Batal</a>
    </form>
</div>