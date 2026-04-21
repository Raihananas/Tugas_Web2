<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }
    h1 {
        color: #5d4037;
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }
    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        box-sizing: border-box; /* Biar padding gak nambah lebar */
    }
    .btn-simpan {
        width: 100%;
        background-color: #795548;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }
    .btn-simpan:hover {
        background-color: #5d4037;
    }
    .kembali {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #777;
        text-decoration: none;
        font-size: 14px;
    }
</style>

<div class="card">
    <h1>☕ Tambah Kopi</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label>Nama Kopi</label>
        <input type="text" name="nama_kopi" placeholder="Contoh: Espresso" required>

        <label>Harga (Rp)</label>
        <input type="number" name="harga" placeholder="Contoh: 20000" required>

        <label>Stok</label>
        <input type="number" name="stok" placeholder="Contoh: 50" required>

        <button type="submit" class="btn-simpan">Simpan Menu</button>
        <a href="{{ route('produk.index') }}" class="kembali">← Kembali ke Daftar</a>
    </form>
</div>