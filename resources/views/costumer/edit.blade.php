@extends('layout.app')

@section('title', 'Edit Customer')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Edit Customer</h1>
    <div class="row">
        <div class="col-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Customer Form</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('costumer.update', $costumer->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $costumer->nama }}">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $costumer->alamat }}">
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $costumer->tanggal }}">
                            @error('tanggal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $costumer->no_hp }}">
                            @error('no_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="merk_mobil">Merk Mobil</label>
                            <input type="text" id="merk_mobil" name="merk_mobil" class="form-control" value="{{ $costumer->merk_mobil }}">
                            @error('merk_mobil')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="plat_nomor">Plat Nomor</label>
                            <input type="text" id="plat_nomor" name="plat_nomor" class="form-control" value="{{ $costumer->plat_nomor }}">
                            @error('plat_nomor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="text" id="biaya" name="biaya" class="form-control" value="{{ $costumer->biaya }}">
                            @error('biaya')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
