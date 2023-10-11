<div>
    <h4>Edit Data Pemain</h4>
    <form method="post" action="{{ route('mengupdate_data', $cariPemain->id) }}" >
        @csrf
        <div>ID Pemain
            <input type="text" name="id" value="{{ $cariPemain->id }}">
        </div>
        <div>Nama Pemain
            <input type="text" name="nama" value="{{ $cariPemain->nama_pemain }}">
        </div>
        <div>Nomor Punggung
            <input type="text" name="punggung" value="{{ $cariPemain->no_punggung }}">
        </div>
        <div>Posisi
            <input type="text" name="posisi" value="{{ $cariPemain->posisi }}">
        </div>
        
        <div><button type="submit">Simpan</button></div>
        <a href="/website_pemain"> Batal</a>
    </form>
</div>
