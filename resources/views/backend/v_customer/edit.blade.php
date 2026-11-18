@extends('backend.v_layouts.app') 
@section('content') 
<!-- contentAwal --> 
 
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-12"> 
            <div class="card"> 
                <form action="{{ route('backend.customer.update', $customer->id) }}" method="post"> 
                    @method('put') 
                    @csrf 
 
                    <div class="card-body"> 
                        <h4 class="card-title"> {{$judul}} </h4> 
                        <br>
 
                        <!-- Input Nama -->
                        <div class="form-group mb-3"> 
                            <label>Nama</label> 
                            <input type="text" name="nama" value="{{ old('nama', $customer->user->nama ?? '') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Customer"> 
                            @error('nama') 
                            <span class="invalid-feedback alert-danger" role="alert"> 
                                {{ $message }} 
                            </span> 
                            @enderror 
                        </div> 

                        <!-- Input Email -->
                        <div class="form-group mb-3"> 
                            <label>Email</label> 
                            <input type="email" name="email" value="{{ old('email', $customer->user->email ?? '') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Customer"> 
                            @error('email') 
                            <span class="invalid-feedback alert-danger" role="alert"> 
                                {{ $message }} 
                            </span> 
                            @enderror 
                        </div> 

                        <!-- Input Alamat -->
                        <div class="form-group mb-3"> 
                            <label>Alamat</label> 
                            <input type="text" name="alamat" value="{{ old('alamat', $customer->alamat ?? '') }}" class="form-control" placeholder="Masukkan Alamat"> 
                        </div> 

                        <!-- Input Kode Pos -->
                        <div class="form-group mb-3"> 
                            <label>Kode Pos</label> 
                            <input type="text" name="pos" value="{{ old('pos', $customer->pos ?? '') }}" class="form-control" placeholder="Masukkan Kode Pos"> 
                        </div> 
 
                    </div> 
                    <div class="border-top"> 
                        <div class="card-body"> 
                            <button type="submit" class="btn btn-primary">Perbaharui</button> 
                            <a href="{{ route('backend.customer.index') }}" class="btn btn-secondary">Kembali</a> 
                        </div> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
</div> 
 
<!-- contentAkhir --> 
@endsection
