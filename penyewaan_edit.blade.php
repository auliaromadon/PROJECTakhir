@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Ubah Data</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach($data as $datas)
            <form action="{{ route('penyewaan.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="namapen">NAMA PENYEWA:</label>
                    <input type="text" class="form-control" id="namapen" name="namapen" value="{{ $datas->namapen }}">
                </div>
                <div class="form-group">
                    <label for="namaba">NAMA BARANG:</label>
                    <input type="text" class="form-control" id="namaba" name="namaba" value="{{ $datas->namaba }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">JUMLAH:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
                </div>
                <div class="form-group">
                    <label for="tgl_pinjam">TANGGAL PINJAM:</label>
                    <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="{{ $datas->tgl_pinjam }}">
                </div>
                <div class="form-group">
                    <label for="tgl_pengembalian">TANGGAL PENGEMBALIAN:</label>
                    <input type="text" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian" value="{{ $datas->tgl_pengembalian }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection
                            