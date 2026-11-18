@extends('backend.v_layouts.app') 
@section('content') 
<!-- contentAwal --> 
 
<div class="row"> 
    <div class="col-12"> 
        <div class="card"> 
            <div class="card-body"> 
 
                <h5 class="card-title">{{$judul}} <br><br> 
                </h5> 
 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered"> 
                        <tbody> 
                            <tr> 
                                <th width="200px">Nama</th> 
                                <td>{{ $customer->user->nama ?? '-' }}</td> 
                            </tr> 
                            <tr> 
                                <th>Email</th> 
                                <td>{{ $customer->user->email ?? '-' }}</td> 
                            </tr> 
                            <tr> 
                                <th>Alamat</th> 
                                <td>{{ $customer->alamat ?? '-' }}</td> 
                            </tr> 
                            <tr> 
                                <th>Kode Pos</th> 
                                <td>{{ $customer->pos ?? '-' }}</td> 
                            </tr> 
                        </tbody> 
                    </table> 
                </div> 

                <div class="mt-3">
                    <a href="{{ route('backend.customer.index') }}"> 
                        <button type="button" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </button> 
                    </a> 
                </div>
 
            </div> 
        </div> 
    </div> 
</div> 
 
<!-- contentAkhir -->
@endsection
