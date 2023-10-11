@php
    use Carbon\Carbon;
@endphp
<html>
    <div>
        @yield('header')
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>NOMOR</th>
                <th>ID PEMAIN</th>
                <th>NAMA PEMAIN</th>
                <th>NOMOR PUNGGUNG</th>
                <th>POSISI</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>TOMBOL HAPUS</th>
                <th>TOMBOL EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $var_pemain)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $var_pemain->id }}</td>
                    <td>{{ $var_pemain->nama_pemain }}</td>
                    <td>{{ $var_pemain->no_punggung }}</td>
                    <td>{{ $var_pemain->posisi }}</td>
                    <td>{{ Carbon::parse($var_pemain->created_at)->format('d/m/Y H:i:s') }}</td>
                    <td>{{ Carbon::parse($var_pemain->updated_at)->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <form action="{{ route('menghapus_data', ['id' => $var_pemain->id]) }}" method="post">
                            @csrf
                            <button onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('mengedit_data', ['idsss' => $var_pemain->id]) }}" method="get">
                            @csrf
                            <button onClick="return confirm('Yakin mau diganti?')">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right"><a href="{{ route('membuat_data') }}">Tambah Data Pemain</a></p>  
    <aside>
        @include('tambahan.footer')
    </aside>  
<html>
