@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Data Penyewaan</h1>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message')}}</strong>
                </div>
            @endif
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <a href="{{ route('penyewaan.create') }}" class=" btn btn-sm btn-primary"> CREATE DATA </a>
            <!-- menambahkan btn -->
            </div>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                <th>No</th>
              <th>Nama Penyewa</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Pengembalian</th>
              <th>Edit</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
                <th>No</th>
              <th>Nama Penyewa</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Tanggal Pinjam</th>\
              <th>Tanggal Pengembalian</th>
              <th>Edit</th>
                    </tr>
                </tfoot>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->namapen }}</td>
                        <td>{{ $datas->namaba }}</td>
                        <td>{{ $datas->jumlah }}</td>
                        <td>{{ $datas->tgl_pinjam }}</td>
                        <td>{{ $datas->tgl_pengembalian }}</td>
                        <td>
                            <form action="{{ route('penyewaan.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('penyewaan.edit', $datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection