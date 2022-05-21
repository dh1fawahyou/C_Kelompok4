@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Tambah Data</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class= "class-body">
                <div class="container mt-5 mb-5">
                    <form action="{{route('alumni.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputNoInduk">No. Induk</label>
                                            <input type="text" class="form-control @error('no_induk') is-invalid @enderror"
                                            id="exampleInputNoInduk" placeholder="No Induk" name="no_induk"
                                            value="{{old('no_induk')}}">
                                            @error('no_induk') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama">Nama Alumni</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            id="exampleInputNama" placeholder="Nama Alumni" name="nama"
                                            value="{{old('nama')}}">
                                            @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNoIjazah">No. Ijazah</label>
                                            <input type="text" class="form-control @error('no_ijazah') is-invalid @enderror"
                                            id="exampleInputNoIjazah" placeholder="Masukkan No. Ijazah" name="no_ijazah"
                                            value="{{old('no_ijazah')}}">
                                            @error('no_ijazah') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNoSKHUN">No. SKHUN</label>
                                            <input type="text" class="form-control @error('no_skhun') is-invalid @enderror"
                                            id="exampleInputNoSKHUN" placeholder="Masukkan No. SKHUN" name="no_skhun"
                                            value="{{old('no_skhun')}}">
                                            @error('no_skhun') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTahunLulus">Tahun Lulus</label>
                                            <input type="text" class="yearpicker form-control @error('tahun_lulus') is-invalid @enderror"
                                            id="exampleInputTahunLulus" placeholder="Masukkan Tahun Lulus" name="tahun_lulus"
                                            value="{{old('tahun_lulus')}}">
                                            @error('tahun_lulus') <span class="text-danger">{{$message}}</span> @enderror
                                        </div><div class="form-group">
                                            <label for="exampleInputTglPengambilan">Tanggal Pengambilan</label>
                                            <input type="date" class="form-control @error('tgl_pengambilan') is-invalid @enderror"
                                            id="exampleInputTglPengambilan" placeholder="Masukkan Tanggal pengambilan" name="tgl_pengambilan"
                                            value="{{old('tgl_pengambilan')}}">
                                            @error('tgl_pengambilan') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputVcdFoto">Vcd & Foto</label>
                                            <select class="form-control" name="vcd_foto" id="vcd_foto" required>
                                                <option value="1">Sudah</option>
                                                <option value="0">Belum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNamaSKLH">Nama Sekolah Lanjutan</label>
                                            <input type="text" class="form-control @error('nama_sekolah_lanjutan') is-invalid @enderror"
                                            id="exampleInputNamaSKLH" placeholder="Nama Sekolah Lanjutan" name="nama_sekolah_lanjutan"
                                            value="{{old('nama_sekolah_lanjutan')}}">
                                            @error('nama_sekolah_lanjutan') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label>
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="1">Sudah Mengambil</option>
                                                <option value="0">Belum Mengambil</option>
                                            </select>
                                        </div>

                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{route('alumni.index')}}" class="btn btn-default">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>


@endsection