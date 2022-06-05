@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Data</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class= "class-body">
                <div class="container mt-5 mb-5">
                    <form action="{{route('users.update', $user)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                            @csrf
                    
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name ?? old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                    
                                                <div class="col-md-6">
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user->username ?? old('username') }}" required autocomplete="username">
                    
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email ?? old('email') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- <div class="row mb-3">
                                                <label for="password_lama" class="col-md-4 col-form-label text-md-end">Password Lama</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password_lama" type="password" class="form-control @error('password') is-invalid @enderror" name="password_lama" value="{{$user->password ?? old('password') }}" required autocomplete="new-password">
                    
                                                    @error('password_lama')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">Password Baru</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password ?? old('password') }}" required autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="password">
                                                </div>
                                            </div> --}}
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{route('users.index')}}" class="btn btn-default">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>


@endsection