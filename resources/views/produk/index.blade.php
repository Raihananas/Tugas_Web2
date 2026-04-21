<style>
    body { font-family: sans-serif; background: #f4f4f4; padding: 20px; color: #333; }
    
    /* Header & Tombol */
    .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    .btn { padding: 8px 15px; border-radius: 5px; text-decoration: none; border: none; cursor: pointer; transition: 0.3s; }
    .btn-add { background: #795548; color: #fff; }
    .btn-edit { color: #f39c12; font-weight: bold; margin-right: 10px; }
    .btn-del { background: #e74c3c; color: #fff; padding: 5px 10px; }
    .btn:hover { opacity: 0.8; }

    /* Tabel Minimalis */
    table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eee; }
    th { background: #5d4037; color: #fff; font-size: 13px; text-transform: uppercase; }
    tr:hover { background: #f9f9f9; }
</style>

<div class="top-bar">
    <h2 style="margin:0">☕ Daftar Menu Kopi</h2>
    <a href="{{ route('produk.create') }}" class="btn btn-add">+ Tambah Kopi</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th style="text-align:center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $p)
        <tr>
            <td><strong>{{ $p->nama_kopi }}</strong></td>
            <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
            <td>{{ $p->stok }} <small>pcs</small></td>
            <td style="text-align:center">
                <a href="{{ route('produk.edit', $p->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-del" onclick="return confirm('Hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>