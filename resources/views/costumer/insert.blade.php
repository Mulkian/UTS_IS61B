@extends('layout.app')

@section('title', ' tambah costumer')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Daftar Penyewa</h1>
    <div class="row">
        <div class="col-6">
            <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Penyewa</h6>
        </div>
        <div class="card-body">
            <form action="{{route('costumer.add.insert')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    @error('nama')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    @error('alamat')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="tanggal" class="form-control">
                    @error('tanggal')
                    {{$message}}
                @enderror
                <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" name="no_hp" class="form-control">
                    @error('no_hp')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                    <label>Merk Mobil</label>
                    <input type="text" name="merk_mobil" class="form-control">
                    @error('merk_mobil')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                    <label>Plat Nomor</label>
                    <input type="text" name="plat_nomor" class="form-control">
                    @error('plat_nomor')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                    <label>Biaya</label>
                    <input type="text" name="biaya" class="form-control">
                    @error('biaya')
                    {{$message}}
                @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
            </form>
        </div>
    </div>

        </div>
    </div>

@endsection
