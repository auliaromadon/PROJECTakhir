@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>TAMBAH DATA</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('penyewaan.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="namapen">NAMA PENYEWA:</label>
                    <input type="text" class="form-control" id="namapen" name="namapen">
                </div>
                <div class="form-group">
                    <label for="namaba">NAMA BARANG:</label>
                    <input type="text" class="form-control" id="namaba" name="namaba">
                </div>
                <div class="form-group">
                    <label for="jumlah">JUMLAH:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="tgl_pinjam">TANGGAL PINJAM:</label>
                    <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                </div>
                <div class="form-group">
                    <label for="tgl_pengembalian">TANGGAL PENGEMBALIAN:</label>
                    <input type="text" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection

