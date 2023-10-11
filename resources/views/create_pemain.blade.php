<div>
    <h4>Tambah Data Pemain</h4>
    <form  method="post" action="{{ route('menyimpan_data') }}">
        @csrf
            <div>Nama Pemain <input type="text" name="nama"></div>
            <div>Nomor Punggung <input type="text" name="punggung"></div>
            <div>Posisi <input type="text" name="posisi"></div>
            <div>
                <button type="submit">Simpan</button>
                <a href="/website_pemain">Batal</a>
            </div>
    </form>
</div>
